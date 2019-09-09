<?php

class DownloadController extends TailieuController {

    public $_models;

    public function filters() {
        return array('accessControl', // perform access control for CRUD operations
        );
    }

    public function accessRules() {
        return TRoles::getAccessRules($this->id);
    }

    public function init() {
        $id = ObjInput::get('id', 'int', 0);
        $title = ObjInput::get('title', 'str', '');
        if ($id <> 0 && $title <> '') {
            Session::set('returnUrl', SystemBase::buildUrl('tailieu/download', array('id' => $id, 'title' => $title)));
        }
        
        $this->_models = new Download;
        
        parent::init();
    }

    public function actionIndex() {
        $id = ObjInput::get('id', 'int', 0);
        if ($id > 0) {
            $product = new Product;
            $product = $product->getDetail($id);
            if ($product) {
                $models = new Accounts;
                $infoAccount = $models->getInfoAccountRealtime();
				
				if(!$infoAccount) {
					
            $this->redirect(ROOT_URL);
        }
        $in = DataHelper::selectOne('accounts', "*", "id='" . (int) $infoAccount['id'] . "'");
		
        if(!$in['email'] || !$in['mobile_phone']) {
            $this->setErrors('Bạn chưa cập nhật email và số điện thoại');
			$this->redirect(Yii::app()->createUrl('tailieu/account/changeinfo'));
            
        }
			
                if ($product['proprice'] > 0)
                    $price = $product['proprice'];
                else
                    $price = $product['price'];
                $flag = 1;
                if (!$product['price']) {
                    $flag = 1;
                    $token = md5($id . $infoAccount['email'] . Yii::app()->request->getUserHostAddress() . '_ckk');
                    Yii::app()->session['token'] = $token;
                    Yii::app()->session['token_time_' . $id] = time();
                    Yii::app()->session['product'] = $product;
                    Yii::app()->session['total_pay'] = $price;
                    $url = SystemBase::buildUrl('tailieu/download/confirm', array('id' => $id, 'token' => $token));
                    echo "<script type=\"text/javascript\">
       //window.open('Location:".$url."', '_blank');
          // header('Location:".$url."');
               window.location= '".$url."';
          // setTimeout(function(){ window.history.back(); }, 3000);
    </script>";
                    die();
                }else if ($infoAccount['point'] >= $price) { // Point đủ thanh toán
                    $flag = 1;
                } else   { // Point không đủ thanh toán
                    $flag = 0;
                }
				
				if(isset($infoAccount['id']) && $infoAccount['id'] &&  $in['type'] == 2) {
					$time  = time();
					if($time >= $in['time_vip_start'] && $time <= $in['time_vip_end']) {
							$flag = 1;
					}else {
						$flag = 2;//het han vip hoac cau hinh admin sai deu la het han vip
					}	
				}
				
				
                if ($flag === 1) {
                    if (Yii::app()->request->isPostRequest) {
                        $verifyCode = ObjInput::get('verifyCode', 'str', '', 'POST');
                        $captcha = Yii::app()->getController()->createAction("captcha");
                        $code = $captcha->verifyCode;

                        if ($verifyCode <> $code) {
                            $this->setErrors('Mã xác nhận không chính xác');
                        } else {
                            $token = md5($id . $infoAccount['email'] . Yii::app()->request->getUserHostAddress() . '_ckk');
                            Yii::app()->session['token'] = $token;
                            Yii::app()->session['token_time_' . $id] = time();
                            //  Yii::app()->session['link_download'] = $product['link_other'];
                            Yii::app()->session['product'] = $product;
                            Yii::app()->session['total_pay'] = $price;
                            $this->redirect(SystemBase::buildUrl('tailieu/download/confirm', array('id' => $id, 'token' => $token)));
                        }
                    }
                }
                $this->render('index', array(
                    'product' => $product,
                    'flag' => $flag,
                    'errors' => $this->_models->_getError(),
                    'success' => $this->_models->_getSuccess(), 'in' => $infoAccount
                ));
            } else {
                $this->redirect(Yii::app()->createUrl('tailieu/home'));
            }
        } else {
            $this->redirect(Yii::app()->createUrl('tailieu/home'));
        }
    }

