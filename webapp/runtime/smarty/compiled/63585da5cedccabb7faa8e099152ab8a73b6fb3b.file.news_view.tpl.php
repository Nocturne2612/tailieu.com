<?php /* Smarty version Smarty-3.1.19, created on 2017-12-11 09:30:19
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/tailieu/components/widgets/views/news_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1219363870598141f6cc5e13-17659403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63585da5cedccabb7faa8e099152ab8a73b6fb3b' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/tailieu/components/widgets/views/news_view.tpl',
      1 => 1512951056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1219363870598141f6cc5e13-17659403',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_598141f6cee844_29115182',
  'variables' => 
  array (
    'data' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598141f6cee844_29115182')) {function content_598141f6cee844_29115182($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
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
