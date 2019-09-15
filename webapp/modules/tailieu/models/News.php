<?php

class News extends TModel {

    public static function model($className = __class__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'news';
    }

    public function getDataSlider() {
        $conditions = ' position = 1 AND status = 1 and image <> "" ';
        return DataHelper::selectAll($this->tableName(), 'title,id,tag,subcontent,image,parent_id', $conditions, 'create_time DESC', 7, 0);
    }

    public function getDataTK($tag,$id) {
        $conditions = '1=1 and id <> '.$id;
        if ($tag <> '') {
            $arr = explode(',', $tag);
            if ($arr) {
                foreach ($arr as $k) {
                    $conditions .= " and `tag` LIKE '%" . $k . "%'";
                }
                $conditions .= ' and status = 1';
                return DataHelper::selectAll($this->tableName(), 'title,id,tag,subcontent,image,parent_id', $conditions, '	create_time DESC', 10, 0);
            } else
                return false;
        } else
            return false;
    }

    public function getData($param = '') {
        $conditions = self::searchCondition($param);
        $conditions .= ' and status = 1';
        var_dump($conditions);die;
        
        $array = Paging::getDataForFunction($this->tableName(), 'title,id,create_time,image,subcontent,parent_id', $conditions, 'create_time DESC');

        return $array;
    }

    public function getOneNews($ID) {
        if ($ID > 0) {
            $condition = " id = " . intval($ID);
            return $newsData = DataHelper::selectOne($this->tableName(), "*", $condition);
        } else {
            return false;
        }
    }

    public static function searchCondition($param) {
        $conditions = ' 1 = 1 ';
        if (isset($param['id']) && $param['id'] <> 0) {
            $conditions .= " and parent_id = " . intval($param['id']);
        }

        //return $conditions;
        return $conditions;
    }

}
