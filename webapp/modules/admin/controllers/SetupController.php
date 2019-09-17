<?php

class SetupController extends AdminController {

    // private $_modes;

    public function filters() {
        return array('accessControl');
    }

    public function accessRules() {
        return AdminRoles::getAccessRules($this->id);
    }

    public function init() {
        parent::init();
    }

    public function actionIndex() {
        $data = SystemFile::readFile(Yii::getPathOfAlias("webroot") . "/webapp/config/global_define.php");
        $string = str_replace(array('<?php', '?>'), '', $data);
        $arr = $arr_point = array();

        preg_match_all('@define\(\'(.*)\',\s?\'?([^\']+)?\'?\);@sU', $string, $match);
        preg_match_all('@\$GLOBALS\[\'(\w+)\s?\'\]\s?=\s?array\s?\((.*)\s?\);@is', $string, $glo);
        if ($glo[2][0]) {
            $ss = str_replace(array('\'', ' '), '', $glo[2][0]);
            preg_match_all('@(\d+)=>(\d+)\s?,@', $ss, $sss);
        }
        if ($match[1]) {
            foreach ($match[1] as $k => $s) {
                $arr[$s] = $match[2][$k];
            }
        }
        if ($sss[1]) {
            foreach ($sss[1] as $k1 => $s1) {
                if ($k1 < 7) {
                    $arr_point[$s1] = $sss[2][$k1];
                } else {
                    $arr_point2[$s1] = $sss[2][$k1];
                }
            }
        }

        $this->render('index', array(
            'link_action' => Yii::app()->createUrl('admin/setup/edit'),
            'error' => Yii::app()->user->getFlash('error'),
            'success' => Yii::app()->user->getFlash('success'),
            'arr_define' => $arr,
            'arr_point' => $arr_point,
            'arr_point2' => $arr_point2,
                )
        );
    }

    public function actionEdit() {
       
        $a = $_POST;
        unset($a["submit"]);
        unset($a["YII_CSRF_TOKEN"]);
        $a_define = $a;
        unset($a_define["POINT"]);
        unset($a_define["PAYPAL"]);
        $define = '<?php        ';
        $arr = '';
        $arr2= '';
        // var_dump($a);
        foreach ($a_define as $k => $s) {
            $define .= "define('" . $k . "', '" . $s . "');";
        }
        foreach ($a["POINT"] as $k1 => $s1) {
            $arr .= "'" . $k1 . "'=>'" . $s1 . "', ";
        }
        
        foreach ($a["PAYPAL"] as $k1 => $s1) {
            $arr2 .= "'" . $k1 . "'=>'" . $s1 . "', ";
        }
        
        // echo $arr;
        // die();
        
        $define .= '$GLOBALS[\'POINT\'] = array(' . $arr . ');';
        $define .= '$GLOBALS[\'PAYPAL_POINT\'] = array(' . $arr2 . ');       ?>';
        $file_path = Yii::getPathOfAlias("webroot") . "/webapp/config/";
        // $this->makeCache('menu_left.tpl', $file_path, $li_mleft);
        $this->makeCache('global_define.php', $file_path, $define);

        $this->setErrors('Cập nhật thành công', 'success');
        $this->redirect(Yii::app()->createUrl('admin/setup/'));
    }

    public function actionCreatedSiteMap() {

        $root = false;
        $root[ROOT_URL] = ROOT_URL;
        $product = Products::getProductSiteMap();
        if ($product) {
            foreach ($product as $key => $value) {
                $html = SystemBase::buildUrl('tailieu/document', array('id' => $value['id'], 'title' => $value['title']));
                $root[$html] = $html;
            }
        }
        $category = CategoryProducts::getCategorySiteMap();
        if ($category) {
            foreach ($category as $key => $value) {
                $html = SystemBase::buildUrl('tailieu/categorydocument', array('title' => $value['title']));
                $root[$html] = $html;
            }
        }
        //echo '<pre>';
        //print_r($root);die();


        $xml = '<?xml version="1.0" encoding="UTF-8"?> <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';
        if ($root) {
            foreach ($root as $key => $value) {
                $xml .= '<url>';
                $xml .= '<loc>';
                $xml .= $value;
                $xml .= '</loc>';
                $xml .= '<changefreq>always';
                $xml .= '</changefreq>';
                $xml .= '</url>';
            }
        }
        $xml .= '</urlset>';

        $path = ROOT_PATH . DS;
        $file = ROOT_PATH . DS . 'sitemap' . '.xml';
        if (!is_dir($path)) {
            @mkdir($path, 0700);
        }

        //        $return = 'ba';
        if (file_exists($file)) {
            unlink($file);
            $fp = fopen($file, "w");
            fputs($fp, $xml);
            fclose($fp);
        } else {
            $fp = fopen($file, "w");
            fputs($fp, $xml);
            fclose($fp);
        }
        $this->setErrors('Tạo sitemap thành công', 'success');
        $this->redirect(Yii::app()->createUrl('admin/setup'));
    }

}
