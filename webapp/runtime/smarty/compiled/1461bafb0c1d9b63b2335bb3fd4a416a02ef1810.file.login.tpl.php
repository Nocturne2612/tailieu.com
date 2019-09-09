<?php /* Smarty version Smarty-3.1.19, created on 2019-07-22 08:06:56
         compiled from "/home/tailieuk/public_html/webapp/modules/admin/views/layouts/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16860973795abc8f80f2c012-39110478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1461bafb0c1d9b63b2335bb3fd4a416a02ef1810' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/admin/views/layouts/login.tpl',
      1 => 1563752344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16860973795abc8f80f2c012-39110478',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc8f80f3cf65_03372283',
  'variables' => 
  array (
    'this' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abc8f80f3cf65_03372283')) {function content_5abc8f80f3cf65_03372283($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
