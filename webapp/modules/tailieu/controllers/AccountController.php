<?php

class AccountController extends TailieuController {

    public $_models;

    public function filters() {
        return array('accessControl', // perform access control for CRUD operations
        );
    }

    public function accessRules() {
//        return array(
//            array('allow', // allow all users to perform 'index' and 'view' actions
//                'actions' => array('member'),
//                'users' => array('*'),
//            ),
//        );
//        $this->_actionAllowAccess = array(
//            'index',
//            'info',
//        );
        return TRoles::getAccessRules($this->id);
    }

    public function init() {
		
        $this->_models = new Accounts;
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/tailieuv3/css/user.css');	
        $this->layout = 'account';
        parent::init();
		
    }

    public function actionLogout() {
        //SystemSession::destroy();
        Session::remove('returnUrl');
        Yii::app()->user->logout(false);
        $this->redirect(Yii::app()->createUrl('tailieu/login/'));
    }
	 protected function beforeAction($action)
   {
	   $info = $this->_models->getInfoAccountRealtime();
       if($action->id != "logout" && !$info)
       {
          return $this->redirect(Yii::app()->createUrl('tailieu/login'));
       }

       return parent::beforeAction($action);
   }

    public function actionIndex() {
        $info = Accounts::infoAccount();
        $status = ObjInput::get('status', 'int', 0);
        $begin_createtime = ObjInput::get('begin_createtime', 'str', 'dd-mm-yyyy');
        $end_createtime = ObjInput::get('end_createtime', 'str', 'dd-mm-yyyy');
        $account_info = array();
        //$this->_models = new Accounts;
        $account_info = $this->_models->infoAccount();
        $arr_status = array('0' => 'Đang chờ xử lý', '1' => 'Đã duyệt', '2' => 'Đang chờ xử lý',);

        $param = array(
            'status' => (int) $status,
            'begin_createtime' => $begin_createtime,
            'end_createtime' => $end_createtime);

        $arry_Transactions = array();
        $models_download = new Download;
        $params = array(
            'id_account' => $account_info['id'],
            'status' => (int) $status,
            'begin_createtime' => $begin_createtime,
            'end_createtime' => $end_createtime
        );
        $arry_Transactions = $models_download->getDataByUsers($params);

        $this->render('index', array(
            'account_info' => $account_info,
            'transactions' => $arry_Transactions,
            'arr_status' => $arr_status,
            'get_data' => $param,
            'link_action' => Yii::app()->createUrl('tailieu/account/'),
        ));
    }

    public function actionHistoryupload() {
//        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/tailieu/css/bootstrap-datepicker.min.css');
//        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieu/js/bootstrap-datepicker.min.js', CClientScript::POS_END);
//        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieu/js/custom.js', CClientScript::POS_END);
        $status = ObjInput::get('status', 'int', 0);
        $begin_createtime = ObjInput::get('begin_createtime', 'str', 'dd-mm-yyyy');
        $end_createtime = ObjInput::get('end_createtime', 'str', 'dd-mm-yyyy');
        $account_info = array();
        //$this->_models = new Accounts;
        $account_info = $this->_models->infoAccount();
        $arr_status = array('2' => 'Đang chờ xử lý', '1' => 'Đã duyệt', '0' => 'Đang chờ xử lý',);

        $param = array(
            'account_id' => $account_info['id'],
            'status' => (int) $status,
            'begin_createtime' => $begin_createtime,
            'end_createtime' => $end_createtime);


        $models_product = new Product;
        //var_dump($param);
        $arry_product = $models_product->getDataByUsers($param);

        $this->render('history_upload', array(
            'account_info' => $account_info,
            'product' => $arry_product,
            'arr_status' => $arr_status,
            'get_data' => $param,
            'link_action' => Yii::app()->createUrl('tailieu/account/historyupload'),
        ));
    }

