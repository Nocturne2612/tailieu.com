<?php

class DataHelper extends CDbConnection {

    /**
     * SQL Name Quote
     * 
     * @param string $text
     * @return string
     */
    public static function nameQuote($text) {
        $result = '`' . $text . '`';
        return $result;
    }

    static public function selectAll($table, $fields, $condition = null, $order = null, $limit = null, $offset = null) {
        $queryData = Yii::app()->db->createCommand()->select($fields)->from($table);
        $queryData->andWhere($condition);
        if ($order !== null) {
            $queryData->order($order);
        }
        if ($limit !== null) {
            $queryData->limit($limit, $offset);
        }

        $rowData = $queryData->queryAll();
        return $rowData;
    }

    static public function selectOne($table, $fields = '*', $condition = '') {
        $queryData = Yii::app()->db->createCommand()->select($fields)->from($table)
                ->andWhere($condition)
                ->limit(1);
        $rowData = $queryData->queryRow();
        return $rowData;
    }

    /**
     * Insert
     *
     * @param string $table DBTable name
     * @param array $data
     * @return int Last Insert Id
     * 
     */
    static function insert($table, $data) {
        $queryData = Yii::app()->db->createCommand()->insert($table, $data);
        return Yii::app()->db->getLastInsertID();
    }

    /**
     * Update
     *
     * @param string $table Db Table Name
     * @param string $data Du lieu update voi key la ten truong va value la gia tri can update
     * @param string $where SQL query WHERE clause     * 
     * @return affected rows
     * @throws SystemException
     */
    static function update($table, $data, $where) {

        $queryData = Yii::app()->db->createCommand()->update($table, $data, $where);
        return $queryData;
    }

    /**
     * Delete
     *
     * @param string $table Db Table Name	 
     * @param string $where SQL query WHERE clause
     * @param string $limit SQL query LIMIT
     * 
     * @return affected rows
     * @throws SystemException
     */
    public static function delete($table, $where, $limit = null) {
        $queryData = Yii::app()->db->createCommand()->delete($table, $where);
        return $queryData;
    }

    /**
     * Delete By Id
     * delete record by primary key
     *
     * @param string $table
     * @param int $id
     * @return int affectd rows
     * 
     * @throws SystemException
     */
    public static function deleteById($table, $id) {
        //return $this->delete($table, '`id`=' . $id);
        $queryData = Yii::app()->db->createCommand()->delete($table, 'id=' . $id);
        return $queryData;
    }

    /**
     * Count number of records by key DUCLM
     *
     * @param string $table DBTable Name
     * @param string $where SQL Query Where Clause
     * @param string $key column name to count
     * 
     * @return int result
     */
    public static function count($table, $condition = null, $key = 'id') {

        $key = self::nameQuote($key);
        $sql = 'SELECT COUNT(' . $key . ') AS `rows` FROM ' . $table
                . (($condition != null) ? ' WHERE ' . $condition : '');
        $queryData = Yii::app()->db->createCommand($sql);
        $rowData = $queryData->queryAll();
        return (int) $rowData[0]['rows'];
    }

    /**
     * creatCondition by key DUCLM
     *
     * @param array $param 
     * @param string $and SQL Query Where Clause AND, OR ...
     * @param string $other column name to count
     * 
     * @return int result
     */
    public static function creatCondition($param, $and = ' AND ', $other = '') {
        $condition = '';
        if (is_array($param)) {
            foreach ($param as $key => $value) {
                $condition .= $and . $other . self::nameQuote($key) . ' ' . $value[0] . ' ' . $value[1];
            }
        }
        return $condition;
    }

}
