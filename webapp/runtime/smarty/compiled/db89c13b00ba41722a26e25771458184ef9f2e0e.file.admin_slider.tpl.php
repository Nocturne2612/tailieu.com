<?php /* Smarty version Smarty-3.1.19, created on 2018-06-19 07:24:00
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/admin/components/widgets/views/admin_slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16780871995b28af9037dcc2-59721943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db89c13b00ba41722a26e25771458184ef9f2e0e' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/admin/components/widgets/views/admin_slider.tpl',
      1 => 1529384691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16780871995b28af9037dcc2-59721943',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'item' => 0,
    'k' => 0,
    'controller' => 0,
    'v' => 0,
    'item_c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28af903b9a87_14869828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28af903b9a87_14869828')) {function content_5b28af903b9a87_14869828($_smarty_tpl) {?><div class="sidebar-menu toggle-others fixed">
    <div class="sidebar-menu-inner">	
        <header class="logo-env">
            <!-- logo -->
            <div class="logo">
                <a href="<?php echo Yii::app()->createUrl('admin/default');?>
" class="logo-expanded">
                    <img src="<?php echo @constant('ROOT_URL');?>
/assets/xeon/images/logo@2x.png" width="80" alt="" />
                </a>

                <a href="<?php echo Yii::app()->createUrl('admin/default');?>
" class="logo-collapsed">
                    <img src="<?php echo @constant('ROOT_URL');?>
/assets/xeon/images/logo-collapsed@2x.png" width="40" alt="" />
                </a>
            </div>

            <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
            <div class="mobile-menu-toggle visible-xs">
                 <!-- <a href="#" data-toggle="user-info-menu">
                    <i class="fa-bell-o"></i>
                    <span class="badge badge-success">7</span>
                </a> -->

                <a href="#" data-toggle="mobile-menu">
                    <i class="fa-bars"></i>
                </a>
            </div>


        </header>

        <ul id="main-menu" class="main-menu">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['visible']) {?>
                    <li <?php if (strrpos($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['controller']->value)>0) {?> class="active opened"<?php }?>> 
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['childs']) {?>
                            <a><i class="<?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
"></i><span class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
 </span></a> 
                            <ul> 
                                <?php  $_smarty_tpl->tpl_vars['item_c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item_c']->_loop = false;
 $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item_c']->key => $_smarty_tpl->tpl_vars['item_c']->value) {
$_smarty_tpl->tpl_vars['item_c']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->value = $_smarty_tpl->tpl_vars['item_c']->key;
?>
                                    <li <?php if ($_smarty_tpl->tpl_vars['v']->value==$_smarty_tpl->tpl_vars['controller']->value) {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['item_c']->value['link'];?>
"> <span class="title"><?php echo $_smarty_tpl->tpl_vars['item_c']->value['title'];?>
</span></a></li>
                                    <?php } ?>
                            </ul>
                        <?php } else { ?> 
                            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><i class="linecons-cog"></i><span class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
 </span></a> 
                        <?php }?>                      
                    </li>
                <?php }?>
            <?php } ?>
          
        </ul>

    </div>
</div><?php }} ?>
