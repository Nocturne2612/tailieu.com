<?php

class Validation {

    public static function isImage($file, $key = -1) {
//        var_dump($key);die();
        if ($key == -1) {
//            if (self::isFile($file)) {
            return (in_array($file['type'], array('image/gif', 'image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png')));
//            }
        } else {
//            if (self::isFile($file, $key)) {
            return (in_array($file['type'][$key], array('image/gif', 'image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png')));
//            }
        }
        return false;
    }

    public static function checkImage($value) {
        if (($value == "image/gif") || ($value == "image/jpg") || ($value == "image/jpeg") || ($value == "image/png"))
            return true;
        else
            return false;
    }

    static function _checkImages($file_tmp) {
        if (!empty($file_tmp) && isset($file_tmp['type']) && $file_tmp['type']) {
            foreach ($file_tmp['type'] as $key => $value) {
                if (!Validation::checkImage($value)) {
                    return false;
                }
            }
            return true;
        }
        return false;
    }

    public static function checkLength($value, $min = 1, $max = false) {
        $length = strlen(trim($value));
        if ($length < $min) {
            return false;
        } elseif ($max !== false && $length > $max) {
            return false;
        }
        return true;
    }

    public static function isDate($value) {
        $regular = '/^(?P<date>\d{1,2})[\/-](?P<month>\d{1,2})[\/-](?P<year>\d{4})$/';
        if (self::_process($regular, $value, $groups)) {
            return (checkdate($groups['month'], $groups['date'], $groups['year']) && mktime(0, 0, 0, $groups['month'], $groups['date'], $groups['year']));
        }
        return false;
    }

    public static function isDateTime($value) {
        $dates = explode(" ", $value);
        if (!$dates[0]) {
            return date('H:i:s', $dates[0]);
        }
        $regular = '/^(?P<date>\d{1,2})[\/-](?P<month>\d{1,2})[\/-](?P<year>\d{4})$/';
        if (self::_process($regular, $dates[1], $groups)) {
            return checkdate($groups['month'], $groups['date'], $groups['year']);
        }
        return false;
    }

    public static function isEmail($value) {
        $regular = '/^([a-zA-Z0-9][a-zA-Z0-9_\-]*(([\.][a-zA-Z0-9_\-]*)*)[a-zA-Z0-9]@([a-zA-Z0-9][a-zA-Z0-9_\-]*[a-zA-Z0-9]\.)+([a-zA-Z0-9]{2,4}))$/';
        return self::_process($regular, $value);
    }

    public static function isMobile($value) {
        $regular = '/^\d{10,11}$/';
        return self::_process($regular, $value);
    }

    public static function isPhoneNumber($value) {
        $regular = '/^\d{7,15}$/';
        return self::_process($regular, $value);
    }

    public static function isPassword($value) {
        $regular = '/^[\S]{6,20}$/';
        return self::_process($regular, $value);
    }

    public static function isPasswordOnlyNumber($value) {
        $regular = '/^\d{6,25}$/';
        return self::_process($regular, $value);
    }

    public static function isNumber($value) {
        $regular = '/^\d{0,3600}$/';
        return self::_process($regular, $value);
    }

    public static function isFloatNumber($value) {
        $regular = '/^(\d+)x(\d+)/';
        return self::_process($regular, $value);
    }

    private static function _process($regular, $value, &$groups = false) {
        if (preg_match($regular, $value, $groups)) {
            return true;
        } else {
            return false;
        }
    }

    public static function checkLengthSecureCode($value, $max = 32) {
        $length = strlen(trim($value));
        if ($length < $max) {
            return false;
        } elseif ($length > $max) {
            return false;
        }
        return true;
    }

    public static function checkFileSize($file, $max = 100, $key = -1) {
        $max = $max * 1024;
        if ($key == -1) {
            return (array_key_exists('tmp_name', $file) && filesize($file['tmp_name']) <= $max);
        } else {
            return (array_key_exists('tmp_name', $file) && filesize($file['tmp_name'][$key]) <= $max);
        }
    }

}

?>