    public function actionHistorypoint() {
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/tailieuv3/css/design-rank.css?v=201907161079');
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/tailieuv3/css/recruit.css');
        
//        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieu/js/custom.js', CClientScript::POS_END);
        $type = ObjInput::get('type', 'int', 0);
        $begin_createtime = ObjInput::get('begin_createtime', 'str', 'dd-mm-yyyy');
        $end_createtime = ObjInput::get('end_createtime', 'str', 'dd-mm-yyyy');
        $account_info = array();
        //$this->_models = new Accounts;
        $account_info = $this->_models->infoAccount();

        $param = array(
            'id_account' => $account_info['id'],
            'type' => (int) $type,
            'begin_createtime' => $begin_createtime,
            'end_createtime' => $end_createtime);

        $arry_point = $this->_models->historyPoint($param);

        $this->render('history_point', array(
            'account_info' => $account_info,
            'combo_type' => Strings::combobox('type', $GLOBALS['TYPE_POINT'], $param['type'], '', 'class="ui-input"'),
            'product' => $arry_point,
            'arr_type' => $GLOBALS['TYPE_POINT'],
            'get_data' => $param,
            'link_action' => Yii::app()->createUrl('tailieu/account/historypoint'),
            'errors' => Yii::app()->user->getFlash('error'),
            'success' => Yii::app()->user->getFlash('success'),
        ));
    }

    public function actionUpload() {
        $info_account = $this->_models->infoAccount();
        $Cmod = new Categorydocument;
        $param = array(
            "title" => ObjInput::get("title", "str", ""),
            "desc" => ObjInput::get("desc", "str", ''),
            "status" => 2,
            "p_id" => time(),
            "tag" => ObjInput::get("tag", "str", ""),
            "keyword" => ObjInput::get("tag", "str", ""),
            "short" => ObjInput::get("short", "str", ""),
            "full" => ObjInput::get("full", "def", ""),
            "link_other" => ObjInput::get("link_other", "str", ""),
            "create_time" => time(),
            "proprice" => 0,
            "price" => ObjInput::get("price", "int", ""),
            'account_id' => $info_account['id'],
            'account_name' => $info_account["first_name"],
            "parent" => ObjInput::get("parent", "str", ""),
            "verifyCode" => ObjInput::get("verifyCode", "str", ""),
        );

        if (UPLOAD_PERMISSION == '0') {
            $this->setErrors('Chức năng upload đã khóa');
        } else {
            if (Yii::app()->request->isPostRequest) {
                if (!Validation::checkLength($param['title'], 1)) {
                    $this->setErrors('Bạn chưa nhập tiêu đề !');
                } else if (!Validation::checkLength($param['parent'], 1)) {
                    $this->setErrors('Bạn chưa chọn danh mục !');
                } else if (!Validation::checkLength($param['tag'], 4)) {
                    $this->setErrors('Từ khóa yêu cầu nhập lớn hơn 4 ký tự');
                } else if (!Validation::checkLength($param['desc'], 100)) {
                    $this->setErrors('Mô tả yêu cầu nhập lớn hơn 100 ký tự');
                } else if (!Validation::checkLength($param['verifyCode'], 1)) {
                    $this->setErrors('Bạn chưa nhập mã bảo mật !');
                } else {
                    $captcha = Yii::app()->getController()->createAction("captcha");
                    $code = $captcha->verifyCode;
                    if ($param['verifyCode'] <> $code) {
                        $this->setErrors('Mã bảo mật không chính xác !');
                    } else {
                        unset($param['verifyCode']);
                        if ($param['parent'] <> '') {
                            $arr = explode('|', $param['parent']);
                            if (count($arr) > 1) {
                                $param['sub_category_id'] = (int) $arr[0];
                                $param['category_id'] = (int) $arr[1];
                            } else
                                $param['category_id'] = (int) $arr[0];
                        }
                        unset($param['parent']);
                        $bug = 1;
                        if (isset($_FILES['file']) && $_FILES['file']['name'][0] != '') {
                            $file = $_FILES['file'];
                            $name = Strings::cut_char(Strings::remove_space(Strings::get_ascii($param['title'])), '30') . '_' . time();

                            $images = Upload::UploadMutil($file, IMG_PRODUCT, IMG_PRODUCT_THUMB, IMG_W, IMG_WT, IMG_HT, $name, true);

                            if (!$images) {
                                $this->setErrors('Ảnh sai định dạng hoặc có lỗi upload ảnh đại diện');
                                $this->redirect(Yii::app()->createUrl('tailieu/account/upload'));
                                exit();
                            }
                            $param['picture'] = $images;
                            $param['picture2'] = $images;
                        }
                        if (isset($_FILES['file_tailieu']) && $_FILES['file_tailieu']['size'] > 0) {
                            $path = './' . DIR_TAILIEU . date('mY') . '/';
                            $rs = SystemFile::uploadFile($_FILES['file_tailieu'], $path, time(), 10 * 1024);
                            if ($rs['error_message'] == '') {
                                $param['file'] = $rs['images'];
                            } else {
                                $bug = $rs['error_message'];
                            }
                        }

                        $ins = $this->_models->insertData($param);
                        if ($ins > 0) {
                            if ($bug == 1)
                                $this->setErrors('Thêm tài liệu thành công, xem tài liệu đã upload <a style="color:red;font-weight:bold;" href="' . SystemBase::buildUrl('tailieu/account/historyupload', array()) . '">tại đây</a>', 'success');
                            else
                                $this->setErrors('Thêm tài liệu thành công. Tuy nhiên ' . $bug);
                            $this->redirect(Yii::app()->createUrl('tailieu/account/upload'));
                        } else {
                            @unlink('./' . IMG_PRODUCT . str_replace("|", "", $param['picture']));
                            @unlink('./' . IMG_PRODUCT_THUMB . str_replace("|", "", $param['picture2']));
                            @unlink($path . $param['file']);
                            $this->setErrors('Có lỗi trong quá trình xử lý');
                        }
                    }
                }
            }
        }
        $this->render('upload', array(
            'errors' => Yii::app()->user->getFlash('error'),
            'success' => Yii::app()->user->getFlash('success'),
            'params' => $param,
            'combo_category' => $Cmod->getFullCategory_Option($param['parent']),
                )
        );
    }

