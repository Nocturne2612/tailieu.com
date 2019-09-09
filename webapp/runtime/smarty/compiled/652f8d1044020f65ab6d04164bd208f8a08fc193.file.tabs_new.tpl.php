<?php /* Smarty version Smarty-3.1.19, created on 2019-09-09 04:07:41
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/components/widgets/views/tabs_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5951677625abc88d1e6fee9-32983987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '652f8d1044020f65ab6d04164bd208f8a08fc193' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/components/widgets/views/tabs_new.tpl',
      1 => 1568001976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5951677625abc88d1e6fee9-32983987',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc88d1e83af1_72934054',
  'variables' => 
  array (
    'check' => 0,
    'data' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abc88d1e83af1_72934054')) {function content_5abc88d1e83af1_72934054($_smarty_tpl) {?><ul class="mb-box masonry-element clearfix tpl-ul">
<?php if ($_smarty_tpl->tpl_vars['check']->value) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'productView','product'=>$_smarty_tpl->tpl_vars['data']->value['data'],'check'=>false),true);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'productView','product'=>$_smarty_tpl->tpl_vars['data']->value['data'],'check'=>true),true);?>

<?php }?>
</ul>
<?php echo $_smarty_tpl->tpl_vars['data']->value['pageHtml'];?>


<?php }} ?>
