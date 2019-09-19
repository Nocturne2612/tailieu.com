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
        
        $type = ObjInput::get('type', 'int', '');
        $keyWord = ObjInput::get('keyword', 'str', '');
        $regexp = "REGEXP '[[:<:]]($keyword)[[:>:]]'";
        $where = " ( UPPER(`full`) $regexp OR " . "`title` $regexp"." OR " . "`tag` $regexp )";
        $query = Yii::app()->db->createCommand()
                    ->select('*')
                    ->from('products')
                    ->where($where)
                    ->limit(5)
                    ->order('count desc');
        if($type) {
            $query->andWhere('category_id='.$type);
        }
        $result = $query->queryAll();
        $data = '';
        foreach ($result as $res) {
            $sub = $res['title'];
            $data .= '<p data-val="'.$sub.'"><span class="value">'.$sub.'</span></p>';         
        }
        $return = array(
            'status'=> 200,
            'data'=> $data,
            'type' => $type,
        );
        echo json_encode($return);
        Yii::app()->end();
    }

}