    public function actionUpload_Edit() {
        $info_account = $this->_models->infoAccount();
        $id = ObjInput::get('id', 'int', 0);
        $param = $this->_models->getProductById($id, $info_account);
        if (!$param) {
            $this->redirect(SystemBase::buildUrl('tailieu/account/historyupload', array()));
        }
        $parent = ($param['sub_category_id'] != '0' ? $param['sub_category_id'] . '|' . $param['category_id'] : $param['category_id']);
        $Cmod = new Categorydocument;
        $link_tl = '';
        if ($param['file'] <> '') {

            $a = explode('_', $param['file']);
            $b = explode('.', $a[1]);
            $link_tl = './' . DIR_TAILIEU . date('mY', $b[0]) . '/' . $param['file'];
        }
        $link_img = './' . IMG_PRODUCT . $param['picture'];
        $link_img_thumbs = './' . IMG_PRODUCT_THUMB . $param['picture2'];
        if (UPLOAD_PERMISSION == '0') {
            $this->setErrors('Chức năng upload đã khóa');
        } else {
            if (Yii::app()->request->isPostRequest) {
                $param = array();
                $param = array(
                    "title" => ObjInput::get("title", "str", ""),
                    "desc" => ObjInput::get("desc", "str", ''),
                    "status" => 2,
                    "p_id" => time(),
                    "tag" => ObjInput::get("tag", "str", ""),
                    "keyword" => ObjInput::get("tag", "str", ""),
                    "short" => ObjInput::get("short", "str", ""),
                    "full" => ObjInput::get("full", "def", ""),
                    "link_other" => ObjInput::get("link_other", "str", ""),
                    "create_time" => time(),
                    "proprice" => 0,
                    "price" => 0,
                    'account_id' => $info_account['id'],
                    'account_name' => $info_account["first_name"],
                    "parent" => ObjInput::get("parent", "str", ""),
                    "verifyCode" => ObjInput::get("verifyCode", "str", ""),
                );
                $parent = $param['parent'];
                if (!Validation::checkLength($param['title'], 1)) {
                    $this->setErrors('Bạn chưa nhập tiêu đề !');
                    $this->redirect(SystemBase::buildUrl('tailieu/account/upload_edit', array('id' => $id)));
                } else if (!Validation::checkLength($param['parent'], 1)) {
                    $this->setErrors('Bạn chưa chọn danh mục !');
                    $this->redirect(SystemBase::buildUrl('tailieu/account/upload_edit', array('id' => $id)));
                } else if (!Validation::checkLength($param['tag'], 4)) {
                    $this->setErrors('Từ khóa yêu cầu nhập lớn hơn 4 ký tự');
                    $this->redirect(SystemBase::buildUrl('tailieu/account/upload_edit', array('id' => $id)));
                } else if (!Validation::checkLength($param['desc'], 100)) {
                    $this->setErrors('Mô tả yêu cầu nhập lớn hơn 100 ký tự');
                    $this->redirect(SystemBase::buildUrl('tailieu/account/upload_edit', array('id' => $id)));
                } else if (!Validation::checkLength($param['verifyCode'], 1)) {
                    $this->setErrors('Bạn chưa nhập mã bảo mật !');
                    $this->redirect(SystemBase::buildUrl('tailieu/account/upload_edit', array('id' => $id)));
                } else {
                    $captcha = Yii::app()->getController()->createAction("captcha");
                    $code = $captcha->verifyCode;
                    if ($param['verifyCode'] <> $code) {
                        $this->setErrors('Mã bảo mật không chính xác !');
                        $this->redirect(SystemBase::buildUrl('tailieu/account/upload_edit', array('id' => $id)));
                    } else {
                        unset($param['verifyCode']);
                        if ($param['parent'] <> '') {
                            $arr = explode('|', $param['parent']);
                            if (count($arr) > 1) {
                                $param['sub_category_id'] = (int) $arr[0];
                                $param['category_id'] = (int) $arr[1];
                            } else
                                $param['category_id'] = (int) $arr[0];
                        }
                        unset($param['parent']);
                        $bug = 1;
                        if (isset($_FILES['file']) && $_FILES['file']['name'][0] != '') {
                            $file = $_FILES['file'];
                            $name = Strings::cut_char(Strings::remove_space(Strings::get_ascii($param['title'])), '30') . '_' . time();

                            $images = Upload::UploadMutil($file, IMG_PRODUCT, IMG_PRODUCT_THUMB, IMG_W, IMG_WT, IMG_HT, $name);
                            $param['picture'] = $images;
                            $param['picture2'] = $images;
                            @unlink($link_img);
                            @unlink($link_img_thumbs);
                        }
                        if (isset($_FILES['file_tailieu']) && $_FILES['file_tailieu']['size'] > 0) {
                            $path = './' . DIR_TAILIEU . date('mY') . '/';
                            $rs = SystemFile::uploadFile($_FILES['file_tailieu'], $path, time(), 10 * 1024);

                            if ($rs['error_message'] == '') {
                                $param['file'] = $rs['images'];
                                @unlink($link_tl);
                            } else {
                                $bug = $rs['error_message'];
                            }
                        }

                        $ins = $this->_models->updateProduct($param, $id);
                        if ($ins > 0) {
                            if ($bug == 1)
                                $this->setErrors('Thêm tài liệu thành công', 'success');
                            else
                                $this->setErrors('Thêm tài liệu thành công. Tuy nhiên ' . $bug);
                            $this->redirect(SystemBase::buildUrl('tailieu/account/upload_edit', array('id' => $id)));
                        } else {
                            @unlink('./' . IMG_PRODUCT . str_replace("|", "", $param['picture']));
                            @unlink('./' . IMG_PRODUCT_THUMB . str_replace("|", "", $param['picture2']));
                            @unlink($path . $param['file']);
                            $this->setErrors('Có lỗi trong quá trình xử lý');
                            $this->redirect(SystemBase::buildUrl('tailieu/account/upload_edit', array('id' => $id)));
                        }
                    }
                }
            }
        }
        $this->render('upload', array(
            'link_images_full' => Yii::app()->request->baseUrl . DS . IMG_PRODUCT,
            'link_images' => Yii::app()->request->baseUrl . DS . IMG_PRODUCT_THUMB,
            'errors' => Yii::app()->user->getFlash('error'),
            'success' => Yii::app()->user->getFlash('success'),
            'params' => $param,
            'combo_category' => $Cmod->getFullCategory_Option($parent),
                )
        );
    }

