<?php

class Register extends TModel {

    public static function model($className = __class__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'accounts';
    }

    public function insertAccount($params) {
        $params['role'] = 'account';
        $params['create_time'] = time();
        return DataHelper::insert($this->tableName(), $params);
       
    }

    public function updateAccount($params, $where) {
        $params['role'] = 'account';
        $params['update_time'] = time();
        $ins = DataHelper::update($this->tableName(), $params, $where);
        return $ins;
    }

    public function checkExistEmail($email) {
        $info_email = DataHelper::selectOne($this->tableName(), 'id', " email='" . $email . "' ");
        if ($info_email) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Thực thi check tồn tại Email trả về thông tin
     * @param type $func
     * @param type $TransID
     * @param type $inputParams
     * @return type
     */
    public function checkExistInfoEmail($email) {
        $info_email = DataHelper::selectOne($this->tableName(), 'id,mobile_phone,email', " email='" . $email . "' ");
        if ($info_email) {
            return $info_email;
        } else {
            return false;
        }
    }

    public function updatePass($param) {
        return DataHelper::update($this->tableName(), $param, " id='" . $param['id'] . "' ");
    }

}
