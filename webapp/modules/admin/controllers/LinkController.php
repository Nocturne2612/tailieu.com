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
        $data = $this->_model->getData();
        $this->render('index', array(
            'link_action' => Yii::app()->createUrl('admin/link/edit'),
            'links' => $data)
        );
    }

    public function actionEdit() {

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
                $this->_err = 'Tiêu đề không được để trống';
            }
        }
        $fck_n = new FCKeditor('short');
        $fck_n->Value = $short;
        $fck_n->Height = 300;
        $this->render('form', array(
            'data' => $data,
            'link_home' => Yii::app()->createUrl('admin/categoryproducts/'),
            'link_create' => Yii::app()->createUrl('admin/categoryproducts/create/'),
            'combo_parent' => $Model->getParentCategory_Option($parent_id),
            'err' => $this->_err,
            'combo_status' => Strings::combobox('status', $this->_arrStatus, $status, '', 'class="form-control"'),
            'fck_short' => $fck_n->CreateHtml(),
        ));
    }

}
