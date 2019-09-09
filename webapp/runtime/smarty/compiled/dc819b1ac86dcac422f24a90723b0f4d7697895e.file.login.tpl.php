<?php /* Smarty version Smarty-3.1.19, created on 2017-12-11 07:12:20
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/admin/views/layouts/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197138314859817021eedba5-55727881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc819b1ac86dcac422f24a90723b0f4d7697895e' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/admin/views/layouts/login.tpl',
      1 => 1512951054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197138314859817021eedba5-55727881',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59817021f13276_21619139',
  'variables' => 
  array (
    'this' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59817021f13276_21619139')) {function content_59817021f13276_21619139($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />

            <meta name="description" content="<?php echo Yii::app()->params['Desc'];?>
" />
            <meta name="author" content="<?php echo Yii::app()->params['Author'];?>
" />
           <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">-->
                <title><?php echo CHtml::encode($_smarty_tpl->tpl_vars['this']->value->pageTitle);?>
</title>

    </head>
        <body class="page-body login-page login-light"> 
                    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('AdminWidgets',array('methodName'=>'admin_footer'),true);?>

        </body>
</html>
<?php }} ?>
