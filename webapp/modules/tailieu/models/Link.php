<?php

class Link extends CFormModel {

    public static function model($className = __class__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'link';
    }

    public function getData() {
        $conditions = 'status = 1';
        $data = DataHelper::selectAll($this->tableName(), '*', '1 = 1', 'position ASC');
        // $type2 = DataHelper::selectAll($this->tableName(), '*', 'type = 2', 'position ASC');
        // $type3 = DataHelper::selectAll($this->tableName(), '*', 'type = 3', 'position ASC');
        // $type4 = DataHelper::selectAll($this->tableName(), '*', 'type = 4', 'position ASC');
        if ($data) {
            return $data;
        } else
            return false;
    }
}
