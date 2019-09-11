<?php /* Smarty version Smarty-3.1.19, created on 2019-09-10 09:50:07
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/views/account/changeinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:376530595abcca8c0412e7-95196972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0194962efcae9aa1f2e8dd686ab795a6c568fa4a' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/views/account/changeinfo.tpl',
      1 => 1568001966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '376530595abcca8c0412e7-95196972',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abcca8c09ae31_76067193',
  'variables' => 
  array (
    'data' => 0,
    'errors' => 0,
    'success' => 0,
    'params' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abcca8c09ae31_76067193')) {function content_5abcca8c09ae31_76067193($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/tailieuk/public_html/webapp/vendors/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/tailieuk/public_html/webapp/vendors/smarty/libs/plugins/modifier.date_format.php';
?>
<div class="user-main">
    <div class="user-main-inner">
        <div class="user-profile">
            <h2 class="user-main-title">Thông tin</h2>
            <ul class="user-methods">
                <li class="user-methods-item">
                    <div class="user-methods-inner">
                        <strong class="user-methods-num"><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['data']->value['point'],2,",","."),',00','');?>
</strong>
                    </div>
                    <span class="user-methods-type">Point</span>
                </li>
                <li class="user-methods-item">
                    <div class="user-methods-inner">
                        <strong class="user-methods-num"><?php echo $_smarty_tpl->tpl_vars['data']->value['count_upload'];?>
</strong>
                    </div>
                    <span class="user-methods-type">Upload</span>
                </li>
                <li class="user-methods-item">
                    <div class="user-methods-inner">

                    </div>
                    <span class="user-methods-type">Level</span>
                </li>
                <li class="user-methods-item">
                    <div class="user-methods-inner">
                        <?php echo $_smarty_tpl->tpl_vars['data']->value['count_down'];?>

                    </div>
                    <span class="user-methods-type">Download</span>
                </li>
            </ul>
            <div class="user-profile-inner user-connect">
                <div class="user-profile-form">
                    <?php echo CHtml::beginForm('','post',array('name'=>'changeinfo','id'=>'changeinfo'));?>

                    <?php if ($_smarty_tpl->tpl_vars['errors']->value!='') {?>
                        <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['success']->value!='') {?>
                        <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
                    <?php }?>
                    <div class="user-profile-account">
                        <h4 class="user-profile-title">Thông tin khác</h4>
                        <div class="form-item">
                            <input class="ui-input" id="email_other" placeholder="" name="email_other" type="text" data-toggle="popover" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['email_other'];?>
">
                            <label for="email_other"><span>Email</span></label>
                        </div>
                        <div class="form-item">
                            <input class="ui-input" id="mobile_phone" placeholder="" name="mobile_phone" type="text" data-toggle="popover" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['mobile_phone'];?>
">
                            <label for="mobile_phone"><span>Số điện thoại</span></label>
                        </div>
                        <div class="form-item ccaptcha">
                            <input class="ui-input" id="verifyCode" name="verifyCode" type="text">
                            <label for="verifyCode"><span>Mã bảo mật</span></label>
                            <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('CCaptcha',array('id'=>'ccaptcha'),true);?>

                        </div>

                        
                    </div>
                    <div class="user-profile-personal">
                        <h4 class="user-profile-title">Thông tin tài khoản</h4>
                        <div class="form-item">
                            <input type="text" id="lastName" name="lastName" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['last_name'];?>
" class="real-name-input ">
                            <label for="lastName"><span>Họ</span></label>
                        </div>
                        <div class="form-item">
                            <input type="text" id="firstName" name="firstName" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['first_name'];?>
" class="job-title-input ">
                            <label for="firstName"><span>Tên</span></label>
                        </div>
                        <div class="form-item">
                            <input class="ui-input" id="dob" name="dob" placeholder="Ngày sinh định dạng ngày/tháng/năm" type="text" data-toggle="popover" autocomplete="off" data-placement="bottom" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['params']->value['dob'],"%d/%m/%Y");?>
">
                            <label for="Telephone Number"><span>Ngày sinh</span></label>
                        </div>
                        <div class="form-item">
                            <select name="gender" id="gender"  class="">
                                <option value="M" <?php if ($_smarty_tpl->tpl_vars['params']->value['gender']=='M') {?>selected="selected"<?php }?>>NAM</option>
                                <option value="F" <?php if ($_smarty_tpl->tpl_vars['params']->value['gender']=='F') {?>selected="selected"<?php }?>>NỮ</option>
                            </select>
                            <label for="gender"><span>Giới tính</span></label>
                        </div>
                    </div>
                    <div class="ui-form-item fn-clear">
                        <input type="submit" class="user-profile-submit user-profile-btn"  value="Cập nhật">
                    </div>
                    <?php echo CHtml::endForm();?>

                </div>
            </div>
        </div>
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
