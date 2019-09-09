<?php /* Smarty version Smarty-3.1.19, created on 2019-09-03 08:42:03
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/components/widgets/views/info_account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1064233255abc8b8251b560-81942302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40bc255192031f955d0b17e3aef87a5f6449efbc' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/components/widgets/views/info_account.tpl',
      1 => 1566790388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1064233255abc8b8251b560-81942302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc8b8256a953_32617101',
  'variables' => 
  array (
    'data' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abc8b8256a953_32617101')) {function content_5abc8b8256a953_32617101($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tailieuk/public_html/webapp/vendors/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) include '/home/tailieuk/public_html/webapp/vendors/smarty/libs/plugins/modifier.replace.php';
?>
<?php if ($_smarty_tpl->tpl_vars['data']->value) {?>

    <?php $_smarty_tpl->tpl_vars['action'] = new Smarty_variable(Yii::app()->controller->action->id, null, 0);?>

    <div class="user-aside">
        <div class="user-panel">
            <div class="user-panel-mask">
                <img src="/assets/images/007-nature-29.png" alt="">
            </div>
            <div class="user-panel-img sliver">
                <img src="/assets/images/007-nature-29.png" alt="">
            </div>
            <div class="user-panel-info">
                <p class="user-panel-name"><?php echo $_smarty_tpl->tpl_vars['data']->value['first_name'];?>
                
                </p>
                <span class="user-panel-id">
                    <?php if ($_smarty_tpl->tpl_vars['data']->value['type']==2) {?>
                        <li class="list-group-item"><b style="color: red;font-weight: bold">VIP</b> đến <b style="color: #468847"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['time_vip_end'],"%d-%m-%Y");?>
</b></li>
                        <?php } else { ?>
                        <li class="list-group-item"> <b style="font-weight: bold">Bình thường</b></li>
                        <?php }?>

                </span>
                <li class="list-group-item">Gia nhập từ: <b class="alert-warning"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['create_time'],"%d-%m-%Y");?>
</b></li>
                <li class="list-group-item">Số Point: <b class="alert-danger"><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['data']->value['point'],2,",","."),',00','');?>
</b> Point</li>
                <li class="list-group-item">Upload: <b class="alert-danger"><?php echo $_smarty_tpl->tpl_vars['data']->value['count_upload'];?>
</b> tài liệu</li>
                <li class="list-group-item">Download: <b class="alert-danger"><?php echo $_smarty_tpl->tpl_vars['data']->value['count_down'];?>
</b> tài liệu</li>
            </div>
        </div>
        <ul class="user-router">
            <li <?php if ($_smarty_tpl->tpl_vars['action']->value=='changeinfo') {?>class=' new-color'<?php }?>><a href="<?php echo SystemBase::buildUrl('tailieu/account/changeinfo',array());?>
">Cập nhật tài khoản</a> </li>
            <li <?php if ($_smarty_tpl->tpl_vars['action']->value=='index') {?>class=' new-color'<?php }?>><a href="<?php echo SystemBase::buildUrl('tailieu/account',array());?>
">Lịch sử download</a> </li>	
            <li <?php if ($_smarty_tpl->tpl_vars['action']->value=='historyupload') {?>class=' new-color'<?php }?>><a href="<?php echo SystemBase::buildUrl('tailieu/account/historyupload',array());?>
">Lịch sử Upload</a> </li>
            <li <?php if ($_smarty_tpl->tpl_vars['action']->value=='historypoint') {?>class=' new-color'<?php }?>><a href="<?php echo SystemBase::buildUrl('tailieu/account/historypoint',array());?>
">Lịch sử POINT</a> </li>
            <li <?php if ($_smarty_tpl->tpl_vars['action']->value=='favorite') {?>class=' new-color'<?php }?>><a href="<?php echo SystemBase::buildUrl('tailieu/account/favorite',array());?>
">Ưa thích</a> </li>
            <li <?php if ($_smarty_tpl->tpl_vars['action']->value=='changepass') {?>class=' new-color'<?php }?>><a href="<?php echo SystemBase::buildUrl('tailieu/account/changepass',array());?>
">Đổi mật khẩu</a> </li>
        </ul>
    </div>

    <style>
        .about-menu  .active  {
            border: 1px solid red
        }
        .about-menu  .active  a {
            font-weight: bold;color:red
        }
    </style>
<?php }?>


<?php }} ?>
