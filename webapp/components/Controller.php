<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController {

    /**
     * @var string the default layout for the controller view. Defaults to '//layouts/column1',
     * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
     */
    public $layout = '/layouts/column2';

    /**
     * @var array context menu items. This property will be assigned to {@link CMenu::items}.
     */
    public $menu = array();

    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
     * for more details on how to specify this property.
     */
    public $breadcrumbs = array();
    protected $pageDescription = '';
    protected $pageKeyword = '';

    public function init() {
        //Yii::app()->clientScript->registerMetaTag($this->pageDescription, 'description');
       // Yii::app()->clientScript->registerMetaTag($this->pageKeyword, 'keywords');
        //  Yii::app()->clientScript->registerCoreScript('jquery');
        // Yii::app()->getClientScript()->registerCoreScript('jquery.ui');
    }

    protected function beforeAction($action) {
        Yii::app()->clientScript->scriptMap = array('jquery.js' => false);
        return parent::beforeAction($action);
    }

    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'Captcha',
                'backColor' => 0xFFFFFF,
                'testLimit' => 1,
                'minLength' => 5,
                'maxLength' => 5,
            ),
        );
    }

    public function makeCache($file_name, $file_path, $data) {
        if (SystemFile::createDirPath($file_path)) {
            $f = fopen($file_path . $file_name, 'w');
            if ($f) {
                fwrite($f, $data);
                fclose($f);
                return true;
            }
        }
    }

}
