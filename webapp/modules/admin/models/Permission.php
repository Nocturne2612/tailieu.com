<?php

class Permission extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @return CActiveRecord the static model class
     */
    public static function model( $className = __class__ ) {
        return parent::model( $className ) ;
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'permissions' ;
    }
    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array() ;
    }

    public function getData( $param ) {
        $conditions = self::searchCondition( $param ) ;
        $Data = Paging::getDataForFunction( $this->tableName(), '*', $conditions, 'id DESC' ) ;
        return $Data ;
    }

    public function getOneData( $id ) {
        $accountsData = DataHelper::selectOne( $this->tableName(), "*", "id = '" . $id .
            "'" ) ;
        return $accountsData ;
    }

    public function insertData( $data ) {
        $id = '' ;
        $data['type'] = 'controllers' ;
        $data['value'] = $data['value'] ;
        if ( ! $this->checkExits( 'value=:value', array( ':value' => $data['value'] ) ) ) {
            $id = DataHelper::insert( $this->tableName(), $data ) ;
           return $data['value'];
        } 
     
    }
    public function insertOneData( $data ) {
        if(DataHelper::insert( $this->tableName(), $data )=== false )
        return false;
      
    }
    public function updateData( $data, $id ) {

        return DataHelper::update( $this->tableName(), $data, " id = '" . $id . "'" ) ;
    }

    public function deleteData( $id ) {
        return DataHelper::delete( $this->tableName(), " id = '" . $id . "'" ) ;
    }

    public function checkExits( $condition, $array ) {
        return $this->model()->exists( $condition, $array ) ;
    }

    public static function searchCondition( $param ) {
        $conditions = ' 1 = 1 ' ;
        if ( isset( $_GET ) ) {
            $id = $param['id'] ;
            $name = $param['name'] ;
            $type = $param['type'] ;

            if ( $id <> '0' ) {
                $conditions .= " AND id =" . $id ;
            }
            if ( $name <> '' ) {
                $conditions .= " AND name = '" . $name . "'" ;
            }
            if ( $type <> '' ) {
                $conditions .= " AND type ='" . $type . "'" ;
            }
        }
        // echo $conditions;
        return $conditions ;
    }

}
