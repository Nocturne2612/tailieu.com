<?php

class SystemBase {
    /*
     * Lay so dien thoai theo dinh dang 09X hoac 01XX
     * bo 84 o dau va them vao so 0 o dau
     * Ex 84979635313 thi se chuyen thanh 0979635313
     */

    public static function _formatMobileNot84($mobilenumber) {
        if (substr($mobilenumber, 0, 2) == '84') {
            $mobilenumber = '0' . substr($mobilenumber, 2, (strlen($mobilenumber) - 2));
        }
        return $mobilenumber;
    }

    /*
     * Dinh dang lai so dien thoai
     * Dua them 84 o dau va bo so 0 o dau di
     * Ex 0979635313 thi se chuyen thanh 84979635313
     */

    public static function _formatMobile84($mobilenumber) {
        if (substr($mobilenumber, 0, 2) == '84') {
            $mobilenumber = substr($mobilenumber, 2, (strlen($mobilenumber) - 2));
        }

        if (substr($mobilenumber, 0, 1) == '0') {
            $mobilenumber = substr($mobilenumber, 1, (strlen($mobilenumber) - 1));
        }

        if (substr($mobilenumber, 2, 1) == '0') {
            $mobilenumber = substr($mobilenumber, 3, (strlen($mobilenumber) - 3));
        }

        return '84' . $mobilenumber;
    }

    /*
     * Create combobux
     * @input $name,$options,$value
     * @return html combobox
     */

    public static function combobox($name, $options, $value = false, $width = '', $extra = '') {
        if ($value === false) {
            if (ObjInput::get($name)) {
                $value = ObjInput::get($name);
            }
        }

        $input = '<select class="form-control" name="' . $name . '" id="' . $name . '" style="width: ' . $width . '" ' . $extra . '>';
        if (is_array($options) && !empty($options)) {
            foreach ($options as $key => $text) {
                $input .= '<option value="' . $key . '"';
                if (trim($value) == trim($key)) {
                    $input .= ' selected="selected"';
                }
                $input .= '>' . $text . '</option>';
            }
        }
        $input .= '</select>';

        return $input;
    }

    static function get_file_type($file_name) {
        return strrchr($file_name, '.');
    }

    public static function makeImageFolder($path) {
        $date = getdate();
        $year = $date['year'];
        $month = $date['mon'];
        if (!file_exists($path)) {
            mkdir($path, 0777) or die('Không tạo được thư mục ' . $path);
        }
        if (!file_exists($path . DS . $year)) {
            mkdir($path . DS . $year, 0777) or die('Không tạo được thư mục ' . $year);
        }
        if (!file_exists($path . DS . $year . DS . $month)) {
            mkdir($path . DS . $year . DS . $month, 0777) or die('Không tạo được thư mục ' . $month);
        }
        return $path . DS . $year . DS . $month;
    }

    public static function checkCode($str) {
        $pattern = '/[^(A-Za-z0-9-_\s,;\.:"\')]/';
        $replacement = '';
        if (preg_replace($pattern, $replacement, $str) === $str) {
            $str_arr = explode(' ', $str);
            if (COUNT($str_arr) > 1) {
                return false;
            } else {
                return true;
            }
        } else {
            return false;
        }
    }

