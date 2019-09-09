<?php /* Smarty version Smarty-3.1.19, created on 2019-09-09 04:07:41
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/views/home/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19992689195abc865835a845-88197939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47f353e2ba4c8e357f155ae57d87bd0f29c78f3c' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/views/home/index.tpl',
      1 => 1568001969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19992689195abc865835a845-88197939',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc8658394d94_65997247',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abc8658394d94_65997247')) {function content_5abc8658394d94_65997247($_smarty_tpl) {?>
<!-- v2  Scroll navigation end -->


<div id="v2-content">
     <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'searchBox'),true);?>
   

    
    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER2'),true);?>
   
    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER'),true);?>
 
    <div class="tem-wrapper w1520">
        
            <div class="main-con gd-photobox ">

                <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'tabs_new'),true);?>

            </div>
    </div>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER2'),true);?>

</div><?php }} ?>
