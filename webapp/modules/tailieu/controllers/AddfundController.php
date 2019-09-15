<?php

include_once ROOT_PATH . DS . 'webapp/components/libs/NL_Checkoutv3.php';
include_once ROOT_PATH . DS . 'vendor/autoload.php';

class AddfundController extends TailieuController {

    private $_model;
    protected $clientIdPay = 'Ae9w6ZxNFip11FCJrfq8aXyJtqxqZBAIpXQY4H6jEbGBIcpFptl7YmpHiCCxC0EiGXAGegFEUigvbsg0';
    protected $serectPay = 'EM7NRfFkbuB6vHajaLr5iv9E9D-Y4-d7G38Oec9dCA80pZoGgdRSMo_XT3MrhSTykuWJOrglgYCzWmvn';

    public function filters() {
        return array('accessControl', // perform access control for CRUD operations
        );
    }

    // public function accessRules() {
    //     return TRoles::getAccessRules($this->id);
    // }

    public function init() {
        $this->_model = new Addfund;
        parent::init();
    }

    public function actionIndex() {
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/tailieu/js/nganluong.apps.mcflow.js');
        $info = Accounts::infoAccount();
        var_dump($info);die;
        $this->_model->attributes = $_POST;
        if (Yii::app()->request->isPostRequest && $this->_model->validate()) {
            $captcha = Yii::app()->getController()->createAction("captcha");
            $code = $captcha->verifyCode;
            if (ObjInput::get('verifyCode', 'str', '') <> $code) {
                $this->setErrors('Mã bảo mật không chính xác !');
            } else {

                $txtSoSeri = ObjInput::get('txtSoSeri', 'str', '');
                $txtSoPin = ObjInput::get('txtSoPin', 'str', '');
                $select_method = ObjInput::get('select_method', 'str', '');
                $nganluong = new MobiCard;
                $rs = new Result();
                if (!$info['id']) {
                    $this->redirect(Yii::app()->createUrl('tailieu/login'));
                }
                $ref_code = $info['id'] . '_' . time();
                $rs = $nganluong->CardPay($txtSoPin, $txtSoSeri, $select_method, $ref_code, "", "", "");

                if ($rs->error_code == '00') {
                    $menhgia = $rs->card_amount;

                    if ($GLOBALS['POINT'][$menhgia]) {
                        $point = $GLOBALS['POINT'][$menhgia];
                        $f = Accounts::addPoint($point);
                        if ($f) {
                            Addfund:: addHistory($point, $info, 'Nạp point qua Thẻ cào: ' . 'Mã thẻ: ' . $rs->pin_card . ', serial: ' . $rs->card_amount . ', Mệnh giá: ' . $rs->card_amount . ', Loại thẻ: ' . $rs->type_card, $ref_code, 1);
                            $this->setErrors('Bạn nạp ' . $point . ' point thành công', 'success');
                        } else {
                            Addfund:: addHistory($point, $info, 'Có lỗi: Nạp thẻ thành công, cập nhật point bị lỗi ' . 'Mã thẻ: ' . $rs->pin_card . ', serial: ' . $rs->card_amount . ', Mệnh giá: ' . $rs->card_amount . ', Loại thẻ: ' . $rs->type_card, $ref_code, 2);
                            $this->setErrors('Có lỗi: Nạp thẻ thành công, cập nhật point bị lỗi');
                        }
                    } else {
                        Addfund:: addHistory($point, $info, 'Có lỗi: Nạp thẻ thành công, mệnh giá thẻ chưa được cấu hình ' . 'Mã thẻ: ' . $rs->pin_card . ', serial: ' . $rs->card_amount . ', Mệnh giá: ' . $rs->card_amount . ', Loại thẻ: ' . $rs->type_card, $ref_code, 2);
                        $this->setErrors('Có lỗi: Nạp thẻ thành công, mệnh giá thẻ chưa được cấu hình. Vui lòng liên hệ BQT.');
                    }
                } else {
                    $this->setErrors($rs->error_message);
                }
            }
        } else {
            $this->setErrors($this->_model->getErrorForm());
        }
        $accountU = new Accounts;
        $accountUD = $accountU->getInfoAccountRealtime();
        $this->render('index', array(
            'errors' => Yii::app()->user->getFlash('error'),
            'success' => Yii::app()->user->getFlash('success'),
            'link_checkout' => $this->_buildLinkCheckoutNL($info),
            'template_card' => $this->getViewPath() . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR . 'card.tpl',
            'template_atm' => $this->getViewPath() . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR . 'atm.tpl',
            'template_balance' => $this->getViewPath() . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR . 'balance.tpl',
            'template_paypal' => $this->getViewPath() . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR . 'paypal.tpl',
            'template_chuyenkhoan' => $this->getViewPath() . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR . 'chuyenkhoan.tpl',
            'CARD' => 'none',
            'BALANCE' => 'none',
            'CHUYENKHOAN' => 'none',
            'ATM' => 'block',
            'PAYPAL' => 'none',
            'users_' => $accountUD,
        ));
    }

