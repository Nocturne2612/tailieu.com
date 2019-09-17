<?php

if (isset($_GET['image']) && $_GET['image'] <> '') {
    require_once ('../../../../../../bootstrap.php');
    $link = str_replace(ROOT_URL, '../../../../../..', urldecode($_GET['image']));
    return unlink($link);
}