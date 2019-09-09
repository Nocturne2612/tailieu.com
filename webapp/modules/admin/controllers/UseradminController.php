<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UseradminController
 *
 * @author DUCLM
 */
class UseradminController extends AdminController {

    public $_arrAction = [];
    public $_arrController = [];

    public function filters() {
        return array('accessControl');
    }

    public function accessRules() {
        return AdminRoles::getAccessRules($this->id);
    }

    public function init() {
        $mol = new UserAdmin();
        $arrC = $mol->getPermission();

        foreach ($arrC as $a) {
            if ($a['type'] == 'action') {
                $this->_arrAction[$a['value']] = $a['name'];
            }
            if ($a['type'] == 'controllers') {
                $this->_arrController[$a['value']] = $a['name'];
            }
        }
        parent::init();
    }

    public function actionIndex() {
        $mol = new UserAdmin();
        $param = false;
        $id = ObjInput::get('id', 'int', 0);
        $username = ObjInput::get('username', 'str', '');
        $email = ObjInput::get('email', 'str', '');
        $param = array(
            'id' => $id,
            'username' => $username,
            'email' => $email,
        );
        $account_data = $mol->getData($param);
        $data = array(
            'accounts' => $account_data['data'],
            'pageHtml' => $account_data['pageHtml'],
            'totalRecord' => (int) $account_data['totalRecord'],
            'link_action' => Yii::app()->createUrl('admin/useradmin'),
            'get_data' => $param);


        $this->render('index', $data);
    }

    public function actionEdit() {
        $id = ObjInput::get('id', 'int', 0);
        $mol = new UserAdmin();
        $useradmins = $mol->getOneUserAdmin($id);
        if (!$useradmins) {
            echo Strings::alert('Không tồn tại tài khoản', Yii::app()->createUrl('admin/useradmin'));
        }
        $controllers = Yii::app()->metadata->getControllers('admin');
      
        if (Yii::app()->request->isPostRequest) {
            $arr_c = ObjInput::get('c', 'array', '', 'POST');
            $arr_a = ObjInput::get('a', 'array', '', 'POST');
            $status = ObjInput::get('status', 'int', '', 'POST');
            $password = ObjInput::get('password', 'str', '', 'POST');
            $fullname = ObjInput::get('fullname', 'str', '', 'POST');
            // $arr_a = $_POST['a'];
            $c_update = [];
            if ($arr_c <> '') {
                foreach ($arr_c as $c) {
                    if ($arr_a[$c]) {
                        $c_update[$c] = $arr_a[$c];
                    }
                }
            }
            if($fullname) {
                $param_update['fullname'] = $fullname;
            }
			
			if($status) {
                $param_update['status'] = $status;
            }
			
            if (is_array($c_update)) {
                $c_update = json_encode($c_update);
                $param_update['permission'] = $c_update;
                if ($password <> '') {
                    $param_update['password'] = md5($password);
                }
                $update = $mol->updateData($param_update, $id);
                if ($update) {
                    echo Strings::alert('Bạn cập nhật tài khoản thành công',Yii::app()->createUrl('admin/useradmin'));
                    //  Yii::app()->user->logout(false);
                    //$this->redirect(Yii::app()->createUrl('admin/useradmin'));
                } else {
                    $this->_err = 'Cập nhật không thành công.';
                }
            }
        }
       
        $permission = json_decode($useradmins['permission'], true);
        echo $useradmins['permission'];die;
        $this->render('view', array(
            'data' => $useradmins,
            'link_account' => Yii::app()->createUrl('admin/useradmin'),
            'controllers' => $controllers,
            'permission' => $permission,
            'err' => $this->_err,
            'arrAction' => $this->_arrAction,
            'arrController' => $this->_arrController,
        ));
    }

    public function actionCreate() {

        $mol = new UserAdmin();
        $controllers = Yii::app()->metadata->getControllers('admin');
        $param_insert = false;
        $c_update = '{"accountcontroller":["index","view","edit","logout"],"adscontroller":["index","view","edit","create","del"],"categorycontroller":["index","view","edit","create","del"],"categorynewscontroller":["index","edit","create","del"],"categoryproductscontroller":["index","edit","create","del"],"contactscontroller":["index","view","edit","del"],"defaultcontroller":["index"],"logincontroller":["index"],"newscontroller":["index","edit","create","del"],"permissioncontroller":["index","edit","scan","del","create"],"productscontroller":["index","create","edit","del"],"useradmincontroller":["index","edit","create","del"]}';
        $arr_c = ObjInput::get('c', 'array', '', 'POST');
        $arr_a = ObjInput::get('a', 'array', '', 'POST');
        $status = ObjInput::get('status', 'int', '2', 'POST');
        $password = ObjInput::get('password', 'str', '', 'POST');
        $username = ObjInput::get('username', 'str', '', 'POST');
        $email = ObjInput::get('email', 'str', '', 'POST');
        $fullname = ObjInput::get('fullname', 'str', '', 'POST');
        if ($arr_c <> '') {
            $c_update = [];
            foreach ($arr_c as $c) {
                if ($arr_a[$c]) {
                    $c_update[$c] = $arr_a[$c];
                }
            }
            $c_update = json_encode($c_update);
        }
        $param_insert = array(
            'permission' => $c_update,
            'password' => md5($password),
            'role' => 'admin',
            'username' => $username,
            'email' => $email,
            'status' => $status,
            'fullname'=> $fullname,
        );
        if (Yii::app()->request->isPostRequest) {
            if ($username == '') {
                $this->_err = 'Bạn chưa nhập tài khoản.';
            } else
            if ($password == '') {
                $this->_err = 'Bạn chưa nhập mật khẩu.';
            } else
            if (!Validation::checkLength($password, 6)) {
                $this->_err = 'Mật khẩu 6 kí tự trở lên.';
            } else {
                if ($mol->checkExits("username = '" . $username . "'")) {
                    $this->_err = 'Tài khoản đã tồn tại trong hệ thống.';
                } else {
                    $insert = $mol->insertData($param_insert);
                    if ($insert) {
                        echo Strings::alert('Bạn cập nhật tài khoản thành công', Yii::app()->createUrl
                                        ('admin/useradmin'));
                    } else {
                        $this->_err = 'Cập nhật không thành công.';
                    }
                }
            }
        }
        $this->render('view', array(
            'data' => $param_insert,
            'link_account' => Yii::app()->createUrl('admin/useradmin'),
            'controllers' => $controllers,
            'permission' => json_decode($c_update, true),
            'err' => $this->_err,
            'arrAction' => $this->_arrAction,
            'arrController' => $this->_arrController,
        ));
    }

    public function actionDel() {
        $id = ObjInput::get('id', 'int', 0);
        $mol = new UserAdmin();
        if ($mol->deleteData($id)) {
            echo Strings::alert('Bạn xóa tài khoản thành công', Yii::app()->createUrl('admin/useradmin'));
        } else {
            echo Strings::alert('Lỗi: xóa tài khoản không thành công', Yii::app()->
                            createUrl('admin/useradmin'));
        }
    }

}
