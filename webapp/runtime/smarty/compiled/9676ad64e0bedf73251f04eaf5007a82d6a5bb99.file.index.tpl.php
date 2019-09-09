<?php /* Smarty version Smarty-3.1.19, created on 2019-07-21 02:20:17
         compiled from "D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/views/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:258405d33cbe18c7371-59328240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9676ad64e0bedf73251f04eaf5007a82d6a5bb99' => 
    array (
      0 => 'D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/views/login/index.tpl',
      1 => 1563617327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258405d33cbe18c7371-59328240',
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
  'unifunc' => 'content_5d33cbe1982777_52073923',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d33cbe1982777_52073923')) {function content_5d33cbe1982777_52073923($_smarty_tpl) {?><div id="content">
    <div class="layout fn-clear">


        <div class="fn-clear" id="signin-wrapper">
            
                <div class="ui-box panel sign-panel" id="signin-panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Đăng nhập vào Website:</h3>
                    </div>
                    <div class="panel-body fn-clear">
                        <?php echo CHtml::beginForm('','post',array('enctype'=>''));?>

                        <div class="ui-form signin">
                            <?php if ($_smarty_tpl->tpl_vars['errors']->value!='') {?>
                                <div class="error_show"><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</div>

                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['success']->value!='') {?>
                                <div class="error_show"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
                            <?php }?>

                            <div class="ui-form-item fn-clear">
                                <label class="ui-label" for="user-name">Email *:</label>
                                <input type="email" name="username" id="user-name" class="ui-input" required="required" value="<?php echo ObjInput::get('username','str','');?>
" >

                                <!-- // ui-tips end -->
                            </div>
                            <div class="ui-form-item fn-clear">
                                <label class="ui-label" for="password">Password *:</label>
                                <input type="password" name="password" id="password" class="ui-input" required="required" value="">

                                <!-- // ui-tips end -->
                            </div>
                            <div class="ui-form-item fn-clear">
                                <label for="" class="ui-label">Mã bảo mật*:</label>
                                <input class="ui-input" id="verifyCode" name="verifyCode" type="text">
                                <div class="col-sm-4 pdl5"> <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('CCaptcha',array('id'=>'ccaptcha'),true);?>
 </div>
                            </div>
                           
                            <div class="ui-form-item fn-clear">
                                <label class="ui-label">&nbsp;</label>
                                <input type="hidden" name="next_url" value="/">

                                <button class="btn btn-secondary btn-large fn-left" name="dangnhap" type="submit" id="signin_button">Đăng nhập</button>

                            </div>
                        </div>
                        <?php echo CHtml::endForm();?>


                        <div class="not-member">
                            
                            <div class="not-member-inner">
							<h3>Bạn chưa có tài khoản?</h3>
							<p>Đăng ký để tải file trên tailieukientruc!</p>
							<a class="btn btn-primary" href="<?php echo Yii::app()->createUrl("tailieu/register");?>
">Đăng ký miễn phí</a>
                            hoặc
                            <br><a href="<?php echo Yii::app()->createUrl("tailieu/login/facebook");?>
" class="btn btn-primary"><i class="icon-facebook"></i> Đăng nhập với Facebook  </a>
							<a href="<?php echo Yii::app()->createUrl("tailieu/login/google");?>
" class="btn btn-secondary"><i class="icon-google"></i> Đăng nhập với Google  </a>
						</div>
                            
                        </div>
                        <!-- not-member end -->

                    </div>
                </div>

            <!-- // panel#signup-panel end -->

            <div class="ui-box panel sign-panel" id="forgot-psw" style="height: 356px;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bạn quên mật khẩu?</h3>
                    </div>
                    <div class="panel-body">
                        <div class="ui-form">

                            <div class="ui-form-item fn-clear">
                                <a class="btn btn-primary " id="password_button" type="submit" href="<?php echo Yii::app()->createUrl('tailieu/lostpass');?>
">Lấy lại mật khẩu</a>
                               
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
                                </style><?php }} ?>
