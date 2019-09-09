<?php /* Smarty version Smarty-3.1.19, created on 2019-09-09 08:08:04
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/components/widgets/views/news_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21009303085abc8dd5c83366-20149029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc4ea7a1703655fd48757d809abef989140e8e92' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/components/widgets/views/news_view.tpl',
      1 => 1568001976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21009303085abc8dd5c83366-20149029',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc8dd5ca6181_67723903',
  'variables' => 
  array (
    'data' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abc8dd5ca6181_67723903')) {function content_5abc8dd5ca6181_67723903($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
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
