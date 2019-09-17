<?php

class LoginController extends TailieuController {

    public $_models;
    public $passWordFaceDefaut = 'ruKj4iv2';
    public $faceBookId = '1563895650496031';
    public $app_secret = 'f4a739343af9cfd12b21937cae236f40';
    public $googleClientId = '144778968040-hr5regj1859pn5k78oqcicnm62955sft.apps.googleusercontent.com';
    public $googleSecret = 'oPCmNTXhxsxcp_QBSZ19Xesd';
    public $google_developer_key = 'AIzaSyA5q5gITeSohwqLg3bJResmQQVRUihuCnU';

    //put your code here
    public function filters() {
        return array('accessControl',); // perform access control for CRUD operations
    }

    public function accessRules() {
        return TRoles::getAccessRules($this->id);
    }

    public function init() {

        if (!Yii::app()->user->isGuest) {
            $this->redirect(SystemBase::buildUrl('tailieu/home', array()));
        }
        $this->_models = new LoginForm;
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
                $this->_models->username = $data['username'];
                $this->_models->password = $data['password'];
                if ($this->_models->validate()) {
                    $this->_loginSubmit($data);
                    $rsp = TRUE;
                    $quick_status = true;
                    $data = [
                      'username'=> '',
                        'head_img'=> '',
                    ];
                } else {
                    $errorr = $this->_models->getErrorForm();
                }
            }
            $response = [
                'rsp' => $rsp,
                'quick_status' => $quick_status,
                'errorr' => $errorr,
                'data'=> $data,
            ];
            echo CJSON::encode($response);
            Yii::app()->end();
        }
        
        $this->redirect(ROOT_URL);
        Yii::app()->end();
        
        $data = array();
        $data['username'] = ObjInput::get('username', 'str', '', 'POST');
        $data['password'] = ObjInput::get('password', 'str', '', 'POST');
        $data['verifyCode'] = ObjInput::get('verifyCode', 'str', '', 'POST');
        if (Yii::app()->request->isPostRequest) {
            $captcha = Yii::app()->getController()->createAction("captcha");
            $code = $captcha->verifyCode;
            if ($data['verifyCode'] <> $code) {
                $this->setErrors('Mã xác nhận không chính xác');
            } else {
                $this->_models->attributes = $_POST;
                if ($this->_models->validate()) {
                    $this->_loginSubmit($data);
                } else {
                    $this->setErrors($this->_models->getErrorForm());
                }
            }
        }
        $this->render('index', array(
            'data' => $data,
            'errors' => $this->_models->_getError(),
            'success' => $this->_models->_getSuccess()
        ));
    }

    private function _loginSubmit($data, $type = false) {
        $params = array();
        $login = new LoginForm();
        $login->username = $data['username'];
        $login->password = $data['password'];
        $login->type = $type;
        if ($login->login()) {
            return true;
//if($_GET['bug']!='')			
            if (Yii::app()->controller->id == 'login' && (Session::get('returnUrl') == NULL || Session::get('returnUrl') == '')) {
//                $this->redirect(Yii::app()->createUrl('tailieu/account/index'));
            } else {
                $url = Session::get('returnUrl');
                Session::remove('returnUrl');
//                $this->redirect($url);
            }
        } else {
            $this->setErrors('Tài khoản và mật khẩu không chính xác');
        }
    }

    public function actionFacebook() {
//        require_once ROOT_PATH . DS . 'webapp/config/src/Facebook/autoload.php';
//        $config = array(
//            'app_id' => $this->faceBookId,
//            'app_secret' => $this->app_secret,
//            'default_graph_version' => 'v3.0',
//        );
//        $fb = new \Facebook\Facebook($config);
//        $helper = $fb->getRedirectLoginHelper();
//        var_dump($helper);die();
//        try {
//            // Get the \Facebook\GraphNodes\GraphUser object for the current user.
//            // If you provided a 'default_access_token', the '{access-token}' is optional.
//            $response = $fb->get('/me', '{access-token}');
//        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
//            // When Graph returns an error
//            echo 'Graph returned an error: ' . $e->getMessage();
//            exit;
//        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
//            // When validation fails or other local issues
//            echo 'Facebook SDK returned an error: ' . $e->getMessage();
//            exit;
//        }
//
//        $me = $response->getGraphUser();
//        echo 'Logged in as ' . $me->getName();
//        die();


        $app_id = $this->faceBookId;
        $app_secret = $this->app_secret;

        $urlLogin = SystemBase::buildUrl('tailieu/login/index', array());
        $urlRederect = SystemBase::buildUrl('tailieu/login/facebook', array());
        $redirect_uri = urlencode($urlRederect);
        $code = ObjInput::get('code', 'str', '');

        if (!$code) {
            $this->redirect('https://www.facebook.com/dialog/oauth?client_id=' . $this->faceBookId . '&redirect_uri=' . $redirect_uri . '&state=48390abf96fcc6e14226339373d22674&sdk=php-sdk-4.0.9&scope=email');
        }

        $facebook_access_token_uri = "https://graph.facebook.com/oauth/access_token?client_id=$app_id&redirect_uri=$redirect_uri&client_secret=$app_secret&code=$code";


        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $facebook_access_token_uri);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        $response = curl_exec($ch);

        curl_close($ch);
        $array = json_decode($response, true);
        $access_token = str_replace('access_token=', '', $array['access_token']);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/me?access_token=$access_token");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        $response = curl_exec($ch);

        curl_close($ch);
        $user = json_decode($response, true);
        $fbfullname = '';
        $fisteName = '';
        $endName = '';
        $email = '';
        $user_id = '';
        if (!empty($user)) {
            //var_dump($user);die();
            $user_id = $user['id'];
            if (isset($user['name'])) {
                $fbfullname = $user['name'];
            }
            $array = explode(' ', $fbfullname);
            $endName = $array[count(explode(' ', $fbfullname)) - 1];
            $fisteName = trim(str_replace($endName, '', $fbfullname));
            if (isset($user['email'])) {
                $email = $user['email'];
            }
        } else {
            $this->redirect(SystemBase::buildUrl('tailieu/register/index', array()));
        }

        if ($user_id) {
            $users = DataHelper::selectOne('accounts', 'id,email', '`facebook_id` = "' . $user_id . '"');
            if ($users) {
                /*
                 * Dang nhap
                 */
                $data['password'] = $user_id;
                $data['username'] = $users['email'];
                $this->_loginSubmit($data, 2);
            } else {
                $email = $user_id . '@fb.com';
                $users = DataHelper::selectOne('accounts', 'id,email', 'email = "' . $email . '"');
                if ($users) {
                    $data['password'] = $user_id;
                    $data['username'] = $email;
                    $this->_loginSubmit($data, 2);
                    /*
                     * Dang nhap
                     */
//                        $this->redirect(SystemBase::buildUrl('tailieu/login/index', array('username' => $email)));
                } else {
                    /*
                     * Dang ky
                     */
                    $params = array(
                        'last_name' => $fisteName,
                        'first_name' => $endName,
                        'email' => $email,
                        'mobile_phone' => '',
                        'dob' => '',
                        'password' => '',
                        'id_no' => '',
                        'gender' => @$user['gender'] == 'female' ? 'F' : 'M',
                        'country' => strtoupper(@$user['locale']),
                        'facebook_id' => $user_id,
                    );

                    $params['ip_address'] = Yii::app()->request->getUserHostAddress();
                    $params['update_time'] = time();
                    $params['dob'] = '';
                    $params['active_status'] = 1;
                    $this->_models = new Register;
                    $re = $this->_models->insertAccount($params);
                    if ($re > 0) {
                        $data['password'] = $user_id;
                        $data['username'] = $email;
                        $this->_loginSubmit($data, 2);
                    } else {
                        $this->redirect(Yii::app()->createUrl('tailieu/login'));
                    }
                }
            }
        } else {
            $users = DataHelper::selectOne('accounts', 'id,email', '`google_id` = "' . $user_id . '"');
            if ($users) {
                $this->redirect(SystemBase::buildUrl('tailieu/login/index', array('username' => $users['email'])));
            }
        }
        $this->redirect(SystemBase::buildUrl('tailieu/register/index', array('lastName' => $fisteName, 'firstName' => $endName, 'email' => $email)));
    }

    function actionGoogle() {
        require_once(YiiBase::getPathOfAlias('config') . '/src/Google_Client.php');
        require_once(YiiBase::getPathOfAlias('config') . '/src/contrib/Google_Oauth2Service.php');
        $google_redirect_url = ROOT_URL . DS . 'tailieu/login/google.html';
        $gClient = new Google_Client();

        $gClient->setApplicationName('tailieukientruc.net');
        $gClient->setClientId($this->googleClientId);
        $gClient->setClientSecret($this->googleSecret);
        $gClient->setRedirectUri($google_redirect_url);
        $gClient->setDeveloperKey($this->google_developer_key);
        $google_oauthV2 = new Google_Oauth2Service($gClient);

        $code = ObjInput::get('code', 'str', '');
        if (!$code) {
            $this->redirect($gClient->createAuthUrl());
        }
        try {
            $_SESSION['token'] = @$gClient->authenticate($code);
        } catch (Exception $exc) {
            $this->redirect($gClient->createAuthUrl());
        }


        if (isset($_SESSION['token'])) {
            $gClient->setAccessToken($_SESSION['token']);
        }
        $totken = $gClient->getAccessToken();
        if ($totken) {
            $user = $google_oauthV2->userinfo->get();
            $user_id = $user['id'];
            $user_name = filter_var($user['name'], FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_var($user['email'], FILTER_SANITIZE_EMAIL);
            if (!isset($user['link'])) {
                $user['link'] = $user['picture'];
            }
            $profile_url = filter_var($user['link'], FILTER_VALIDATE_URL);
            $profile_image_url = filter_var($user['picture'], FILTER_VALIDATE_URL);
            $login = false;

            if ($email) {
                $users = DataHelper::selectOne('accounts', 'id,email', 'email = "' . $email . '" and `google_id` = "' . $user_id . '"');
                if ($users) {
                    /*
                     * Dang nhap
                     */
                    $data['password'] = $user_id;
                    $data['username'] = $email;
                    $this->_loginSubmit($data, 2);
                } else {
                    $users = DataHelper::selectOne('accounts', 'id,email', 'email = "' . $email . '"');
                    if ($users) {
                        $data['password'] = $user_id;
                        $data['username'] = $email;
                        $this->_loginSubmit($data, 2);
                        /*
                         * Dang nhap
                         */
//                        $this->redirect(SystemBase::buildUrl('tailieu/login/index', array('username' => $email)));
                    } else {
                        /*
                         * Dang ky
                         */
                        $params = array(
                            'last_name' => @$user['given_name'],
                            'first_name' => @$user['family_name'],
                            'email' => $email,
                            'mobile_phone' => '',
                            'dob' => '',
                            'password' => '',
                            'id_no' => '',
                            'gender' => @$user['gender'] == 'male' ? 'M' : 'F',
                            'country' => strtoupper(@$user['locale']),
                            'google_id' => $user_id,
                        );

                        $params['ip_address'] = Yii::app()->request->getUserHostAddress();
                        $params['update_time'] = time();
                        $params['dob'] = '';
                        $params['active_status'] = 1;
                        $register = new Register;
                        $re = $register->insertAccount($params);
                        if ($re > 0) {
                            $data['password'] = $user_id;
                            $data['username'] = $email;
                            $this->_loginSubmit($data, 2);
                        } else {
                            $this->redirect(Yii::app()->createUrl('tailieu/login'));
                        }
                    }
                }
            } else {
                $users = DataHelper::selectOne('accounts', 'id,email', '`google_id` = "' . $user_id . '"');
                if ($users) {
                    $this->redirect(SystemBase::buildUrl('tailieu/login/index', array('username' => $users['email'])));
                }
            }
        } else {
            $this->redirect(SystemBase::buildUrl('tailieu/register/index', array()));
        }
    }

}
