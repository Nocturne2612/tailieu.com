<?php /* Smarty version Smarty-3.1.19, created on 2019-09-09 04:07:41
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/components/widgets/views/categorymenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12095026385abc866fefde78-98144237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaa62e776f4e5dde04a3f92ec6d438da73edbf02' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/components/widgets/views/categorymenu.tpl',
      1 => 1568001974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12095026385abc866fefde78-98144237',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc866ff3a419_10006011',
  'variables' => 
  array (
    'check' => 0,
    'data' => 0,
    'v' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abc866ff3a419_10006011')) {function content_5abc866ff3a419_10006011($_smarty_tpl) {?>
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
