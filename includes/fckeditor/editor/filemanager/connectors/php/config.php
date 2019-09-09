<?php

session_start();
require_once ('../../../../../../bootstrap.php');
global $Config;

// SECURITY: You must explicitly enable this "connector". (Set it to "true").
// WARNING: don't just set "$Config['Enabled'] = true ;", you must be sure that only
//		authenticated users can access this file or use some kind of session checking.
$Config['Enabled'] = false;
if ($_SESSION['authorized']) {
    $Config['Enabled'] = true;
}
// Path to user files relative to the document root.
//$Config['UserFilesPath'] = '';
$Config['UserFilesPath'] = FCK_FILE_PATCH;
// Fill the following value it you prefer to specify the absolute path for the
// user files directory. Useful if you are using a virtual directory, symbolic
// link or alias. Examples: 'C:\\MySite\\userfiles\\' or '/root/mysite/userfiles/'.
// Attention: The above 'UserFilesPath' must point to the same directory.
$Config['UserFilesAbsolutePath'] = FCK_PATCH_IMG_UPLOAD_EDITOR;

// Due to security issues with Apache modules, it is recommended to leave the
// following setting enabled.
$Config['ForceSingleExtension'] = true;

// Perform additional checks for image files.
// If set to true, validate image size (using getimagesize).
$Config['SecureImageUploads'] = true;

// What the user can do with this connector.
$Config['ConfigAllowedCommands'] = array(
    'QuickUpload',
    'FileUpload',
    'GetFolders',
    'GetFoldersAndFiles',
    'CreateFolder');

// Allowed Resource Types.
$Config['ConfigAllowedTypes'] = array(
    'File',
    'Image',
    'Flash',
    'Media');

// For security, HTML is allowed in the first Kb of data for files having the
// following extensions only.
$Config['HtmlExtensions'] = array(
    "html",
    "htm",
    "xml",
    "xsd",
    "txt",
    "js");

$Config['ChmodOnUpload'] = 0777;

// See comments above.
// Used when creating folders that does not exist.
$Config['ChmodOnFolderCreate'] = 0777;

$Config['AllowedExtensions']['File'] = array(
    '7z',
    'aiff',
    'asf',
    'avi',
    'bmp',
    'csv',
    'doc',
    'fla',
    'flv',
    'gif',
    'gz',
    'gzip',
    'jpeg',
    'jpg',
    'mid',
    'mov',
    'mp3',
    'mp4',
    'mpc',
    'mpeg',
    'mpg',
    'ods',
    'odt',
    'pdf',
    'png',
    'ppt',
    'pxd',
    'qt',
    'ram',
    'rar',
    'rm',
    'rmi',
    'rmvb',
    'rtf',
    'sdc',
    'sitd',
    'swf',
    'sxc',
    'sxw',
    'tar',
    'tgz',
    'tif',
    'tiff',
    'txt',
    'vsd',
    'wav',
    'wma',
    'wmv',
    'xls',
    'xml',
    'zip');
$Config['DeniedExtensions']['File'] = array();
$Config['FileTypesPath']['File'] = $Config['UserFilesPath'] . 'file/';
$Config['FileTypesAbsolutePath']['File'] = ($Config['UserFilesAbsolutePath'] == '') ? '' : $Config['UserFilesAbsolutePath'] .
        'file/';
$Config['QuickUploadPath']['File'] = $Config['UserFilesPath'];
$Config['QuickUploadAbsolutePath']['File'] = $Config['UserFilesAbsolutePath'];

$Config['AllowedExtensions']['Image'] = array(
    'bmp',
    'gif',
    'jpeg',
    'jpg',
    'png');
$Config['DeniedExtensions']['Image'] = array();
$Config['FileTypesPath']['Image'] = $Config['UserFilesPath'];
$Config['FileTypesAbsolutePath']['Image'] = ($Config['UserFilesAbsolutePath'] == '') ? '' : $Config['UserFilesAbsolutePath'] .
        'images/';
$Config['QuickUploadPath']['Image'] = $Config['UserFilesPath'];
$Config['QuickUploadAbsolutePath']['Image'] = $Config['UserFilesAbsolutePath'];

$Config['AllowedExtensions']['Flash'] = array('swf', 'flv');
$Config['DeniedExtensions']['Flash'] = array();
$Config['FileTypesPath']['Flash'] = $Config['UserFilesPath'] . 'flash/';
$Config['FileTypesAbsolutePath']['Flash'] = ($Config['UserFilesAbsolutePath'] == '') ? '' : $Config['UserFilesAbsolutePath'] .
        'flash/';
$Config['QuickUploadPath']['Flash'] = $Config['UserFilesPath'];
$Config['QuickUploadAbsolutePath']['Flash'] = $Config['UserFilesAbsolutePath'];

$Config['AllowedExtensions']['Media'] = array(
    'aiff',
    'asf',
    'avi',
    'bmp',
    'fla',
    'flv',
    'gif',
    'jpeg',
    'jpg',
    'mid',
    'mov',
    'mp3',
    'mp4',
    'mpc',
    'mpeg',
    'mpg',
    'png',
    'qt',
    'ram',
    'rm',
    'rmi',
    'rmvb',
    'swf',
    'tif',
    'tiff',
    'wav',
    'wma',
    'wmv');
$Config['DeniedExtensions']['Media'] = array();
$Config['FileTypesPath']['Media'] = $Config['UserFilesPath'] . 'media/';
$Config['FileTypesAbsolutePath']['Media'] = ($Config['UserFilesAbsolutePath'] == '') ? '' : $Config['UserFilesAbsolutePath'] .
        'media/';
$Config['QuickUploadPath']['Media'] = $Config['UserFilesPath'];
$Config['QuickUploadAbsolutePath']['Media'] = $Config['UserFilesAbsolutePath'];
?>
