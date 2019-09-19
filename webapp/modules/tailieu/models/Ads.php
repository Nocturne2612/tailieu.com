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
