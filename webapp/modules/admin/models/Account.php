<?php

/**
 * Description of Account
 *
 * @author DUCLM
 */
class Account extends CFormModel {

    public function tableName() {
        return "accounts";
    }

    public static function getTop5New() {
        $accountsData = DataHelper::selectAll('accounts', 'email,mobile_phone,point,id', '', 'id DESC', 5);
        return $accountsData;
    }

    public function addPoint($point, $account_id, $desc = '') {
        if(!$point) {
            return true;
        }
        if ($account_id > 0) {
            $info_point = DataHelper::selectOne($this->tableName(), 'point,id,count_upload', 'id=' . (int) $account_id);
            $points = (int) $info_point['point'] + (int) $point;
            $count_upload = $info_point['count_upload'] + 1;
            if (DataHelper::update($this->tableName(), array('point' => $points, 'count_upload' => $count_upload), 'id=' . (int) $account_id) > 0) {
                return DataHelper::insert('history_point', array('point' => $point, 'id_account' => $account_id, 'desc' => $desc, 'create_time' => time(), 'type' => '2'));
            } else
                return false;
        }return false;
    }

    public function getData($param, $order = '') {
        if ($order == '')
            $order = 'id ASC';
        $conditions = self::searchCondition($param);
        $accountsData = Paging::getDataForFunction($this->tableName(), '*', $conditions, $order);
        return $accountsData;
    }

    public function getOneAccount($param) {
        $condition = self::searchCondition($param);
        $accountsData = DataHelper::selectOne($this->tableName(), "*", $condition);
        return $accountsData;
    }

    public function getAccountByID($ID) {
        $accountsData = DataHelper::selectOne($this->tableName(), "*", "id='" . (int) $ID . "'");
        return $accountsData;
    }

    public function insertData($data) {
        return DataHelper::insert($this->tableName(), $data);
    }

    public function updateData($data, $condition) {
        return DataHelper::update($this->tableName(), $data, $condition);
    }

    public function deleteData($id) {
        $condition = 'id= ' . (int) $id;
        return DataHelper::delete($this->tableName(), $condition);
    }

    public static function searchCondition($param) {
        $conditions = ' 1 = 1 ';
        if (isset($_GET)) {

            if ($param['id'] <> '0') {
                $conditions .= " AND id =" . $param['id'];
            }
            if ($param['email'] <> '') {
                $conditions .= " AND email LIKE '%" . $param['email'] . "%'";
            }
			if (isset($param['email_other']) && $param['email_other'] <> '') {
                $conditions .= " AND email_other LIKE '%" . $param['email_other'] . "%'";
            }
            if ($param['mobile_phone'] <> '') {
                $conditions .= " AND mobile_phone LIKE '%" . $param['mobile_phone']. "%'";
            }
            if ($param['fullname'] <> '') {
                $conditions .= " AND ( first_name LIKE '%" . trim($param['fullname']) . "%' "
                        . "OR last_name LIKE '%" . trim($param['fullname']) . "%' )";
            }
            if($param['type']) {
                $conditions .= " AND type = ".$param['type'];
            }
            if ($param['begin_createtime'] <> '' && $param['end_createtime'] <> '') {

                $begin_time = SystemDateTime::to_time_begin($param['begin_createtime']);
                $end_time = SystemDateTime::to_time_end($param['end_createtime']);
                $conditions .= " AND  create_time > " . $begin_time . " AND create_time < " . $end_time . "";
            } else if ($param['end_createtime'] <> '' && $param['begin_createtime'] == '') {
                $end_time = SystemDateTime::to_time_end($param['end_createtime']);
                $begin_time = SystemDateTime::to_time_begin(date('d/m/Y'));
                $conditions .= " AND  create_time > " . $begin_time . " AND create_time < " . $end_time . "";
            } else if ($param['begin_createtime'] <> '' && $param['end_createtime'] == '') {
                $begin_time = SystemDateTime::to_time_begin($param['begin_createtime']);
                $end_time = SystemDateTime::to_time_end(date('d/m/Y'));
                $conditions .= " AND  create_time > " . $begin_time . " AND create_time < " . $end_time . "";
            }
        }
		//$conditions 'id = 0';
        return $conditions;
    }

}
