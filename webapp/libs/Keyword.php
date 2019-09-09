<?php

class Keyword {

    static function changeLang($str) {
        $marTViet = array("à", "á", "ạ", "ả", "ã", "â", "ầ", "ấ", "ậ", "ẩ", "ẫ", "ă",
            "ằ", "ắ", "ặ", "ẳ", "ẵ", "è", "é", "ẹ", "ẻ", "ẽ", "ê", "ề"
            , "ế", "ệ", "ể", "ễ",
            "ì", "í", "ị", "ỉ", "ĩ",
            "ò", "ó", "ọ", "ỏ", "õ", "ô", "ồ", "ố", "ộ", "ổ", "ỗ", "ơ"
            , "ờ", "ớ", "ợ", "ở", "ỡ",
            "ù", "ú", "ụ", "ủ", "ũ", "ư", "ừ", "ứ", "ự", "ử", "ữ",
            "ỳ", "ý", "ỵ", "ỷ", "ỹ",
            "đ",
            "À", "Á", "Ạ", "Ả", "Ã", "Â", "Ầ", "Ấ", "Ậ", "Ẩ", "Ẫ", "Ă"
            , "Ằ", "Ắ", "Ặ", "Ẳ", "Ẵ",
            "È", "É", "Ẹ", "Ẻ", "Ẽ", "Ê", "Ề", "Ế", "Ệ", "Ể", "Ễ",
            "Ì", "Í", "Ị", "Ỉ", "Ĩ",
            "Ò", "Ó", "Ọ", "Ỏ", "Õ", "Ô", "Ồ", "Ố", "Ộ", "Ổ", "Ỗ", "Ơ"
            , "Ờ", "Ớ", "Ợ", "Ở", "Ỡ",
            "Ù", "Ú", "Ụ", "Ủ", "Ũ", "Ư", "Ừ", "Ứ", "Ự", "Ử", "Ữ",
            "Ỳ", "Ý", "Ỵ", "Ỷ", "Ỹ",
            "Đ");
        $marKoDau = array("a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a"
            , "a", "a", "a", "a", "a", "a",
            "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e",
            "i", "i", "i", "i", "i",
            "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o"
            , "o", "o", "o", "o", "o",
            "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u",
            "y", "y", "y", "y", "y",
            "d",
            "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A"
            , "A", "A", "A", "A", "A",
            "E", "E", "E", "E", "E", "E", "E", "E", "E", "E", "E",
            "I", "I", "I", "I", "I",
            "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O"
            , "O", "O", "O", "O", "O",
            "U", "U", "U", "U", "U", "U", "U", "U", "U", "U", "U",
            "Y", "Y", "Y", "Y", "Y",
            "D");
        return str_replace($marTViet, $marKoDau, $str);
    }

    static function convert_keyword_for_rewrite($keyword) {
        $keyword = Keyword::changeLang($keyword);
        $keyword = str_replace('/', '-', $keyword);
        $keyword = str_replace(' ', '-', $keyword);
        $keyword = str_replace('"', '-', $keyword);
        $keyword = str_replace('%', '-', $keyword);
        $keyword = str_replace('?', '-', $keyword);
        $keyword = str_replace('&amp;', '-', $keyword);
        $keyword = str_replace('&quot;', '-', $keyword);
        $keyword = str_replace('--', '', $keyword);
        return Keyword::strip($keyword);
    }

    static function strip($text) {
        return stripslashes(stripslashes(stripslashes($text)));
    }

    static function removeHTMLtag($tagSource) {
        $searchTags = array('@<script[^>]*?>.*?</script>@si', // Strip out javascript
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
            '@&#(\d+);@e'); // evaluate as php

        $replaceTags = array('', '', '\1', '"', '&', '<', '>', ' ', chr(161), chr(162), chr(163), chr(169), 'chr(\1)');
        return preg_replace($searchTags, $replaceTags, $tagSource);
    }

    static function reverse_escape($str) {
        $search = array("\\\\", "\\0", "\\n", "\\r", "\Z", "\'", '\"');
        $replace = array("\\", "\0", "\n", "\r", "\x1a", "'", '"');
        return str_replace($search, $replace, $str);
    }

}
