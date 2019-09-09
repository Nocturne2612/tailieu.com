<?php /* Smarty version Smarty-3.1.19, created on 2018-06-20 09:46:51
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/account/changepass.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13851324835b2a228b020479-48033532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1590c93db7a6da9a5d8e119c07074fa501d3c036' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/account/changepass.tpl',
      1 => 1529384681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13851324835b2a228b020479-48033532',
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
  'unifunc' => 'content_5b2a228b0b4a05_46515354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2a228b0b4a05_46515354')) {function content_5b2a228b0b4a05_46515354($_smarty_tpl) {?>
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
