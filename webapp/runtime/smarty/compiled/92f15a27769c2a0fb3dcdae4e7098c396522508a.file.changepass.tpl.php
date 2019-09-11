<?php /* Smarty version Smarty-3.1.19, created on 2019-09-10 09:49:32
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/views/account/changepass.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12933418345abd922e71ff16-58551717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92f15a27769c2a0fb3dcdae4e7098c396522508a' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/views/account/changepass.tpl',
      1 => 1568001966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12933418345abd922e71ff16-58551717',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abd922e764399_17304919',
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abd922e764399_17304919')) {function content_5abd922e764399_17304919($_smarty_tpl) {?>
<div class="user-main">
    <div class="user-main-inner">
        <div class="user-profile">

            <h1>Đổi Mật khẩu</h1>
             <?php echo CHtml::beginForm('','post',array('name'=>'changepass','id'=>'changepass'));?>

            <div class="user-profile-inner user-connect"> 
                <div class="window-jobCollect-contain">
                    <?php if ($_smarty_tpl->tpl_vars['errors']->value!='') {?>
                        <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['success']->value!='') {?>
                        <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
                    <?php }?>
                    <p class="window-jobCollect-question">Mật khẩu cũ</p>
                    <div class="window-jobCollect-group _job">
                        <input class="ui-input" id="password_old" name="password_old" placeholder="Mật khẩu hiện tại" type="password" autocomplete="off">
                    </div>
                    <p class="window-jobCollect-question">Mật khẩu mới</p>
                    <div class="window-jobCollect-group _job">
                         <input class="ui-input" id="password" name="password" placeholder="Mật khẩu mới" type="password">
                    </div>
                    <p class="window-jobCollect-question">Xác nhận lại mật khẩu</p>
                    <div class="window-jobCollect-group _job">
                         <input class="ui-input" id="repassword" placeholder="Xác nhận mật khẩu mới" name="repassword" type="password">
                    </div>
                    <p class="window-jobCollect-question">Mã bảo mật</p>
                    <div class="window-jobCollect-group _job ccaptcha">
                        <input class="ui-input" id="verifyCode" name="verifyCode" type="text">
                        <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('CCaptcha',array('id'=>'ccaptcha'),true);?>

                    </div>
                    <button type="submit" href="javascript:;" class="submit">Thực hiện</button>

                </div>
            </div>

            <?php echo CHtml::endForm();?>

        </div>
        
            <style>
                #ccaptcha{width:80px;}
            </style>
            <style>
                #ccaptcha_button {
                    display: none}
            </style>
        
    </div>
</div>


<?php }} ?>