    public function actionConfirm() {
        self::writeFileLog('nganluong.bin', json_encode($_REQUEST));
        if (ObjInput::get('token_code', 'str', '') == '') {
            $this->redirect(SystemBase::buildUrl('addfund/', array()));
        }
        $info = Accounts::infoAccount();
        $obj = new NL_MicroCheckout(MERCHANT_ID, MERCHANT_PASSWORD, 'https://www.nganluong.vn/micro_checkout_api.php?wsdl');
        if ($obj->checkReturnUrlAuto()) {
            $inputs = array(
                'token' => $obj->getTokenCode(), //$token_code,
            );
            $result = $obj->getExpressCheckout($inputs);
            if ($result != false) {
                if ($result['result_code'] != '00') {
                    $this->setErrors('Mã lỗi ' . $result['result_code'] . ' (' . $result['result_description'] . ') ');
                } else {
                    $data = false;
                    $data = Addfund::getHistoryByToken(ObjInput::get('token_code', 'str', ''));
                    if (!$data) {
                        if ($result["card_amount"] <> '') {
                            $point = $result["card_amount"] * CHANGE_POINT;
                        } else {
                            $point = $result["amount"] * CHANGE_POINT;
                        }
                        $desc = '';
                        foreach ($result as $k => $s) {
                            if ($s <> '') {
                                $desc .= $s . ' | ';
                            }
                        }
                        $f = Accounts::addPoint($point);
                        if ($f) {
                            Addfund:: addHistory($point, $info, $desc, ObjInput::get('token_code', 'str', ''), 1);
                            $this->setErrors('Bạn nạp ' . $point . ' point thành công', 'success');
                        } else {
                            Addfund:: addHistory($point, $info, 'Có lỗi: Nạp tiền thành công, cập nhật point bị lỗi' . $desc, ObjInput::get('token_code', 'str', ''), 2);
                            $this->setErrors('Có lỗi: Nạp tiền thành công, cập nhật point bị lỗi');
                        }
                    } else {
                        if ($data['status'] == '1') {
                            $f = Accounts::addPoint($data['point']);
                            Addfund::updateHistory(array('status' => 1), 'id = ' . $point['id']);
                        } else {
                            $this->setErrors('Có lỗi: giao dịch đã tồn tại trong hệ thống');
                        }
                    }
                }
            } else {
                $this->setErrors('Lỗi kết nối tới cổng thanh toán Ngân Lượng');
            }
        } else {
            $this->setErrors('Tham số truyền không đúng');
        }
        $this->render('confirm', array(
            'errors' => Yii::app()->user->getFlash('error'),
            'success' => Yii::app()->user->getFlash('success'),
            'link_addfund' => SystemBase::buildUrl('tailieu/addfund/', array()),
        ));
    }

