<?php

class SystemDateTime {
    /*
     * Ham lay ngay hien tai
     * @return d/m/Y
     */

    static function get_date() {
        return date("d/m/Y");
    }

    //Ham lay gio hien tai
    static function get_time() {
        return date('H:m:s');
    }

    //Ham lay ngay tu timestamp
    static function get_date_from_timestamp($ts) {
        return date("d/m/Y", $ts);
    }

    //Ham lay gio tu timestamp
    static function get_time_from_timestamp($ts) {
        return date('H:i:s', $ts);
    }

    //Ham chuyen ngay : dd/mm/yyyy sang timestamp
    static function date_to_timestamp($date) {
        return self::to_time($date);
    }

    /*
     * Ham chuyen gio hh:mm:ss sang giay
     * @return s
     */

    static function time_to_timestamp($time) {
        $h = explode(':', $time);

        if (!is_numeric($h['0'])) {
            $h['0'] = 0;
        }
        if (!is_numeric($h['1'])) {
            $h['1'] = 0;
        }
        if (!is_numeric($h['2'])) {
            $h['2'] = 0;
        }
        //Hết đoạn sửa

        if ($h[0] && $h[1] && $h[2]) {
            return ($h[0] * 3600) + ($h[1] * 60) + $h[2];
        } elseif ($h[0] && $h[1]) {
            return ($h[0] * 3600) + ($h[1] * 60);
        } elseif ($h[0]) {
            return ($h[0] * 3600);
        } else {
            return 0;
        }
    }

    /*
     * Ham chuyen gio d/m/Y-HH:i:s sang timestamp
     * @return timestamp
     */

    static function to_timestamp($time) {
        $t = explode('-', $time);

        if ($t['0']) {
            $day_stamp = self::to_time($t['0']);

            $h = explode(':', $t['1']);

            if (!is_numeric($h['0'])) {
                $h['0'] = 0;
            }
            if (!is_numeric($h['1'])) {
                $h['1'] = 0;
            }
            if (!is_numeric($h['2'])) {
                $h['2'] = 0;
            }
            //Hết đoạn sửa

            if ($h[0] && $h[1] && $h[2]) {
                return ($h[0] * 3600) + ($h[1] * 60) + $h[2] + $day_stamp;
            } elseif ($h[0] && $h[1]) {
                return ($h[0] * 3600) + ($h[1] * 60) + $day_stamp;
            } elseif ($h[0]) {
                return ($h[0] * 3600) + $day_stamp;
            } else {
                return $day_stamp;
            }
        } else {
            return false;
        }
    }

    /*
     * Ham chuyen gio H:i:s d/m/Y sang timestamp
     * @return timestamp
     */

    static function date_to_times($time) {
        $t = explode(' ', $time);

        if ($t['1']) {
            $day_stamp = self::to_time($t['1']);

            $h = explode(':', $t['0']);
            //Sửa đổi: TuấnNK (27-09-06)
            if (!is_numeric($h['0'])) {
                $h['0'] = 0;
            }
            if (!is_numeric($h['1'])) {
                $h['1'] = 0;
            }
            if (!is_numeric($h['2'])) {
                $h['2'] = 0;
            }
            //Hết đoạn sửa

            if ($h[0] && $h[1] && $h[2]) {
                return ($h[0] * 3600) + ($h[1] * 60) + $h[2] + $day_stamp;
            } elseif ($h[0] && $h[1]) {
                return ($h[0] * 3600) + ($h[1] * 60) + $day_stamp;
            } elseif ($h[0]) {
                return ($h[0] * 3600) + $day_stamp;
            } else
                return $day_stamp;
        } else
            return false;
    }

    static function date_vn2eng($date) {
        $a = explode('/', $date);
        if (sizeof($a) == 3 and checkdate($a[1], $a[0], $a[2])) {

            return ($a[1] . '/' . $a[0] . '/' . $a[2]);
        }
    }

    /*
     * function to_time_begin($date)
     * Ham chuyen gio begin dd/mm/yyyy sang timestamp
     * @return timestamp
     */

    static function to_time_begin($date) {
        if ($date == '') {
            return false;
        }
        $date = str_replace(' ', '', $date);
        $date = str_replace('-', '/', $date);
        $a = "";
        if (stripos($date, '/') !== false) {
            $a = explode('/', $date);
        } elseif (stripos($date, '-') !== false) {
            $a = explode('-', $date);
        }

        if (!is_numeric($a['0'])) {
            $a['0'] = 0;
        }
        if (!is_numeric($a['1'])) {
            $a['1'] = 0;
        }
        if (!is_numeric($a['2'])) {
            $a['2'] = 0;
        }
        if (sizeof($a) == 3 and checkdate($a[1], $a[0], $a[2])) {
            return mktime(0, 0, 0, $a['1'], $a['0'], $a['2']);
        } else {
            return false;
        }
    }

