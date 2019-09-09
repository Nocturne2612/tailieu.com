<?php /* Smarty version Smarty-3.1.19, created on 2018-03-29 07:32:24
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/views/register/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11254689315abc8676ca15a9-37721083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5e05360dacd28bb6438ffc87d3c09fc35f4b686' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/views/register/index.tpl',
      1 => 1522308734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11254689315abc8676ca15a9-37721083',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc8676d01d97_64499739',
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
    'params' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abc8676d01d97_64499739')) {function content_5abc8676d01d97_64499739($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tailieuk/public_html/webapp/vendors/smarty/libs/plugins/modifier.date_format.php';
?><div id="content">
    <div class="layout fn-clear">
        <div class="fn-clear" id="signin-wrapper">
            <div class="ui-box panel sign-panel" id="signin-panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Đăng ký tài khoản</h3>
                </div>
                <div class="panel-body fn-clear">
                    <?php echo CHtml::beginForm('','post',array('name'=>'register','id'=>'defaultForm'));?>

                    <div class="ui-form signin" style="width: 100%">
                        <?php if ($_smarty_tpl->tpl_vars['errors']->value!='') {?>
                            <div class="error_show"><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</div>

                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['success']->value!='') {?>
                            <div class="error_show"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
                        <?php }?>

                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Họ *</label>
                            <input class="ui-input" id="lastName" name="lastName" placeholder="Họ" type="text" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['last_name'];?>
">
                        </div>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Tên *</label>
                            <input class="ui-input" id="firstName" name="firstName" placeholder="Tên" type="text" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['first_name'];?>
">
                        </div>
                        <hr>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Địa chỉ Email *</label>
                            <input class="ui-input" id="email" name="email" placeholder="" type="email" data-toggle="popover" autocomplete="off" data-placement="bottom" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['email'];?>
">

                        </div>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Điện thoại *</label>
                            <input class="ui-input" id="mobile_phone" name="mobile_phone" placeholder="" type="mobile_phone" data-toggle="popover" autocomplete="off" data-placement="bottom" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['mobile_phone'];?>
">
                        </div>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label" for="dob">Ngày sinh *</label>
                            <input class="ui-input" id="dob" name="dob" placeholder="Ngày sinh định dạng ngày/tháng/năm" type="text" data-toggle="popover" autocomplete="off" data-placement="bottom" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['params']->value['dob'],"%d/%m/%Y");?>
">
                        </div>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Mật khẩu đăng nhập *</label>
                            <input class="ui-input" id="password" name="password" placeholder="" type="password" data-toggle="popover" autocomplete="off" data-placement="bottom">
                        </div>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Xác nhận mật khẩu *</label>
                            <input class="ui-input" id="repassword" name="repassword" placeholder="" type="password" data-toggle="popover" autocomplete="off" data-placement="bottom">
                        </div>
                        <hr>

                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Số xác thực</label>
                            <input class="ui-input" id="id_no" name="id_no" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['id_no'];?>
" placeholder="Số chứng minh nhân dân." type="text" data-toggle="popover" autocomplete="off" data-placement="bottom">
                        </div>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Giới tính *</label>
                            <select class="ui-input" name="gender" id="gender">
                                <option  value="" selected="selected">-- Chọn giới tính --</option>
                                <option value="M" <?php if ($_smarty_tpl->tpl_vars['params']->value['gender']=='M') {?>selected="selected"<?php }?>>NAM</option>
                                <option value="F" <?php if ($_smarty_tpl->tpl_vars['params']->value['gender']=='F') {?>selected="selected"<?php }?>>NỮ</option>
                            </select>
                        </div>

                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Mã bảo mật:</label>
                            <input class="ui-input" id="verify_code" name="verify_code" placeholder="" type="text">
                            <div class="col-sm-4 pdl5"> <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('CCaptcha',array('id'=>'ccaptcha'),true);?>
 </div>
                        </div>

                        <div class="ui-form-item fn-clear">
                            <input type="submit" value="Đăng ký" class="btn btn-block btn-warning btn-primary">
                        </div>
                    </div>
                    <?php echo CHtml::endForm();?>


                    
                    <!-- not-member end -->

                </div>
            </div>

            <!-- // panel#signup-panel end -->

            <div class="ui-box panel sign-panel" id="forgot-psw">
                <div class="panel-heading">
                    <h3 class="panel-title">Bạn quên mật khẩu?</h3>
                </div>
                <div class="panel-body">
                    <div class="ui-form">

                        <div class="ui-form-item fn-clear">
                            <a class="btn btn-primary " id="password_button" type="submit" href="<?php echo Yii::app()->createUrl('tailieu/lostpass');?>
">Lấy lại mật khẩu</a>
                            <br>
                            <a class="btn btn-danger " id="password_button" type="submit" href="<?php echo Yii::app()->createUrl('tailieu/login');?>
">Đăng nhập</a>
                        </div>
                    </div>
                    <!-- ui-form end -->
                </div>
            </div>
            <!-- // panel.forgot-psw end -->
        </div>
        <!-- // signin-wrapper end -->


    </div>
    <!-- layout#translation-focus end -->
</div>
<style>
    #ccaptcha_button {
        display: none}
    </style>
















   <?php }} ?>