    public function actionChangepass() {

        $params = array(
            'password_old' => ObjInput::get('password_old', 'str', ''),
            'password' => ObjInput::get('password', 'str', ''),
            'repassword' => ObjInput::get('repassword', 'str', ''),
            'verifyCode' => ObjInput::get('verifyCode', 'str', '')
        );

        if (Yii::app()->request->isPostRequest) {
            $this->_onChangPassSubmit($params);
        }
        $this->render('changepass', array(
            'errors' => Yii::app()->user->getFlash('error'),
            'success' => Yii::app()->user->getFlash('success')));
    }

    public function actionChangeinfo() {

        $acc_info = $this->_models->getInfoAccountRealtime();
        $acc_info = DataHelper::selectOne('accounts', "*", "id='" . (int) $acc_info['id'] . "'");
        $params = array(
            'last_name' => ObjInput::get('lastName', 'str', $acc_info['last_name']),
            'first_name' => ObjInput::get('firstName', 'str', $acc_info['first_name']),
            'dob' => ObjInput::get('dob', 'str', $acc_info['dob']),
            //'id_no' => ObjInput::get('id_no', 'str', ''),
            'gender' => ObjInput::get('gender', 'str', $acc_info['gender']),
            'mobile_phone' => ObjInput::get('mobile_phone', 'str', $acc_info['mobile_phone']),
			'email_other' => ObjInput::get('email_other', 'str', $acc_info['email_other']),
            'verifyCode' => ObjInput::get('verifyCode', 'str', ''),
        );
        if (Yii::app()->request->isPostRequest) {

            $this->_onUpdateInfoSubmit($params, $acc_info['id']);
        }

        $this->render('changeinfo', array(
            'params' => $acc_info,
            'errors' => Yii::app()->user->getFlash('error'),
            'success' => Yii::app()->user->getFlash('success'),
            'data'=> (new Accounts)->getInfoAccountRealtime(),
        ));
    }

