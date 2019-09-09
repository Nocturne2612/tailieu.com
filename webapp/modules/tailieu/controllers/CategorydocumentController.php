<?php

class CategorydocumentController extends TailieuController {

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
        $this->_model = new Categorydocument;
        parent::init();
    }

    public function actionIndex() {
		 Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieu/js/custom.js', CClientScript::POS_END);
        $acii = ObjInput::get('title', 'str', '');
        $array = $output = $outputs = array();
        $array = $this->_model->getDetailCategory($acii);
        if (!$array) {
            $this->redirect(Yii::app()->createUrl('tailieu/home'));
        } else {
            $this->pageTitle = $array['title'];
            $this->desc = $array['desc'];
            $this->keywords = $array['tag'];
        }
        if ($array['parent_id'] > 0) {
            // Show bài viết
            $output = $this->_showDocument($array['parent_id'], $array['id']);
			if(!$output) {
				$output['totalRecord'] = 0;
				$output['data'] = false;
				$output['pageHtml'] = '';
				
			}
        } else {
            // Show category cấp 2
            $outputs = $this->_showDocument($array['id'], 0);
            $output = $this->_showCategoryLV2($array['id']);
        }
//        var_dump($array);die();
		
        $this->render('index', array(
            'data' => $array,
            'outputs' => $outputs,
            'category'=> json_decode(SystemFile::readFile(DIR_CACHE . 'cache_category.cache'),true),
            'output' => $output,
            'sort' => ObjInput::get('sort', 'str', ''),
        ));
    }

    private function _showCategoryLV2($parent_id) {
        $data = $this->_model->getData($parent_id);
        return $data;
    }

    private function _showDocument($parent_id, $sub_category_id) {
        $sort = ObjInput::get('sort', 'str', '');
        if ($sort == 'download') {
            $order = 'count_down DESC';
        } else
            $order = 'create_time DESC';
        $dc = new Product;
        $data = $dc->getData($parent_id, $sub_category_id, $order);
        return $data;
    }

}
