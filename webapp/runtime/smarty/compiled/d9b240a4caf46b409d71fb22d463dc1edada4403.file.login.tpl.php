<?php /* Smarty version Smarty-3.1.19, created on 2018-06-19 07:23:48
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/admin/views/layouts/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9646124455b28af846cd985-07717216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9b240a4caf46b409d71fb22d463dc1edada4403' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/admin/views/layouts/login.tpl',
      1 => 1529384679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9646124455b28af846cd985-07717216',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28af846e30b5_19823219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28af846e30b5_19823219')) {function content_5b28af846e30b5_19823219($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
