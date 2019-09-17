<?php

class SystemFile {

    public static $mode = 0777;

    public static function createDirPath($path) {
        return (is_dir($path) || mkdir($path, self::$mode, true));
    }

    public static function uploadFile($file_tmp, $path, $prefix = '', $max_size = 10) {
		
        $message = '';
        $images = FALSE;
		
        if (self::isImage($file_tmp)) {
            if (Validation::checkFileSize($file_tmp, $max_size)) {
                $file_name = uniqid();
                if (self::createDirPath($path)) {
                    if ($prefix != '') {
                        $file_name.= '_' . $prefix;
                    }
                    $file_name.= '.' . self::getFileType($file_tmp);
					var_dump($file_tmp['tmp_name'], $path . $file_name);die();
                    if (copy($file_tmp['tmp_name'], $path . $file_name)) {
                        $images = $file_name;
                    } else {
                        $message = 'Lỗi: không thể upload.';
                    }
                } else {
                    $message = 'Lỗi: Không tạo được ' . $path;
                }
            } else {
                $message = 'File quá lớn';
            }
        } else
            $message = 'Lỗi: Không hỗ trợ loại file này '.$file_tmp['type'];
        return array('error_message' => $message, 'images' => $images);
    }

    public static function getFileType($file_tmp, $key = -1) {
        if ($key == -1) {
            return substr($file_tmp['name'], strrpos($file_tmp['name'], '.') + 1);
        } else {
            return substr($file_tmp['name'][$key], strrpos($file_tmp['name'][$key], '.') + 1);
        }
    }

    public static function isImage($file, $key = -1) {
        $type_file = array('image/gif', 'image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png', "application/pdf", 'application/msword', 'application/vnd.oasis.opendocument.text', "application/vnd.openxmlformats-officedocument.wordprocessingml.document", "application/vnd.openxmlformats-officedocument.wordprocessingml.document", 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/zip','application/x-rar','application/x-7z','application/octet-stream','application/vnd.ms-excel');
       
        if ($key == -1) {
            if (self::isFile($file)) {
                return (in_array($file['type'], $type_file));
            }
        } else {
            if (self::isFile($file, $key)) {
                return (in_array($file['type'][$key], $type_file));
            }
        }
        return false;
    }

    public static function isFile($file, $key = -1) {
        if ($key == -1) {
            if (array_key_exists('tmp_name', $file) && is_file($file['tmp_name'])) {
                return (filesize($file['tmp_name']) != 0);
            }
        } else {
            if (array_key_exists('tmp_name', $file) && is_file($file['tmp_name'][$key])) {
                return (filesize($file['tmp_name'][$key]) != 0);
            }
        }
        return false;
    }

    public static function readFile($file_path) {
        $myfile = fopen($file_path, "r") or die("Unable to open file!");
        $data = fread($myfile, filesize($file_path));
        fclose($myfile);
        return $data;
    }

}

?>