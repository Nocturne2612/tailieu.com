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

    public function updateData($data, $id) {
        return DataHelper::update($this->tableName(), $data, '`id` = ' . (int) $id);
    }

    public static function deleteData($id) {

        if (DataHelper::deleteById(self::tableName(), (int) $id) > 0) {
            $fc = DataHelper::delete(self::tableName(), ' parent_id= ' . (int) $id);
            DataHelper::update(News::tableName(), array('parent_id' => 0, 'sub_id' => 0), '`parent_id` = ' . (int) $id);

            echo Strings::alert('Bạn đã xoá danh mục!', Yii::app()->createUrl('admin/categorynews/'));
            die();
        } else {

            echo Strings::alert('Có lỗi trong quá trình xử lý!', Yii::app()->createUrl('admin/categorynews/'));
            die();
        }
    }

}