    public static function get_ascii($value) {
        $value = str_replace(".", " .", $value);
        $value = str_replace("?", " ?", $value);
        $value = str_replace("ấ", "a", $value);
        $value = str_replace("ầ", "a", $value);
        $value = str_replace("ẩ", "a", $value);
        $value = str_replace("ẫ", "a", $value);
        $value = str_replace("ậ", "a", $value);
        $value = str_replace("Ấ", "A", $value);
        $value = str_replace("Ầ", "A", $value);
        $value = str_replace("Ẩ", "A", $value);
        $value = str_replace("Ẫ", "A", $value);
        $value = str_replace("Ậ", "A", $value);
        $value = str_replace("ắ", "a", $value);
        $value = str_replace("ằ", "a", $value);
        $value = str_replace("ẳ", "a", $value);
        $value = str_replace("ẵ", "a", $value);
        $value = str_replace("ặ", "a", $value);
        $value = str_replace("Ắ", "A", $value);
        $value = str_replace("Ằ", "A", $value);
        $value = str_replace("Ẳ", "A", $value);
        $value = str_replace("Ẵ", "A", $value);
        $value = str_replace("Ặ", "A", $value);
        $value = str_replace("á", "a", $value);
        $value = str_replace("à", "a", $value);
        $value = str_replace("ả", "a", $value);
        $value = str_replace("ã", "a", $value);
        $value = str_replace("ạ", "a", $value);
        $value = str_replace("â", "a", $value);
        $value = str_replace("ă", "a", $value);
        $value = str_replace("Á", "A", $value);
        $value = str_replace("À", "A", $value);
        $value = str_replace("Ả", "A", $value);
        $value = str_replace("Ã", "A", $value);
        $value = str_replace("Ạ", "A", $value);
        $value = str_replace("Â", "A", $value);
        $value = str_replace("Ă", "A", $value);
        $value = str_replace("ế", "e", $value);
        $value = str_replace("ề", "e", $value);
        $value = str_replace("ể", "e", $value);
        $value = str_replace("ễ", "e", $value);
        $value = str_replace("ệ", "e", $value);
        $value = str_replace("Ế", "E", $value);
        $value = str_replace("Ề", "E", $value);
        $value = str_replace("Ể", "E", $value);
        $value = str_replace("Ễ", "E", $value);
        $value = str_replace("Ệ", "E", $value);
        $value = str_replace("é", "e", $value);
        $value = str_replace("è", "e", $value);
        $value = str_replace("ẻ", "e", $value);
        $value = str_replace("ẽ", "e", $value);
        $value = str_replace("ẹ", "e", $value);
        $value = str_replace("ê", "e", $value);
        $value = str_replace("É", "E", $value);
        $value = str_replace("È", "E", $value);
        $value = str_replace("Ẻ", "E", $value);
        $value = str_replace("Ẽ", "E", $value);
        $value = str_replace("Ẹ", "E", $value);
        $value = str_replace("Ê", "E", $value);
        $value = str_replace("í", "i", $value);
        $value = str_replace("ì", "i", $value);
        $value = str_replace("ỉ", "i", $value);
        $value = str_replace("ĩ", "i", $value);
        $value = str_replace("ị", "i", $value);
        $value = str_replace("Í", "I", $value);
        $value = str_replace("Ì", "I", $value);
        $value = str_replace("Ỉ", "I", $value);
        $value = str_replace("Ĩ", "I", $value);
        $value = str_replace("Ị", "I", $value);
        $value = str_replace("ố", "o", $value);
        $value = str_replace("ồ", "o", $value);
        $value = str_replace("ổ", "o", $value);
        $value = str_replace("ỗ", "o", $value);
        $value = str_replace("ộ", "o", $value);
        $value = str_replace("Ố", "O", $value);
        $value = str_replace("Ồ", "O", $value);
        $value = str_replace("Ổ", "O", $value);
        $value = str_replace("Ô", "O", $value);
        $value = str_replace("Ộ", "O", $value);
        $value = str_replace("ớ", "o", $value);
        $value = str_replace("ờ", "o", $value);
        $value = str_replace("ở", "o", $value);
        $value = str_replace("ỡ", "o", $value);
        $value = str_replace("ợ", "o", $value);
        $value = str_replace("Ớ", "O", $value);
        $value = str_replace("Ờ", "O", $value);
        $value = str_replace("Ở", "O", $value);
        $value = str_replace("Ỡ", "O", $value);
        $value = str_replace("Ợ", "O", $value);
        $value = str_replace("ứ", "u", $value);
        $value = str_replace("ừ", "u", $value);
        $value = str_replace("ử", "u", $value);
        $value = str_replace("ữ", "u", $value);
        $value = str_replace("ự", "u", $value);
        $value = str_replace("Ứ", "U", $value);
        $value = str_replace("Ừ", "U", $value);
        $value = str_replace("Ử", "U", $value);
        $value = str_replace("Ữ", "U", $value);
        $value = str_replace("Ự", "U", $value);
        $value = str_replace("ý", "y", $value);
        $value = str_replace("ỳ", "y", $value);
        $value = str_replace("ỷ", "y", $value);
        $value = str_replace("ỹ", "y", $value);
        $value = str_replace("ỵ", "y", $value);
        $value = str_replace("Ý", "Y", $value);
        $value = str_replace("Ỳ", "Y", $value);
        $value = str_replace("Ỷ", "Y", $value);
        $value = str_replace("Ỹ", "Y", $value);
        $value = str_replace("Ỵ", "Y", $value);
        $value = str_replace("Đ", "D", $value);
        $value = str_replace("Đ", "D", $value);
        $value = str_replace("đ", "d", $value);
        $value = str_replace("ó", "o", $value);
        $value = str_replace("ò", "o", $value);
        $value = str_replace("ỏ", "o", $value);
        $value = str_replace("õ", "o", $value);
        $value = str_replace("ọ", "o", $value);
        $value = str_replace("ô", "o", $value);
        $value = str_replace("ơ", "o", $value);
        $value = str_replace("Ó", "O", $value);
        $value = str_replace("Ò", "O", $value);
        $value = str_replace("Ỏ", "O", $value);
        $value = str_replace("Õ", "O", $value);
        $value = str_replace("Ọ", "O", $value);
        $value = str_replace("Ô", "O", $value);
        $value = str_replace("Ơ", "O", $value);
        $value = str_replace("ú", "u", $value);
        $value = str_replace("ù", "u", $value);
        $value = str_replace("ủ", "u", $value);
        $value = str_replace("ũ", "u", $value);
        $value = str_replace("ụ", "u", $value);
        $value = str_replace("ư", "u", $value);
        $value = str_replace("Ú", "U", $value);
        $value = str_replace("Ù", "U", $value);
        $value = str_replace("Ủ", "U", $value);
        $value = str_replace("Ũ", "U", $value);
        $value = str_replace("Ụ", "U", $value);
        $value = str_replace("Ư", "U", $value);
        return $value;
    }

    public static function text_url($str) {
        $str = htmlspecialchars_decode(htmlspecialchars_decode($str));
        $str = str_replace(array("\"", "&amp;", "&quot;", "&lsquo;", "&rsquo;", '_', '!', '*', "'", ";", ":", ".", "@", "&", "=", "+", "$", ",", "?", "%", "#", '/', '\\', "(", ")", "-"), '', $str);
        return self::bokhoangtrong(strtolower(self::get_ascii($str)));
    }

    public static function bokhoangtrong($slug) {
        $str = str_replace('-', '', $slug);
        $str = preg_replace('/\s+/', '-', trim($str));
        return $str;
    }

    public static function buildUrl($router, $params) {
        if (isset($params['title']) && $params['title'] != '') {
            $params['title'] = self::text_url($params['title']);
        }
        $params = array_filter(array_map('trim', $params), 'strlen');

        return Yii::app()->createAbsoluteUrl($router, $params);
    }

    public static function encode($text) {
        return htmlspecialchars($text, ENT_QUOTES, Yii::app()->charset);
    }

}