    private function _buildLinkCheckoutNL($info) {
        $inputs = array(
            'receiver' => EMAIL_NGANLUONG,
            'order_code' => 'NAPTIEN_' . $info['id'],
            'return_url' => SystemBase::buildUrl('tailieu/addfund/confirm', array()),
            'cancel_url' => SystemBase::buildUrl('tailieu/', array()),
            'language' => 'vn'
        );
        $link_checkout = '';
        $obj = new NL_MicroCheckout(MERCHANT_ID, MERCHANT_PASSWORD, 'https://www.nganluong.vn/micro_checkout_api.php?wsdl');
        $result = $obj->setExpressCheckoutDeposit($inputs);
        if ($result != false) {
            if ($result['result_code'] == '00') {
                $link_checkout = $result['link_checkout'];
                $link_checkout = str_replace('micro_checkout.php?token=', 'index.php?portal=checkout&page=micro_checkout&token_code=', $link_checkout);
            } else {

                $this->setErrors('Ma loi ' . $result['result_code'] . ' (' . $result['result_description'] . ') ');
                return false;
            }
        } else {
            $this->setErrors('Lỗi kết nối với NgânLượng.vn');
            return false;
        }
        return $link_checkout;
    }

    static function writeFileLog($file_name, $data) {
        $file_name = ROOT_PATH . '/#logs/' . date('d-m-Y') . $file_name;
        $fp = fopen($file_name, 'a');
        if ($fp) {
            $line = date("H:i, d/m/Y:  ", time()) . $data . " \n";
            fwrite($fp, $line);
            fclose($fp);

            chmod($file_name, 0777);  //changed to add the zero
        }
    }

    public function actionBuyCard() {
        $obj = new FormValidation();
        $data = '';
        $error = 'Lỗi không xác định';
        $obj = new FormValidation();

        if ($obj->onSubmit('buycard')) {
            $data = $this->_onSubmitBuycard();
            $error = $this->getError();
        } elseif ($obj->onSubmit('buyatm')) {
            $data = $this->_onSubmitBuyATM();
            $error = $this->getError();
        } elseif ($obj->onSubmit('buybalance')) {
            $data = $this->_onSubmitBalance();
            $error = $this->getError();
        } elseif ($obj->onSubmit('buyPayPal')) {
            $data = $this->_onSubmitPayPal();
            $error = $this->getError();
        } elseif (ObjInput::get('getcaptra', 'str', '')) {
            $error = '';
            $data = $this->widget('CCaptcha', array('id' => 'ccaptcha'), true);
        }
        echo json_encode(array('error' => $error, 'data' => $data));
        die();
    }

    public function getError() {
        return Yii::app()->user->getFlash('error');
    }

    public function _onSubmitBuycard() {
        $info = Accounts::infoAccount();
        $captcha = Yii::app()->getController()->createAction("captcha");
        $code = $captcha->verifyCode;
        if (ObjInput::get('verify_image', 'str', '') <> $code) {
            $this->setErrors('Mã bảo mật không chính xác !');
        } else {
            $txtSoSeri = ObjInput::get('txtSoSeri', 'str', '');
            $txtSoPin = ObjInput::get('txtSoPin', 'str', '');
            $select_method = ObjInput::get('select_method', 'str', '');
            $nganluong = new MobiCard;
            $rs = new Result();
            if (!$info['id']) {
                $this->redirect(Yii::app()->createUrl('tailieu/login'));
            }
            $ref_code = $info['id'] . '_' . time();
            $rs = $nganluong->CardPay($txtSoPin, $txtSoSeri, $select_method, $ref_code, "", "", "");

            if ($rs->error_code == '00') {
                $menhgia = $rs->card_amount;

                if ($GLOBALS['POINT'][$menhgia]) {
                    $point = $GLOBALS['POINT'][$menhgia];

                    $f = Accounts::addPoint($point);
                    if ($f) {
                        Addfund:: addHistory($point, $info, 'Nạp point qua Thẻ cào: ' . 'Mã thẻ: ' . $rs->pin_card . ', serial: ' . $rs->card_amount . ', Mệnh giá: ' . $rs->card_amount . ', Loại thẻ: ' . $rs->type_card, $ref_code, 1);
                        $this->setErrors('Bạn nạp ' . $point . ' point thành công', 'success');
                    } else {
                        Addfund:: addHistory($point, $info, 'Có lỗi: Nạp thẻ thành công, cập nhật point bị lỗi ' . 'Mã thẻ: ' . $rs->pin_card . ', serial: ' . $rs->card_amount . ', Mệnh giá: ' . $rs->card_amount . ', Loại thẻ: ' . $rs->type_card, $ref_code, 2);
                        $this->setErrors('Có lỗi: Nạp thẻ thành công, cập nhật point bị lỗi');
                    }
                } else {
                    Addfund:: addHistory($point, $info, 'Có lỗi: Nạp thẻ thành công, mệnh giá thẻ chưa được cấu hình ' . 'Mã thẻ: ' . $rs->pin_card . ', serial: ' . $rs->card_amount . ', Mệnh giá: ' . $rs->card_amount . ', Loại thẻ: ' . $rs->type_card, $ref_code, 2);
                    $this->setErrors('Có lỗi: Nạp thẻ thành công, mệnh giá thẻ chưa được cấu hình. Vui lòng liên hệ BQT.');
                }
            } else {
                $this->setErrors($rs->error_message);
            }
        }
    }

