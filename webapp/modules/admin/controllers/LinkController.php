<?php

class LinkController extends AdminController {

    private $_modes;

    public function filters() {
        return array('accessControl');
    }

    public function accessRules() {
        return AdminRoles::getAccessRules($this->id);
    }

    public function init() {
        $this->_modes = new Category();
        parent::init();
    }

    public function actionIndex() {
        
        $ex_top_link = SystemFile::readFile(Yii::getPathOfAlias("webroot") . "/webapp/modules/tailieu/components/widgets/views/ex_link.tpl");
        
        $ex_f_link = SystemFile::readFile(Yii::getPathOfAlias("webroot") . "/webapp/modules/tailieu/components/widgets/views/ex_f_link.tpl");
        $fck_n = new FCKeditor('f_link');
        $fck_n->Value = $ex_f_link;
        $fck_n->Height = 500;
        $fck = new FCKeditor('ex_top_link');
        $fck->Value = $ex_top_link;
        $fck->Height = 300;
        $this->render('index', array(
            'fck_noidung' => $fck_n->CreateHtml(),
            'fck_tomtat' => $fck->CreateHtml(),
            'ex_top_link' => $ex_top_link,
            'ex_f_link' => $ex_f_link,
            'link_action' => Yii::app()->createUrl('admin/link/edit'),
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
