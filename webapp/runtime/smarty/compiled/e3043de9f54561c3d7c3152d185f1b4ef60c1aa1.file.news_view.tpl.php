<?php /* Smarty version Smarty-3.1.19, created on 2019-07-16 14:09:40
         compiled from "/var/www/html/modernfuny.com/webapp/modules/tailieu/components/widgets/views/news_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2118695355d2d78348897d3-96615358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3043de9f54561c3d7c3152d185f1b4ef60c1aa1' => 
    array (
      0 => '/var/www/html/modernfuny.com/webapp/modules/tailieu/components/widgets/views/news_view.tpl',
      1 => 1563125838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2118695355d2d78348897d3-96615358',
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
  'unifunc' => 'content_5d2d7834894119_50710939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d2d7834894119_50710939')) {function content_5d2d7834894119_50710939($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
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
