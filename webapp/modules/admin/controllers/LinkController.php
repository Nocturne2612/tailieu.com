<?php

class LinkController extends AdminController {

    private $_model;

    public function filters() {
        return array('accessControl');
    }

    // public function accessRules() {
    //     return AdminRoles::getAccessRules($this->id);
    // }

    public function init() {
        $this->_model = new Link();
        parent::init();
    }

    public function actionIndex() {
        $data = $this->_model->getLink();
        $this->render('index', array(
            'link_action' => Yii::app()->createUrl('admin/link/edit'),
            'links' => $data['links'],
            'counts' => $data['counts'])
        );
    }

    public function actionEdit() {
        $id = ObjInput::get('id', 'int', 0);
        $mol = new Link();
        $data = $mol->getOne($id);
        if (!$data) {
            echo Strings::alert('Không tồn tại', Yii::app()->createUrl('admin/link'));
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
        }
        $this->render('form', array(
            'data' => $data,
            'link_account' => Yii::app()->createUrl('admin/link'),
            'err' => $this->_err,
        ));
    }

    public function actionDel() {
        $this->setErrors('Cập nhật thành công','success');
        $this->redirect(Yii::app()->createUrl('admin/link/'));
    }

    public function actionCreate() {
        $Model = new Link();
        $err = '';
        $type = ObjInput::get('type', 'int', 1);
        $name = ObjInput::get('name', 'str', '');
        $position = ObjInput::get('position', 'int', 0);
        $link = ObjInput::get('link', 'str', '');
        $data = array(
            'type' => $type,
            'name' => $name,
            'position' => $position,
            'link' => $link,
        );

        if (Yii::app()->request->isPostRequest) {
            if ($name != '') {
                $id_u = $Model->insertData($data);
                if ($id_u > 0) {
                    echo Strings::alert('Thêm mới thành công', Yii::app()->createUrl('admin/link/'));
                    die();
                } else {
                    $this->_err = 'Có lỗi trong quá trình xử lý';
                }
            } else {
                $this->_err = 'Text hiển thị không được để trống';
            }
        }
        $this->render('form', array(
            'data' => $data,
            'link_home' => Yii::app()->createUrl('admin/link/'),
            'link_create' => Yii::app()->createUrl('admin/link/create/'),
            'err' => $this->_err,
        ));
    }
}
