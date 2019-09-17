<?php

class Session {

    public static function set($name, $value) {
        Yii::app()->session[$name] = $value;
    }

    public static function get($name) {
        return Yii::app()->session[$name];
    }

    public static function remove($name) {
        if (self::checkExists($name)) {
            Yii::app()->session->remove($name);
        }
    }

    public static function destroy() {
        Yii::app()->session->destroy();
    }

    public static function checkExists($name) {
        if (isset(Yii::app()->session[$name])) {
            return true;
        } else {
            return false;
        }
    }

}
