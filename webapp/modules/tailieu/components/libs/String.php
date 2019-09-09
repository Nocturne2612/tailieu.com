<?php

class String2  {

    public static function strip($value) {
        return stripslashes(stripslashes(stripslashes($value)));
    }

    public static function currencyFormat($value) {
        $value = number_format($value, 2, ',', '.');
        $value = str_replace(',00', '', $value);
        return $value;
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