<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class AdminUserIdentity extends CUserIdentity {       
    private  $id;
    public function authenticate() {       
        $record = UserAdmin::model()->findByAttributes(array('username'=>$this->username,'status'=> 2));
       
      if ($record === null) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else if ($record->password !== md5($this->password)) {        
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else {
            $this->id = $record->id;
            $this->setState('roles', $record->role);
            $this->setState('permission', $record->permission);
            Session::set('info_user', $record);
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getId() {
        return $this->id;
    }

}