    private function _onUpdateInfoSubmit($params, $_id) {
		$params = array(
            'last_name' => ObjInput::get('lastName', 'str', ''),
            'first_name' => ObjInput::get('firstName', 'str', ''),
            'dob' => ObjInput::get('dob', 'str', ''),
            //'id_no' => ObjInput::get('id_no', 'str', ''),
            'gender' => ObjInput::get('gender', 'str', ''),
            'mobile_phone' => ObjInput::get('mobile_phone', 'str', ''),
			'email_other' => ObjInput::get('email_other', 'str', ''),
            'verifyCode' => ObjInput::get('verifyCode', 'str', ''),
        );
        if ($params['last_name'] == '' || $params['first_name'] == '') {
            $this->setErrors('Bạn chưa nhập đầy đủ Họ và Tên !');
            return false;
        }
        if (!Validation::checkLength($params['dob'], 1)) {
            $this->setErrors('Bạn chưa nhập Ngày sinh !');
            return false;
        } elseif (!Validation::isDate($params['dob'])) {
            $this->setErrors('Ngày sinh không đúng định dạng !');
            return false;
        }

        //if (!Validation::checkLength($params['id_no'], 1)) {
         //   $this->setErrors('Bạn chưa nhập ID NO !');
        //    return false;
        //}

        if (!Validation::checkLength($params['gender'], 1)) {
            $this->setErrors('Bạn chưa chọn giới tính !');
            return false;
        }


        if (!Validation::checkLength($params['mobile_phone'], 1)) {
            $this->setErrors('Bạn chưa nhập điện thoại !');
            return false;
        } else
        if (!Validation::isMobile($params['mobile_phone'])) {
            $this->setErrors('Bạn nhập điện thoại không đúng !');
            return false;
        }
		 if (!Validation::checkLength($params['email_other'], 1)) {
            $this->setErrors('Bạn chưa nhập Email !');
            return false;
        } else
        if (!Validation::isEmail($params['email_other'])) {
            $this->setErrors('Bạn nhập email không đúng !');
            return false;
        }
        if (!Validation::checkLength($params['verifyCode'], 1)) {
            $this->setErrors('Bạn chưa nhập mã bảo mật !');
            return false;
        } else {
            $captcha = Yii::app()->getController()->createAction("captcha");
            $code = $captcha->verifyCode;
            if ($params['verifyCode'] <> $code) {
                $this->setErrors('Mã bảo mật không chính xác !');
                return false;
            } else {
                $account_info = $this->_models->infoAccount();
                unset($params['verifyCode']);

                $params['update_time'] = time();
                $params['dob'] = SystemDateTime::date_to_timestamp($params['dob']);
                $re = $this->_models->updateData($params, "id='" . $_id . "'");
                if ($re > 0) {

                    Accounts::performInfoAccount($params);
                    echo Strings::alert("Bạn cập nhật thông tin thành công.", Yii::app()->createUrl('/tailieu/account/changeinfo'));
                    return false;
                    // $this->redirect($url);
                } else {
                    $this->setErrors('Quá trình cập nhật thông tin bị lỗi. Vui lòng thử lại');
                    return false;
                }
            }
        }
    }

