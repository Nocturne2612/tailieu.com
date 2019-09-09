<?php /* Smarty version Smarty-3.1.19, created on 2019-07-20 10:41:28
         compiled from "D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/components/widgets/views/categorymenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130945d2e8c4592f208-89558086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48c05fe735b285d9db27dbcd8495f30e80ee669c' => 
    array (
      0 => 'D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/components/widgets/views/categorymenu.tpl',
      1 => 1563617327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130945d2e8c4592f208-89558086',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d2e8c45a44c81_58689207',
  'variables' => 
  array (
    'check' => 0,
    'data' => 0,
    'v' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d2e8c45a44c81_58689207')) {function content_5d2e8c45a44c81_58689207($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['check']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['parent_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <a target="_blank" href="<?php echo @constant('ROOT_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['acsii'];?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
    <?php } ?>
<?php } else { ?>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['parent_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li class="mc-lists ">
            <a href="<?php echo @constant('ROOT_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['acsii'];?>
.html" target="_blank" class="btn-classify on" data-type="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
            <div class="clearfix vfp-cont  ">
                <h3>
                    <a href="<?php echo @constant('ROOT_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['acsii'];?>
.html" target="_blank"> <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
 </a>
                </h3>
                <?php if (isset($_smarty_tpl->tpl_vars['data']->value['sub_category'][$_smarty_tpl->tpl_vars['v']->value['id']])) {?>
                    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['sub_category'][$_smarty_tpl->tpl_vars['v']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                         <a href="<?php echo @constant('ROOT_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value['acsii'];?>
.html" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
</a>
                    <?php } ?>
                <?php }?>
            </div>
        </li>
    <?php } ?>

<?php }?>
<?php }} ?>
