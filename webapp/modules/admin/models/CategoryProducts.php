<?php

/**
 *
 * @author DUCLM
 */
class CategoryProducts extends CFormModel {

    public static function tableName() {
        return "category_products";
    }

    public function getData($param = '') {
        $conditions = ' 1=1 ';
        $array = Paging::getDataForFunction($this->tableName(), '*', $conditions, 'stt ASC');
        return $array;
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

    public function getCategoryCache() {
        $parent_category = $sub_category = array();
        $counts = '0';
        $CproductsData = DataHelper::selectAll($this->tableName(), "*", " status = 1 ", 'stt ASC');
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
        $combox = Strings::combobox('parent', $data, $value, '', 'class="form-control" required');
        return $combox;
    }

    public function getFullCategory_Option2($value, $data = false) {
        $datas = $this->getCategory();
        $html = '<select name="sub_category_id2[]" id="sub_category_id" style="width: " class="form-control select2" multiple="">';
        if (is_array($datas['parent_category'])) {
            foreach ($datas['parent_category'] as $key => $parent) {
                if ($data && in_array($parent['id'], $data)) {
//                    $html .= '<option value="' . $sub['id'] . '" selected ="">----' . $sub['title'] . '</option>';
                    $html .= '<option value="' . $key . '" selected ="">' . $parent['title'] . '</option>';
                } else {
                    $html .= '<option value="' . $key . '">' . $parent['title'] . '</option>';
                }
                
//                $data[$parent['id']] = $parent['title'];
                if (isset($datas['sub_category'][$key])) {
                    $subs = $datas['sub_category'][$key];
                    foreach ($subs as $sub) {
                        if ($data && in_array($sub['id'], $data)) {
                            $html .= '<option value="' . $sub['id'] . '" selected ="">----' . $sub['title'] . '</option>';
                        } else {
                            $html .= '<option value="' . $sub['id'] . '">----' . $sub['title'] . '</option>';
                        }
                    }
                }
            }
        }
        
//        $combox = Strings::combobox('sub_category_id2[]', $data, $value, '', 'class="form-control select2" multiple="multiple"');
        return $html;
    }

    public function getParentCategory_Option($value) {
        $CproductsData = DataHelper::selectAll($this->tableName(), "id,title,parent_id", " parent_id = 0 ", 'title ASC');
        $data[0] = '----Danh mục cha----';
        if ($CproductsData) {
            foreach ($CproductsData as $k => $v) {
                $parent_category[$v['id']] = array(
                    'id' => $v['id'],
                    'title' => $v['title'],
                );
            }
            foreach ($parent_category as $key => $parent) {
                $data[$parent['id']] = $parent['title'];
            }
        }
        return Strings::combobox('parent_id', $data, $value, '', 'class="form-control"');
    }

    public function updateSttProduct($stt, $ids) {
        $i = -1;
        foreach ($stt as $row) {
            $i = $i + 1;
            DataHelper::update($this->tableName(), array('stt' => intval($stt[$i])), "id= '" . $ids[$i] . "'");
        }
    }

    public function getOneProducts($ID) {
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
            $data = DataHelper::selectOne(self::tableName(), "icon", " id = " . intval($id));
            @unlink('./' . IMG_PRODUCT . $data['icon']);
            @unlink('./' . IMG_PRODUCT_THUMB . $data['icon']);
            DataHelper::delete(self::tableName(), ' parent_id= ' . (int) $id);
            DataHelper::update(Products::tableName(), array('category_id' => 0, 'sub_category_id' => 0), '`category_id` = ' . (int) $id);
            echo Strings::alert('Bạn đã xoá danh mục!', Yii::app()->createUrl('admin/categoryproducts/'));
            die();
        } else {

            echo Strings::alert('Có lỗi trong quá trình xử lý!', Yii::app()->createUrl('admin/categoryproducts/'));
            die();
        }
    }

    public function getKeywordProducts() {
        $data = DataHelper::selectAll('keywords', "*", " type = '2' ", '');
        foreach ($data as $k) {
            $arr[] = array('name' => $k['title'], 'id' => base64_encode(json_encode($k)));
        }
        //var_dump($arr); die();
        return $arr;
    }

    public static function getCategorySiteMap() {
        return DataHelper::selectAll(self::tableName(), 'title,id', 'status=1');
    }

}
