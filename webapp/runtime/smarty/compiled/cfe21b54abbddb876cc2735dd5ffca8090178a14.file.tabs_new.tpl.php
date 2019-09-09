<?php /* Smarty version Smarty-3.1.19, created on 2019-07-16 13:50:32
         compiled from "/var/www/html/Mach7Clinical/tailieu/webapp/modules/tailieu/components/widgets/views/tabs_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12212989275d2d73b8a06e85-39905849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfe21b54abbddb876cc2735dd5ffca8090178a14' => 
    array (
      0 => '/var/www/html/Mach7Clinical/tailieu/webapp/modules/tailieu/components/widgets/views/tabs_new.tpl',
      1 => 1563125838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12212989275d2d73b8a06e85-39905849',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'check' => 0,
    'data' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d2d73b8a22f72_97326859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d2d73b8a22f72_97326859')) {function content_5d2d73b8a22f72_97326859($_smarty_tpl) {?><ul class="thumbnail-group fn-clear">
<?php if ($_smarty_tpl->tpl_vars['check']->value) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'productView','product'=>$_smarty_tpl->tpl_vars['data']->value['data'],'check'=>false),true);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'productView','product'=>$_smarty_tpl->tpl_vars['data']->value['data'],'check'=>true),true);?>

<?php }?>
</ul>
<?php echo $_smarty_tpl->tpl_vars['data']->value['pageHtml'];?>


<?php }} ?>
