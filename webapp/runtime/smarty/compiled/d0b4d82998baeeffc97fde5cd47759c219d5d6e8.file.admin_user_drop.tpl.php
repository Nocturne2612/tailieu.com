<?php /* Smarty version Smarty-3.1.19, created on 2018-06-19 07:24:00
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/admin/components/widgets/views/admin_user_drop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3087383425b28af903cb9e3-50018517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0b4d82998baeeffc97fde5cd47759c219d5d6e8' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/admin/components/widgets/views/admin_user_drop.tpl',
      1 => 1529384691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3087383425b28af903cb9e3-50018517',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28af903e9eb9_45946470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28af903e9eb9_45946470')) {function content_5b28af903e9eb9_45946470($_smarty_tpl) {?><!-- Right links for user info navbar -->
<li class="dropdown xs-left">
    <a class="notification-icon notification-icon-messages" data-toggle="dropdown" href="#" style="line-height: 85px;">
        <i class="fa-bell-o"></i>
        <span class="badge badge-purple"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>
    </a>

    <ul class="dropdown-menu notifications">
        <li class="top">
            <p class="small">

                <a href="<?php echo Yii::app()->createUrl('admin/products');?>
"> Có  <strong><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</strong> chưa được duyệt.</a>
            </p>
        </li>


    </ul>
</li>


<li class="dropdown user-profile">
    <a href="#" data-toggle="dropdown">
        <img src="<?php echo @constant('ROOT_URL');?>
/assets/xeon/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
        <span>
            <?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>

            <i class="fa-angle-down"></i>
        </span>
    </a>

    <ul class="dropdown-menu user-profile-menu list-unstyled">
        <li>
            <a href="<?php echo Yii::app()->createUrl('admin/default');?>
">
                <i class="fa-edit"></i>
                Bảng điều khiển
            </a>
        </li><li>        
            <a href="<?php echo Yii::app()->createUrl('tailieu');?>
">
                <i class="fa-edit"></i>
                Xem trang chủ
            </a>
        </li>
        <!-- <li>
             <a href="#settings">
                 <i class="fa-wrench"></i>
                 Cài đặt
             </a>
         </li>
         <li>
             <a href="<?php echo Yii::app()->createUrl('admin/useradmin/view/',array('id'=>$_smarty_tpl->tpl_vars['info']->value['id']));?>
">
                 <i class="fa-user"></i>
                 Thông tin cá nhân
             </a>
         </li>-->

        <li class="last">
            <a href="<?php echo Yii::app()->createUrl('admin/account/logout/');?>
">
                <i class="fa-lock"></i>
                Logout
            </a>
        </li>
    </ul>
</li>


<?php }} ?>
