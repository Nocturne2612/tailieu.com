<?php

// DUCLM
class RegisterController extends TailieuController {

    public function filters() {
        return array('accessControl');
    }

    public $_models;

    public function accessRules() {
        return TRoles::getAccessRules($this->id);
    }

    public function init() {
        $this->_models = new Register;
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/tailieuv3/css/user.css');
        parent::init();
    }

    public function actionIndex() {
        if (Yii::app()->request->isAjaxRequest) {
            $rsp = false;
            $quick_status = false;
            $errorr = 'Thông tin đăng nhập không chính xác';
            $data = array();
            $data['username'] = ObjInput::get('email_login_header', 'str', '', 'POST');
            $data['password'] = ObjInput::get('password_login_header', 'str', '', 'POST');
            if (Yii::app()->request->isPostRequest) {
                $params = array(
                    'last_name' => 'Default',
                    'first_name' => 'Default',
                    'email' => Strings::clean_up(ObjInput::get('email', 'str', '')),
                    'mobile_phone' => Strings::clean_up(ObjInput::get('mobile_phone', 'str', '')),
                    'dob' => '',
                    'password' => Strings::clean_up(ObjInput::get('password', 'str', '')),
                    'repassword' => Strings::clean_up(ObjInput::get('repassword', 'str', '')),
                    //'id_no' => Strings::clean_up(ObjInput::get('id_no', 'str', '')),
                    'gender' => Strings::clean_up(ObjInput::get('gender', 'str', '')),
                    'country' => Strings::clean_up(ObjInput::get('country', 'str', '')),
//                    'verify_code' => ObjInput::get('verify_code', 'int', '0'),
                );
                if (Yii::app()->request->isPostRequest) {
                    if ($this->_onRegisterSubmit($params)) {
                        $rsp = TRUE;
                        $quick_status = true;
                        $data = [
                            'username' => '',
                            'head_img' => '',
                        ];
                    } else {
                        $errorr = Yii::app()->user->getFlash('error');
                    }
                }
            }
            $response = [
                'rsp' => $rsp,
                'quick_status' => $quick_status,
                'errorr' => $errorr,
                'data' => $data,
            ];
            echo CJSON::encode($response);
            Yii::app()->end();
        }
        $this->redirect(ROOT_URL);
        Yii::app()->end();

        $errors = '';

        $params = array(
            'last_name' => Strings::clean_up(ObjInput::get('lastName', 'str', '')),
            'first_name' => Strings::clean_up(ObjInput::get('firstName', 'str', '')),
            'email' => Strings::clean_up(ObjInput::get('email', 'str', '')),
            'mobile_phone' => Strings::clean_up(ObjInput::get('mobile_phone', 'str', '')),
            'dob' => Strings::clean_up(ObjInput::get('dob', 'str', '')),
            'password' => Strings::clean_up(ObjInput::get('password', 'str', '')),
            'repassword' => Strings::clean_up(ObjInput::get('repassword', 'str', '')),
            //'id_no' => Strings::clean_up(ObjInput::get('id_no', 'str', '')),
            'gender' => Strings::clean_up(ObjInput::get('gender', 'str', '')),
            'country' => Strings::clean_up(ObjInput::get('country', 'str', '')),
            'verify_code' => ObjInput::get('verify_code', 'int', '0'),
        );

        if (Yii::app()->request->isPostRequest) {
            $this->_onRegisterSubmit($params);
        }

        $this->render('index', array(
            'errors' => $this->_models->_getError(),
            'success' => $this->_models->_getSuccess(),
            'params' => $params,
        ));
    }

