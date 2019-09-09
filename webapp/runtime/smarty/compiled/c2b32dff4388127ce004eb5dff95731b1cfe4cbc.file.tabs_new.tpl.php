<?php /* Smarty version Smarty-3.1.19, created on 2019-07-21 21:57:43
         compiled from "D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/components/widgets/views/tabs_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:219775d2e8c4359e618-91245341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2b32dff4388127ce004eb5dff95731b1cfe4cbc' => 
    array (
      0 => 'D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/components/widgets/views/tabs_new.tpl',
      1 => 1563746258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219775d2e8c4359e618-91245341',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d2e8c43993939_67217149',
  'variables' => 
  array (
    'check' => 0,
    'data' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d2e8c43993939_67217149')) {function content_5d2e8c43993939_67217149($_smarty_tpl) {?><ul class="mb-box clearfix tpl-ul">
<?php if ($_smarty_tpl->tpl_vars['check']->value) {?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'productView','product'=>$_smarty_tpl->tpl_vars['data']->value['data'],'check'=>false),true);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'productView','product'=>$_smarty_tpl->tpl_vars['data']->value['data'],'check'=>true),true);?>

<?php }?>
</ul>
<?php echo $_smarty_tpl->tpl_vars['data']->value['pageHtml'];?>


<?php }} ?>
