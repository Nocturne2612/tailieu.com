<?php

class TRoles {

    static public function getAccessRules($controllerID) {
        $roles = array(
            'account' => array(array(
                    'allow',
                    'actions' => array('index', 'logout', 'upload', 'changepass', 'changeinfo', 'historyupload', 'captcha', 'historypoint','upload','upload_edit','favorite','member'),
                    'users' => array('*'),
                    'roles' => array('account'),
                
                ),
                array(
                    'deny', // deny anything else
                    'actions' => array('member'),
                    'users' => array('*'),
                    'roles' => array('account'),
                ),
            ),
            'download' => array(array(
                    'allow',
                    'actions' => array('index', 'captcha','confirm'),
                    'users' => array('*'),
                    'roles' => array('account'),
                ),
                array(
                    'deny', // deny anything else
                    'users' => array('*'),
                ),
            ),
            'addfund' => array(array(
                    'allow',
                    'actions' => array('index', 'captcha','confirm','buyCard','nganLuongReturn','payPalReturn','nganLuongCancel','payPalCancel'),
                    'users' => array('*'),
                    'roles' => array('account'),
                ),
                array(
                    'deny', // deny anything else
                    'users' => array('*'),
                ),
            ),
            'login' => array(
                array(
                    'deny', // deny anything else
                    'users' => array('*'),
                    'roles' => array('account'),
                ),
            ),
        );
        if (key_exists($controllerID, $roles)) {
            return $roles[$controllerID];
        } else {
            return array(array(
                    'allow',
                    'actions' => array('index', 'view'),
                    'users' => array('*'),
                ),);
        }
    }

}
