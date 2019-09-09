<?php

/**
 * Description of News
 *
 * @author DUCLM
 */
class News extends CkkFormModel {

    public static function tableName() {
        return "news";
    }

    public function getDataCategory() {
        $newsData = DataHelper::selectAll("category_news", "title,id", " title <>'' ", 'id ASC');
        $arr_cnews = array();
        if (is_array($newsData)) {
            foreach ($newsData as $k => $v) {
                $arr_cnews[$v['id']] = array(
                    'title' => $v['title'],
                    'id' => $v['id'],
                    'link' => SystemBase::buildUrl('tailieu/categorynews', array('id' => $v['id'],'title'=>$v['title'])),
                );
            }
        }
        return $arr_cnews;
    }

    public function getData($param) {
        $conditions = self::searchCondition($param);
        $array = Paging::getDataForFunction($this->tableName(), '*', $conditions, 'id DESC');

        return $array;
    }

    public function getOneNews($ID) {
        $condition = " id = " . intval($ID);
        $newsData = DataHelper::selectOne($this->tableName(), "*", $condition);
        return $newsData;
    }

    public function insertData($data) {
        return DataHelper::insert($this->tableName(), $data);
    }

    public function updateData($data, $id) {
        return DataHelper::update($this->tableName(), $data, '`id` = ' . (int) $id);
    }

    public static function deleteData($id) {
        $news = DataHelper::selectOne(self::tableName(), "image", '`id` = ' . (int) $id);
        if ($news) {

            if (DataHelper::deleteById(self::tableName(), (int) $id) > 0) {
                @unlink('./'.IMG_NEWS_THUMB . $news['image']);
                @unlink('./'.IMG_NEWS . $news['image']);
                echo Strings::alert('Bạn đã xoá tin!', Yii::app()->createUrl('admin/news/'));

                die();
            } else {

                echo Strings::alert('Có lỗi trong quá trình xử lý!', Yii::app()->createUrl('admin/news/'));
                die();
            }
        } else {
            echo Strings::alert('Không tồn tại tin này!', Yii::app()->createUrl('admin/news/'));
            die();
        }
    }

    public static function searchCondition($param) {
        $conditions = ' 1 = 1 ';
        //return $conditions;
        if (isset($_GET['search'])) {
            $id = $param['id'];
            $title = $param['title'];
            $parent = $param['parent'];
            $status = $param['status'];
            $begin_createtime = $param['begin_createtime'];
            $end_createtime = $param['end_createtime'];

            if ($id <> '0') {
                $conditions .= " AND id =" . $id;
            }
            if ($parent <> '0') {
                $arr = explode('|', $parent);
                if ((int) $arr[0] <> '0') {
                    $conditions .= " AND sub_id ='" . (int) $arr[0] . "'";
                }
                if ((int) $arr[1] <> '0') {
                    $conditions .= " AND parent_id ='" . (int) $arr[1] . "'";
                }
            }
            if ($title <> '') {
                $conditions .= " AND title LIKE '%" . $title . "%'";
            }
            if ($status <> 0) {
                $conditions .= " AND status =" . $status;
            }
            if ($begin_createtime <> '' && $end_createtime <> '') {

                $begin_time = SystemDateTime::to_time_begin($begin_createtime);
                $end_time = SystemDateTime::to_time_end($end_createtime);
                $conditions .= " AND  create_time > " . $begin_time . " AND create_time < " . $end_time . "";
            } else
            if ($end_createtime <> '' && $begin_createtime == '') {
                $end_time = SystemDateTime::to_time_end($end_createtime);
                $begin_time = SystemDateTime::to_time_begin(date('d/m/Y'));
                $conditions .= " AND  create_time > " . $begin_time . " AND create_time < " . $end_time . "";
            } else
            if ($begin_createtime <> '' && $end_createtime == '') {
                $begin_time = SystemDateTime::to_time_begin($begin_createtime);
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
            $arr = DataHelper::selectAll($this->tableName(), 'image', 'id IN (' . $str_id_del . ')');

            foreach ($arr as $data) {
                if ($data['image'] != '') {
                    @unlink('./'.IMG_NEWS_THUMB . $data['image']);
                    @unlink('./'.IMG_NEWS . $data['image']);
                }
            }

            return $del;
        } else {
            return false;
        }
    }

}
