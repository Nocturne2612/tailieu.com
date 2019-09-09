<?php /* Smarty version Smarty-3.1.19, created on 2019-07-22 08:07:52
         compiled from "/home/tailieuk/public_html/webapp/modules/admin/views/layouts/1col.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12439767095abc8f8fa10453-20942605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f93f697d5424081763ee48efd245bd0c6831550a' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/admin/views/layouts/1col.tpl',
      1 => 1563752344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12439767095abc8f8fa10453-20942605',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc8f8fa2aba5_11098573',
  'variables' => 
  array (
    'this' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abc8f8fa2aba5_11098573')) {function content_5abc8f8fa2aba5_11098573($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="<?php echo Yii::app()->params['Desc'];?>
" />
<meta name="author" content="<?php echo Yii::app()->params['Author'];?>
" />
<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic" />-->
<!--[if lt IE 9]>
                <script src="<?php echo Yii::app()->baseUrl;?>
/assets/xeon/js/html5shiv.min.js"></script>
                <script src="<?php echo Yii::app()->baseUrl;?>
/assets/xeon/js/respond.min.js"></script>
        <![endif]-->
<title><?php echo CHtml::encode($_smarty_tpl->tpl_vars['this']->value->pageTitle);?>
</title>
</head>
<body class="page-body">
<?php echo $_smarty_tpl->tpl_vars['this']->value->widget('AdminWidgets',array('methodName'=>'admin_menu'),true);?>

<div class="page-container">
  <div class="main-content"> <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    
    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('AdminWidgets',array('methodName'=>'admin_footer'),true);?>
 </div>
</div>
<script type="text/javascript">
            if ($('.panel-body .alert').html() != 'undefined') {
                setTimeout(function () {
                    $('.panel-body .alert').hide();
                }, 5000);
            }

        </script>
</body>
</html>
<?php }} ?>