    private function _onChangPassSubmit($params) {
        $info = $this->_models->getInfoAccountRealtime();
        if (!Validation::checkLength($params['password_old'], 1)) {
            $this->setErrors('Bạn chưa nhập mật khẩu hiện tại!');
            return false;
        }

        if (!Validation::checkLength($params['password'], 1)) {
            $this->setErrors('Bạn chưa nhập mật khẩu mới!');
            return false;
        } elseif (!Validation::isPassword($params['password'])) {
            $this->setErrors('Mật khẩu phải từ  6 - 20 kí tự !');
            return false;
        }

        if (!Validation::checkLength($params['repassword'], 1)) {
            $this->setErrors('Bạn chưa nhập mật khẩu xác nhận mới!');
            return false;
        }
        if ($params['password'] !== $params['repassword']) {
            $this->setErrors('Xác nhận mật khẩu  mới không trùng mật khẩu mới đã nhập !');
            return false;
        } elseif ($info['password'] != md5($params['password_old'])) {
            $this->setErrors('Mật khẩu hiện tại không đúng !');
            return false;
        }
        if (!Validation::checkLength($params['verifyCode'], 1)) {
            $this->setErrors('Bạn chưa nhập mã bảo mật !');
            return false;
        } else {
            $captcha = Yii::app()->getController()->createAction("captcha");
            $code = $captcha->verifyCode;
            if ($params['verifyCode'] <> $code) {
                $this->setErrors('Mã bảo mật không chính xác !');
                return false;
            } else {
                unset($params['repassword']);
                unset($params['password_old']);
                unset($params['verifyCode']);

                $params_update['update_time'] = time();

                $params_update['password'] = md5($params['password']);
                $f = $this->_models->updateData($params_update, ' id = ' . $info['id']);
                if ($f) {
                    Yii::app()->user->logout();
                    $this->redirect(Yii::app()->createUrl('tailieu/login'));
                }
            }
        }
    }

