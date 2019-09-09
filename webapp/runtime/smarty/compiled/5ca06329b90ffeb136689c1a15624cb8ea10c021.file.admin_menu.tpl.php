<?php /* Smarty version Smarty-3.1.19, created on 2019-07-22 08:07:52
         compiled from "/home/tailieuk/public_html/webapp/modules/admin/components/widgets/views/admin_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17480691265abc8f8fa43586-56740166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ca06329b90ffeb136689c1a15624cb8ea10c021' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/admin/components/widgets/views/admin_menu.tpl',
      1 => 1563752340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17480691265abc8f8fa43586-56740166',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc8f8fa89d43_61301594',
  'variables' => 
  array (
    'count' => 0,
    'menu' => 0,
    'item' => 0,
    'k' => 0,
    'controller' => 0,
    'v' => 0,
    'item_c' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abc8f8fa89d43_61301594')) {function content_5abc8f8fa89d43_61301594($_smarty_tpl) {?>
<nav class="navbar horizontal-menu navbar-fixed-top"><!-- set fixed position by adding class "navbar-fixed-top" -->
  
  <div class="navbar-inner"> 
    <!-- Navbar Brand -->
    <div class="navbar-brand"> <a href="<?php echo Yii::app()->createUrl('admin/default');?>
" class="logo"> <img src="<?php echo @constant('ROOT_URL');?>
/assets/xeon/images/logo-white-bg@2x.png" width="80" alt="" class="hidden-xs" /> <img src="<?php echo @constant('ROOT_URL');?>
/assets/xeon/images/logo@2x.png" width="80" alt="" class="visible-xs" /> </a> </div>
    
    <!-- Mobile Toggles Links -->
    <div class="nav navbar-mobile"> 
      
      <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
      <div class="mobile-menu-toggle"> 
        <!-- This will open the popup with user profile settings, you can use for any purpose, just be creative --> 
        
        <a href="#" data-toggle="user-info-menu-horizontal"> <i class="fa-bell-o"></i> <span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span> </a> 
        
        <!-- data-toggle="mobile-menu-horizontal" will show horizontal menu links only --> 
        <!-- data-toggle="mobile-menu" will show sidebar menu links only --> 
        <!-- data-toggle="mobile-menu-both" will show sidebar and horizontal menu links --> 
        <a href="#" data-toggle="mobile-menu-horizontal"> <i class="fa-bars"></i> </a> </div>
    </div>
    <div class="navbar-mobile-clear"></div>
    
    <!-- main menu -->
    
    <ul class="navbar-nav">
      <?php if ($_smarty_tpl->tpl_vars['menu']->value) {?>
      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
      <?php if ($_smarty_tpl->tpl_vars['item']->value['visible']) {?>
      <li <?php if (strrpos($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['controller']->value)>0) {?> class="active opened"<?php }?>> 
        <?php if ($_smarty_tpl->tpl_vars['item']->value['childs']) {?> <a><i class="<?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
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
        <?php } else { ?> <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><i class="linecons-cog"></i><span class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
 </span></a> <?php }?> </li>
      <?php }?>
      <?php } ?>
      <?php }?>
    </ul>
    <ul class="nav nav-userinfo navbar-right">
      <!-- Right links for user info navbar -->
  
      <li class="dropdown xs-left"> 
      <a class="notification-icon notification-icon-messages" data-toggle="dropdown" href="#" > <i class="fa-bell-o"></i> <span class="badge badge-purple"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span> </a>
        <ul class="dropdown-menu notifications">
          <li class="top">
            <p class="small"> <a href="<?php echo Yii::app()->createUrl('admin/products');?>
"> Có <strong><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</strong> chưa được duyệt.</a> </p>
          </li>
        </ul>
      </li>
      <li class="dropdown user-profile"> <a href="#" data-toggle="dropdown"> <img src="<?php echo @constant('ROOT_URL');?>
/assets/xeon/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" /> <span> <?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>
 <i class="fa-angle-down"></i> </span> </a>
        <ul class="dropdown-menu user-profile-menu list-unstyled">
          <li> <a href="<?php echo Yii::app()->createUrl('admin/default');?>
"> <i class="fa-edit"></i> Bảng điều khiển </a> </li>
          <li> <a target="_blank" href="<?php echo Yii::app()->createUrl('tailieu');?>
"> <i class="fa-edit"></i> Xem trang chủ </a> </li>
          <li class="last"> <a href="<?php echo Yii::app()->createUrl('admin/account/logout/');?>
"> <i class="fa-lock"></i> Logout </a> </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
<?php }} ?>
