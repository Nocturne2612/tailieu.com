<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AccountController
 *
 * @author DUCLM
 */
class AccountController extends AdminController {

    public $typeArr = array(
        1 => 'Bình thường',
        2 => 'Tài khoản Vip',
    );

    public function filters() {
        return array('accessControl');
    }

    public function accessRules() {
        return AdminRoles::getAccessRules($this->id);
    }

    public function init() {
        parent::init();
    }

    public function actionIndex() {
        Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/xeon/js/datepicker.js', CClientScript::POS_END);
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/xeon/css/datapicker.css');

        $accountModel = new Account();
        $param = false;
        $id = ObjInput::get('id', 'int', '');
        $email = ObjInput::get('email', 'str', '');
        $fullname = ObjInput::get('fullname', 'str', '');
        $begin_createtime = ObjInput::get('begin_createtime', 'str', '');
        $end_createtime = ObjInput::get('end_createtime', 'str', '');
        $sort = ObjInput::get('sort', 'str', '');
        $by = ObjInput::get('by', 'str', '');
        $order = '';
        if ($sort != '' && $by != '') {
            if (in_array($by, array('asc', 'desc')) && in_array($sort, array('point', 'first_name', 'email', 'mobile_phone'))) {
                $order = $sort . ' ' . $by;
            }
        }
        // echo $order;
        $param = array(
            'id' => $id,
            'email' => $email,
            'fullname' => $fullname,
            'begin_createtime' => $begin_createtime,
            'end_createtime' => $end_createtime,
            'mobile_phone' => ObjInput::get('mobile_phone', 'str', ''),
            'type' => ObjInput::get('type', 'int', 0),
			'email_other'=> ObjInput::get('email_other', 'str', ''),
        );

        $this->typeArr['0'] = 'Tất cả';
        $type_comb = Strings::combobox('type', $this->typeArr, ObjInput::get('type', 'int', 0), '', 'class="form-control"');
        $account_data = $accountModel->getData($param, $order);
        $data = array(
            'typeArr' => $this->typeArr,
            'accounts' => $account_data['data'],
            'pageHtml' => $account_data['pageHtml'],
            'totalRecord' => $account_data['totalRecord'],
            'link_action' => Yii::app()->createUrl('admin/account'),
            'type_arr' => $type_comb,
            'get_data' => $param,
			
			);


        $this->render('index', $data);
    }

    public function actionView() {
		 Yii::app()->getClientScript()->registerScriptFile(Yii::app()->baseUrl . '/assets/xeon/js/datepicker.js', CClientScript::POS_END);
        Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/assets/xeon/css/datapicker.css');
        $id = ObjInput::get('id', 'int', 0);
        $accountModel = new Account();
        $accounts = $accountModel->getAccountByID($id);
        if (!$accounts) {
            $this->setErrors('Không tồn tại hoặc đã bị xóa.');
            $this->redirect(Yii::app()->createUrl('admin/account/'));
        }

        $this->render('view', array(
            'data' => $accounts,
            'link_account' => Yii::app()->createUrl('admin/account'),
            'link_action' => Yii::app()->createUrl('admin/account/edit'),
            'type_arr' => Strings::combobox('type', $this->typeArr, ObjInput::get('type', 'int', $accounts['type']), '', 'class="form-control"'),
            'active_status_arr'=> Strings::combobox('active_status', array(1=> 'Hoạt động',2 => 'Bị khóa',0 => 'Chưa xác thực'), ObjInput::get('active_status', 'int', $accounts['active_status']), '', 'class="form-control"'),
        ));
    }

    public function actionEdit() {
        $id = ObjInput::get('id', 'int', 0);

        if (Yii::app()->request->isPostRequest) {
            $accountModel = new Account();
            $accounts = $accountModel->getAccountByID($id);
            if (!$accounts) {
                $this->setErrors('Không tồn tại hoặc đã bị xóa.');
                $this->redirect(Yii::app()->createUrl('admin/account/'));
            }
			$point = $accounts['point'];
			$time_vip_start = $accounts['time_vip_start'] ?date('d-m-Y',$accounts['time_vip_start']): '';
			$time_vip_end =  $accounts['time_vip_end'] ? date('d-m-Y',$accounts['time_vip_end']): '';
            $data = array(
                "id" => ObjInput::get("id", "int", 0),
                "point" => ObjInput::get("point", "int", 0),
                "type" => ObjInput::get("type", "int", $accounts['type']),
                'active_status' => ObjInput::get("active_status", "int", $accounts['active_status']),
				'time_vip_start'=> ObjInput::get("time_vip_start", "str", $time_vip_start),
				'time_vip_end'=>ObjInput::get("time_vip_end", "str", $time_vip_end),
            );
			
            $reset = ObjInput::get('reset', 'int', 0);
            if ($reset == 1) {
                $data['password'] = md5('123456');
            }
			if($data['time_vip_start']) {
					$data['time_vip_start'] = SystemDateTime::to_time_begin($data['time_vip_start']);
				}
				if($data['time_vip_end']) {
					$data['time_vip_end'] = SystemDateTime::to_time_end($data['time_vip_end']);
				}
            $update = $accountModel->updateData($data, 'id=' . $id);
            if ($update) {
				
			
				
				if($point > $data['point']) {
                    $point = $point - $data['point'];
                    $addFund = Addfund2::addHistory($point, $accounts, 'Admin trừ POINT'.$point, time(), 1);
                }elseif($point < $data['point']) {
                    $point = $data['point'] - $point;
                    $addFund = Addfund2::addHistory($point,$accounts, 'Admin cộng POINT'.$point, time(), 1);
                }
                $this->setErrors('Cập nhật thành công.', 'success');
                $this->redirect(Yii::app()->createUrl('admin/account/'));
            } else {
                $this->setErrors('Có lỗi quá trình cấp nhật.');
                $this->redirect(Yii::app()->createUrl('admin/account/view/', array('id' => $id)));
            }
        }
    }

    public function actionLogout() {
        $session = Session::get('info_user');
        Yii::app()->user->logout();
        LoginForm::updateAfterLogout($session->username);
        $this->redirect(Yii::app()->createUrl('admin/login'));
    }

    public function actionDel() {
        $id = ObjInput::get('id', 'int', 0);
        $mol = new Account();
        if ($mol->deleteData($id)) {
            echo Strings::alert('Bạn xóa tài khoản thành công', Yii::app()->createUrl('admin/account'));
        } else {
            echo Strings::alert('Lỗi: xóa tài khoản không thành công', Yii::app()->createUrl('admin/account'));
        }
    }

}
