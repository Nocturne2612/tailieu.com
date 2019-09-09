<?php

class Categorydocument extends CFormModel {

    public static function model($className = __class__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'category_products';
    }

    public function getData($parent_id) {

        if ($parent_id > 0) {
            $conditions = ' parent_id = ' . $parent_id . ' AND status = 1';
            return DataHelper::selectAll($this->tableName(), 'title,id,desc,short,parent_id,icon,tag', $conditions, 'stt ASC');
        } else
            return false;
    }

    public function getDetailCategory($acsii, $type = '') {

        if ($acsii != '') {
            // if ($type = '') {
            $conditions = ' acsii = "' . $acsii . '" AND status = 1';
            return DataHelper::selectOne($this->tableName(), 'title,id,desc,short,parent_id,icon,tag', $conditions);
            /* } else {
              $conditions = ' id in( ' . $id . ') AND status = 1';
              return DataHelper::selectOne($this->tableName(), 'title,id,desc,short,parent_id', $conditions);
              } */
        } else
            return false;
    }

    public function getDetailCategoryById($id, $type = '') {

        if ($id > 0) {
            if ($type = '') {
                $conditions = ' id = "' . id . '" AND status = 1';
                return DataHelper::selectOne($this->tableName(), 'title,id,desc,short,parent_id,icon,tag', $conditions);
            } else {
                $conditions = ' id in( ' . $id . ') AND status = 1';
                return DataHelper::selectOne($this->tableName(), 'title,id,desc,short,parent_id,icon,tag', $conditions);
            }
        } else
            return false;
    }

    public function getCategory() {
        $parent_category = $sub_category = array();
        $counts = '0';
        $CproductsData = DataHelper::selectAll($this->tableName(), "*", " 1 = 1 ", 'stt ASC');
        if ($CproductsData) {
            foreach ($CproductsData as $k => $v) {
                if ($v['parent_id'] == '0') {
                    $parent_category[$v['id']] = $v;
                }
                if ($v['parent_id'] != '0') {
                    $sub_category[$v['parent_id']][] = $v;
                }
            }
            $counts = count($CproductsData);
        }

        return array(
            'parent_category' => $parent_category,
            'sub_category' => $sub_category,
            'counts' => (int) $counts);
    }

    public function getFullCategory_Option($value) {
        $datas = $this->getCategory();
        $data[0] = '----Tất cả----';
        if (is_array($datas['parent_category'])) {
            foreach ($datas['parent_category'] as $key => $parent) {
                $data[$parent['id']] = $parent['title'];
                if (isset($datas['sub_category'][$key])) {
                    $subs = $datas['sub_category'][$key];
                    foreach ($subs as $sub) {
                        $data[$sub['id'] . '|' . $sub['parent_id']] = '----' . $sub['title'];
                    }
                }
            }
        }
        $combox = Strings::combobox('parent', $data, $value, '', 'class="ui-input"');
        return $combox;
    }

}
