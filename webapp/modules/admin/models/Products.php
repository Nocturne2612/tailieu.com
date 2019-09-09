<?php

/**
 * Description of Account
 *
 * @author DUCLM
 */
class Products extends CkkFormModel {

    public $status;
    public $p_id;
    public $type;
    public $parent;
    public $picture;
    public $tag;
    public $attr;
    public $short;
    public $create_time;
    public $proprice;
    public $price;
    public $qty;
    public $full;
    public $title;
    public $file_tailieu;
    public $category_id;

    public function attributeNames() {
        
    }

    public function attributeLabels() {
        return array(
            'title' => 'Tiêu đề',
            'p_id' => 'Mã sản phẩm',
            'type' => 'Thuộc tính sản phẩm',
            'parent' => 'Danh mục sản phẩm',
            'file_tailieu' => 'File tài liệu',
        );
    }

    public function rules() {
        return array(
            array(
                'title,p_id,status,parent',
                'required',
                'message' => ' - {attribute} bắt buộc phải nhập/chọn.'),
            array(
                'status,price,proprice,qty',
                'numerical',
                'integerOnly' => true,
                'message' => '{attribute} phải là kiểu số.'),
        );
    }

    public static function tableName() {
        return "products";
    }
    public  static function countNewProducts(){
        $data = DataHelper::selectOne(self::tableName(),'count(id) as count','status <> 1','id DESC');
        return $data;
    }
    public function getData($param) {
        $conditions = self::searchCondition($param);
        $array = Paging::getDataForFunction($this->tableName(), '*', $conditions, 'id DESC');
        return $array;
    }

    public function getDataCategory() {

        $newsData = DataHelper::selectAll("category_products", "title,id", " title <>'' ", 'id ASC');
        foreach ($newsData as $k => $v) {
            $arr_cnews[$v['id']] = array(
                'title' => $v['title'],
                'id' => $v['id'],
                'link' => Yii::app()->createUrl('categoryproducts', array('id' => $v['id'])),
            );
        }
        return $arr_cnews;
    }

    public function getOneData($ID) {
        $condition = " id = " . intval($ID);
        $data = DataHelper::selectOne($this->tableName(), "*", $condition);
        return $data;
    }

    public function insertData($data) {
        return DataHelper::insert($this->tableName(), $data);
    }

    public function updateData($data, $id, $flag = true) {


        $f = DataHelper::update($this->tableName(), $data, '`id` = ' . (int) $id);
        if ($f > 0) {
            if ($flag) {
                $param_update_download = array(
                    'title' => $data['title'],
                    'category_id' => $data['category_id'],
                    'price' => $data['price'],
                    'count' => $data['count_down']
                );
                if (isset($data['picture']))
                    $param_update_download['picture'] = $data['picture'];
                DataHelper::update('download', $param_update_download, '`id_product` = ' . (int) $id);
            }
            return true;
        } else
            return false;
    }