    /*
     * function to_time_begin($date)
     * Ham chuyen gio end dd/mm/yyyy sang timestamp
     * @return timestamp
     */

    static function to_time_end($date) {
        if ($date == '') {
            return false;
        }
        $date = str_replace(' ', '', $date);
        $date = str_replace('-', '/', $date);
        $a = "";
        if (stripos($date, '/') !== false) {
            $a = explode('/', $date);
        } elseif (stripos($date, '-') !== false) {
            $a = explode('-', $date);
        }
        if (!is_numeric($a['0'])) {
            $a['0'] = 0;
        }
        if (!is_numeric($a['1'])) {
            $a['1'] = 0;
        }
        if (!is_numeric($a['2'])) {
            $a['2'] = 0;
        }
        if (sizeof($a) == 3 and checkdate($a[1], $a[0], $a[2])) {
            return mktime(23, 59, 59, $a['1'], $a['0'], $a['2']);
        } else {
            return false;
        }
    }

    // ham nay cho phep chuyen kieu
    // ngay dd/mm/yyyy sang yyyy-mm-dd de luu vao co sso du lieu
    static function convert_date_to_mysql($date) {
        if (!empty($date)) {
            $patterns = array("/(\d{1,2})\/(\d{1,2})\/(19|20)(\d{2})/");
            $replace = array("\\3\\4-\\2-\\1");
            return preg_replace($patterns, $replace, $date);
        }
        return "";
    }

    // ham nay cho phep chuyen kieu
    // ngay yyyy-mm-dd sang dd/mm/yyyy de hient thi
    static function convert_date_from_mysql($date, $break = false, $format = "\\4/\\3/\\1\\2") {
        if (!empty($date)) {
            $patterns = array("/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/",
                "/(\d{1,2}):(\d{1,2}):(\d{1,2})/");
            $replace = array($format, ($break ? "<br>" : "") . "\\1h \\2' \\3\"");
            return preg_replace($patterns, $replace, $date);
        }
        return "";
    }

    //Ham tinh so ngay , gio , phut thong qua so giay

    static function duration($duration) {
        $time = $duration;
        $day = floor($time / (3600 * 24));
        $hour = floor(($time % (3600 * 24)) / (3600));
        $minute = floor(($time % (3600)) / (60));
        if ($minute != 0) {
            $time = $minute . '\'';
        } else {
            $time = '';
        }

        if ($hour != 0) {
            $time = $hour . 'h' . $time;
        }
        if ($day != 0) {
            $time = $day . ' ng&#224;y ' . $time;
        }
        return $time;
    }

    /*
     * input: $time = "20:30", $date = "30/4/2013"
     * output: (int) 1433421000
     */

    static function to_date_time($time, $date) {
        $date = str_replace(' ', '', $date);
        $date = str_replace('-', '/', $date);
        $time = explode(':', $time);
        $date = explode('/', $date);

        $minis = '00';
        if (isset($time[2])) {
            $minis = $time[2];
        }

        return mktime($time[0], $time[1], $minis, $date[1], $date[0], $date[2]);
    }

    static function to_time($date) {
        $date = str_replace(' ', '', $date);
        $date = str_replace('-', '/', $date);
        $a = explode('/', $date);
        //Hết đoạn sửa
        #Edited by Haptt, September 4th, 2009:
        if (!is_numeric((int) $a[0]))
            $a[0] = 0;
        if (!is_numeric((int) $a[1]))
            $a[1] = 0;
        if (!is_numeric((int) $a[2]))
            $a[2] = 0;
        #End edit
        if (sizeof($a) == 3 and checkdate($a[1], $a[0], $a[2])) {
            return strtotime($a[1] . '/' . $a[0] . '/' . $a[2]);
        } else {
            return false;
        }
    }
    static function to_time_new($date) {
        $date = str_replace(' ', '', $date);
        $date = str_replace('-', '/', $date);
        $a = explode('/', $date);
        //Hết đoạn sửa
        #Edited by Haptt, September 4th, 2009:
        if (!is_numeric((int) $a[0]))
            $a[0] = 0;
        if (!is_numeric((int) $a[1]))
            $a[1] = 0;
        if (!is_numeric((int) $a[2]))
            $a[2] = 0;
        #End edit
        if (sizeof($a) == 3 and checkdate($a[1], $a[0], $a[2])) {
            return mktime(date("H"), date("i"), date("s"), $a[1], $a[0], $a[2]);
        } else {
            return false;
        }
    }
}

?>