    public function _onSubmitBuyATM() {
        $info = Accounts::infoAccount();
        $captcha = Yii::app()->getController()->createAction("captcha");
        $code = $captcha->verifyCode;
        if (ObjInput::get('verify_image', 'str', '') <> $code) {
            $this->setErrors('Mã bảo mật không chính xác !');
        } else {
            $bank_code = ObjInput::get('bank_code', 'str', '');

            $amount = ObjInput::get('amount', 'str', '');

            $nganluong = new NL_CheckOutV3();

            if (!$info['id']) {
                $this->redirect(Yii::app()->createUrl('tailieu/login'));
            }
            $ref_code = $info['id'] . '_' . time();
            $returnUrl = 'https://tailieukientruc.net/tailieu/addfund/nganLuongReturn.html';
            $cancel_url = 'https://tailieukientruc.net/tailieu/addfund/nganLuongCancel.html';
            $buyer_fullname = $info['first_name'] . ' ' . $info['last_name'];
            $buyer_email = $info['email'];
            $buyer_mobile = $info['mobile_phone'];
            $buyer_address = '';
            $rs = $nganluong->BankCheckout($ref_code, $amount, $bank_code, '', 'Nap tien tai khoan', 0, 0, 0, $returnUrl, $cancel_url, $buyer_fullname, $buyer_email, $buyer_mobile, $buyer_address, array());
            if ($rs->error_code == '00') {
                $point = ($amount * CHANGE_POINT) / 100;
                Addfund:: addHistory($point, $info, 'Nạp POINT QUA nganluong.vn mã ngân hàng: ' . $bank_code . 'Số tiền: ' . $amount . ', point được cộng: ' . $point . '', $ref_code, 2, 3);
                return (string) $rs->checkout_url;
            } else {
                $this->setErrors($rs->error_message);
            }
        }
    }

    public function _onSubmitBalance() {
        $info = Accounts::infoAccount();
        $captcha = Yii::app()->getController()->createAction("captcha");
        $code = $captcha->verifyCode;
        if (ObjInput::get('verify_image', 'str', '') <> $code) {
            $this->setErrors('Mã bảo mật không chính xác !');
        } else {
            $bank_code = ObjInput::get('bank_code', 'str', '');
            $amount = ObjInput::get('amount', 'str', '');

            $nganluong = new NL_CheckOutV3();

            if (!$info['id']) {
                $this->redirect(Yii::app()->createUrl('tailieu/login'));
            }
            $ref_code = $info['id'] . '_' . time();
            $returnUrl = 'https://tailieukientruc.net/tailieu/addfund/nganLuongReturn.html';
            $cancel_url = 'https://tailieukientruc.net/tailieu/addfund/nganLuongCancel.html';
            $buyer_fullname = $info['first_name'] . ' ' . $info['last_name'];
            $buyer_email = $info['email'];
            $buyer_mobile = $info['mobile_phone'];
            $buyer_address = '';
            $rs = $nganluong->NLCheckout($ref_code, $amount, '', 'Nap tien tai khoan', 0, 0, 0, $returnUrl, $cancel_url, $buyer_fullname, $buyer_email, $buyer_mobile, $buyer_address, array());

            if ($rs->error_code == '00') {
                $point = ($amount * CHANGE_POINT) / 100;
                Addfund:: addHistory($point, $info, 'Nạp POINT QUA nganluong.vn mã ngân hàng: NL Số tiền: ' . $amount . ', point được cộng: ' . $point . '', $ref_code, 2, 4);
                return (string) $rs->checkout_url;
            } else {
                $this->setErrors($rs->error_message);
            }
        }
    }

