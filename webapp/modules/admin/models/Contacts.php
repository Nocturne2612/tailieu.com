<?php

/**
 * Description of Account
 *
 * @author DUCLM
 */
class Contacts extends CkkFormModel {

    public $title;
    public $status;

    public function attributeNames() {
        
    }

    public function attributeLabels() {
        return array(
            'title' => 'Tên thuộc tính',
            'status' => 'Trạng thái',
        );
    }

    public function rules() {
        return array(
            array(
                'status',
                'required',
                'message' => ' - {attribute} bắt buộc phải nhập/chọn.'),
            array(
                'status',
                'numerical',
                'integerOnly' => true,
                'message' => '{attribute} phải là kiểu số.'),
        );
    }

    public function tableName() {
        return "contact";
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

    public function updateData($data, $condition) {
        return DataHelper::update($this->tableName(), $data, $condition);
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
            if ($param['status'] <> '0') {
                $conditions .= " AND status = " . (int) $param['status'];
            }
            if ($param['view'] <> '0') {
                $conditions .= " AND view = " . (int) $param['view'];
            }
            if ($param['title'] <> '') {
                $conditions .= " AND title LIKE '%" . $param['title'] . "%'";
            }
            if ($param['fullname'] <> '') {
                $conditions .= " AND fullname LIKE '%" . $param['fullname'] . "%'";
            }
            if ($param['email'] <> '') {
                $conditions .= " AND email = '" . $param['email'] . "'";
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

}
