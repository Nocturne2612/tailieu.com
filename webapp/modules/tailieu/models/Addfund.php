<?php

class Addfund extends TModel {

    public $select_method;
    public $txtSoSeri;
    public $txtSoPin;
    public $verifyCode;

    public function attributeNames() {
        
    }

    public function rules() {
        return array(
            array('txtSoSeri,txtSoPin,verifyCode,select_method', 'required', 'message' => ' - {attribute} bắt buộc phải nhập/chọn.'),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels() {
        return array(
            'select_method' => 'Loại thẻ',
            'txtSoSeri' => 'Số seri',
            'txtSoPin' => 'Mã số thẻ',
            'verifyCode' => 'Mã bảo mật',
        );
    }

    /**
     * Returns the static model of the specified AR class.
     * @return CFormModel the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '';
    }

    public static function addHistory($point, $info, $desc, $ref_code, $status,$type = 1) {
        $f = DataHelper::insert('history_point', array('point' => $point, 'id_account' => $info['id'], 'desc' => $desc, 'create_time' => time(), 'type' => $type, 'ref_code' => $ref_code, 'status' => $status));
        $new_point = $info['point'] + $point;
        Accounts::performInfoAccount(array('point' => $new_point), $info);
        return $f;
    }

    public static function getHistoryByToken($token_code) {
        return DataHelper::selectOne('history_point', 'status,ref_code,id,point', 'type=1 and ref_code="' . $token_code . '"  ');
    }

    public static function updateHistory($array, $where) {
        return DataHelper::update('history_point', $array, $where);
    }

}
