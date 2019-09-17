<?php

class HomeController extends TailieuController {

    public $layout = 'home';

    public function filters() {
        return array('accessControl', // perform access control for CRUD operations
        );
    }

    public function accessRules() {
        return TRoles::getAccessRules($this->id);
    }

    public function init() {
        parent::init();
    }

    public function actionIndex() {
//        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieuv3/js/index.js?v=201907161059', CClientScript::POS_END);
        $this->pageTitle = PAGE_TITLE;
        $this->render('index', array('sort' => ObjInput::get('sort', 'str', '')));
    }

}
