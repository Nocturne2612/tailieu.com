<?php

class SearchController extends TailieuController {

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
        $platforms = ObjInput::get('platforms', 'int', 0);
        
        $keyword = explode('/', $keyword);
        if(count($keyword) > 1) {
            $platforms = (int) $keyword[1];
        }
        $keyword = str_replace("-", " ", $keyword[0]);
        $this->pageTitle = $this->processKeyword($keyword);
        $this->desc = $this->processKeyword($keyword);
        
        $data = $output = array();
        $data['parent_id'] = $platforms;
        if ($keyword != '') {
            $data['title'] = Strings::encode($keyword);
            $output = $this->_model->searchKeyword($keyword, $platforms);
        } else {
            $this->redirect(Yii::app()->createUrl('tailieu'));
        }
        $cache_category = json_decode(SystemFile::readFile(DIR_CACHE . 'cache_category.cache'),true);
        $data['platforms'] = $platforms;
        var_dump($cache_category);
        var_dump($data['platforms']);
        die;
        $this->render('index', array(
            'data' => $data,
            'output' => $output,
            'cache_category'=>$cache_category,
        ));
    }

}
