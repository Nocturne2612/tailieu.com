<?php

class ApiController extends CController {

    public function init() {
        parent::init();
        if (!Yii::app()->request->isAjaxRequest) {
//            $this->redirect(ROOT_URL);
        }
    }

    public function actionCheckLogin() {
        $error_code = 0;
        $data = array(
            
        );
        $info = Yii::app()->user->getState('tAccount');
        if (!$info) {
            $error_code = 1;
        } else {
            $error_code = 2;
        }
        $return = array(
            'error_code'=> $error_code,
            'data'=> $data,
        );
        
        echo json_encode($return);
        
        
        
        
        Yii::app()->end();
    }
    public function actionFav() {
        $error_code = 0;
        $data = array(
            
        );
        $info = Yii::app()->user->getState('tAccount');
        if (!$info) {
            $error_code = 1;
        } else {
            $error_code = 2;
        }
        $return = array(
            'error_code'=> $error_code,
            'data'=> $data,
        );
        
        echo json_encode($return);
        
        
        
        
        Yii::app()->end();
    }

    public function actionIndex() {
        $data = "test";
        $return = array(
            'status'=> 200,
            'data'=> $data,
        );
        echo json_encode($return);
        Yii::app()->end();
    }

}
