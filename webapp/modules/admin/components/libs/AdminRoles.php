<?php

/**
 * Description of AdminRoles
 *
 * @author DUCLM
 */
class AdminRoles {

    static public function getAccessRules($controllerID) {

        $roles = array(
            'login' => array(
                array(
                    'deny',
                    'users' => array('*'),
                    'roles' => array('admin', 'member'),
                ),
            ),
        );
        
        if (key_exists($controllerID, $roles)) {
            return $roles[$controllerID];
        } else {
            return array(
                array(
                    'allow',
                    'users' => array('*'),
                    'roles' => array('admin'),
                ),
                array(
                    'deny',
                    'users' => array('*'),
                ),
            );
        }
    }

}
