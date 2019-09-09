<?php

/**
 * Description of LoginController
 *
 * @author DUCLM
 */
class LoginController extends AdminController {

    //put your code here
    public function filters() {
        return array('accessControl', // perform access control for CRUD operations
        );
    }

    public function accessRules() {
        return AdminRoles::getAccessRules($this->id);
    }

    public function actionIndex() {
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/xeon/js/jquery-validate/jquery.validate.min.js', CClientScript::POS_END);
        $this->layout = 'login';
        $data['username'] = ObjInput::get('username', 'str', '', 'POST');
        $data['pass'] = ObjInput::get('pass', 'str', '', 'POST');
        $data['verifyCode'] = ObjInput::get('verifyCode', 'str', '', 'POST');

        if (Yii::app()->request->isPostRequest) {
            $this->_loginSubmit($data);
        }
        $data['logo'] = Yii::app()->baseUrl . '/assets/xeon/images/logo.png';
        $this->render('index', $data);
    }

    private function _loginSubmit($data) {

        $params = array();

        $verifyCode = $data['verifyCode'];
        $username = $data['username'];
        $password = $data['pass'];

        if (!Validation::checkLength($username, 1)) {
            Yii::app()->user->setFlash('error_messages', 'Tên truy cập chưa nhập');
        } elseif (!preg_match('/^[a-zA-Z0-9_\-]{4,25}$/', $username)) {
            Yii::app()->user->setFlash('error_messages', 'Tên truy cập không hợp lệ');
        } elseif (!Validation::checkLength($password, 1)) {
            Yii::app()->user->setFlash('error_messages', 'Mật khẩu chưa nhập');
        } elseif (!Validation::isPassword($password)) {
            Yii::app()->user->setFlash('error_messages', 'Mật khẩu không hợp lệ');
        } else {
            $captcha = Yii::app()->getController()->createAction("captcha");
            $code = $captcha->verifyCode;
            if ($verifyCode <> $code) {
                Yii::app()->user->setFlash('error_messages', 'Mã xác nhận không chính xác');
            } else {

                $adminlogin = new LoginForm();
                $adminlogin->username = $username;
                $adminlogin->password = $password;
                $check_login = $adminlogin->login();
                if ($check_login === TRUE) {
                    $adminlogin->updateAfterLogin($username);
                    if (!in_array(Yii::app()->user->returnUrl,array("/tailieu/","/")))
                        $this->redirect(Yii::app()->user->returnUrl);
                    else {
                        $this->redirect(Yii::app()->createUrl('admin/default'));
                    }
                } else {
                    Yii::app()->user->setFlash('error_messages', $check_login);
                }
            }
        }
    }

}
