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

    public function getKeywordNews() {
        $data = DataHelper::selectAll('keywords', "*", " type = '1' ", '');
        foreach ($data as $k) {
            $arr[] = array('name' => $k['title'], 'id' => base64_encode(json_encode($k)));
        }
        //var_dump($arr); die();
        return $arr;
    }

    public function getKeyword($val) {
        if ($val == '') {
            return '';
        }
        $arr_base = explode(',', $val);
        foreach ($arr_base as $k) {
            $arr[] = array('name' => json_decode(base64_decode($k))->title, 'id' => $k);
        }
        return json_encode($arr);
    }

    public function getFullCategory_Option($value = '0') {
        $datas = $this->getCategory();
        $data[0] = '------Tất cả------';
        if (is_array($datas['parent_category'])) {
            foreach ($datas['parent_category'] as $key => $parent) {
                $data['0|' . $parent['id']] = '--' . $parent['title'];
                if (isset($datas['sub_category'][$key])) {
                    $subs = $datas['sub_category'][$key];
                    foreach ($subs as $sub) {
                        $data[$sub['id'] . '|' . $sub['parent_id']] = '------' . $sub['title'];
                    }
                }
            }
        }
        $combox = Strings::combobox('parent', $data, $value, '', 'class="form-control"');
        return $combox;
    }

    public function getParentCategory_Option($value) {
        $datas = $this->getCategory();
        $data[0] = '----Tất cả----';

        if (is_array($datas['parent_category'])) {
            foreach ($datas['parent_category'] as $key => $parent) {
                $data[$parent['id']] = $parent['title'];
            }
        }
        $combox = Strings::combobox('parent_id', $data, $value, '', 'class="form-control"');
        return $combox;
    }

    public function updateStt($stt, $ids) {
        $i = -1;
        foreach ($stt as $row) {
            $i = $i + 1;
            DataHelper::update($this->tableName(), array('stt' => intval($stt[$i])), "id= '" . $ids[$i] . "'");
        }
    }

    public function getParentCategory() {
        $CnewsData = DataHelper::selectAll($this->tableName(), "title,id", " parent_id='0' ", 'parent_id ASC');
        $arrCNews = "";
        $arrCNews[0] = 'Tất cả';
        if (is_array($CnewsData)) {
            foreach ($CnewsData as $k => $v) {
                $arrCNews[$v['id']] = $v['title'];
            }
        }

        return $arrCNews;
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
