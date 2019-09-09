<?php

class CategorynewsController extends TailieuController {

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
        $this->layout = 'news';
        parent::init();
    }

    public function actionIndex() {
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/tailieu/css/stylev2.css');
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/tailieu/css/owl.carousel.css');
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieu/js/owl.carousel.js', CClientScript::POS_END);
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieu/js/custom.js', CClientScript::POS_END);
        $model = new News;
        $id = ObjInput::get('id', 'int', 0);
        
        $arr_sl = $arr_C = $arr_sl2 = $arr_sl1 = $arr_news = array();
        $arr_sl = $model->getDataSlider();
        if ($arr_sl) {
            for ($i = 0; $i < count($arr_sl); $i++) {
                if ($i < 5) {
                    $arr_sl1[] = $arr_sl[$i];
                }
                if ($i > 4 && count($arr_sl) > 4) {
                    $arr_sl2[] = $arr_sl[$i];
                }
            }
        }
        $arr_news = $model->getData(array('id' => $id));
        $arr_C = $this->_model->getData();
        $categoryOn =$this->_model->getOneNews($id);
        $this->render('index', array(
            'arr_sl1' => $arr_sl1,
            'arr_sl2' => $arr_sl2,
            'category'=>$categoryOn,
            'arrC' => $arr_C,
            'arr_news' => $arr_news
        ));
    }

}
