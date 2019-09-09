<?php

class UserAdmin extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @return CActiveRecord the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'user_admin';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, userpassword,', 'required'),
            array('username, userpassword', 'length', 'max' => 100),
        );
    }

    /**
     * Checks if the given password is correct.
     * @param string the password to be validated
     * @return boolean whether the password is valid
     */
    public function validatePassword($password) {
        return CPasswordHelper::verifyPassword($password, $this->password);
    }

    /**
     * Generates the password hash.
     * @param string password
     * @return string hash
     */
    public function hashPassword($password) {
        return CPasswordHelper::hashPassword($password);
    }

    public function getData($param) {
        $conditions = self::searchCondition($param);
        $accountsData = Paging::getDataForFunction($this->tableName(), '*', $conditions, 'id ASC');
        return $accountsData;
    }
    public function getPermission() {
        $per = DataHelper::selectAll('permissions', '*', '', 'name ASC');
        return $per;
    }

    public function getOneUserAdmin($id) {
        $accountsData = DataHelper::selectOne($this->tableName(), "*", "id = '" . $id . "'");
        return $accountsData;
    }

    public function insertData($data) {
        return DataHelper::insert($this->tableName(), $data);
    }

    public function updateData($data, $id) {
        return DataHelper::update($this->tableName(), $data, " id = '" . $id . "'");
    }

    public function deleteData($id) {
        return DataHelper::delete($this->tableName(), " id = '" . $id . "'");
    }

    public function checkExits($condition) {
        return $this->model()->exists($condition);
    }

    public static function searchCondition($param) {
        $conditions = ' 1 = 1 ';
        if (isset($_GET)) {

            $id = $param['id'];
            $username = $param['username'];
            $email = $param['email'];

            if ($id <> '0') {
                $conditions .= " AND id =" . $id;
            }
            if ($username <> '') {
                $conditions .= " AND username = '" . $username . "'";
            }
            if ($email <> '') {
                $conditions .= " AND email ='" . $email . "'";
            }
        }
        // echo $conditions;   
        return $conditions;
    }

}
