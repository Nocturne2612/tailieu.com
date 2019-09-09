<?php /* Smarty version Smarty-3.1.19, created on 2017-12-11 07:11:27
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1811313475598139eaa22c92-84546824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c26347e4ad596ef64538cbc7e227067e6b2e010' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/login/index.tpl',
      1 => 1512951055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1811313475598139eaa22c92-84546824',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_598139eaa895f2_93988624',
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598139eaa895f2_93988624')) {function content_598139eaa895f2_93988624($_smarty_tpl) {?><div id="content">
    <div class="layout fn-clear">


        <div class="fn-clear" id="signin-wrapper">
            
                <div class="ui-box panel sign-panel" id="signin-panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Đăng nhập</h3>
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
                                <label class="ui-label" for="user-name">Tên đăng nhập:</label>
                                <input type="email" name="username" id="user-name" class="ui-input" required="required" value="<?php echo ObjInput::get('username','str','');?>
" >

                                <!-- // ui-tips end -->
                            </div>
                            <div class="ui-form-item fn-clear">
                                <label class="ui-label" for="password">Mật khẩu:</label>
                                <input type="password" name="password" id="password" class="ui-input" required="required" value="">

                                <!-- // ui-tips end -->
                            </div>
                            <div class="ui-form-item fn-clear">
                                <label for="" class="ui-label">Mã bảo mật:</label>
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
