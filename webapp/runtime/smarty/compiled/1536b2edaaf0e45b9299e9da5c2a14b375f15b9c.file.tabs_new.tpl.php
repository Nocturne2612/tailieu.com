<?php /* Smarty version Smarty-3.1.19, created on 2019-07-16 14:09:35
         compiled from "/var/www/html/modernfuny.com/webapp/modules/tailieu/components/widgets/views/tabs_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8860041245d2d782fd12b87-71601697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1536b2edaaf0e45b9299e9da5c2a14b375f15b9c' => 
    array (
      0 => '/var/www/html/modernfuny.com/webapp/modules/tailieu/components/widgets/views/tabs_new.tpl',
      1 => 1563125838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8860041245d2d782fd12b87-71601697',
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
  'unifunc' => 'content_5d2d782fd1c619_21908436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d2d782fd1c619_21908436')) {function content_5d2d782fd1c619_21908436($_smarty_tpl) {?><ul class="thumbnail-group fn-clear">
<?php if ($_smarty_tpl->tpl_vars['check']->value) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'productView','product'=>$_smarty_tpl->tpl_vars['data']->value['data'],'check'=>false),true);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'productView','product'=>$_smarty_tpl->tpl_vars['data']->value['data'],'check'=>true),true);?>

<?php }?>
</ul>
<?php echo $_smarty_tpl->tpl_vars['data']->value['pageHtml'];?>


<?php }} ?>
