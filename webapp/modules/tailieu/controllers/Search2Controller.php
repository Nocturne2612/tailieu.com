<?php

class Search2Controller extends TailieuController {

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
        $this->_model = new Search;
        parent::init();
    }

    private function processKeyword($keyword) {
        return Strings::encode($keyword);
    }

    public function actionIndex() {
        $keyword = ObjInput::get('keyword', 'str', '');
        $this->pageTitle = $this->processKeyword($keyword);
        $this->desc = $this->processKeyword($keyword);
        $platforms = ObjInput::get('platforms', 'int', 0);
        $data = $output = array();
        $data['parent_id'] = $platforms;

        if ($keyword != '') {
            $data['title'] = Strings::encode($keyword);
            $output = $this->_model->searchKeyword($keyword);
        } else {
            $this->redirect(Yii::app()->createUrl('tailieu'));
        }
if(isset($_GET['ttt'])) {var_dump($output['data']);die();}
        $this->render('index', array(
            'data' => $data,
            'output' => $output
        ));
    }

}
