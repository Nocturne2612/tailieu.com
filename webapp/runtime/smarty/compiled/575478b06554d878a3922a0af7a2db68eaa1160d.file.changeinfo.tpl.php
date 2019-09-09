<?php /* Smarty version Smarty-3.1.19, created on 2018-07-13 02:39:03
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/account/changeinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14397445685b28a98591dc85-73234273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '575478b06554d878a3922a0af7a2db68eaa1160d' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/account/changeinfo.tpl',
      1 => 1531449543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14397445685b28a98591dc85-73234273',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28a98598d3b2_59754626',
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
    'params' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28a98598d3b2_59754626')) {function content_5b28a98598d3b2_59754626($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tailieu1/tailieukientruc.net/webapp/vendors/smarty/libs/plugins/modifier.date_format.php';
?>
<div class="common-mains">
    <div class="about-content">
        <h1>Cập nhật thông tin</h1>
        <?php echo CHtml::beginForm('','post',array('name'=>'changeinfo','id'=>'changeinfo'));?>

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
                    <label class="ui-label">Họ*</label><input class="ui-input" id="lastName" name="lastName" placeholder="Họ" type="text" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['last_name'];?>
">
                </div>
                <div class="ui-form-item fn-clear">
                    <label class="ui-label">Tên *</label>
                    <input class="ui-input" id="firstName" name="firstName" placeholder="Tên" type="text" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['first_name'];?>
">
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
                    <label class="ui-label" for="dob">Ngày sinh *</label>
                    <input class="ui-input" id="dob" name="dob" placeholder="Ngày sinh định dạng ngày/tháng/năm" type="text" data-toggle="popover" autocomplete="off" data-placement="bottom" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['params']->value['dob'],"%d/%m/%Y");?>
">
                </div>

                <div class="ui-form-item fn-clear">
                    <label for="" class="ui-label">Số điện thoại *</label>
                    <input class="ui-input" id="mobile_phone" placeholder="" name="mobile_phone" type="text" data-toggle="popover" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['mobile_phone'];?>
">
                </div>
				<div class="ui-form-item fn-clear">
                    <label for="" class="ui-label">Email *</label>
                    <input class="ui-input" id="email_other" placeholder="" name="email_other" type="text" data-toggle="popover" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['email_other'];?>
">
                </div>
                <div class="ui-form-item fn-clear">
                    <label for="" class="ui-label">Mã bảo mật:</label>

                    <input class="ui-input" id="verifyCode" name="verifyCode" type="text">
                    
                </div>
                <div class="ui-form-item fn-clear">
                    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('CCaptcha',array('id'=>'ccaptcha'),true);?>

                </div>
                <div class="ui-form-item fn-clear">
                    <input type="submit" class="btn btn-warning"  value="Cập nhật">
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
