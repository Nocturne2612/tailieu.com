<?php

class Strings {

    public static function remove_space($slug) {
        $str = str_replace('-', '', $slug);
        $str = preg_replace('/\s+/', '-', trim($str));
        return $str;
    }

    public static function cut_char($str, $n) {
        $str = strip_tags($str);
        if (strlen($str) < $n) {
            return $str;
        }
        $html = substr($str, 0, $n);
        $html = substr($html, 0, strrpos($html, ' '));
        return $html;
    }

    public static function alert($al, $url = '') {
        if ($url <> '') {
            $url = "document.location.href='" . $url . "'";
        }
        $string = '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />' . "<script language='javascript'>alert('" . $al . "');$url;</script>";
        return $string;
    }

    public static function bokhoangtrong($slug) {
        $str = str_replace('-', '', $slug);
        $str = preg_replace('/\s+/', '-', trim($str));
        return $str;
    }

    public static function text_url($str) {
        $str = htmlspecialchars_decode(htmlspecialchars_decode($str));
        $str = str_replace(array("\"", "&amp;", "&quot;", "&lsquo;", "&rsquo;", '_', '!', '*', "'", ";", ":", ".", "@", "&", "=", "+", "$", ",", "?", "%", "#", '/', '\\', "(", ")", "-"), '', $str);
        return Strings::bokhoangtrong(strtolower(Strings::get_ascii($str)));
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

    public static function strip($value) {
        return stripslashes(stripslashes(stripslashes($value)));
    }

    public static function currencyFormat($value) {
        $value = number_format($value, 2, ',', '.');
        $value = str_replace(',00', '', $value);
        return $value;
    }





    public static function combobox($name, $options, $value = false, $width = '', $extra = false) {
        #var_dump($extra);
        if ($value === false) {
            if (isset($_REQUEST[$name])) {
                $value = $_REQUEST[$name];
            }
        }

        if ($extra == true) {
            if (strlen($extra) <= 1) {
                $extra = ' onchange="this.form.submit()"';
            }
        } else {
            $extra = '';
        }
        #var_dump($extra);
        $input = '<select name="' . $name . '" id="' . $name . '" style="width: ' . $width . '" ' . $extra . '>';
        foreach ($options as $key => $text) {
            $input .= '<option value="' . $key . '"';
            if ($value == $key) {
                $input .= ' selected';
            }
            $input .= '>' . $text . '</option>';
        }
        $input .= '</select>';


        return $input;
    }

    public static function AutoLink($content, $tags, $class = 'class="CKKautoTags"') {
        set_time_limit(0);
        if (!empty($content) && !empty($tags)) {
            $arr_keyword = explode(',', $tags);

            foreach ($arr_keyword as $s) {
                $tag = json_decode(base64_decode($s), true);
                //replace keywords (that are not part of HTML tags)
                $content = preg_replace('@\b' . preg_quote($tag['title']) . '(?![^<]*?>)@i', '<a ' . $class . ' ' . ($tag['rel'] == '2' ? 'rel="nofollow"' : '') . ' title="' . ($tag['ancol_text'] != '' ? $tag['ancol_text'] : $tag['title']) . '" href="' . $tag['link'] . '" UNIQUE>$0</a>', $content, $tag['qty']);
                //remove created links between heading tags
                $content = @preg_replace_callback('@<h([1-6])\b[^>]*>.+?</h\1>@is', '_callback', $content);
                //remove UNIQUE marks
                $content = preg_replace('@(<a href="[^"]*") UNIQUE>@', '$1>', $content);
            }
        }
        return $content;
    }

    public static function encode($text) {

        return htmlspecialchars($text.'', ENT_QUOTES, Yii::app()->charset);
    }

    public static function blackTag($string, $blackTag) {
        if ($string <> '') {
            if (!$blackTag)
                $blackTag = array("php", "iframe", "script");
            foreach ($blackTag as $val) {
                $string = preg_replace("|</?" . $val . ">|i", "", $string);
                $string = preg_replace("|<" . $val . "[^>]+>|i", "", $string);
            }
        }

        return $string;
    }


    public static function removeTagHTML($tagSource) {
        $searchTags = array(
            '@<script[^>]*?>.*?</script>@si', // Strip out javascript
            '@<[\/\!]*?[^<>]*?>@si', // Strip out HTML tags
            '@([\r\n])[\s]+@', // Strip out white space
            '@&(quot|#34);@i', // Replace HTML entities
            '@&(amp|#38);@i',
            '@&(lt|#60);@i',
            '@&(gt|#62);@i',
            '@&(nbsp|#160);@i',
            '@&(iexcl|#161);@i',
            '@&(cent|#162);@i',
            '@&(pound|#163);@i',
            '@&(copy|#169);@i',
            '@&#(\d+);@e'
        ); // evaluate as php

        $replaceTags = array(
            '',
            '',
            '\1',
            '"',
            '&',
            '<',
            '>',
            ' ',
            chr(161),
            chr(162),
            chr(163),
            chr(169),
            'chr(\1)'
        );
        return preg_replace($searchTags, $replaceTags, $tagSource);
    }

    public static function _convertToSMS($content) {
        $utf82abc = array(
            'à' => 'a',
            'á' => 'a',
            'ả' => 'a',
            'ã' => 'a',
            'ạ' => 'a',
            'ă' => 'a',
            'ằ' => 'a',
            'ắ' => 'a',
            'ẳ' => 'a',
            'ẵ' => 'a',
            'ặ' => 'a',
            'â' => 'a',
            'ầ' => 'a',
            'ấ' => 'a',
            'ẩ' => 'a',
            'ẫ' => 'a',
            'ậ' => 'a',
            'đ' => 'd',
            'è' => 'e',
            'é' => 'e',
            'ẻ' => 'e',
            'ẽ' => 'e',
            'ẹ' => 'e',
            'ê' => 'e',
            'ề' => 'e',
            'ế' => 'e',
            'ể' => 'e',
            'ễ' => 'e',
            'ệ' => 'e',
            'ì' => 'i',
            'í' => 'i',
            'ỉ' => 'i',
            'ĩ' => 'i',
            'ị' => 'i',
            'ò' => 'o',
            'ó' => 'o',
            'ỏ' => 'o',
            'õ' => 'o',
            'ọ' => 'o',
            'ô' => 'o',
            'ồ' => 'o',
            'ố' => 'o',
            'ổ' => 'o',
            'ỗ' => 'o',
            'ộ' => 'o',
            'ơ' => 'o',
            'ờ' => 'o',
            'ớ' => 'o',
            'ở' => 'o',
            'ỡ' => 'o',
            'ợ' => 'o',
            'ù' => 'u',
            'ú' => 'u',
            'ủ' => 'u',
            'ũ' => 'u',
            'ụ' => 'u',
            'ư' => 'u',
            'ừ' => 'u',
            'ứ' => 'u',
            'ử' => 'u',
            'ữ' => 'u',
            'ự' => 'u',
            'ỳ' => 'y',
            'ý' => 'y',
            'ỷ' => 'y',
            'ỹ' => 'y',
            'ỵ' => 'y',
            'À' => 'A',
            'Á' => 'A',
            'Ả' => 'A',
            'Ã' => 'A',
            'Ạ' => 'A',
            'Ă' => 'A',
            'Ằ' => 'A',
            'Ắ' => 'A',
            'Ẳ' => 'A',
            'Ẵ' => 'A',
            'Ặ' => 'A',
            'Â' => 'A',
            'Ầ' => 'A',
            'Ấ' => 'A',
            'Ẩ' => 'A',
            'Ẫ' => 'A',
            'Ậ' => 'A',
            'Đ' => 'D',
            'È' => 'E',
            'É' => 'E',
            'Ẻ' => 'E',
            'Ẽ' => 'E',
            'Ẹ' => 'E',
            'Ê' => 'E',
            'Ề' => 'E',
            'Ế' => 'E',
            'Ể' => 'E',
            'Ễ' => 'E',
            'Ệ' => 'E',
            'Ì' => 'I',
            'Í' => 'I',
            'Ỉ' => 'I',
            'Ĩ' => 'I',
            'Ị' => 'I',
            'Ò' => 'O',
            'Ó' => 'O',
            'Ỏ' => 'O',
            'Õ' => 'O',
            'Ọ' => 'O',
            'Ô' => 'O',
            'Ồ' => 'O',
            'Ố' => 'O',
            'Ổ' => 'O',
            'Ỗ' => 'O',
            'Ộ' => 'O',
            'Ơ' => 'O',
            'Ờ' => 'O',
            'Ớ' => 'O',
            'Ở' => 'O',
            'Ỡ' => 'O',
            'Ợ' => 'O',
            'Ù' => 'U',
            'Ú' => 'U',
            'Ủ' => 'U',
            'Ũ' => 'U',
            'Ụ' => 'U',
            'Ư' => 'U',
            'Ừ' => 'U',
            'Ứ' => 'U',
            'Ử' => 'U',
            'Ữ' => 'U',
            'Ự' => 'U',
            'Ỳ' => 'Y',
            'Ý' => 'Y',
            'Ỷ' => 'Y',
            'Ỹ' => 'Y',
            'Ỵ' => 'Y',
            '̀' => '',
            '́' => '',
            '̉' => '',
            '̃' => '',
            '̣' => ''
        );
        return str_replace(array_keys($utf82abc), array_values($utf82abc), $content);
    }

    function encrypt($input, $key_seed) {
        $input = trim($input);
        $block = mcrypt_get_block_size('tripledes', 'ecb');
        $len = strlen($input);
        $padding = $block - ($len % $block);
        $input .= str_repeat(chr($padding), $padding);
        // generate a 24 byte key from the md5 of the seed
        $key = substr(md5($key_seed), 0, 24);
        $iv_size = mcrypt_get_iv_size(MCRYPT_TRIPLEDES, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        // encrypt
        $encrypted_data = mcrypt_encrypt(MCRYPT_TRIPLEDES, $key, $input, MCRYPT_MODE_ECB, $iv);
        // clean up output and return base64 encoded
        return base64_encode($encrypted_data);
    }

    function decrypt($input, $key_seed) {
        $input = base64_decode($input);
        $key = substr(md5($key_seed), 0, 24);
        $text = mcrypt_decrypt(MCRYPT_TRIPLEDES, $key, $input, MCRYPT_MODE_ECB, '12345678');
        $block = mcrypt_get_block_size('tripledes', 'ecb');
        $packing = ord($text{strlen($text) - 1});
        if ($packing && ($packing < $block)) {
            for ($P = strlen($text) - 1; $P >= strlen($text) - $packing; $P--) {
                if (ord($text{$P}) != $packing) {
                    $packing = 0;
                }
            }
        }
        $text = substr($text, 0, strlen($text) - $packing);
        return $text;
    }

    public static function clean_up($text) {
        if ($text <> '') {
            return htmlentities(strip_tags($text), ENT_QUOTES, 'UTF-8');
        } else {
            return $text;
        }
    }
}

?>