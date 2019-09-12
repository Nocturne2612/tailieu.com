<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class OrdersController extends AdminController {

    private $_modes;

    public function filters() {
        return array('accessControl');
    }

    public function accessRules() {
        return AdminRoles::getAccessRules($this->id);
    }

    public function init() {
        $this->_modes = new Orders();
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

        $param = array(
            'id' => $id,
            'id_product' => ObjInput::get('id_product', 'int', 0),
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
            'link_action' => Yii::app()->createUrl('admin/orders'),
            'error' => $this->_modes->_getError(),
            'success' => $this->_modes->_getSuccess(),
            'arr_status' => $arr_status,
            'get_data' => $param,
            'combo_status' => Strings::combobox('status', $arr_status, $param['status'], '', 'class="form-control"'),
            
        );
        $this->render('index', $data);
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
        }

        $id = ObjInput::get('id', 'int', 0);
        if ($id <> 0) {
            $this->_modes->deleteData($id);
            $this->setErrors('Xóa thành công', 'success');
            $this->redirect(Yii::app()->createUrl('admin/orders'));
        } else {
            $this->setErrors('Tham số sai.');
            $this->redirect(Yii::app()->createUrl('admin/orders'));
        }
    }

}
