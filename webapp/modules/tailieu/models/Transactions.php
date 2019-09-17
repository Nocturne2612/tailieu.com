<?php

class Transactions extends CFormModel {

    public static function Transaction_getTable() {
        return 'transactions';
    }

    public static function getDataTransaction($param = '') {
        $accountInfo = Accounts::infoAccount();
        
        $conditions = self::searchCondition($param);
        $conditions .= " AND `useruid` = '" . $accountInfo['useruid'] . "'";
        $array = Paging::getDataForFunction(self::Transaction_getTable(), '*', $conditions, 'create_time DESC');
        return $array;
    }

    public static function searchCondition($param) {
        $conditions = ' 1 = 1 ';
        //return $conditions;
        if (isset($_GET['search'])) {

            $status = $param['status'];
            $begin_createtime = $param['begin_createtime'];
            $end_createtime = $param['end_createtime'];

            if ($status <> '0') {
                $conditions .= " AND transaction_status =" . $status;
            }
            if ($begin_createtime <> 'dd-mm-yyyy' && $end_createtime <> 'dd-mm-yyyy') {

                $begin_time = SystemDateTime::to_time_begin($begin_createtime);
                $end_time = SystemDateTime::to_time_end($end_createtime);
                $conditions .= " AND  create_time > " . $begin_time . " AND create_time < " . $end_time . "";
            } elseif ($end_createtime <> 'dd-mm-yyyy' && $begin_createtime == 'dd-mm-yyyy') {

                $end_time = SystemDateTime::to_time_end($end_createtime);
                $begin_time = SystemDateTime::to_time_begin(date('d/m/Y'));
                $conditions .= " AND  create_time > " . $begin_time . " AND create_time < " . $end_time . "";
            } elseif ($begin_createtime <> 'dd-mm-yyyy' && $end_createtime == 'dd-mm-yyyy') {

                $begin_time = SystemDateTime::to_time_begin($begin_createtime);
                $end_time = SystemDateTime::to_time_end(date('d/m/Y'));
                $conditions .= " AND  create_time > " . $begin_time . " AND create_time < " . $end_time . "";
            }
        }

        return $conditions;
    }

}

?>