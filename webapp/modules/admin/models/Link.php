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
        // $CLinkData = DataHelper::selectAll($this->tableName(), "*", " 1 = 1 ", 'id ASC');
        // $parent_category = $sub_category = $counts = false;
        // if ($CNewsData) {
        //     foreach ($CLinkData as $k => $v) {
        //         if ($v['parent_id'] == '0') {
        //             $parent_category[$v['id']] = array(
        //                 'id' => $v['id'],
        //                 'title' => $v['title'],
        //                 'acsii' => $v['acsii'],
        //                 'status' => $v['status'],
        //                 'stt' => $v['stt'],
        //                 'parent_id' => (int) $v['parent_id'],
        //                 'create_time' => $v['create_time'],
        //             );
        //         }
        //         if ($v['parent_id'] != '0') {
        //             $sub_category[$v['parent_id']][] = array(
        //                 'id' => $v['id'],
        //                 'title' => $v['title'],
        //                 'acsii' => $v['acsii'],
        //                 'status' => $v['status'],
        //                 'parent_id' => $v['parent_id'],
        //                 'stt' => $v['stt'],
        //                 'create_time' => $v['create_time']);
        //         }
        //     }
        //     $counts = count($CNewsData);
        // }

        // return array(
        //     'parent_category' => $parent_category,
        //     'sub_category' => $sub_category,
        //     'counts' => (int) $counts
        // );
        return array();
    }

    public function getOne($ID) {
        $newsData = DataHelper::selectOne($this->tableName(), "*", " id = " . intval($ID));
        return $newsData;
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
