<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminLoginForm
 *
 * @author Duc
 */
class LoginForm extends TModel {

    public $username;
    public $password;
    public $type;
    private $_identity;
    public $rememberMe;
    public $verifyCode;

    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules() {
        return array(
            // username and password are required
            array('username, password', 'required', 'message' => ' - {attribute} bắt buộc phải nhập.'),
            // password needs to be authenticated
            array('password', 'authenticate'),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels() {
        return array(
            'username' => 'Tài khoản/ Địa chỉ Email',
            'password' => 'Mật khẩu',
//            'type' => 'Loại hình',
        );
    }

    /**
     * Authenticates the password.
     * This is the 'authenticate' validator as declared in rules().
     */
    public function authenticate($attribute, $params) {
        if (!$this->hasErrors()) {
            $this->_identity = new TUserIdentity($this->username, $this->password,  $this->type);
            if (!$this->_identity->authenticate()) {
                $this->addError('password', 'Tài khoản, mật khẩu không đúng.');
            }
        }
    }

    public function tableName() {
        return 'accounts';
    }

    /**
     * Logs in the user using the given username and password in the model.
     * @return boolean whether login is successful
     */
    public function login() {
        if ($this->_identity === null) {
            $this->_identity = new TUserIdentity($this->username, $this->password,$this->type);
            $this->_identity->authenticate();
        }
        if ($this->_identity->errorCode === TUserIdentity::ERROR_NONE) {
            $duration = $this->rememberMe ? 3600 * 24 * 30 : 0; // 30 days
            Yii::app()->user->login($this->_identity, $duration);
            return true;
        } else {
            return false;
        }
    }

    public function checkExistEmail($username) {
        $info_username = DataHelper::selectOne($this->tableName(), 'id', " email='" . $username . "' ");
        if (!$info_username) {
            return false;
        } else {
            return $info_username;
        }
    }

}
