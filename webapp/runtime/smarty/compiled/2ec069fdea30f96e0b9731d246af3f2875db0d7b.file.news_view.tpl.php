<?php /* Smarty version Smarty-3.1.19, created on 2018-06-19 07:06:37
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/components/widgets/views/news_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11086531765b28ab7dc887f6-45808076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ec069fdea30f96e0b9731d246af3f2875db0d7b' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/components/widgets/views/news_view.tpl',
      1 => 1529384693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11086531765b28ab7dc887f6-45808076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28ab7dcb2e47_17044992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28ab7dcb2e47_17044992')) {function content_5b28ab7dcb2e47_17044992($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
        <li>
            <div style="float:left;margin-right:20px;margin-bottom:20px">
                <a href="<?php echo SystemBase::buildUrl('tailieu/news',array('id'=>$_smarty_tpl->tpl_vars['e']->value['id'],'title'=>$_smarty_tpl->tpl_vars['e']->value['title']));?>
"><img src="<?php echo @constant('ROOT_URL');?>
/<?php echo @constant('IMG_NEWS_THUMB');?>
<?php echo $_smarty_tpl->tpl_vars['e']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['e']->value['title'];?>
" width="220"></a>
            </div><p style="float:right;">
            </p><h3><a href="<?php echo SystemBase::buildUrl('tailieu/news',array('id'=>$_smarty_tpl->tpl_vars['e']->value['id'],'title'=>$_smarty_tpl->tpl_vars['e']->value['title']));?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['title'];?>
</a></h3>
            <?php echo $_smarty_tpl->tpl_vars['e']->value['subcontent'];?>

        </li>
        <div class="fn-clear" style="border-bottom:1px dotted #e4e6e7;margin-bottom:20px;"></div>
    <?php } ?> 
<?php }?><?php }} ?>
