<?php

/**
 * Description of Account
 *
 * @author DUCLM
 */
class Category extends CkkFormModel {

    public $title;
    public $stt;
    public $status;
    public $url_cache;

    public function attributeNames() {
        
    }

    public function attributeLabels() {
        return array(
            'title' => 'Tên danh mục',
            'stt' => 'Số thứ tự',
            'status' => 'Trạng thái',
        );
    }

    public function rules() {
        return array(
            array(
                'title,stt,status',
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
        return "category";
    }

    public function getCategoryOption($data, $parent_id, $space = '--', $get_id = 0) {
        $output = '';
        echo $get_id;
        foreach ($data as $k => $d) {
            if ($d['parent_id'] == $parent_id) {
                $output .= '<option value="' . $d['id'] . '" ' . ($get_id == $d['id'] ? 'selected' : '') . '>' . $space . ' ' . $d['title'] . ($parent_id == '0' ? ' [' . $GLOBALS['CATEGORY_TYPE'][$d['category_type']] . ']' : '') . '</option>';
                $output .= $this->getCategoryOption($data, $d['id'], $space . '---', $get_id);
            }
        }

        return $output;
    }

    public function getCategory($data, $parent_id, $space = '--', $arr_status = array(), $arr_statuss = array()) {

        $output = '';
        foreach ($data as $k => $d) {
            if ($d['parent_id'] == $parent_id) {

                $output .= '<tr><td>' . $d['id'] . '</td><td>' . $space . ' ' . $d['title'] . ' &nbsp;<span style="' . ( $d['color'] <> '' ? ' background: ' . $d['color'] : '') . '">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>  <td>' . $GLOBALS['CATEGORY_TYPE']
                        [$d['category_type']] . '</td><td>' . $d['stt'] . '</td><td>' . $arr_status[$d['status']] . '</td><td>
                  <a href="' . Yii::app()->createUrl("admin/category/view/", array('id' => $d['id'])) . '">Xem</a> |
                  <a onclick="return confirm(\'Bạn có chắc chắn xóa.\');" href="' . Yii::app()->createUrl("admin/category/del/", array('id' => $d['id'])) . '">Xóa</a> |
                  <a href="' . Yii::app()->createUrl("admin/category/edit/", array('id' => $d['id'], 'status' => $d['status'])) . '">' . $arr_statuss[$d['status']] . '</a>
                  </td></tr>';
                $output .= $this->getCategory($data, $d['id'], $space . '---', $arr_status, $arr_statuss);
            }
        }

        return $output;
    }

    public function getData($param, $order = '') {
        $conditions = self::searchCondition($param);
        $data = DataHelper::selectAll($this->tableName(), '*', $conditions, $order);
        return $data;
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
        $del = DataHelper::delete($this->tableName(), 'id = ' . $id);
        if ($del) {
            $data = DataHelper::selectOne($this->tableName(), "icon", "id='" . (int) $id . "'");
            @unlink('./'. IMG_NEWS . $data['icon']);
            @unlink('./'.IMG_NEWS_THUMB . $data['icon']);
            DataHelper::update($this->tableName(), array('parent_id' => 0), 'parent_id=' . $id);
        }
    }

    public static function searchCondition($param) {
        $conditions = ' 1 = 1 ';
        if ($param) {
            if (isset($param['id']) && $param['id'] <> '0') {
                $conditions .= " AND id = " . (int) $param['id'];
            }
            if (isset($param['title']) && $param['title'] <> '') {
                $conditions .= " AND title LIKE '%" . $param['title'] . "%'";
            }
            if (isset($param['status']) && $param['status'] <> '0') {
                $conditions .= " AND status = " . (int) $param['status'];
            }
            if (isset($param['category_type']) && $param['category_type'] <> '0') {
                $conditions .= " AND category_type = " . (int) $param['category_type'];
            }
        }
        // echo $conditions;   
        return $conditions;
    }

}
