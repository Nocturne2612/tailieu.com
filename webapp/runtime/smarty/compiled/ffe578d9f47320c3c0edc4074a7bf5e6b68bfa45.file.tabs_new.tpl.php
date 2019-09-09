<?php /* Smarty version Smarty-3.1.19, created on 2017-12-11 07:11:03
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/tailieu/components/widgets/views/tabs_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:536134424598139e6cc2745-10021996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffe578d9f47320c3c0edc4074a7bf5e6b68bfa45' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/tailieu/components/widgets/views/tabs_new.tpl',
      1 => 1512951056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '536134424598139e6cc2745-10021996',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_598139e6cdd083_90572084',
  'variables' => 
  array (
    'check' => 0,
    'data' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598139e6cdd083_90572084')) {function content_598139e6cdd083_90572084($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['check']->value) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'productView','product'=>$_smarty_tpl->tpl_vars['data']->value,'check'=>false),true);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'productView','product'=>$_smarty_tpl->tpl_vars['data']->value,'check'=>true),true);?>

<?php }?>



<?php }} ?>
