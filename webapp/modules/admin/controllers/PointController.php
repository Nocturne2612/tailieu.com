<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AccountController
 *
 * @author DUCLM
 */
class PointController extends AdminController {

    private $_modes;

    public function filters() {
        return array('accessControl');
    }

    public function accessRules() {
        return AdminRoles::getAccessRules($this->id);
    }

    public function init() {
        $this->_modes = new Point();
        parent::init();
    }

    public function actionIndex() {
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl .
                '/assets/xeon/js/datepicker.js', CClientScript::POS_END);
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl .
                '/assets/xeon/css/datapicker.css');
        $this->pageTitle = 'Danh sách download tài liệu';
        $param = false;
        $id = ObjInput::get('id', 'int', 0);
        $status = ObjInput::get('status', 'int', 0);
        $arr_type_point[0] = '-- Tất cả --';
        $arr_type_point = $GLOBALS['TYPE_POINT'];
        $param = array(
            'keyword' => ObjInput::get('keyword', 'str', ''),
            'id' => $id,
            'type' => ObjInput::get('type', 'int', 0),
            'ref_code' => ObjInput::get('ref_code', 'str', ''),
            'status' => $status,
            'begin_createtime' => ObjInput::get('begin_createtime', 'str', ''),
            'end_createtime' => ObjInput::get('end_createtime', 'str', ''),
            'begin_updatetime' => ObjInput::get('begin_updatetime', 'str', ''),
            'end_updatetime' => ObjInput::get('end_updatetime', 'str', ''),
            'id_account' => ObjInput::get('id_account', 'int', 0),
        );
        $get_data = $this->_modes->getData($param);

        $arr_status = array('0' => '-- Tất cả --', '2' => 'Chờ xử lý', '1' => 'Đã duyệt',);
        $data = array(
            'output' => $get_data['data'],
            'pageHtml' => $get_data['pageHtml'],
            'totalRecord' => $get_data['totalRecord'],
            'link_action' => Yii::app()->createUrl('admin/point'),
            'error' => $this->_modes->_getError(),
            'success' => $this->_modes->_getSuccess(),
            'arr_status' => $arr_status,
            'arr_type' => $arr_type_point,
            'get_data' => $param,
            'combo_status' => Strings::combobox('status', $arr_status, $param['status'], '', 'class="form-control"'),
            'combo_type' => Strings::combobox('type', $arr_type_point, $param['type'], '', 'class="form-control"'),
        );
        $this->render('index', $data);
    }

}