    public function actionConfirm() {
        $models = new Accounts;
        $infoAccount = $models->getInfoAccountRealtime();
        
        
        $id = ObjInput::get('id', 'int', 0);
        $token = ObjInput::get('token', 'str', '');
        $token_make = md5($id . $infoAccount['email'] . Yii::app()->request->getUserHostAddress() . '_ckk');
        if ($token === Yii::app()->session['token'] && $token === $token_make) {
            $token_time_out = Yii::app()->session['token_time_' . $id] + SESSION_DOWNLOAD_TIMEOUT;

            if ($token_time_out > time()) {
                if (isset(Yii::app()->session['total_pay']) && isset(Yii::app()->session['product'])) {
                    $product = Yii::app()->session['product'];
                    if ($product['link_other'] && $product['link_other'] != '') {
                        $timeBegin = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                        $timeEnd = mktime(23, 58, 59, date('m'), date('d'), date('Y'));
                        $timecountDown = time() - ( 60 * 60 * 3);
                        $downloadCheck = DataHelper::count('download', 'title = "' . $product['title'] . '" and time_download >= ' . $timeBegin . ' and time_download <= ' . $timeEnd . '');
                        if ($downloadCheck > 0 && $downloadCheck < 3) {
                            $fs = $models->minusPoint((int) Yii::app()->session['total_pay'], $infoAccount['id'], $infoAccount['point'], $infoAccount['count_down'], 'Trừ point khi download tài liệu: ' . $product['title'], false);
                            $data_insert = array(
                                'title' => $product['title'],
                                'id_product' => $product['id'],
                                'id_account' => $infoAccount['id'],
                                'category_id' => $product['category_id'],
                                'price' => Yii::app()->session['total_pay'],
                                'picture' => $product['picture'],
                                'short' => $product['short'],
                                'status' => 1,
                                'count' => $product['count_down'] + 1,
                                'time_download' => time()
                            );

                            // Lưu lịch sử download
                            $ins = $this->_models->insertData($data_insert);
                            if (preg_match('@id=([^=]*)@', $product['link_other'], $match))
                                $link_download = 'https://docs.google.com/uc?export=download&id=' . $match[1];
                            else {
                                $link_download = $product['link_other'];
                            }
                            self::removeSessionDown();
                            $this->redirect($link_download);
                        } else {
                            //perform -point
                            $fs = $models->minusPoint((int) Yii::app()->session['total_pay'], $infoAccount['id'], $infoAccount['point'], $infoAccount['count_down'], 'Trừ point khi download tài liệu: ' . $product['title']);
                            if ($fs) {
                                //Cập nhật point cho chủ nhân của tài liệu
                                if ($product["account_id"] != '0' && POINT_ADD_DOWNLOAD != '0' && $product["account_id"] != $infoAccount['id']) {
                                    $POINT_ADD_DOWNLOAD = (int) ((POINT_ADD_DOWNLOAD * (int) Yii::app()->session['total_pay']) / 100);

                                    $addPoint = $models->addPoint($POINT_ADD_DOWNLOAD, $product["account_id"]);
                                    if ($addPoint) {
                                        DataHelper::insert('history_point', array('point' => $POINT_ADD_DOWNLOAD, 'id_account' => $product["account_id"], 'desc' => 'CỘNG POINT VÀO TÀI KHOẢN - TÀI LIỆU: [' . $product['title'] . '] ĐƯỢC DOWNLOAD', 'create_time' => time(), 'type' => '4'));
                                    }
                                }
                                // Cập nhật số lần download cho sản phẩm
                                $product_models = new Product;
                                $product_models->updateData(array('count_down' => $product['count_down'] + 1), 'id=' . $product['id']);

                                $data_insert = array(
                                    'title' => $product['title'],
                                    'id_product' => $product['id'],
                                    'id_account' => $infoAccount['id'],
                                    'category_id' => $product['category_id'],
                                    'price' => Yii::app()->session['total_pay'],
                                    'picture' => $product['picture'],
                                    'short' => $product['short'],
                                    'status' => 1,
                                    'count' => $product['count_down'] + 1,
                                    'time_download' => time()
                                );

                                // Lưu lịch sử download
                                $ins = $this->_models->insertData($data_insert);
                                //redirect link

                                if (preg_match('@id=([^=]*)@', $product['link_other'], $match))
                                    $link_download = 'https://docs.google.com/uc?export=download&id=' . $match[1];
                                else {
                                    $link_download = $product['link_other'];
                                }
                                self::removeSessionDown();
                                $this->redirect($link_download);
                            } else {
                                self::removeSessionDown();
                                $this->setErrors('Cố lỗi quá trình xử lý cập nhật point');
                            }
                        }
                    } else {
                        self::removeSessionDown();
                        $this->setErrors('Thông tin download tài liệu ở dưới BÀI VIẾT hoặc KHÔNG TỒN TẠI!');
                    }
                } else {
                    self::removeSessionDown();
                    $this->setErrors('Thông tin tài liệu không tồn tại. Vui lòng liên hệ BQT để được hỗ trợ!');
                }
                //$this->redirect( Yii::app()->session['link_download']);
            } else {

                self::removeSessionDown();
                $this->setErrors('Thời hạn download tài liệu đã hết.');
            }
            //echo Yii::app()->session['token'];
            // echo Yii::app()->session['token_time_' . $id];
        } else {
            self::removeSessionDown();
            $this->setErrors('Token không tồn tại.');
            $this->redirect(Yii::app()->createUrl('tailieu/download'));
        }
        $this->render('confirm', array('errors' => $this->_models->_getError(),
            'success' => $this->_models->_getSuccess()));
    }

    private static function removeSessionDown() {
        $id = ObjInput::get('id', 'int', 0);
        unset($_SESSION['token']);
        unset($_SESSION['token_time_' . $id]);
        unset($_SESSION['product']);
        unset($_SESSION['total_pay']);
    }

}