    public function actionNganLuongReturn($token) {

        $obj = new NL_CheckOutV3();
        $nl_result = $obj->GetTransactionDetail($token);
        self::writeFileLog('nganluong_reponse.bin', json_encode($nl_result));
        $url = Yii::app()->createAbsoluteUrl('tailieu/account/historypoint');
        if ($nl_result) {
            $nl_errorcode = (string) $nl_result->error_code;
            $nl_transaction_status = (string) $nl_result->transaction_status;
            $order_code = (string) $nl_result->order_code;
            if ($nl_errorcode == '00') {
                if ($nl_transaction_status) {
                    $check = DataHelper::selectOne('history_point', '*', 'type in(1,2,3) and ref_code="' . $order_code . '"  ');
                    if ($check && $check['status'] == 2) {
                        Accounts::addPoint($check['point'], $check['id_account']);
                        DataHelper::update('history_point', array('status' => 1), 'id=' . $check['id']);
                        $this->setErrors('Giao dịch thành công', 'success');
                        return $this->redirect($url);
                    } elseif ($check && $check['status'] != 2) {
                        $this->setErrors('Giao dịch đã được cập nhật trước đó order_code: ' . $check['ref_code']);
                        return $this->redirect($url);
                    } else {
                        $this->setErrors('Giao dịch đã bị hủy hoặc thất bại');
                        return $this->redirect($url);
                    }
                } else {
                    $check = DataHelper::selectOne('history_point', '*', 'type=1 and ref_code="' . $order_code . '"  ');
                    if ($check && $check['status'] == 2) {
                        DataHelper::update('history_point', array('status' => 3), 'id=' . $check['id']);
                        $this->setErrors('Giao dịch thất bại');
                        return $this->redirect($url);
                    } elseif ($check && $check['status'] != 2) {
                        $this->setErrors('Giao dịch đã được cập nhật trước đó order_code: ' . $check['ref_code']);
                        return $this->redirect($url);
                    } else {
                        $this->setErrors('Giao dịch đã bị hủy hoặc thất bại');
                        return $this->redirect($url);
                    }
                }
            }
        }
        $this->setErrors('Giao dịch đã bị hủy hoặc thất bại');
        return $this->redirect($url);
    }