    public function actionFavorite() {
//        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/tailieu/css/bootstrap-datepicker.min.css');
//        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieu/js/bootstrap-datepicker.min.js', CClientScript::POS_END);
//        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieu/js/custom.js', CClientScript::POS_END);
        $info = $this->_models->getInfoAccountRealtime();
		if(!$info) {
			return $this->redirect(Yii::app()->createUrl('tailieu/login'));
		}
		$like = ObjInput::get('like', 'int', '');
        $delete = ObjInput::get('delete', 'int', '');
        if ($like > 0) {
            $this->_addFavorite($like);
        } elseif ($delete > 0) {
            $this->_removeFavorite($delete);
        }
        $infoAccount = $this->_models->infoAccount();
        $favorite = Paging::getDataForFunction('add_favorite', '*', 'accounts_id = "' . $infoAccount['id'] . '"', 'time_created DESC');
        $data['data'] = false;
        if ($favorite['data']) {
            foreach ($favorite['data'] as $key => $value) {
                $productId[$value['product_id']] = $value['product_id'];
            }
            $data['data'] = DataHelper::selectAll('products', '*', 'id in (' . implode(',', $productId) . ')');
        }
        $data['pageHtml'] = $favorite['pageHtml'];
        $status = ObjInput::get('status', 'int', 0);
        $begin_createtime = ObjInput::get('begin_createtime', 'str', 'dd-mm-yyyy');
        $end_createtime = ObjInput::get('end_createtime', 'str', 'dd-mm-yyyy');
        $account_info = array();
        $account_info = $this->_models->infoAccount();
        $this->render('favorite', array(
            'product' => $data,
            'errors' => Yii::app()->user->getFlash('error'),
            'success' => Yii::app()->user->getFlash('success'),
            'link_action' => Yii::app()->createUrl('tailieu/account/historyupload'),
        ));
    }

    public function _addFavorite($id) {
        $product = new Product;

        $product = $product->getDetail($id);

        if ($product) {
            $models = new Accounts;
            $infoAccount = $this->_models->infoAccount();

            $result = DataHelper::selectOne('add_favorite', '*', 'product_id = "' . $id . '" AND accounts_id = "' . $infoAccount['id'] . '"');
            if ($result) {
                $this->setErrors('Tài liệu đã được bạn thêm trước đó');
                $this->redirect(Yii::app()->createUrl('tailieu/account/favorite'));
            } else {
                $data = array(
                    'accounts_id' => $infoAccount['id'],
                    'product_id' => $id,
                    'time_created' => time(),
                );
                $result = DataHelper::insert('add_favorite', $data);
                if ($result) {
                    $this->setErrors('Bạn vừa thêm vào ưa thích một tài liệu', 'success');
                } else {
                    $this->setErrors('Có lỗi trong quá trình thêm');
                }
                $this->redirect(Yii::app()->createUrl('tailieu/account/favorite'));
            }
        }
        $this->redirect(Yii::app()->createUrl('tailieu/home'));
    }

    public function _removeFavorite($id) {
        $models = new Accounts;
        $infoAccount = $this->_models->infoAccount();
        $result = DataHelper::selectOne('add_favorite', '*', 'product_id = "' . $id . '" AND accounts_id = "' . $infoAccount['id'] . '"');
        if (!$result) {
            $this->setErrors('Bạn chưa add tài liệu này vào mục ưa thích');
            $this->redirect(Yii::app()->createUrl('tailieu/account/favorite'));
        } else {
            $result = DataHelper::delete('add_favorite', 'product_id = "' . $id . '" AND accounts_id = "' . $infoAccount['id'] . '"');
            if ($result) {
                $this->setErrors('Bạn vừa xóa một tài liệu khỏi mục ưa thích của mình', 'success');
            } else {
                $this->setErrors('Có lỗi trong quá trình thêm');
            }
            $this->redirect(Yii::app()->createUrl('tailieu/account/favorite'));
        }

        $this->redirect(Yii::app()->createUrl('tailieu/home'));
    }

    public function actionMember($id) {
        $this->layout = 'account2';
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/tailieuv3/css/cate_designer.css');
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieuv3/js/cate_designer.js', CClientScript::POS_END);

        $id = (int) $id;
        $data = DataHelper::selectOne('accounts', "*", "id='" . $id . "' and active_status = 1");

        if ($data) {
            $conditions = 'status = 1 and account_id = ' . $id;
            $output = Paging::getDataForFunction('products', 'price,proprice,title,id,create_time,picture,sub_category_id,category_id,short,count,count_down,tag,picture', $conditions, 'id desc', '28');
            $total_free = DataHelper::count('products', $conditions . ' and price = 0');
            $total_fee = DataHelper::count('products', $conditions . ' and price <> 0');

            return $this->render('member', array(
                        'outputs' => $output,
                        'data' => $data,
                        'total_fee' => $total_fee,
                        'total_free' => $total_free,
            ));
        }
    }

}
