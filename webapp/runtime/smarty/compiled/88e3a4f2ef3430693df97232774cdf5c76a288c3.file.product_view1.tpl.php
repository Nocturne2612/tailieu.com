<?php /* Smarty version Smarty-3.1.19, created on 2017-12-11 07:11:21
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/tailieu/components/widgets/views/product_view1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212476122559813a1f124a62-50692314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88e3a4f2ef3430693df97232774cdf5c76a288c3' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/tailieu/components/widgets/views/product_view1.tpl',
      1 => 1512951056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212476122559813a1f124a62-50692314',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59813a1f16b281_86820103',
  'variables' => 
  array (
    'data' => 0,
    'd' => 0,
    'arr_pic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59813a1f16b281_86820103')) {function content_59813a1f16b281_86820103($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/iyuyjfxt/public_html/webapp/vendors/smarty/libs/plugins/modifier.replace.php';
?><?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
        <li>
            <div class="thumb ">
                <a href="<?php echo SystemBase::buildUrl('tailieu/document',array('id'=>$_smarty_tpl->tpl_vars['d']->value['id'],'title'=>$_smarty_tpl->tpl_vars['d']->value['title']));?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['d']->value['picture']!='') {?><?php $_smarty_tpl->tpl_vars["arr_pic"] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['d']->value['picture']), null, 0);?> <img title="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
" src="<?php echo @constant('ROOT_URL');?>
/<?php echo @constant('IMG_PRODUCT_THUMB');?>
<?php echo $_smarty_tpl->tpl_vars['arr_pic']->value[0];?>
" style="margin:-25px 0 0 -30px;"/> <?php }?></a>
            </a>
        </div>
        <h5><a href="<?php echo SystemBase::buildUrl('tailieu/document',array('id'=>$_smarty_tpl->tpl_vars['d']->value['id'],'title'=>$_smarty_tpl->tpl_vars['d']->value['title']));?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</a></h5>
        <p class="category"><?php echo rand('1','5');?>
 <i class="icon-star"></i>  <?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['d']->value['count_down'],2,",","."),',00','');?>
 <i class="icon-download"></i>

                    </p>
    </li>
<?php } ?>
<?php }?><?php }} ?>
