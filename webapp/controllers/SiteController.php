<?php

class SiteController extends CController {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/bootstrap/css/bootstrap.min.css');
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/bootstrap/js/bootstrap.min.js', CClientScript::POS_END);
        //  var_dump(Yii::app()->errorHandler->error);
        if (Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest) {
                echo $error['message'];
                die();
            } else {
                $this->layout = 'main';
                $this->pageTitle = SystemBase::encode(Yii::app()->errorHandler->error['message']);
               // var_dump( Yii::app()->errorHandler);
                $this->render('error', array('error' => Yii::app()->errorHandler->error));
            }
        }
    }

}
