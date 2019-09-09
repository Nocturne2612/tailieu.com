<?php /* Smarty version Smarty-3.1.19, created on 2018-06-19 06:56:04
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/components/widgets/views/tabs_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10499697675b28a904377ec7-67961435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ef0f4b008eb3f38e59d248f5890199775845ba8' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/components/widgets/views/tabs_new.tpl',
      1 => 1529384694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10499697675b28a904377ec7-67961435',
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
  'unifunc' => 'content_5b28a90439e9c5_64418382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28a90439e9c5_64418382')) {function content_5b28a90439e9c5_64418382($_smarty_tpl) {?><ul class="thumbnail-group fn-clear">
<?php if ($_smarty_tpl->tpl_vars['check']->value) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'productView','product'=>$_smarty_tpl->tpl_vars['data']->value['data'],'check'=>false),true);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'productView','product'=>$_smarty_tpl->tpl_vars['data']->value['data'],'check'=>true),true);?>

<?php }?>
</ul>
<?php echo $_smarty_tpl->tpl_vars['data']->value['pageHtml'];?>


<?php }} ?>
