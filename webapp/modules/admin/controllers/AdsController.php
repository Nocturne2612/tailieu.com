<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class AdsController extends AdminController {

    private $_modes;

    public function filters() {
        return array('accessControl');
    }

    public function accessRules() {
        return AdminRoles::getAccessRules($this->id);
    }

    public function init() {
        $this->_modes = new Ads();
        parent::init();
    }

    public function actionIndex() {
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl .
                '/assets/xeon/js/datepicker.js', CClientScript::POS_END);
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl .
                '/assets/xeon/css/datapicker.css');
        $this->pageTitle = 'Danh sách quảng cáo, banner';
        $param = false;
        $id = ObjInput::get('id', 'int', 0);

        $param = array("id" => ObjInput::get("id", "int", 0),
            "picture" => ObjInput::get("picture", "str", ""),
            "link" => ObjInput::get("link", "str", ""),
            "stt" => ObjInput::get("stt", "int", 0),
            "position" => ObjInput::get("position", "int", 0),
            "status" => ObjInput::get("status", "int", 0),
            "create_time" => ObjInput::get("create_time", "int", 0),
            "title" => ObjInput::get("title", "str", ""),
            "pic_link" => ObjInput::get("pic_link", "def", ""),
        );
        $get_data = array();
        $get_data = $this->_modes->getData($param);
        if (ObjInput::get('cache', 'int', 0) == 1) {
            $this->makeCaches($get_data, ObjInput::get('position', 'int', 0));
            $this->redirect(Yii::app()->createUrl('admin/ads'));
        }

        $arr_status = $this->_arrStatus;
        $data = array(
            'output' => $get_data['data'],
            'pageHtml' => $get_data['pageHtml'],
            'totalRecord' => (int) $get_data['totalRecord'],
            'link_action' => Yii::app()->createUrl('admin/ads'),
            'link_images' => Yii::app()->request->baseUrl . DS . IMG_ADS,
            'error' => $this->_modes->_getError(),
            'success' => $this->_modes->_getSuccess(),
            'arr_status' => $arr_status,
            'get_data' => $param,
            'combo_status' => Strings::combobox('status', $arr_status, $param['status'], '', 'class="form-control"'),
            'combo_position' => Strings::combobox('position', $GLOBALS['POSITION'], $param['position'], '', 'class="form-control"'),
            'posititons' => $GLOBALS['POSITION']
        );
        $this->render('index', $data);
    }

    public function actionView() {
        $title_page = 'Cập nhật thông tin quảng cáo, banner';
        $this->pageTitle = $title_page;
        $id = ObjInput::get('id', 'int', 0);
        $data = $this->_modes->getDataById($id);
        if (!$data) {
            $this->setErrors('Không tồn tại hoặc đã bị xóa.');
            $this->redirect(Yii::app()->createUrl('admin/ads/'));
        }

        $this->render('form', array(
            'data' => $data,
            'error' => $this->_modes->_getError(),
            'success' => $this->_modes->_getSuccess(),
            'link_back' => Yii::app()->createUrl('admin/ads'),
            'link_action' => Yii::app()->createUrl('admin/ads/edit/', array('id' => $id)),
            'title_page' => $title_page,
            'combo_status' => Strings::combobox('status', $this->_arrStatus, $data['status'], '', 'class="form-control"'),
            'combo_position' => Strings::combobox('position', $GLOBALS['POSITION'], $data['position'], '', 'class="form-control"'),
            'arr_status' => $this->_arrStatus,
            'link_images' => Yii::app()->request->baseUrl . DS . IMG_ADS,
        ));
    }

    public function actionEdit() {
        $id = ObjInput::get('id', 'int', 0);

        if (Yii::app()->request->isPostRequest) {
            $this->_modes->attributes = $_POST;
            if (Yii::app()->request->isPostRequest && $this->_modes->validate()) {
                $exits = $this->_modes->getDataById($id);
                if (!$exits) {
                    $this->setErrors('Không tồn tại hoặc đã bị xóa.');
                    $this->redirect(Yii::app()->createUrl('admin/ads/'));
                }

                $data = array(
                    "id" => ObjInput::get("id", "int", 0),
                    "link" => ObjInput::get("link", "str", ""),
                    "stt" => ObjInput::get("stt", "int", 0),
                    "position" => ObjInput::get("position", "int", 0),
                    "status" => ObjInput::get("status", "int", 0),
                    "sticky" => ObjInput::get("sticky", "int", 0),
                    "create_time" => ObjInput::get("create_time", "str", ""),
                    "title" => ObjInput::get("title", "str", ""),
                    "pic_link" => Strings::blackTag(ObjInput::get("pic_link", "def", ""), array('php')),
                    "picture" => ''
                );

                if (isset($_FILES['file']) && $_FILES['file']['size'] > 0) {
                    $name = Strings::cut_char(Strings::remove_space(Strings::get_ascii($data['title'])), '30') . 'ads_' . time();
                    $images = Upload::UploadNoThumb($_FILES['file'], IMG_ADS, $name);
                    $data['picture'] = $images;
                    @unlink(IMG_ADS . $exits['picture']);
                } else {
                    $data['picture'] = $exits['picture'];
                }

                $update = $this->_modes->updateData($data, 'id=' . $id);
                if ($update) {
                    $this->setErrors('Cập nhật thành công.', 'success');
                    $this->redirect(Yii::app()->createUrl('admin/ads/'));
                } else {
                    $this->setErrors('Có lỗi quá trình cấp nhật.');
                    $this->redirect(Yii::app()->createUrl('admin/ads/view/', array('id' => $id)));
                }
            } else {
                $this->setErrors($this->_modes->getErrorForm());
                $this->redirect(Yii::app()->createUrl('admin/ads/view/', array('id' => $id)));
            }
        }
    }

    public function actionCreate() {
        $title_page = 'Thêm ads';
        $this->pageTitle = $title_page;

        $data = array("id" => ObjInput::get("id", "int", 0),
            "link" => ObjInput::get("link", "str", ""),
            "stt" => ObjInput::get("stt", "int", 0),
            "sticky" => ObjInput::get("sticky", "int", 0),
            "position" => ObjInput::get("position", "int", 0),
            "status" => ObjInput::get("status", "int", 0),
            "create_time" => ObjInput::get("create_time", "str", ""),
            "title" => ObjInput::get("title", "str", ""),
            "pic_link" => Strings::blackTag(ObjInput::get("pic_link", "def", ""), array('php')),
            "picture" => ''
        );
        $this->_modes->attributes = $_POST;
        if (Yii::app()->request->isPostRequest && $this->_modes->validate()) {
            if (isset($_FILES['file']) && $_FILES['file']['size'] > 0) {
                $file = $_FILES['file'];
                $name = Strings::cut_char(Strings::remove_space(Strings::get_ascii($data['title'])), '50') . '_' . time();
                $images = Upload::UploadNoThumb($_FILES['file'], IMG_ADS, $name);
                $data['picture'] = $images;
            }
            ;
            $ins = $this->_modes->insertData($data);
            if ($ins > 0) {
                $this->setErrors('Thêm mới thành công', 'success');
                $this->redirect(Yii::app()->createUrl('admin/ads'));
            } else {
                @unlink(IMG_ADS . $data['picture']);
                $this->setErrors('Có lỗi trong quá trình xử lý');
            }
        } else {
            $this->setErrors($this->_modes->getErrorForm());
        }

        $this->render('form', array(
            'data' => $data,
            'error' => $this->_modes->_getError(),
            'success' => $this->_modes->_getSuccess(),
            'link_back' => Yii::app()->createUrl('admin/ads'),
            'link_action' => Yii::app()->createUrl('admin/ads/create'),
            'title_page' => $title_page,
            'combo_status' => Strings::combobox('status', $this->_arrStatus, $data['status'], '', 'class="form-control"'),
            'combo_position' => Strings::combobox('position', $GLOBALS['POSITION'], $data['position'], '', 'class="form-control"'),
            'arr_status' => $this->_arrStatus
        ));
    }

    public function actionDel() {

        if (Yii::app()->request->isPostRequest) {
            $array_id = ObjInput::get('element', 'array', '', 'POST', 'int');
            if (is_array($array_id)) {
                $ints = 0;
                $ints = $this->_modes->delAll($array_id);
                if ($ints > 0) {
                    $this->setErrors('Bạn xoá thành công', 'success');
                } else {
                    $this->setErrors('Quá trình thực hiện bị lỗi vui lòng thực hiện lại.');
                }
            }
            $this->redirect(Yii::app()->createUrl('admin/ads'));
        }

        $id = ObjInput::get('id', 'int', 0);
        if ($id <> 0) {
            $rs = $this->_modes->deleteData($id);
            $this->setErrors($rs[1], ($rs[0] == '0' ? 'success' : 'error'));
            $this->redirect(Yii::app()->createUrl('admin/ads'));
        } else {
            $this->setErrors('Tham số sai.');
            $this->redirect(Yii::app()->createUrl('admin/ads'));
        }
    }

    private function makeCaches($data, $position = '') {
        $data = $this->_modes->getDataCache($position);

        $file_path = Yii::getPathOfAlias("webroot") . "/webapp/modules/tailieu/components/widgets/views/";
        $file_name = $GLOBALS['POSITION'][$position] . '.tpl';
        $cache = '';
        if ($data) {
            if ($position == 1) {
                if ($data[0]["pic_link"] <> '') {
                    $cache = $data[0]["pic_link"];
                } else {
                    $cache = '<a target="_blank" title="' . $data[0]["title"] . '" href="' . $data[0]["link"] . '"><img src="' . ROOT_URL . DS . IMG_ADS . $data[0]["picture"] . '" alt="' . $data[0]["title"] . '"></a>';
                }
            } else if ($position == 2) {
                foreach ($data as $d) {
                    if ($d["sticky"] == '1') {
                        $cache .= '<div class="widget">';
                    }
                    if ($d["pic_link"] <> '') {
                        $cache .= $d["pic_link"];
                    } else {
                        $cache .= '<div class="ads-left" style="text-align: center;"><a target="_blank" title="' . $d["title"] . '" href="' . $d["link"] . '"><img border="0"  src="' . ROOT_URL . DS . IMG_ADS . $d["picture"] . '" alt="' . $d["title"] . '"></a></div>';
                    }
                    if ($d["sticky"] == '1') {
                        $cache .= '</div>';
                    }
                }
            } else if ($position == 3 || $position == 4) {
                foreach ($data as $d) {
                    if ($d["sticky"] == '1') {
                        $cache .= '<div class="widget" >';
                    }
                    if ($d["pic_link"] <> '') {
                        $cache .= $d["pic_link"];
                    } else {
                        $cache .= '<div class="adx-row" style="text-align: center;"><div class="adx-cell"><a target="_blank" title="' . $d["title"] . '" href="' . $d["link"] . '"><img width="280" border="0"  src="' . ROOT_URL . DS . IMG_ADS . $d["picture"] . '" alt="' . $d["title"] . '"></a></div></div>';
                    }
                    if ($d["sticky"] == '1') {
                        $cache .= '</div>';
                    }
                }
            } else if ($position == 5 || $position == 6) {
                foreach ($data as $d) {
                    if ($d["sticky"] == '1') {
                        $cache .= '<div class="widget">';
                    }
                    if ($d["pic_link"] <> '') {
                        $cache .= $d["pic_link"];
                    } else {
                        $cache .= '<div class="ads-left" style="text-align: center;"><a target="_blank" title="' . $d["title"] . '" href="' . $d["link"] . '"><img border="0"  src="' . ROOT_URL . DS . IMG_ADS . $d["picture"] . '" alt="' . $d["title"] . '"></a></div>';
                    }
                    if ($d["sticky"] == '1') {
                        $cache .= '</div>';
                    }
                }
            } else {
                foreach ($data as $d) {
                    if ($d["sticky"] == '1') {
                        $cache .= '<div class="widget">';
                    }
                    if ($d["pic_link"] <> '') {
                        $cache .= $d["pic_link"];
                    } else {
                        $cache .= '<div><a target="_blank" title="' . $d["title"] . '" href="' . $d["link"] . '"><img border="0"  src="' . ROOT_URL . DS . IMG_ADS . $d["picture"] . '" alt="' . $d["title"] . '"></a></div>';
                    }
                    if ($d["sticky"] == '1') {
                        $cache .= '</div>';
                    }
                }
            }
        }
        $this->makeCache($file_name, $file_path, $cache);
    }

}
