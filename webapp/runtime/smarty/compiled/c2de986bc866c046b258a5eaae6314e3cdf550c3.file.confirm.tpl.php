<?php /* Smarty version Smarty-3.1.19, created on 2018-06-19 08:12:14
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/lostpass/confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13703604175b28bade476e21-16083029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2de986bc866c046b258a5eaae6314e3cdf550c3' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/lostpass/confirm.tpl',
      1 => 1529384684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13703604175b28bade476e21-16083029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'err' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28bade4c1447_57050146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28bade4c1447_57050146')) {function content_5b28bade4c1447_57050146($_smarty_tpl) {?><div id="content">
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
                            <label class="ui-label">Mật khẩu mới:</label>
                            <input class="ui-input" id="password" name="password" placeholder="" type="password" data-toggle="popover" autocomplete="off" data-placement="bottom">
                            
                        </div>
                        <hr>
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">Xác nhận lại:</label>
                           <input class="ui-input" id="repassword" name="repassword" placeholder="" type="password" data-toggle="popover" autocomplete="off" data-placement="bottom">

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
                           
                                <input type="submit" value="Xác nhận" class="btn btn-block btn-warning btn-primary">
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
