<?php

/**
 * Description of Account
 *
 * @author DUCLM
 */
class Point extends CkkFormModel {

    public function tableName() {
        return "history_point";
    }

    public static function getTop5Transaciton() {
        $accountsData = DataHelper::selectAll('history_point', 'create_time,type,point,desc', '', 'create_time DESC', 5);
        return $accountsData;
    }

    public function getData($param) {
        $conditions = self::searchCondition($param);
        $accountsData = Paging::getDataForFunction($this->tableName(), '*', $conditions, 'create_time DESC');
        return $accountsData;
    }

    public function getDataById($ID) {
        $accountsData = DataHelper::selectOne($this->tableName(), "*", "id='" . (int) $ID . "'");
        return $accountsData;
    }

    public function insertData($data) {
        return DataHelper::insert($this->tableName(), $data);
    }

    public function updateData($data, $array_condition) {
        return DataHelper::update($this->tableName(), $data, $array_condition);
    }

    public function deleteData($id) {
        return DataHelper::delete($this->tableName(), 'id = ' . $id);
    }

    public static function searchCondition($param) {
        $conditions = ' 1 = 1 ';
        if ($param) {

            if ($param['id'] <> '0') {
                $conditions .= " AND id = " . (int) $param['id'];
            }
            if ($param['type'] <> '0') {
                $conditions .= " AND type = " . (int) $param['type'];
            }
            if ($param['ref_code'] <> '') {
                $conditions .= " AND ref_code = '" . $param['ref_code'] . "'";
            }
            if ($param['keyword'] <> '') {
                $conditions .= " AND `desc` LIKE '%" . $param['keyword'] . "%'";
            }
            if ($param['status'] <> 0) {
                $conditions .= " AND status = " . (int) $param['status'];
            }
            if ($param['id_account'] <> '0') {
                $conditions .= " AND id_account = " . (int) $param['id_account'];
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

        return $conditions;
    }

    public function getProducts() {
        $data = DataHelper::selectAll('products', "id,title", " status = 1 ");
        $c = array(0 => '-- Tất cả --');
        if ($data) {
            foreach ($data as $d) {
                $c[$d['id']] = $d['title'];
            }
            return $c;
        } else {
            return $c;
        }
    }

    public function delAll($array_id) {

        $str_id_del = implode(',', $array_id);
        if ($str_id_del <> '') {
            $del = DataHelper::delete($this->tableName(), 'id IN (' . $str_id_del . ')');
            return $del;
        } else {
            return false;
        }
    }

}
