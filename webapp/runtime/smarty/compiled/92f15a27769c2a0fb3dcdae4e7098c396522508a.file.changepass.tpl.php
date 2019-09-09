<?php /* Smarty version Smarty-3.1.19, created on 2018-03-30 01:26:06
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/views/account/changepass.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12933418345abd922e71ff16-58551717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92f15a27769c2a0fb3dcdae4e7098c396522508a' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/views/account/changepass.tpl',
      1 => 1522308731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12933418345abd922e71ff16-58551717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abd922e764399_17304919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abd922e764399_17304919')) {function content_5abd922e764399_17304919($_smarty_tpl) {?>
<div class="common-mains">
    <div class="about-content">
        <h1>Đổi mật khẩu</h1>
        <?php echo CHtml::beginForm('','post',array('name'=>'changepass','id'=>'changepass'));?>

        <div class="panel-body fn-clear"> 
            <div class="ui-box panel sign-panel" id="signin-panel">
                <?php if ($_smarty_tpl->tpl_vars['errors']->value!='') {?>
                    <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['success']->value!='') {?>
                    <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
                <?php }?>
                <div class="ui-form-item fn-clear">
                    <label for="password_old" class="ui-label">Mật khẩu hiện tại</label>
                    <input class="ui-input" id="password_old" name="password_old" placeholder="" type="password" autocomplete="off">
                </div>
                <div class="ui-form-item fn-clear">
                    <label for="password" class="ui-label">Mật khẩu mới</label>

                    <input class="ui-input" id="password" name="password" placeholder="" type="password">
                </div>
                <div class="ui-form-item fn-clear">
                    <label for="repassword" class="ui-label">Xác nhận mật khẩu mới</label>

                    <input class="ui-input" id="repassword" placeholder="" name="repassword" type="password">

                </div>
                <div class="ui-form-item fn-clear">
                    <label for="" class="ui-label">Mã bảo mật:</label>
                    <input class="ui-label" id="verifyCode" name="verifyCode" type="text">
                    <div class="col-sm-4 pdl5"> <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('CCaptcha',array('id'=>'ccaptcha'),true);?>
 </div>
                </div>
                <hr>
                <div class="ui-form-item fn-clear">

                    <input type="submit" class="btn btn-warning" href="" value="Cập nhật">
                </div>
            </div>

        </div>

        <?php echo CHtml::endForm();?>

    </div>
</div>

    <style>
        #ccaptcha{width:80px;}
    </style>
    <style>
        #ccaptcha_button {
            display: none}
        </style>
    


















<?php }} ?>
