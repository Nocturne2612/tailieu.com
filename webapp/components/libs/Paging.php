<?php

/**
 * Description of PAGING
 *
 * @author DUCLM
 */
class Paging extends CLinkPager {
    /*
     * Ham phan trang theo chuc nang
     * @Input ten ham, dieu kien ($params(array(''=>'','page'=>1,'limit'=>25)))
     * @return array
     */

    public static function getDataForFunction($table, $field = '*', $conditions = 1, $order = null, $portal = 'home', $other = '') {
        $totalPage = 0;
        $totalRecord = 0;
        $currentPage = ObjInput::get('page', 'int', 1);
        $error_description = 'Không có dữ liệu';

        if (!isset($conditions) || $conditions == '') {
            $conditions = 1;
        }
        //Get module, controller, action URL
        $module = Yii::app()->controller->module->id;
        if ($module == 'admin')
            $recordOnPage = ADMIN_MAX_SIZE_PAGE;
        else
            $recordOnPage = HOME_MAX_SIZE_PAGE;
      
        $offset = ($currentPage - 1) * $recordOnPage;

        $totalRecord = DataHelper::count($table, $conditions);

        if ($totalRecord > 0) {
            $totalPage = ceil($totalRecord / $recordOnPage);
            $result = DataHelper::selectAll($table, $field, $conditions, $order, $recordOnPage, $offset);

            $pageHtml = self::pageHtml($portal, $totalPage, $currentPage);

            return array(
                'data' => $result,
                //'other_data'=>$data['other_data'],
                'totalPage' => $totalPage,
                'totalRecord' => $totalRecord,
                'pageHtml' => $pageHtml['htmlPage'],
                'nextPage' => $pageHtml['nextPage'],
                'prevPage' => $pageHtml['prevPage'],
            );
        }
        return false;
    }

    static function pageHtml($portal = 'home', $totalPage, $currentPage) {
        $page = ObjInput::get('page', 'int', 1);
        $htmlPage = '';
        $nextPageTitle = '';
        $prevPageTitle = '';

        //Get module, controller, action URL
        $module = Yii::app()->controller->module->id;
        $controller = Yii::app()->controller->id;
        $action = Yii::app()->controller->action->id;
        $tmp='';
        //$params[$controller] = $action;
        if (isset($_GET)) {
            foreach ($_GET as $c => $key) {
                $url = explode('/', $key);
                $params[$c] = $url[0];
                if(count($url) > 1) {
                    $tmp = $url[1];
                }
            }
        }
        if($tmp) {
            $params['type'] = $tmp;
        }
        //Build html page
        if ($totalPage > 1) {
            if ($module == 'admin') {

                $maxPageDisplay = ADMIN_MAX_PAGE_DISPLAY;
            } else {
                $maxPageDisplay = HOME_MAX_PAGE_DISPLAY;
            }
            $nextPageLabel = HOME_NEXT_PAGE;
            $prevPageLabel = HOME_PREV_PAGE;

            $pStart = 1;
            $pLimit = $maxPageDisplay;
            if ($totalPage < $maxPageDisplay) {
                $pLimit = $totalPage;
            }
            if ((int) $page >= $maxPageDisplay) {
                if ($currentPage > 2) {
                    $pStart = $currentPage - 2;
                    $pLimit = $currentPage + 2;
                }
                if ($pLimit > $totalPage) {
                    $pLimit = $totalPage;
                    $pStart = ($pLimit - $maxPageDisplay) + 1;
                }
                if ((int) $page > $totalPage) {
                    $pLimit = $totalPage;
                    if ($pLimit <= 5) {
                        $pStart = 1;
                    }
                }
            }

            $prevPage = '';
            $nextPage = '';
            $prevPageTitle = '&nbsp';
            $nextPageTitle = '&nbsp';
            $module .='/' . $controller . '/' . $action;
            // var_dump($params);
            $params['page'] = $page + 1;
            if ($params['page'] <= $totalPage) {
                $paramss = $params;
                $paramss['page']=$totalPage;
                $nextPage =  CHtml::link($nextPageLabel, Yii::app()->createUrl($module, $paramss), array()) ;
                $nextPageTitle =  CHtml::link('&rsaquo;', Yii::app()->createUrl($module, $params), array()) ;
            }
            $params['page'] = $page - 1;
            if ($params['page'] >= 1) {
                $paramss = $params;
                $paramss['page']=1;
                $prevPage =  CHtml::link($prevPageLabel, Yii::app()->createUrl($module, $paramss), array());
                $prevPageTitle = CHtml::link('&lsaquo;', Yii::app()->createUrl($module, $params), array()) ;
            }
          
            $htmlPage = '<div class="pageList"><div class="pageCont">';
            $htmlPage .= $prevPage.$prevPageTitle;
            for ($i = $pStart; $i <= $pLimit; $i++) {
                $class = "";
                if ($page == $i) {
                    $class = 'on';
                }
                $params['page'] = $i;
                $htmlPage .=  CHtml::link($i, Yii::app()->createUrl($module, $params), array('class'=> $class));
            }
            $htmlPage .= $nextPageTitle.$nextPage;
            $htmlPage .= '</div></div>';
        }
        $htmlPage = (empty($htmlPage)) ? ' ' : $htmlPage;

        return array(
            'htmlPage' => $htmlPage,
            'nextPage' => $nextPageTitle,
            'prevPage' => $prevPageTitle,
        );
    }

}
