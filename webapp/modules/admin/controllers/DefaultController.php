<?php

class DefaultController extends AdminController {

    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    public function accessRules() {
        return AdminRoles::getAccessRules($this->id);
    }

    public function init() {
        $this->layout = '2col';
        parent::init();
    }

    public function actionIndex() {
        $this->pageTitle = 'Bảng điều khiển';
        $count = 0;
        $data = Products::countNewProducts();
        if ($data)
            $count = $data['count'];

        $err = '';
        if (Session::checkExists('err')) {
            $err = Session::get('err');
            Session::remove('err');
        }
        $this->render('index', array(
            'err' => $err,
            'count' => $count,
            'Top5Account' => Account::getTop5New(),
            'Top5Transaction' => Point::getTop5Transaciton(),
            'arr_type' => $GLOBALS['TYPE_POINT'],
        ));
    }

}
