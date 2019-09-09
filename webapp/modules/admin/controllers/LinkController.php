<?php

class LinkController extends AdminController {

    private $_model;

    public function filters() {
        return array('accessControl');
    }

    public function accessRules() {
        return AdminRoles::getAccessRules($this->id);
    }

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
        echo "hello";
        die();
        $this->setErrors('Cập nhật thành công','success');
        $this->redirect(Yii::app()->createUrl('admin/link/'));
    }

    public function actionDel() {
        echo "hello";
        die();
        $this->setErrors('Cập nhật thành công','success');
        $this->redirect(Yii::app()->createUrl('admin/link/'));
    }

    public function actionCreate() {
        echo "hello";
        die();
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
