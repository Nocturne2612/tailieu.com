<?php /* Smarty version Smarty-3.1.19, created on 2017-12-11 07:11:33
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/tailieu/components/widgets/views/info_account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73736245759813e8261dab0-15160321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a79ee1716c7fc89511c8113a048b7d344a8ba530' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/tailieu/components/widgets/views/info_account.tpl',
      1 => 1512951056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73736245759813e8261dab0-15160321',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59813e826800d4_02278067',
  'variables' => 
  array (
    'data' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59813e826800d4_02278067')) {function content_59813e826800d4_02278067($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/iyuyjfxt/public_html/webapp/vendors/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) include '/home/iyuyjfxt/public_html/webapp/vendors/smarty/libs/plugins/modifier.replace.php';
?>
<?php if ($_smarty_tpl->tpl_vars['data']->value) {?>

    <?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable(Yii::app()->controller->action->id, null, 0);?>
    <div class="common-aside">
        <div class="about-menu">
            <h5><strong> &nbsp;&nbsp; Chào  <?php echo $_smarty_tpl->tpl_vars['data']->value['first_name'];?>
</strong></h5> 
            <div style="">
                <ul class="list-group clearfix">
                    <li class="list-group-item">Họ tên: <b class="alert-success"><?php echo $_smarty_tpl->tpl_vars['data']->value['last_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['first_name'];?>
</b></li>
                    <li class="list-group-item">Mã Thành viên: <b class="alert-success"><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</b></li>
                    <li class="list-group-item">Thành viên từ: <b class="alert-warning"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['create_time'],"%d-%m-%Y");?>
</b></li>
                    <li class="list-group-item">Số Point: <b class="alert-danger"><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['data']->value['point'],2,",","."),',00','');?>
</b> Point</li>
                    <li class="list-group-item">Upload: <b class="alert-danger"><?php echo $_smarty_tpl->tpl_vars['data']->value['count_upload'];?>
</b> tài liệu</li>
                    <li class="list-group-item">Download: <b class="alert-danger"><?php echo $_smarty_tpl->tpl_vars['data']->value['count_down'];?>
</b> tài liệu</li>

                </ul>
            </div>
            <a  class="btn btn-secondary upload-btn" href="<?php echo SystemBase::buildUrl('tailieu/account/upload',array());?>
">UPLOAD TÀI LIỆU</a>    
            <hr>
            <a class="btn btn-small btn-primary"  href="<?php echo SystemBase::buildUrl('tailieu/addfund/',array());?>
">Nạp tiền</a> 
            <h5 <?php if ($_smarty_tpl->tpl_vars['action']->value=='index') {?>class='active'<?php }?>><a href="<?php echo SystemBase::buildUrl('tailieu/account',array());?>
">Lịch sử download</a> </h5>	
            <h5 <?php if ($_smarty_tpl->tpl_vars['action']->value=='historyupload') {?>class='active'<?php }?>><a href="<?php echo SystemBase::buildUrl('tailieu/account/historyupload',array());?>
">Lịch sử Upload</a> </h5>
            <h5 <?php if ($_smarty_tpl->tpl_vars['action']->value=='historypoint') {?>class='active'<?php }?>><a href="<?php echo SystemBase::buildUrl('tailieu/account/historypoint',array());?>
">Lịch sử POINT</a> </h5>
            <h5 <?php if ($_smarty_tpl->tpl_vars['action']->value=='changeinfo') {?>class='active'<?php }?>><a href="<?php echo SystemBase::buildUrl('tailieu/account/changeinfo',array());?>
">Cập nhật tài khoản</a> </h5>
            <h5 <?php if ($_smarty_tpl->tpl_vars['action']->value=='favorite') {?>class='active'<?php }?>><a href="<?php echo SystemBase::buildUrl('tailieu/account/favorite',array());?>
">Ưa thích</a> </h5>
            <h5 <?php if ($_smarty_tpl->tpl_vars['action']->value=='changepass') {?>class='active'<?php }?>><a href="<?php echo SystemBase::buildUrl('tailieu/account/changepass',array());?>
">Đổi mật khẩu</a> </h5>

            <h5><a href="<?php echo SystemBase::buildUrl('tailieu/account/logout',array());?>
">Đăng xuất</a> </h5>  
        </div>
    </div> 
    <style>
        .about-menu  .active  {
            border: 1px solid red
        }
        .about-menu  .active  a {
            font-weight: bold;color:red
        }
    </style>
<?php }?>


<?php }} ?>
