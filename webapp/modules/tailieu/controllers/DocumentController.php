<?php

class DocumentController extends TailieuController {

    private $_model;

    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    public function accessRules() {
        return TRoles::getAccessRules($this->id);
    }

    public function init() {
        $this->_model = new Product;
        parent::init();
    }

    public function actionIndex() {
//        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieuv3/js/details.js?v=201907161059', CClientScript::POS_END);
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieuv3/js/detail_element.js?v=201907161069', CClientScript::POS_END);
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/tailieuv3/css/detail_element.css?v=201907161059');
        $array = $output = $relation = array();
        $output = $this->_model->getDetail(ObjInput::get('id', 'int', 0));
        $arr_pic =FALSE;
        if (!$output) {
            $this->redirect(Yii::app()->createUrl('tailieu/home'));
        } else {
            $model_cate = new Categorydocument;
            if ($output['sub_category_id'] != 0) {
                $array = $model_cate->getDetailCategoryById($output['sub_category_id']);
                $relation = $this->_model->getProductRelation('', $output['sub_category_id']);
            } else {
                $array = $model_cate->getDetailCategoryById($output['category_id']);
                $relation = $this->_model->getProductRelation($output['category_id'], '');
            }
			if ($output['picture'] <> ""){
				$arr_pic = explode('|',$output['picture']);	
  				 $img = ROOT_URL.DS.IMG_PRODUCT.$arr_pic[0];
			}
			Yii::app()->clientScript->registerMetaTag($img,null,null,array('property'=>'og:image'));
            $this->pageTitle = $output['title'];
            $this->desc = $output['desc'];
            $this->keywords = $output['tag'];
            $account = DataHelper::selectOne('accounts', 'first_name,last_name,point,id,count_down', 'id=' .  $output['account_id']);
            $admin = false;
            if(!$account) {
                $admin =  DataHelper::selectOne('user_admin', "*", " id = ".(int)$output['account_name']);
            }
        }
//        echo '<pre>';
//        var_dump($output);die();
        $this->render('index', array(
            'data' => $array,
            'output' => $output,
            'account'=> $account,
            'arr_pic'=> $arr_pic,
            'relation' => $relation,
            'admin'=> $admin,
        ));
    }

}
