<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class TUserIdentity extends CUserIdentity {

    private $id;
    public $type;


    public function __construct($username,$password,$type) {
        $this->password = $password;
        $this->type = $type;
        
        $this->username = $username;
    }

    public function authenticate() {
        
        if ($this->type) {
            if($this->type == 'facebook') {
                $condition = '(facebook_id = "'.$this->password.'" or email = "'.$this->username.'") and active_status = 1' ;
            } else {
                $condition = '(google_id = "'.$this->password.'" or email = "'.$this->username.'") and active_status = 1';
                
            }
            $record = DataHelper::selectOne('accounts','*',$condition);
        } else {
            $record = Accounts::model()->findByAttributes(array('email' => $this->username,'active_status' => 1));
        }
        if ($record === null) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else {
            if ($this->type) {
                $this->id = $record['id'];
                $this->setState('online', 1);
                $this->setState('check_login', true);
                $this->setState('role', $record['role']);
                $this->setState('tAccount', $record);
                $this->errorCode = self::ERROR_NONE;
            } else {
                if ($record->password === md5($this->password)) {
                    $this->id = $record->id;
                    $this->setState('online', 1);
                    $this->setState('check_login', true);
                    $this->setState('role', $record['role']);
                    $this->setState('tAccount', $record->attributes);
                    $this->errorCode = self::ERROR_NONE;
                } else {
                    $this->errorCode = self::ERROR_PASSWORD_INVALID;
                    $this->setState('check_login', false);
                }
            }
        }
        return !$this->errorCode;
    }

    public function getId() {
        return $this->id;
    }

    public function getAccount() {
        return $this->getState('tAccount');
    }

}
