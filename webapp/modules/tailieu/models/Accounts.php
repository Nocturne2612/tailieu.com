<?php

class Accounts extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @return CFormModel the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'accounts';
    }

    /**
     * Checks if the given password is correct.
     * @param string the password to be validated
     * @return boolean whether the password is valid
     */
    public function validatePassword($password) {
        return CPasswordHelper::verifyPassword($password, $this->password);
    }

    public function updateData($data, $condition) {
        return DataHelper::update($this->tableName(), $data, $condition);
    }

    public function insertData($data) {
        return DataHelper::insert('products', $data);
    }

    public function updateProduct($data, $id) {
        return DataHelper::update('products', $data, "id='" . $id . "'");
    }

    public function getInfoAccountRealtime() {
        $info = self::infoAccount();
        if ($info['id'] > 0) {
            return DataHelper::selectOne($this->tableName(), "*", "id='" . (int) $info['id'] . "'");
        } else
            return false;
    }

    /**
     * Generates the password hash.
     * @param string password
     * @return string hash
     */
    public function hashPassword($password) {
        return CPasswordHelper::hashPassword($password);
    }

    public static function infoAccount() {
        return Yii::app()->user->getState('tAccount');
    }

    public static function historyPoint($param) {
        $conditions = self::searchCondition($param);
        $array = Paging::getDataForFunction('history_point', '*', $conditions, 'create_time DESC');
        return $array;
    }

    public function getProductById($id, $info) {
        $array = DataHelper::selectOne('products', '*', "id='" . $id . "' and account_id='" . $info['id'] . "'");
        return $array;
    }

    public static function searchCondition($param) {
        $conditions = ' (type <> 1 and status <> 2 ) and (type <> 7  and status <> 2)';

        if ($param['id_account'] > 0) {
            $conditions .= ' AND id_account = ' . $param['id_account'];
        }
        if ($param['type'] > 0) {
            $conditions .= ' AND type = ' . (int) $param['type'];
        }
        if ($param['begin_createtime'] <> 'dd-mm-yyyy' && $param['end_createtime'] <> 'dd-mm-yyyy') {
            $begin_time = SystemDateTime::to_time_begin($param['begin_createtime']);
            $end_time = SystemDateTime::to_time_end($param['end_createtime']);
            $conditions .= " AND  create_time > " . $begin_time . " AND create_time < " . $end_time . "";
        } else if ($param['end_createtime'] <> 'dd-mm-yyyy' && $param['begin_createtime'] == 'dd-mm-yyyy') {
            $end_time = SystemDateTime::to_time_end($param['end_createtime']);
            $begin_time = SystemDateTime::to_time_begin(date('d/m/Y'));
            $conditions .= " AND  create_time > " . $begin_time . " AND create_time < " . $end_time . "";
        } else if ($param['begin_createtime'] <> 'dd-mm-yyyy' && $param['end_createtime'] == 'dd-mm-yyyy') {
            $begin_time = SystemDateTime::to_time_begin($param['begin_createtime']);
            $end_time = SystemDateTime::to_time_end(date('d/m/Y'));
            $conditions .= " AND  create_time > " . $begin_time . " AND create_time < " . $end_time . "";
        }
        return $conditions;
    }

    public static function addPoint($point, $id = '', $current_point = '') {
        $info = self::infoAccount();
        if ($id == '') {
            $id = $info['id'];
        }
        if ($current_point == '') {
            $info_point = DataHelper::selectOne('accounts', 'point,id', 'id=' . (int) $id);
            $current_point = (int) $info_point['point'];
        }
        $new_point = (int) $point + (int) $current_point;

        $flag = DataHelper::update('accounts', array('point' => $new_point), 'id=' . (int) $id);
        if ($flag) {
            self::performInfoAccount(array('point' => $new_point), $info);
            return true;
        } else {
            return false;
        }
    }

    public static function minusPoint($point, $id = '', $current_point = '', $current_download = '', $desc, $minusPoint = true) {
        $info = self::infoAccount();
        if ($id == '') {
            $id = $info['id'];
        }
        if ($minusPoint) {
            if ($current_point == '') {
                $info_point = DataHelper::selectOne('accounts', 'point,id,count_down', 'id=' . (int) $id);
                $current_download = $info_point['count_down'];
                $new_point = (int) $info_point['point'] - (int) $point;
            } else {
                $count_down = $current_download + 1;
                $new_point = (int) $current_point - (int) $point;
            }
        }else {
            $count_down = $current_download + 1;
            $info_point = DataHelper::selectOne('accounts', 'point,id,count_down', 'id=' . (int) $id);
            $new_point = $info_point['point'];
        }

        $flag = DataHelper::update('accounts', array('point' => $new_point, 'count_down' => $count_down), 'id=' . (int) $id);

        if ($flag > 0) {
            DataHelper::insert('history_point', array('point' => $point, 'id_account' => $id, 'desc' => $desc, 'create_time' => time(), 'type' => '3'));
            if ($minusPoint) {
                self::performInfoAccount(array('point' => $new_point), $info);
            }
            return true;
        } else {
            Yii::app()->user->setFlash('error', 'Lỗi cập nhật point');
            return false;
        }
    }

    public static function performInfoAccount($new_info_account, $old_info = '') {
        if ($new_info_account) {
            if ($old_info == '') {
                $old_info = self::infoAccount();
            }
            $info_account = array_merge($old_info, $new_info_account);
            //Set lại State users
            Yii::app()->user->setState('tAccount', $info_account);
        }
    }

}
