<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CMSUser
 *
 * @author DUCLM
 */
class CMSUserAdmin extends CWebUser {

    /**
     * Overrides a Yii method that is used for roles in controllers (accessRules).
     *
     * @param string $operation Name of the operation required (here, a role).
     * @param mixed $params (opt) Parameters for this operation, usually the object to access.
     * @return bool Permission granted?
     */
    public function checkAccess($operation, $params = array()) {

        if (empty($this->id)) {
            // Not identified => no rights
            return false;
        }
        $role = $this->getState("roles");
        if ($role === 'admin') {

            $permission = json_decode($this->getState("permission"), true);
            $controll_cur = strtolower(Yii::app()->controller->id . 'controller');

            if (isset($permission[$controll_cur])) {
                /* if(@$_GET['bug']){
                  var_dump($permission);
                  echo Yii::app()->controller->action->id;
                  } */
                $arr_actions = $permission[$controll_cur];
                $action_cur = strtolower(Yii::app()->controller->action->id);
                if (!in_array($action_cur, $arr_actions)) {
                    Session::set('err', 'Bạn không được phân quyền sử dụng tính năng này.');
                    Yii::app()->getRequest()->redirect(Yii::app()->createUrl('admin/default'), true, 302);
                    die();
                }
            } else {
                Session::set('err', 'Bạn không có quyền truy cập điều khiển này.');
                Yii::app()->getRequest()->redirect(Yii::app()->createUrl('admin/default'), true, 302);
                die();
            }

            return true; // admin role has access to everything
        }
        // allow access if the operation request is the current user's role        
        return ($operation === $role);
    }

}
