<?php

class ObjInput {

    protected static $arrValueGet = array(); //@param mang luu gia tri cac bien GET tu url	

    function __construct() {
        
    }

    /*     * *
     * 	Function name: get
     * 	description Ham lay gia tri tu form hoac tu url
     * @param $varName Ten param can lay gia tri
     * @param $type - Kieu du lieu can tra ve
     * @param $defaultValue - Gia tri mac dinh duoc truyen vao
     * @param $method - Phuong thuc GET or POST or FILES, default ""
     * @return Gia tri theo kieu $type duoc truyen vao
     * @note Bat buoc phai truyen du 2 doi so $varName, $type

     * * */

    public static function get($varName, $type, $defaultValue = '', $method = '') {
        $value = false;
        switch ($method) {
            case 'GET' :
                if (self::$arrValueGet[$varName]) {
                    return self::$arrValueGet[$varName];
                } else {
                    if (isset($_GET[$varName])) {
                        $value = $_GET[$varName];
                    }
                    break;
                }
            case 'POST' :
                if (isset($_POST[$varName])) {
                    $value = $_POST[$varName];
                }
                break;
            case 'FILES' :
                $value = $_FILES[$varName];
                break;
            default :
                if (!empty($_POST[$varName])) {
                    $value = $_POST[$varName];
                } else if (!empty($_GET[$varName])) {
                    $value = $_GET[$varName];
                } else if (!empty($_REQUEST[$varName])) {
                    $value = $_REQUEST[$varName];
                } else if (!empty($_FILES[$varName])) {
                    $value = $_FILES[$varName];
                }
                break;
        }
        if (!$value) {
            $value = $defaultValue;
        }
        $value = self::doConvertType($value, $type);
        if ($method == 'GET' && !self::$arrValueGet[$varName]) {
            self::$arrValueGet[$varName] = $value;
        }
        return $value;
    }

    /**
     * @function isFileter
     */
    static function isFilter($value, $type = 'string') {
        if ($type == 'int') {
            return intval((int) $value);
        } else if ($type == 'double') {
            return doubleval((double) $value);
        } else if ($type == 'float') {
            return floatval((float) $value);
        } else {
            /* $parterm = '/[a-zA-Z0-9\_\/\-.]+/Uis';
              preg_match_all($parterm, $value, $maches);
              $a = array();
              foreach ($maches[0] as $k => $vl) {
              $a = $vl;
              }
              return (string) implode(" ", $a); */
            $string = trim($value);
            $string = str_replace("\\'", "'", $string);
            $string = str_replace("'", "''", $string);
            $string = str_replace('\"', "&quot;", $string);
            $string = str_replace("<", "&lt;", $string);
            $string = str_replace(">", "&gt;", $string);
            $string = htmlspecialchars($string);
            return $string;
        }
    }

    /*     * *
     * 	Function name: doConvertType
     * 	description Ham convert du lieu theo kieu du lieu duoc truyen vao
     * @param $value - gia tri can convert
     * @param $type - Kieu du lieu can convert			
     * @return Gia tri moi duoc convert theo dinh kieu $type

     * * */

    private static function doConvertType($value, $type) {
        switch ($type) {
            case 'def' :
                $newValue = self::convertTextContent($value);
                break;
            case 'int' :
                $newValue = (int) $value;
                break;
            case 'array':
                return $value;
                break;
            case 'double' :
                $value = str_replace('.', '', $value);
                $value = str_replace(',', '.', $value);
                $newValue = doubleval($value);
                break;
            case 'currency_format' :
                $newValue = self::currency_format($value);
                break;
            default :
                if (get_magic_quotes_gpc() == 0) {
                    $value = addslashes($value);
                }
                $newValue = htmlspecialchars($value);
                break;
        }
        return $newValue;
    }

    /*     * *
     * 	Function name currency_format
     * 	description Ham dinh dang so theo chuan 	
     * @param $value - gia tri can dinh dang		
     * @return Gia tri da duoc dinh dang
     * @description ex: dau vao $value = 1000000 ket qua tra ve 1.000.000

     * * */

    static function currency_format($value) {
        $value = number_format($value, 2, ',', '.');
        $value = str_replace(',00', '', $value);
        return $value;
    }

    private static function convertTextContent($value) {
        return $value;
    }

    /*     * *
     * 	Function name currency_format_en
     * 	description Ham dinh dang so theo chuan nuoc ngoai
     * @param $value - gia tri can dinh dang		
     * @return Gia tri da duoc dinh dang
     * @description ex: dau vao $value = 1000000 ket qua tra ve 1,000,000

     * * */

    static function currency_format_en($value) {
        $value = number_format($value, 2, '.', ',');
        $value = str_replace('.00', '', $value);
        return $value;
    }

    /*     * *
     *    Function name getImageFolder
     *    description Ham tra ve thuc muc anh se duoc luu tru (su dung trong cac truong hop thu muc anh duoc phan nho theo thang, vi du nhu item)
     *         
     * @param $package - package duc luu anh 
     * @param $path - duong dan truyen vao
     * @return path luu anh
     * @ex voi $package = 'item', $path = 'data/images'
     *      ket qua tra ve data/image/item/m_Y (d = date('m'), Y = data('Y'))

     * * */

    static function getImageFolder($package = '', $path = 'data/images/') {
        $path .= $package . '/';
        $folder = date('m') . '_' . date('Y');
        if (!is_dir($path . $folder)) {
            @mkdir($path . $folder);
            @mkdir($path . $folder . '/thumbs');
        }
        return $path . $folder;
    }

    /*     * *
     *    Function name: getFolderMonthYear
     *    description: Ham lay thu muc tu cac files co kieu luu tru m_Y_xxxx.yyy
     *         
     * @param $filename ten file
     * @return folder kieu m_Y  

     * * */

    static function getFolderMonthYear($filename) {
        $str = explode('_', $filename);
        return $str [0] . '_' . $str [1];
    }

    /*     * *
     *    description Function getCombo
     *    description ham tra ve gia tri de ve combobox
     *         
     * @param $beginInt
     * @param $endInt
     * @param $selected: gia tri duoc chon hien tai
     * @return string

     * * */

    static function getCombo($beginInt, $endInt, $selected) {
        for ($i = $beginInt; $i <= $endInt; $i ++) {
            $input .= '<option value="' . $i . '"';
            if ($i == $selected) {
                $input .= ' selected';
            }
            $input .= '>' . $i . '</option>';
        }
        return $input;
    }

    /*     * *
     *    Function name: getOption
     *    description: ham tra ve du lieu ve option 
     *         
     * @param $options - mang gia tri cac option
     * @param $selected - gia tri duoc chon hien tai
     * @return string
     *         
     * * */

    static function getOption($options, $selected) {
        $input = '';
        if ($options)
            foreach ($options as $key => $text) {
                $input .= '<option value="' . $key . '"';
                if ($key == $selected) {
                    $input .= ' selected';
                }
                $input .= '>' . $text . '</option>';
            }
        return $input;
    }

}

?>