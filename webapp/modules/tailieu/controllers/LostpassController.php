<?php

// DUCLM
class LostpassController extends TailieuController {

    public function filters() {
        return array('accessControl');
    }

    public function accessRules() {
        return TRoles::getAccessRules($this->id);
    }

    public function init() {
        parent::init();
    }

    public function actionIndex() {
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/tailieuv3/css/password_find.css');
        $errors = '';
        $params = array(
            'email' => ObjInput::get('email', 'str', ''),
            'mobile_phone' => ObjInput::get('mobile_phone', 'str', ''),
            'verify_code' => ObjInput::get('verify_code', 'int', '0'),
        );

        if (Yii::app()->request->isPostRequest) {
            $this->_onRegisterSubmit($params);
        }

        $this->render('index', array(
            //'question' => $GLOBALS['QUESTIONS'],
            'err' => $this->_err,
            'params' => $params,
        ));
    }

    private function _onRegisterSubmit($params) {
        $registerMod = new Register;

        if (!Validation::checkLength($params['email'], 1)) {
            $this->_err = 'Bạn chưa nhập email !';
            return false;
        } elseif (!Validation::isEmail($params['email'])) {
            $this->_err = 'Email không đúng định dạng!';
            return false;
        }if (!Validation::checkLength($params['mobile_phone'], 1)) {
            $this->_err = 'Bạn chưa nhập điện thoại !';
            return false;
        }
        if (trim($params['verify_code']) == '') {
            $this->_err = 'Bạn chưa nhập mã bảo mật  !';
            return false;
        } else {
            $captcha = Yii::app()->getController()->createAction("captcha");
            $code = $captcha->verifyCode;
            if ($params['verify_code'] != $code) {
                $this->_err = 'Mã bảo mật không chính xác  !';
                return false;
            } else {

                $check_email = $registerMod->checkExistInfoEmail($params['email']);
                if (!$check_email) {
                    $this->_err = 'Email không tồn tại trong hệ thống  !';
                    return false;
                } else {
                    if ($check_email['mobile_phone'] === $params['mobile_phone']) {
                        Session::set('ResultLostPass', $check_email);
                        $this->redirect(Yii::app()->createUrl('/tailieu/lostpass/confirm'));
                    } else {
                        Session::remove('ResultLostPass');
                        $this->_err = 'Số điện thoại không đúng  !';
                        return false;
                    }
                }
            }
        }
    }

    public function actionConfirm() {
        if (Session::checkExists('ResultLostPass')) {

            $params = array(
                'password' => ObjInput::get('password', 'str', ''),
                'repassword' => ObjInput::get('repassword', 'str', ''),
                'verify_code' => ObjInput::get('verify_code', 'int', '0'),
            );

            if (Yii::app()->request->isPostRequest) {
                if (!Validation::checkLength($params['password'], 1)) {
                    $this->_err = 'Bạn chưa nhập mật khẩu !';
                } else if (!Validation::isPassword($params['password'])) {
                    $this->_err = 'Mật khẩu phải từ  6 - 20 kí tự !';
                } else if (!Validation::checkLength($params['repassword'], 1)) {
                    $this->_err = 'Bạn chưa nhập mật khẩu xác nhận !';
                } else if ($params['password'] != $params['repassword']) {
                    $this->_err = 'Mật khẩu tài khoản xác nhận không trùng mật khẩu đã nhập !';
                } else if (trim($params['verify_code']) == '') {
                    $this->_err = 'Bạn chưa nhập mã bảo mật  !';
                } else {
                    $captcha = Yii::app()->getController()->createAction("captcha");
                    $code = $captcha->verifyCode;
                    if ($params['verify_code'] != $code) {
                        $this->_err = 'Mã bảo mật không chính xác  !';
                    } else {
                        $infoSession = Session::get('ResultLostPass');
                        $registerMod = new Register;
                        $param = array(
                            'password' => md5($params['password']),
                            'update_time' => time(),
                            'id' => $infoSession['id'],
                        );
                        $update = $registerMod->updatePass($param);
                        if (!$update) {
                            $this->_err = 'Quá trình cập nhật bị lỗi, vui lòng thực hiện lại  !';
                            Session::remove('ResultLostPass');
                        } else {
                            $this->setErrors('Đổi mật khẩu thành công', 'success');
                            $this->redirect(Yii::app()->createUrl('/tailieu/login'));
                            Session::remove('ResultLostPass');
                        }
                    }
                }
            }

            $this->render('confirm', array('err' => $this->_err));
        } else {
            $this->redirect(SystemBase::buildUrl('tailieu/lostpass/', array()));
        }
    }

}
