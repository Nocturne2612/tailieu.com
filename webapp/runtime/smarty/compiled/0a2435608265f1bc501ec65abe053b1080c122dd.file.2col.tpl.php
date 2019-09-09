<?php /* Smarty version Smarty-3.1.19, created on 2017-12-11 13:11:28
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/admin/views/layouts/2col.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1296591958598172dc499f65-21094000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a2435608265f1bc501ec65abe053b1080c122dd' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/admin/views/layouts/2col.tpl',
      1 => 1512951054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1296591958598172dc499f65-21094000',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_598172dc4c2bb5_07890067',
  'variables' => 
  array (
    'this' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598172dc4c2bb5_07890067')) {function content_598172dc4c2bb5_07890067($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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

        <div class="page-container">
            <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('AdminWidgets',array('methodName'=>'admin_slider'),true);?>
 
            <div class="main-content">
                <nav class="navbar user-info-navbar" role="navigation">
                    <!-- Left links for user info navbar -->
                    <ul class="user-info-menu left-links list-inline list-unstyled">
                        <li class="hidden-sm hidden-xs">
                            <a href="#" data-toggle="sidebar">
                                <i class="fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="user-info-menu right-links list-inline list-unstyled">
                        <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('AdminWidgets',array('methodName'=>'admin_user_drop'),true);?>
 
                    </ul>
                </nav>
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>


                <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('AdminWidgets',array('methodName'=>'admin_footer'),true);?>

            </div>

        </div> 

    </body>
</html>
<?php }} ?>