    public function _onSubmitPayPal() {
        $info = Accounts::infoAccount();
        $captcha = Yii::app()->getController()->createAction("captcha");
        $code = $captcha->verifyCode;
        $amount = ObjInput::get('amount', 'int', 0);
        $amountSupport = array(1, 5, 10, 50, 100);
        if (!$amount || !key_exists($amount, $GLOBALS['PAYPAL_POINT'])) {
            $this->setErrors('Số tiền không chính xác !');
        } elseif (ObjInput::get('verify_image', 'str', '') <> $code) {
            $this->setErrors('Mã bảo mật không chính xác !');
        } else {
            $this->clientIdPay = PAYPAL_CLIENT_ID;
            $this->serectPay = PAYPAL_SECRET;
            $bank_code = ObjInput::get('bank_code', 'str', '');
            if (!$info['id']) {
                $this->redirect(Yii::app()->createUrl('tailieu/login'));
            }
            $ref_code = time() . uniqid();
            $apiContext = new \PayPal\Rest\ApiContext(
                    new \PayPal\Auth\OAuthTokenCredential(
                    $this->clientIdPay, // ClientID
                    $this->serectPay      // ClientSecret
                    )
            );
            $returnUrl = 'https://tailieukientruc.net/tailieu/addfund/payPalReturn.html';
            $cancel_url = 'https://tailieukientruc.net/tailieu/addfund/payPalCancel.html';
            $payer = new \PayPal\Api\Payer();
            $payer->setPaymentMethod('paypal');

            $amount1 = new \PayPal\Api\Amount();
            $amount1->setTotal($amount);
            $amount1->setCurrency('USD');
            $item = new \PayPal\Api\Item();
            $item->setName('NAP POINT TAILIEUKIENTRUC.NET')->setCurrency('USD')->setQuantity(1)->setPrice($amount);
            $itemList = new \PayPal\Api\ItemList();
            $i = array(
                0 => $item,
            );
            $itemList->setItems($i);

            $detail = new \PayPal\Api\Details();
            $detail->setShipping(0)->setSubtotal($amount);
            $amount1 = new \PayPal\Api\Amount();
            $amount1->setCurrency('USD');
            $amount1->setTotal($amount);
            $amount1->setDetails($detail);
            $transaction = new \PayPal\Api\Transaction();
            $transaction->setAmount($amount1);
            $transaction->setItemList($itemList);
            $transaction->setDescription('Thanh Toan tailieukientruc.net');
            $transaction->setInvoiceNumber($ref_code);
            $redirectUrls = new \PayPal\Api\RedirectUrls();
            $redirectUrls->setReturnUrl($returnUrl);
            $redirectUrls->setCancelUrl($cancel_url);

            $payment = new \PayPal\Api\Payment();
            $payment->setIntent('sale')
                    ->setPayer($payer)
                    ->setTransactions(array($transaction))
                    ->setRedirectUrls($redirectUrls);

            $payment->create($apiContext);
            $url = $payment->getApprovalLink();
            if ($url) {
                $point = $GLOBALS['PAYPAL_POINT'][$amount];
                Addfund:: addHistory($point, $info, 'Nạp POINT QUA PAYPAL Số tiền: ' . $amount . ', point được cộng: ' . $point . '', $ref_code, 2, 7);
                return (string) $url;
            }
        }
    }

    public function actionPayPalReturn($token, $paymentId, $PayerID) {
        $order_code = $token;
        $continute = true;
        if ($continute) {
            $apiContext = new \PayPal\Rest\ApiContext(
                    new \PayPal\Auth\OAuthTokenCredential(
                    $this->clientIdPay, // ClientID
                    $this->serectPay      // ClientSecret
                    )
            );
            try {
                $payment = \PayPal\Api\Payment::get($paymentId, $apiContext);
                $excute = new PayPal\Api\PaymentExecution();
                $excute->setPayerId($PayerID);
                try {
                    $result = $payment->execute($excute, $apiContext);
                    if ($result) {
                        $tran = $payment->getTransactions();
                        $check = DataHelper::selectOne('history_point', '*', 'type=7 and ref_code="' . $tran[0]->invoice_number . '"  ');
                        if ($check && $check['status'] == 2) {
                            Accounts::addPoint($check['point'], $check['id_account']);
                            DataHelper::update('history_point', array('status' => 1), 'id=' . $check['id']);
                            $this->render('success', array(
                                'success' => 'Thanh toán PAYPAL thành công',
                            ));
                        } elseif ($check && $check['status'] != 2) {
                            $error = 'Giao dịch đã thất bại trước đó';
                        } else {
                            $error = 'Giao dịch đã thất bại trước đó';
                        }
                    }
                } catch (Exception $ex) {
                  return  $this->render('error', array(
                        'error' => 'Thanh toán PAYPAL không thành công',
                    ));
                }
            } catch (Exception $ex) {
               return $this->render('error', array(
                    'error' => 'Đơn hàng thanh toán không tồn tại',
                ));
            }
        }
        $this->render('error', array(
            'error' => $error,
        ));
    }

    public function actionNganLuongCancel() {
        $error = 'Hủy giao dịch';
        $this->render('error', array(
            'error' => $error,
        ));
    }

    public function actionPayPalCancel() {
        $error = 'Hủy giao dịch';
        $this->render('error', array(
            'error' => $error,
        ));
    }

}
