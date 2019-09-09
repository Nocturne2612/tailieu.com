<?php /* Smarty version Smarty-3.1.19, created on 2018-06-19 06:56:02
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/components/widgets/views/categorymenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21387324325b28a902af8592-26345157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caf1de2ada643f0a2dfb9638afcf35f5c21f0e12' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/components/widgets/views/categorymenu.tpl',
      1 => 1529384693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21387324325b28a902af8592-26345157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'check' => 0,
    'data' => 0,
    'v' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28a902b48c61_89553009',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28a902b48c61_89553009')) {function content_5b28a902b48c61_89553009($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['check']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['parent_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li  style="position: relative">	
            <h5><a href="<?php echo @constant('ROOT_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['acsii'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a><i class="icon-angle-right"></i></h5>
                    <?php if (isset($_smarty_tpl->tpl_vars['data']->value['sub_category'][$_smarty_tpl->tpl_vars['v']->value['id']])) {?>

                <ul class="dropdown-secondary  dropdown-secondary2 fn-clear" style="">
                    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['sub_category'][$_smarty_tpl->tpl_vars['v']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                        <li>
                            <a href="<?php echo @constant('ROOT_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value['acsii'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
</a>
                        </li>
                    <?php } ?>
                </ul>

            <?php }?>
        </li>
    <?php } ?>
<?php } else { ?>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['parent_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <li  style="">	
                <h5><a href="<?php echo @constant('ROOT_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['acsii'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a><i class="icon-angle-right"></i></h5>
                        <?php if (isset($_smarty_tpl->tpl_vars['data']->value['sub_category'][$_smarty_tpl->tpl_vars['v']->value['id']])) {?>
                    <ul class="dropdown-secondary  dropdown-secondary2 fn-clear" style="margin-left: 248px;min-height: 706px">
                        <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['sub_category'][$_smarty_tpl->tpl_vars['v']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                            <li>
                                <a href="<?php echo @constant('ROOT_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value['acsii'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
</a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php }?>
            </li>

    <?php } ?>

<?php }?>
<?php }} ?>
