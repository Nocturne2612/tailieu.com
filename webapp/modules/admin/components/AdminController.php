<?php

/**
 * Description of AdminBasicController
 *
 * @author DUCLM
 */
class AdminController extends Controller {

    //put your code here
    public $layout = '1col';
    public $pageTitle = 'ADMIN - CKK CMS';
    public $_err = '';
    public $_arrStatus = array('1' => 'Hoạt động', '0' => 'Ngừng hoạt động');

    /**
     * @return array action filters
     */
    public function init() {
        parent::init();
        Yii::app()->setComponents(array(
            'user' => array(
                'allowAutoLogin' => false,
                'loginUrl' => Yii::app()->createUrl('admin/login'),
                'stateKeyPrefix' => 'admin_',
                'authTimeout' => 7200, //120 phut = 7200 giay
                'class' => 'CMSUserAdmin',
            ),
            'errorHandler' => array(
                'errorAction' => 'admin/',
            ),
        ));
     
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/xeon/css/fonts/linecons/css/linecons.css');
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/xeon/css/fonts/fontawesome/css/font-awesome.min.css');
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/xeon/css/bootstrap.css');
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/xeon/css/xenon-core.css');
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/xeon/css/custom.css');
/////JS
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/xeon/js/bootstrap.min.js', CClientScript::POS_END);
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/xeon/js/joinable.js', CClientScript::POS_END);
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/xeon/js/jquery-1.11.1.min.js');

        // $this->_arrStatus = array('1' => 'Hoạt động', '0' => 'Ngừng hoạt động');
    }

    public function setErrors($errors, $key = 'error') {
        Yii::app()->user->setFlash($key, $errors);
    }

}