    public function deleteData($id) {
        $data = DataHelper::selectOne(self::tableName(), "picture,picture2,file", '`id` = ' . (int) $id);
        if ($data) {

            if (DataHelper::deleteById(self::tableName(), (int) $id) > 0) {
                if ($data['file'] != '') {
                    $a = explode('_', $data['file']);
                    $b = explode('.', $a[1]);
                    $link_tl = DIR_TAILIEU . date('mY', $b[0]) . '/';
                    @unlink($link_tl . $data['file']);
                }
                if ($data['picture'] != '') {
                    $arrPic = explode("|", $data['picture']);
                    if (count($arrPic) > 1) {
                        foreach ($arrPic as $val) {
                            @unlink('./' . IMG_PRODUCT . $val);
                        }
                    } else
                        @unlink('./' . IMG_PRODUCT . $data['picture']); //xoá ảnh
                }
                if ($data['picture2'] != '') {
                    $arrPic = explode("|", $data['picture2']);
                    if (count($arrPic) > 1) {
                        foreach ($arrPic as $val) {
                            @unlink('./' . IMG_PRODUCT_THUMB . $val);
                        }
                    } else
                        @unlink('./' . IMG_PRODUCT_THUMB . $data['picture2']); //xoá ảnh
                }
                return array('0', 'Xóa thành công');
            } else {
                return array('1', 'Có lỗi trong quá trình xử lý!');
            }
        } else {
            return array('1', 'Không tồn tại sản phẩm này!');
        }
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

    public static function searchCondition($param) {
        $conditions = ' 1 = 1 ';
        if (isset($_GET['search'])) {

            if ($param['title'] <> '') {
                $conditions .= " AND title LIKE '%" . $param['title'] . "%'";
            }
            if ($param['account_name'] <> '') {
                $conditions .= " AND account_name LIKE '%" . $param['account_name'] . "%'";
            }

            if ($param['type'] <> '0') {
                $conditions .= " AND type ='" . $param['type'] . "'";
            }

            if ($param['account_id'] <> '') {
                $conditions .= " AND account_id ='" . (int) $param['account_id'] . "'";
            }
            if ($param['status'] <> 0) {
                $conditions .= " AND status ='" . $param['status'] . "'";
            }
            if ($param['parent'] <> '0') {
                $arr = explode('|', $param['parent']);
                if (count($arr) == 2) {
                    $conditions .= " AND sub_category_id ='" . (int) $arr[0] . "'";
                } else {
                    $conditions .= " AND category_id ='" . (int) $arr[0] . "'";
                }
            }

            if ($param['begin_createtime'] <> '' && $param['end_createtime'] <> '') {
                $begin_time = SystemDateTime::to_time_begin($param['begin_createtime']);
                $end_time = SystemDateTime::to_time_end($param['end_createtime']);
                $conditions .= " AND  create_time > " . $begin_time . " AND create_time < " . $end_time . "";
            } else if ($param['end_createtime'] <> '' && $param['begin_createtime'] == '') {
                $end_time = SystemDateTime::to_time_end($param['end_createtime']);
                $begin_time = SystemDateTime::to_time_begin(date('d/m/Y'));
                $conditions .= " AND  create_time > " . $begin_time . " AND create_time < " . $end_time . "";
            } else if ($param['begin_createtime'] <> '' && $param['end_createtime'] == '') {
                $begin_time = SystemDateTime::to_time_begin($param['begin_createtime']);
                $end_time = SystemDateTime::to_time_end(date('d/m/Y'));
                $conditions .= " AND  create_time > " . $begin_time . " AND create_time < " . $end_time . "";
            }
        }

        return $conditions;
    }

    public function delAll($array_id) {

        $str_id_del = implode(',', $array_id);
        if ($str_id_del <> '') {
            $del = DataHelper::delete($this->tableName(), 'id IN (' . $str_id_del . ')');
            $arr = DataHelper::selectAll($this->tableName(), 'picture,picture2', 'id IN (' . $str_id_del . ')');
            foreach ($arr as $data) {
                if ($data['picture'] != '') {
                    $arrPic = explode("|", $data['picture']);
                    if (count($arrPic) > 1) {
                        foreach ($arrPic as $val) {
                            @unlink('./' . IMG_PRODUCT . $val);
                        }
                    } else
                        @unlink('./' . IMG_PRODUCT . $data['picture']); //xoá ảnh
                }
                if ($data['picture2'] != '') {
                    $arrPic = explode("|", $data['picture2']);
                    if (count($arrPic) > 1) {
                        foreach ($arrPic as $val) {
                            @unlink('./' . IMG_PRODUCT_THUMB . $val);
                        }
                    } else
                        @unlink('./' . IMG_PRODUCT_THUMB . $data['picture2']); //xoá ảnh
                }
            }

            return $del;
        } else {
            return false;
        }
    }

    public static function getProductSiteMap() {
        return DataHelper::selectAll('products', 'id,title', 'status=1');
    }

     public function updateDataStatus($data, $id) {


        $f = DataHelper::update($this->tableName(), $data, '`id` = ' . (int) $id);
        if ($f > 0) {
            return true;
        } else
            return false;
    }
}
