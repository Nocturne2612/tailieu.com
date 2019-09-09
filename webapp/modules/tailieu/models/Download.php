<?php

class Download extends TModel {

    public static function model($className = __class__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'download';
    }

    public function insertData($data) {
        return DataHelper::insert($this->tableName(), $data);
    }

    public function getProductTopCountdown_inWeek() {

        $conditions = ' status = 1  and FROM_UNIXTIME( `time_download` ) >= ( NOW( ) - INTERVAL 1 WEEK ) GROUP BY `id_product`';
        $array = DataHelper::selectAll($this->tableName(), 'id_product,price,title,id,picture,category_id,short,max(count) as count_down', $conditions, 'count DESC', 8, 0);
        return $array;
    }

    public function getData($param = '') {
        $conditions = self::searchCondition($param);
        $conditions .= ' AND news_type <> 2';
        $array = Paging::getDataForFunction($this->tableName(), '*', $conditions, 'time_download DESC');

        return $array;
    }

    public function getDataByUsers($param = '') {
        $conditions = self::searchCondition($param);
        $dataReturn = $array = Paging::getDataForFunction($this->tableName(), '*', $conditions, 'time_download DESC');
        if($array && $array['data']) {
            foreach ($array['data'] as $key => $value) {
                $id[$value['id_product']]= $value['id_product'];
                $dataReturn[$value['id']] = $value;
                
            }
            $product = DataHelper::selectAll('products', 'id,picture', 'id in('. implode(',', $id).')');
            if($product) {
                foreach ($product as $key => $value) {
                    $dataProduct[$value['id']] = $value;
                }
            }
            foreach ($array['data'] as $key => $value) {
                $id[$value['id_product']]= $value['id_product'];
                $dataReturn[$value['id']] = $value;
                $dataReturn[$value['id']]['picture'] = '';
                if(isset($dataProduct[$value['id_product']])) {
                    $dataReturn[$value['id']]['picture'] = $dataProduct[$value['id_product']]['picture'];
                }
            }
        }
        return $dataReturn;
    }

    public static function searchCondition($param) {
        $conditions = ' 1 = 1 ';

        if ($param['id_account'] > 0) {
            $conditions .= ' AND id_account = ' . $param['id_account'];
        }
        if ($param['status'] <> 0) {
            $conditions .= ' AND status = ' . (int) $param['status'];
            ;
        }
        if ($param['begin_createtime'] <> 'dd-mm-yyyy' && $param['end_createtime'] <> 'dd-mm-yyyy') {
            $begin_time = SystemDateTime::to_time_begin($param['begin_createtime']);
            $end_time = SystemDateTime::to_time_end($param['end_createtime']);
            $conditions .= " AND  time_download > " . $begin_time . " AND time_download < " . $end_time . "";
        } else if ($param['end_createtime'] <> 'dd-mm-yyyy' && $param['begin_createtime'] == 'dd-mm-yyyy') {
            $end_time = SystemDateTime::to_time_end($param['end_createtime']);
            $begin_time = SystemDateTime::to_time_begin(date('d/m/Y'));
            $conditions .= " AND  time_download > " . $begin_time . " AND time_download < " . $end_time . "";
        } else if ($param['begin_createtime'] <> 'dd-mm-yyyy' && $param['end_createtime'] == 'dd-mm-yyyy') {
            $begin_time = SystemDateTime::to_time_begin($param['begin_createtime']);
            $end_time = SystemDateTime::to_time_end(date('d/m/Y'));
            $conditions .= " AND  time_download > " . $begin_time . " AND time_download < " . $end_time . "";
        }
        return $conditions;
    }

}
