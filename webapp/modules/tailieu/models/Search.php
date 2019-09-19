<?php

class Search extends CFormModel {

    public static function model($className = __class__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'products';
    }

    public function searchKeyword($keyword,$cate = '') {
//        $keyword = (ini_get('magic_quotes_gpc')) ? stripslashes($keyword) : $keyword;
        //$keyword = mysql_real_escape_string($keyword);
//        $keyword = strtoupper(preg_replace('/\s+/', '|', trim($keyword)));
        # create a MySQL REGEXP for the search:
        $regexp = "REGEXP '[[:<:]]($keyword)[[:>:]]'";
        $where = " ( UPPER(`full`) $regexp OR " . "`title` $regexp"." OR " . "`tag` $regexp )";
        if($cate) {
            $where .= ' AND category_id = '.$cate;
//            var_dump($where);die();
        }

        $data = Paging::getDataForFunction($this->tableName(), '*', $where, 'update_time DESC');
        return $data;
    }

}
