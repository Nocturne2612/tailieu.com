<?php /* Smarty version Smarty-3.1.19, created on 2019-09-05 05:55:18
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/views/lostpass/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3394148205abc8f92323e62-42749794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d71d7aaa1946d9da053f04998a5a665bc5ca0cc' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/views/lostpass/index.tpl',
      1 => 1566790394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3394148205abc8f92323e62-42749794',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc8f9236d899_69448628',
  'variables' => 
  array (
    'err' => 0,
    'params' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abc8f9236d899_69448628')) {function content_5abc8f9236d899_69448628($_smarty_tpl) {?><div id="content">
    <div class="layout fn-clear">


        <div class="fn-clear" id="signin-wrapper">

            <div class="ui-box panel sign-panel" id="signin-panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Quên mật khẩu</h3>
                </div>
                <div class="panel-body fn-clear">
                    <?php echo CHtml::beginForm('','post',array('name'=>'register','id'=>'defaultForm'));?>

                    <div class="ui-form signin" style="width: 100%">
                        <?php if ($_smarty_tpl->tpl_vars['err']->value!='') {?>
                            <div class="error_show"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</div>

                        <?php }?>

                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Địa chỉ Email:</label>
                            <input class="ui-input" id="email" name="email" placeholder="" type="email" data-toggle="popover" autocomplete="off" data-placement="bottom" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['email'];?>
">
                        </div>
                        <hr>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Số điện thoại:</label>
                            <input class="ui-input" id="mobile_phone" name="mobile_phone" placeholder="" type="mobile_phone" data-toggle="popover" autocomplete="off" data-placement="bottom" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['mobile_phone'];?>
">

                        </div>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Mã bảo mật:</label>
                            <div class="col-sm-4 pdr5">
                                <input class="ui-input" id="verify_code"  name="verify_code" placeholder="" type="text">
                            </div>
                            <div class="col-sm-4 pdl5"> <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('CCaptcha',array('id'=>'ccaptcha'),true);?>
 </div>
                        </div>
                        <hr>
                        <div class="ui-form-item fn-clear">
                           
                                <input type="submit" value="Gửi yêu cầu" class="btn btn-block btn-warning btn-primary">
                        </div>
                    </div>
                    <?php echo CHtml::endForm();?>

                    <!-- not-member end -->

                </div>
            </div>

            <!-- // panel#signup-panel end -->

            <div class="ui-box panel sign-panel" id="forgot-psw" style="height: 368px;">
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
                            <br>
                            
                            <a class="btn btn-default " id="password_button" type="submit" href="<?php echo Yii::app()->createUrl('tailieu/register');?>
">Đăng ký</a>

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
