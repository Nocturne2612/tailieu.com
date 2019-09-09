<?php /* Smarty version Smarty-3.1.19, created on 2017-12-11 07:11:03
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/tailieu/components/widgets/views/categorymenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1537968765598139e34a3950-58142313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf74628e80770aaf01fd88de3a94cf4e6fc8d158' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/tailieu/components/widgets/views/categorymenu.tpl',
      1 => 1512951055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1537968765598139e34a3950-58142313',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_598139e34ec330_29201303',
  'variables' => 
  array (
    'check' => 0,
    'data' => 0,
    'v' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598139e34ec330_29201303')) {function content_598139e34ec330_29201303($_smarty_tpl) {?>
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
