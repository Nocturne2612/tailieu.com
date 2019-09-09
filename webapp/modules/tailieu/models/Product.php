<?php

class Product extends CFormModel {

    public static function model($className = __class__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'products';
    }

    public function updateData($data, $condition) {
        return DataHelper::update($this->tableName(), $data, $condition);
    }

    public function getProductsHot($param = '') {
        $conditions = "status = 1 AND type like '%2%'";
        $array = DataHelper::selectAll($this->tableName(), 'price,proprice,title,id,create_time,picture,sub_category_id,category_id,short,count,count_down,tag', $conditions, 'id DESC', 5, 0);

        return $array;
    }

    public function getDetail($id) {
        if ($id > 0) {
            $conditions = ' id = ' . $id . ' ';
            $d = DataHelper::selectOne($this->tableName(), '*', $conditions);
            DataHelper::update($this->tableName(), array('count' => ($d['count'] + 1)), ' id = ' . $id);
            return $d;
        } else {
            return false;
        }
    }

    public function getProductsNew($id, $check = false) {
        $sort = ObjInput::get('sort', 'str', '');
        if ($sort == 'hot') {
            $conditions = "status = 1 AND type like '%2%'";
        } else if ($sort == 'free') {
            $conditions = "status = 1 AND type like '%1%' and price = 0";
        } else {
            $conditions = "status = 1 AND type like '%1%'";
        }

        if ($id > 0) {
            $conditions .= ' AND category_id = ' . $id;
        }
        if ($check) {

            if ($check == 'hot') {
                $conditions = "status = 1 AND type like '%2%'";
            } else if ($check == 'free') {
                $conditions = "status = 1 AND type like '%1%' and price = 0";
            } else {
                $conditions = "status = 1 AND type like '%1%'";
            }
        }

        $array = DataHelper::selectAll($this->tableName(), 'price,proprice,title,id,create_time,picture,sub_category_id,category_id,short,count,count_down,tag', $conditions, 'id DESC', 28, 0);

        return $array;
    }

    public function getProductsNew2($id, $check = false) {
        $sort = ObjInput::get('sort', 'str', '');
        if ($sort == 'hot') {
            $conditions = "status = 1 AND type like '%2%'";
        } else if ($sort == 'free') {
            $conditions = "status = 1 AND type like '%1%' and price = 0";
        } else {
            $conditions = "status = 1 AND type like '%1%'";
        }

        if ($id > 0) {
            $conditions .= ' AND category_id = ' . $id;
        }
        if ($check) {

            if ($check == 'hot') {
                $conditions = "status = 1 AND type like '%2%'";
            } else if ($check == 'free') {
                $conditions = "status = 1 AND type like '%1%' and price = 0";
            } else {
                $conditions = "status = 1 AND type like '%1%'";
            }
        }


        $array = Paging::getDataForFunction($this->tableName(), 'price,proprice,title,id,create_time,picture,sub_category_id,category_id,short,count,count_down,tag', $conditions, 'id desc');
        return $array;
    }

    public function getProductTopCountdown($id) {
        $conditions = " status = 1 ";
        if ($id > 0) {
            $conditions .= ' AND category_id = ' . $id;
        }

        $array = DataHelper::selectAll($this->tableName(), 'price,proprice,title,id,create_time,picture,sub_category_id,category_id,short,count,count_down,tag', $conditions, 'count_down DESC', 10, 0);
        return $array;
    }

    public function getData($parent_id = '0', $sub_category = '0', $order) {
        $conditions = ' status = 1 ';
		if($sub_category <> '0' && $parent_id <> '0') {
			$conditions .= ' and (sub_category_id=' . (int) $sub_category;
			$conditions .= " or sub_category_id2 like '%\"".(int) $sub_category."\"%') ";
			//$conditions .= ' or category_id=' . (int) $parent_id;
			$conditions .= " or sub_category_id2 like '%\"".(int) $parent_id."\"%' ";
		}else {
			if ($sub_category <> '0') {
            $conditions .= ' and sub_category_id=' . (int) $sub_category;
            
           $conditions .= " or sub_category_id2 like '%\"".(int) $sub_category."\"%' ";
//            $conditions .= " and sub_category_id2 like '%\"".(int) $sub_category."\"%' ";
        }
        if ($parent_id <> '0') {
            $conditions .= ' and category_id=' . (int) $parent_id;
            $conditions .= " or sub_category_id2 like '%\"".(int) $parent_id."\"%' ";
         //  $conditions .= " and sub_category_id2 like '%\"".(int) $parent_id."\"%' ";
        }
	}
       
        //var_dump($conditions);die();
        $array = Paging::getDataForFunction($this->tableName(), 'price,proprice,title,id,create_time,picture,sub_category_id,category_id,short,count,count_down,tag,picture', $conditions, $order, '4');

        return $array;
    }

    public function getProductRelation($cate_id, $sub_id) {

        if ($sub_id != '') {
            $conditions = ' sub_category_id = ' . $sub_id . ' AND status = 1';
        } else
            $conditions = ' category_id = ' . $cate_id . ' AND status = 1';
        $conditions .= ' and id <> ' . ObjInput::get('id', 'int', 0);
        return DataHelper::selectAll($this->tableName(), 'title,id,desc,short,category_id,sub_category_id,count_down,picture', $conditions, 'create_time DESC', '9');
    }

    public function getDataByUsers($param = '') {
        $conditions = self::searchCondition($param);
        //echo $conditions;
        $array = Paging::getDataForFunction($this->tableName(), '*', $conditions, 'create_time DESC');
        return $array;
    }

    public static function searchCondition($param) {
        $conditions = ' 1 = 1 ';

        if ($param['account_id'] > 0) {
            $conditions .= ' AND account_id = ' . $param['account_id'];
        }
        if ($param['status'] <> 0) {
            $conditions .= ' AND status = ' . (int) $param['status'];
        }
        if ($param['begin_createtime'] <> 'dd-mm-yyyy' && $param['end_createtime'] <> 'dd-mm-yyyy') {
            $begin_time = SystemDateTime::to_time_begin($param['begin_createtime']);
            $end_time = SystemDateTime::to_time_end($param['end_createtime']);
            $conditions .= " AND  create_time > " . $begin_time . " AND create_time < " . $end_time . "";
        } else if ($param['end_createtime'] <> 'dd-mm-yyyy' && $param['begin_createtime'] == 'dd-mm-yyyy') {
            $end_time = SystemDateTime::to_time_end($param['end_createtime']);
            $begin_time = SystemDateTime::to_time_begin(date('d/m/Y'));
            $conditions .= " AND  create_time > " . $begin_time . " AND create_time < " . $end_time . "";
        } else if ($param['begin_createtime'] <> 'dd-mm-yyyy' && $param['end_createtime'] == 'dd-mm-yyyy') {
            $begin_time = SystemDateTime::to_time_begin($param['begin_createtime']);
            $end_time = SystemDateTime::to_time_end(date('d/m/Y'));
            $conditions .= " AND  create_time > " . $begin_time . " AND create_time < " . $end_time . "";
        }
        return $conditions;
    }

}
