<?php

/**
 * Description of Account
 *
 * @author DUCLM
 */
class Ads extends CkkFormModel {

    public $id;
    public $picture;
    public $link;
    public $stt;
    public $position;
    public $status;
    public $create_time;
    public $title;
    public $pic_link;

    public function attributeNames() {
        
    }

    public function attributeLabels() {
        return array(
            'title' => 'Tiêu đề',
            'status' => 'Trạng thái',
        );
    }

    public function rules() {
        return array(
            array(
                'title,status',
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
        return "ads";
    }

    public function getData($param) {
        $conditions = self::searchCondition($param);
        $data = Paging::getDataForFunction($this->tableName(), '*', $conditions, 'position,stt ASC');
        return $data;
    }

    public function getDataCache($position) {

        $data = DataHelper::selectAll($this->tableName(), '*', 'status = 1 and position=' . $position, 'position,stt ASC');
        return $data;
    }

    public function getDataById($ID) {
        $data = DataHelper::selectOne($this->tableName(), "*", "id='" . (int) $ID . "'");
        return $data;
    }

    public function insertData($data) {
        return DataHelper::insert($this->tableName(), $data);
    }

    public function updateData($data, $array_condition) {
        return DataHelper::update($this->tableName(), $data, $array_condition);
    }

    public function deleteData($id) {
        $data = DataHelper::selectOne(self::tableName(), "picture", '`id` = ' . (int) $id);
        if ($data) {
            if (DataHelper::deleteById(self::tableName(), (int) $id) > 0) {
                if ($data['picture'] != '') {
                    @unlink(IMG_ADS . $data['picture']); //xoá ảnh
                }
                return array('0', 'Xóa thành công');
            } else {
                return array('1', 'Có lỗi trong quá trình xử lý!');
            }
        } else {
            return array('1', 'Không tồn tại sản phẩm này!');
        }
    }

    public function delAll($array_id) {
        $str_id_del = implode(',', $array_id);
        if ($str_id_del <> '') {
            $data = DataHelper::selectAll(self::tableName(), "picture", 'id IN (' . $str_id_del . ')');
            $del = DataHelper::delete($this->tableName(), 'id IN (' . $str_id_del . ')');
            if ($del > 0) {
                foreach ($data as $d) {
                    @unlink(IMG_ADS . $d['picture']); //xoá ảnh
                }
            }
            return $del;
        } else {
            return false;
        }
    }

    public static function searchCondition($param) {
        $conditions = ' 1 = 1 ';
        if ($param) {
            if ($param['id'] <> '0') {
                $conditions .= " AND id = " . (int) $param['id'];
            }
            if ($param['title'] <> '') {
                $conditions .= " AND title = '" . $param['title'] . "'";
            }
            if ($param['status'] <> '0') {
                $conditions .= " AND status = " . (int) $param['status'];
            }
            if ($param['position'] <> '0') {
                $conditions .= " AND position = " . (int) $param['position'];
            }
        }

        return $conditions;
    }

}