    private function _onRegisterSubmit($params) {

        if ($params['last_name'] == '' || $params['first_name'] == '') {
            $this->setErrors('Bạn chưa nhập đầy đủ Họ và Tên !');
            return false;
        }
        if (!Validation::checkLength($params['mobile_phone'], 1)) {
            $this->setErrors('Bạn chưa nhập điện thoại !');
            return false;
        } elseif (!Validation::isMobile($params['mobile_phone'])) {
            $this->setErrors('Điện thoại không đúng định dạng!');
            return false;
        }
        if (!Validation::checkLength($params['email'], 1)) {
            $this->setErrors('Bạn chưa nhập email !');
            return false;
        } elseif (!Validation::isEmail($params['email'])) {
            $this->setErrors('Email không đúng định dạng!');
            return false;
        }
//        $check  = DataHelper::selectOne('','id','email = "'.$params['email'].'"');
        $check = $this->_models->checkExistEmail($params['email']);
        if($check) {
           $this->setErrors('Tài khoản đã tồn tại');
            return false; 
        }
//        if (!Validation::checkLength($params['dob'], 1)) {
//            $this->setErrors('Bạn chưa nhập Ngày sinh !');
//            return false;
//        } elseif (!Validation::isDate($params['dob'])) {
//            $this->setErrors('Ngày sinh không đúng định dạng !');
//            return false;
//        }
        if (!Validation::checkLength($params['password'], 1)) {
            $this->setErrors('Bạn chưa nhập mật khẩu !');
            return false;
        } else
        if (!Validation::isPassword($params['password'])) {
            $this->setErrors('Mật khẩu phải từ  6 - 20 kí tự !');
            return false;
        }

        if (!Validation::checkLength($params['repassword'], 1)) {
            $this->setErrors('Bạn chưa nhập mật khẩu xác nhận !');
            return false;
        }
        if ($params['password'] != $params['repassword']) {
            $this->setErrors('Mật khẩu tài khoản xác nhận không trùng mật khẩu đã nhập !');
            return false;
        }

        if (!Validation::checkLength($params['gender'], 1)) {
            $this->setErrors('Bạn chưa chọn giới tính !');
            return false;
        }

//        if (trim($params['verify_code']) == '') {
//            $this->setErrors('Bạn chưa nhập mã bảo mật  !');
//            return false;
//        } else {
//            $captcha = Yii::app()->getController()->createAction("captcha");
//            $code = $captcha->verifyCode;
//            if ($params['verify_code'] != $code) {
//                $this->setErrors('Mã bảo mật không chính xác  !');
//                return false;
//            } else {
//                $param = array("email" => $params['email']);
//                if ($this->_models->checkExistEmail($params['email'])) {
//                    $this->setErrors('Email đã tồn tại trong hệ thống!');
//                    return false;
//                }
//            }
//        }
        $ip_client = Yii::app()->request->getUserHostAddress();
//        $birthday = SystemDateTime::date_to_timestamp($params['dob']);
$birthday = '';
        $params['ip_address'] = $ip_client;
        $params['update_time'] = time();
        $params['dob'] = $birthday;
        $params['active_status'] = 1;
        unset($params['repassword']);
        unset($params['verify_code']);
        $params['password'] = md5($params['password']);
        $re = $this->_models->insertAccount($params);
        if ($re > 0) {
            return true;
            $this->setErrors('Bạn đăng ký thành công. ', 'success');
        } else {
            $this->setErrors('Quá trình đăng kí bị lỗi. Vui lòng đăng kí lại');
            return false;
        }
    }

    public function actionConfirm() {
        if (Session::checkExists('confirm') && Session::get('confirm') == '1') {
            if (Session::checkExists('err')) {
                $this->setErrors(Session::get('err'));
                Session::remove('err');
            }
            $this->render('confirm', array('email' => Session::get('email'), 'err' => $this->_err, 'success' => ''));
        } else {
            $this->redirect(Yii::app()->createUrl('/tailieu/register/'));
        }
    }

    public function actionActive() {
        $code = ObjInput::get('code', 'str', '');
        $this->_models = new Register;
        if ($code <> '') {
            $record = Register::model()->findByAttributes(array('password_hash' => $code));
        } else {
            $this->redirect(Yii::app()->createUrl('tailieu/home'));
            die();
        }
        $success = '';
        if ($record !== NULL) {
            $validate_user = array('email' => $record['email'], 'password_hash' => $record['password_hash']);
            $validate_user_info = $tailieuportal->doValidateUserAccount($validate_user);
            if ($validate_user_info['ResCode'] == 100) {
                $user_info = $tailieuportal->getUserUID(array('email' => Session::get('email')));
                if ($user_info['ResCode'] == 100) {
                    $data_update['useruid'] = $user_info['OutputParams']->useruid;
                    $data_update['active_time'] = time();
                    $this->_models->updateAccount($data_update, ' email = "' . $record['email'] . '"');
                    $success = 'Bạn kích hoạt thành công.';
                } else {
                    
                }
            }
            $this->render('confirm', array('email' => $record['email'], 'err' => $this->_err, 'success' => $success));
        } else {
            echo Strings::alert('Link active không đúng.', Yii::app()->createUrl('tailieu'));
            die();
        }
    }

}
