<?php

/**
 * Description of Account
 *
 * @author DUCLM
 */
class Link extends CFormModel {

    public static function tableName() {
        return "link";
    }

    public function getData($param = '') {
        $conditions = ' 1=1 ';
        $array = Paging::getDataForFunction($this->tableName(), '*', $conditions, 'id ASC');
        return $array;
    }

    public function getLink() {
        $CLinkData = DataHelper::selectAll($this->tableName(), "*", " 1 = 1 ", 'id ASC');
        $counts = count($CLinkData);

        return array(
            'links' => $CLinkData,
            'counts' => (int) $counts
        );
    }

    public function getOne($ID) {
        $data = DataHelper::selectOne($this->tableName(), "*", " id = " . intval($ID));
        return $data;
    }

    public function insertData($data) {
        return DataHelper::insert($this->tableName(), $data);
    }
    public function getDataById($ID) {
        $accountsData = DataHelper::selectOne($this->tableName(), "*", "id='" . (int) $ID . "'");
        return $accountsData;
    }
    public function updateData($data, $array_condition) {
        return DataHelper::update($this->tableName(), $data, $array_condition);
    }

    public static function deleteData($id) {

        if (DataHelper::deleteById(self::tableName(), (int) $id) > 0) {
            echo Strings::alert('Bạn đã xoá Link!', Yii::app()->createUrl('admin/link/'));
            die();
        } else {
            echo Strings::alert('Có lỗi trong quá trình xử lý!', Yii::app()->createUrl('admin/link/'));
            die();
        }
    }

}
