<?php /* Smarty version Smarty-3.1.19, created on 2019-07-20 11:06:40
         compiled from "D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/components/widgets/views/product_view1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:303095d32f5c05ea383-39511845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6dd1ffd15a2155b7aecbdb065ec88fbb63bde01' => 
    array (
      0 => 'D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/components/widgets/views/product_view1.tpl',
      1 => 1563617327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303095d32f5c05ea383-39511845',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'd' => 0,
    'arr_pic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d32f5c060fbc9_06824193',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d32f5c060fbc9_06824193')) {function content_5d32f5c060fbc9_06824193($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
        <div class="recommend-img-box">
                <a target="_blank" href="<?php echo SystemBase::buildUrl('tailieu/document',array('id'=>$_smarty_tpl->tpl_vars['d']->value['id'],'title'=>$_smarty_tpl->tpl_vars['d']->value['title']));?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
"  width="100%">
                    
                    <?php if ($_smarty_tpl->tpl_vars['d']->value['picture']!='') {?><?php $_smarty_tpl->tpl_vars["arr_pic"] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['d']->value['picture']), null, 0);?>
                    <img  data-original="<?php echo @constant('ROOT_URL');?>
/<?php echo @constant('IMG_PRODUCT_THUMB');?>
<?php echo $_smarty_tpl->tpl_vars['arr_pic']->value[0];?>
" itemprop="image" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
" class="lazy">
                     <?php }?>
                </a>
            </div>
<?php } ?>
<?php }?><?php }} ?>
