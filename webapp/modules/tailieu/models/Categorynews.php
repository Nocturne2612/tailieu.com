<?php

class Categorynews extends CFormModel {

    public static function model($className = __class__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'category_news';
    }

    public function getData() {
        $conditions = 'status = 1';
        $data = DataHelper::selectAll($this->tableName(), 'title,id,parent_id,acsii,stt', $conditions, 'stt ASC');
        if ($data) {
            foreach ($data as $d) {
                $arr[$d['id']] = $d;
            }
            return $arr;
        } else
            return false;
    }
    public function getOneNews($ID) {
        if ($ID > 0) {
            $condition = " id = " . intval($ID);
            return $newsData = DataHelper::selectOne($this->tableName(), "*", $condition);
        } else {
            return false;
        }
    }
}
