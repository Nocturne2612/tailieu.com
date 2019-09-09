<?php /* Smarty version Smarty-3.1.19, created on 2019-07-22 08:07:07
         compiled from "/home/tailieuk/public_html/webapp/modules/admin/components/widgets/views/admin_user_drop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10808732465abc8f8a5458a7-24459135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac95c249f4f344627160a15abc48706511d57864' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/admin/components/widgets/views/admin_user_drop.tpl',
      1 => 1563752340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10808732465abc8f8a5458a7-24459135',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc8f8a560807_16573311',
  'variables' => 
  array (
    'count' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abc8f8a560807_16573311')) {function content_5abc8f8a560807_16573311($_smarty_tpl) {?><!-- Right links for user info navbar -->
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
