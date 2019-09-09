<?php /* Smarty version Smarty-3.1.19, created on 2017-12-11 09:55:24
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/account/changeinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115320872459816e92ab6c93-07575509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f13f856e82ba79e010efecb89c5f07b4a7d3f9e' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/account/changeinfo.tpl',
      1 => 1512951055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115320872459816e92ab6c93-07575509',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59816e92b1eea4_95365292',
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
    'params' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59816e92b1eea4_95365292')) {function content_59816e92b1eea4_95365292($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/iyuyjfxt/public_html/webapp/vendors/smarty/libs/plugins/modifier.date_format.php';
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
                    <label class="ui-label">Số chứng thực *</label>
                    <input class="ui-input" id="id_no" name="id_no" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['id_no'];?>
" placeholder="" type="text" data-toggle="popover" autocomplete="off" data-placement="bottom">

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
