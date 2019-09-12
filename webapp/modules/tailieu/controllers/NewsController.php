<?php

class NewsController extends TailieuController {

    public $_model;

    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    public function accessRules() {
        return TRoles::getAccessRules($this->id);
    }

    public function init() {
        $this->_model = new Categorynews;
        $this->layout = 'home';
        parent::init();
    }

    public function actionIndex() {

        // Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/tailieu/css/stylev2.css');
        // Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/tailieu/css/owl.carousel.css');
        // Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieu/js/owl.carousel.js', CClientScript::POS_END);
        // Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieu/js/custom.js', CClientScript::POS_END);
        $id = ObjInput::get('id', 'int', 0);
        $newsMod = new News;
        $array = $newsMod->getOneNews($id);
        if (!$array) {
            $this->redirect(Yii::app()->createUrl('tailieu/categorynews'));
        }
        $this->pageTitle = $array['title'];
        $this->desc = $array['title'];
        $this->keywords = $array['tag'];
        $arr_lq = $newsMod->getData(array('parent_id' => $array['parent_id']));

        $arr_tk = $newsMod->getDataTK($array['tag'], $id);
        
        $arr_C = $this->_model->getData();
        $this->render('index', array(
            'd' => $array,
            'arr_lq' => $arr_lq,
            'arr_tk' => $arr_tk,
            'arrC' => $arr_C,
        ));
    }

}
