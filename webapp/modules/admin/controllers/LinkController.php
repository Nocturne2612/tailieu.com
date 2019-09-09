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
        $this->_modes = new Link();
        parent::init();
    }

    public function actionIndex() {
        $data = $this->_model->getData();
        $this->render('index', array(
            'link_action' => Yii::app()->createUrl('admin/link/edit'),
            'data' => $data,
            'error' => $this->_modes->_getError(),
            'success' => $this->_modes->_getSuccess())
        );
    }

    public function actionEdit() {

        $file_path = Yii::getPathOfAlias("webroot") . "/webapp/modules/tailieu/components/widgets/views/";
        if (ObjInput::get('ex_top_link', 'def', '') <> '') {
            $this->makeCache('ex_link.tpl', $file_path, ObjInput::get('ex_top_link', 'def', ''));
        }
        if (ObjInput::get('ex_top_link', 'def', '') <> '') {
            $this->makeCache('ex_f_link.tpl', $file_path, ObjInput::get('f_link', 'def', ''));
        }
        $this->setErrors('Cập nhật thành công','success');
        $this->redirect(Yii::app()->createUrl('admin/link/'));
    }

}
