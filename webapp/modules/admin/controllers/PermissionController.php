<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PermissionController
 *
 * @author DUCLM
 */
class PermissionController extends AdminController {

    public $_arrAction = '';
    public $_arrController = '';

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
        $mol = new Permission();
        $param = false;
        $id = ObjInput::get('id', 'int', 0);
        $name = ObjInput::get('name', 'str', '');
        $type = ObjInput::get('type', 'str', '');
        $param = array(
            'id' => $id,
            'name' => $name,
            'type' => $type,
                );
        $data = $mol->getData($param);
        $data = array(
            'data_list' => $data['data'],
            'pageHtml' => $data['pageHtml'],
            'totalRecord' => (int) $data['totalRecord'],
            'link_action' => Yii::app()->createUrl('admin/permission'),
            'link_scan' => Yii::app()->createUrl('admin/permission/scan'),
            'get_data' => $param,
            'error' => Yii::app()->user->getFlash('error'),
            'combo_type' => Strings::combobox('type', array(
                '' => '-- Chọn loại quyền --',
                'action' => 'Nghiệp vụ - action',
                'controllers' => 'Chức năng - controllers'), $type, '', 'class="form-control"'),
                );


        $this->render('index', $data);
    }

    public function actionEdit() {
        $id = ObjInput::get('id', 'int', 0);
        $mol = new Permission();
        $data = $mol->getOneData($id);
        if (!$data) {
            echo Strings::alert('Không tồn tại', Yii::app()->createUrl('admin/permission'));
        }

        if (Yii::app()->request->isPostRequest) {

            $name = ObjInput::get("name", "str", "");
            if ($name <> "") {
                $params["name"] = $name;
            }
            $value = ObjInput::get("value", "str", "");
            if ($value <> "") {
                $params["value"] = $value;
            }
            $type = ObjInput::get("type", "str", "");
            if ($type <> "") {
                $params["type"] = $type;
            }
            $update = $mol->updateData($params, $id);
            if ($update) {
                echo Strings::alert('Bạn cập nhật thành công', Yii::app()->createUrl('admin/permission'));
            } else {
                $this->_err = 'Cập nhật không thành công.';
            }
        } else {
            $type = $data['type'];
        }
        $this->render('form', array(
            'data' => $data,
            'link_account' => Yii::app()->createUrl('admin/permission'),
            'err' => $this->_err,
            'combo_type' => Strings::combobox('type', array(
                '' => '-- Chọn loại quyền --',
                'action' => 'Nghiệp vụ - action',
                'controllers' => 'Chức năng - controllers'), $type, '', 'class="form-control"'),
        ));
    }

    public function actionScan() {
        $model = new Permission();
        $controllers = Yii::app()->metadata->getControllers('admin');
        $id = ObjInput::get('id', 'int', 0);
        $err = '';
        foreach ($controllers as $c) {
            if ($model->insertData(array('value' => mb_convert_case($c, MB_CASE_LOWER, "UTF-8"))) <> '')
                $err .= $model->insertData(array('value' => $c)) . ' - ';
        }
        $this->setErrors($err);
        $this->redirect(Yii::app()->createUrl('admin/permission'));
    }

    public function actionDel() {
        $id = ObjInput::get('id', 'int', 0);
        $mol = new Permission();
        if ($mol->deleteData($id)) {
            echo Strings::alert('Bạn xóa  thành công', Yii::app()->createUrl('admin/permission'));
        } else {
            echo Strings::alert('Lỗi: xóa không thành công', Yii::app()->createUrl('admin/permission'));
        }
    }

    public function actionCreate() {
        $mol = new Permission();
        $params = array(
            "name" => '',
            "value" => '',
            "type" => '');

        if (Yii::app()->request->isPostRequest) {
            $name = ObjInput::get("name", "str", "");
            $value = ObjInput::get("value", "str", "");
            $type = ObjInput::get("type", "str", "");
            if ($name == "") {
                $this->_err = 'Bạn chưa nhập tên quyền.';
            } elseif ($value == "") {
                $this->_err = 'Bạn chưa nhập Controller/Action.';
            } elseif ($type == "") {
                $this->_err = 'Bạn chưa chọn loại.';
            } else {
                $params = array(
                    "name" => $name,
                    "value" => $value,
                    "type" => $type);

                $insert = $mol->insertOneData($params);
                if ($insert === false) {
                    $this->_err = 'Cập nhật không thành công.';
                } else {
                    echo Strings::alert('Bạn cập nhật hành công', Yii::app()->createUrl('admin/permission'));
                }
            }
        }
        $this->render('form', array(
            'data' => $params,
            'link_account' => Yii::app()->createUrl('admin/permission'),
            'err' => $this->_err,
            'combo_type' => Strings::combobox('type', array(
                '' => '-- Chọn loại quyền --',
                'action' => 'Nghiệp vụ - action',
                'controllers' => 'Chức năng - controllers'), $params["type"], '', 'class="form-control"'),
        ));
    }

}
