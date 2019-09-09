<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminBasicController
 *
 * @author Duc
 */
class TailieuController extends Controller {

    public $_err = '';
    public $_success = '';
//put your code here
    public $layout = 'layout';
    public $pageTitle = PAGE_TITLE;
    public $name = SITE_NAME;
    public $lang = 'vi';
    public $author = AUTHOR;
    public $copyright = COPY_RIGHT;
    public $keywords = KEYWORDS;
    public $desc = DESC;
    public $_state_account;

    /**
     * @return array action filters
     */
    public function init() {
        
        parent::init();
        Yii::app()->setComponents(array(
            'user' => array(
                'allowAutoLogin' => true,
                'loginUrl' => Yii::app()->createAbsoluteUrl('tailieu/login'),
                'stateKeyPrefix' => 'tl_',
                'authTimeout' => 3600, //60 phut = 3600 giay
//                'class' => 'CMSUser',
            ),
            'errorHandler' => array(
//                'errorAction' => 'tailieu/login',
            ),
        ));
       // Yii::app()->clientScript->registerMetaTag('noindex,noarchive','robots');
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/tailieuv3/css/base.css');
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/tailieuv3/css/iconfont.css?v=201907161059');
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/tailieuv3/css/details.css?v=201907161059');
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/tailieuv3/css/subpage.css?v=201907161059');
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/tailieuv3/css/index.css?v=2019071610591627');
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/tailieuv3/css/coupon.css?v=201907161059');
        
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/tailieuv3/css/main.css?v=201907161059');
        
        
        
        
        
        
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieuv3/js/base.js?v=201907161059', CClientScript::POS_HEAD);
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieuv3/js/jquery-1.7.1.min.js?v=201907161059', CClientScript::POS_HEAD);
        
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieuv3/js/base-ga.js?v=201907161059', CClientScript::POS_END);
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieuv3/js/base-new.js?v=201907161059', CClientScript::POS_END);
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieuv3/js/index.js?v=201907161059', CClientScript::POS_END);
        
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieuv3/js/jquery.flex-images.min.js?v=201907161069', CClientScript::POS_END);
        
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieuv3/js/slick.min.js?v=201907161069', CClientScript::POS_END);
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieuv3/js/search_element.js?v=201907161069', CClientScript::POS_END);
        
//        
//                Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieuv3/js/moment-with-locales.js', CClientScript::POS_END);
//        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieuv3/js/bootstrap-datetimepicker.js', CClientScript::POS_END);
//        
//        
////        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieuv3/js/jquery.ibutton.min.js', CClientScript::POS_END);
//        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieuv3/js/jquery.jcarousel.js', CClientScript::POS_END);
//        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieuv3/js/jquery.placeholder.js', CClientScript::POS_END);
//        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieuv3/js/jquery.selectbox.js', CClientScript::POS_END);
//        
//        
//        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieuv3/js/bootstrap.min.js', CClientScript::POS_END);
//        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieuv3/js/base.js', CClientScript::POS_END);
//        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieu/js/custom.js', CClientScript::POS_END);
        
    }

    public function setErrors($errors, $key = 'error') {
        Yii::app()->user->setFlash($key, $errors);
    }

}
