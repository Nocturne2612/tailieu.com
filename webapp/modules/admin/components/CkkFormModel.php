<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CkkFormModel extends CFormModel {

    /**
     * @return: error message string, all error message of the error fields combied into string
     */
    public function _getError() {
        if (Yii::app()->user->hasFlash('error')) {
            return Yii::app()->user->getFlash('error');
        } else
            return false;
    }
     public function _getSuccess() {
        if (Yii::app()->user->hasFlash('success')) {
            return Yii::app()->user->getFlash('success');
        } else
            return false;
    }
    public function getErrorForm() {
        $errors = $this->getErrors();
       // var_dump($errors);
        $message = false;
        if (!empty($errors)) {
            foreach ($errors as $key => $value) {
                $message .= implode(" ", $value) . '<br> ';
            }
        }
        return $message;
    }

    public function check_zero($attribute_name, $params) {
        if ($this->{$attribute_name} < 1) {
            $this->addError($attribute_name,  '- '.$this->getAttributeLabel($attribute_name). ' bắt buộc phải nhập khác 0/chọn.');
        }
    }
   
}
