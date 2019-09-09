<?php /* Smarty version Smarty-3.1.19, created on 2018-03-09 00:39:30
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/admin/views/account/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10841107059817fe28dc4a2-14727815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31c13ae7cd72cf44bcf595dbdc007a2b1abf43b8' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/admin/views/account/view.tpl',
      1 => 1520530768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10841107059817fe28dc4a2-14727815',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59817fe29573d9_86526423',
  'variables' => 
  array (
    'link_account' => 0,
    'data' => 0,
    'link_action' => 0,
    'type_arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59817fe29573d9_86526423')) {function content_59817fe29573d9_86526423($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/iyuyjfxt/public_html/webapp/vendors/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) include '/home/iyuyjfxt/public_html/webapp/vendors/smarty/libs/plugins/modifier.replace.php';
?>
<div class="page-title">
  <div class="title-env">
    <h1 class="title">Thông tin tài khoản</h1>
    <p class="description">Thêm, sửa, phân quyền tài khoản</p>
  </div>
  <div class="breadcrumb-env">
    <ol class="breadcrumb bc-1">
      <li> <a href="<?php echo @constant('BASE_URL_ADMIN');?>
"><i class="fa-home"></i>Trang chủ</a> </li>
      <li> <a href="<?php echo $_smarty_tpl->tpl_vars['link_account']->value;?>
">Tài khoản</a> </li>
      <li class="active"> <strong>Thông tin tài khoản</strong> </li>
    </ol>
  </div>
</div>
<div class="panel panel-default">
  <h3 class="panel-title">Thông tin tài khoản <?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
</h3>
  <div class="panel-body">
    <div class="row"> <?php echo CHtml::beginForm($_smarty_tpl->tpl_vars['link_action']->value,'post',array('role'=>'form','class'=>'form-horizontal'));?>

      <div class="form-group">
        <label class="col-sm-3 control-label">Họ tên:</label>
        <div class="col-sm-9">
          <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['data']->value['last_name'];?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['first_name'];?>
</label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Email:</label>
        <div class="col-sm-9">
          <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
</label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Giới tính:</label>
        <div class="col-sm-9">
          <label class="control-label"><?php if ($_smarty_tpl->tpl_vars['data']->value['gender']=='M') {?>Nam<?php } else { ?>Nữ<?php }?></label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Mobile:</label>
        <div class="col-sm-9">
          <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['data']->value['mobile_phone'];?>
</label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Số chứng thực:</label>
        <div class="col-sm-9">
          <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['data']->value['id_no'];?>
</label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Ngày sinh:</label>
        <div class="col-sm-9">
          <label class="control-label"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['dob'],"%d-%m-%Y %H:%M:%S");?>
</label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Ngày tạo:</label>
        <div class="col-sm-9">
          <label class="control-label"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['create_time'],"%d-%m-%Y %H:%M:%S");?>
</label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Ngày cập nhật thông tin:</label>
        <div class="col-sm-9">
          <label class="control-label"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['update_time'],"%d-%m-%Y %H:%M:%S");?>
</label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Point:</label>
        <div class="col-sm-9">
          <label class="control-label"><span class="alert-danger"><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['data']->value['point'],2,",","."),',00','');?>
 POINT</span> - Upload: <span class="alert-danger"><?php echo $_smarty_tpl->tpl_vars['data']->value['count_upload'];?>
  tài liệu</span></label>
        </div>
      </div>
       <div class="form-group">
        <label class="col-sm-3 control-label">Mật khẩu:</label>
        <div class="col-sm-9">
          <label class="control-label"><input type="checkbox" name="reset" value="1" onClick="return confirm('Bạn có chắc chắn');">Có reset mật khẩu về 123456 </label>
        </div>
      </div>
        <div class="form-group">
        <label class="col-sm-3 control-label">Loại TK:</label>
        <div class="col-sm-9">
          <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['type_arr']->value;?>
</label>
        </div>
      </div>
        
        
      <div class="form-group">
        <label class="col-sm-3 control-label">Cập nhật point:</label>
        <div class="col-sm-3">
         <input type="text" name="point" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['point'];?>
" class="form-control">
         <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
        </div>
         <div class="col-sm-3">
         <input type="submit" name=" " value="Cập nhật" class="btn btn-warning">
        </div>
      </div>
      
      <?php echo CHtml::endForm();?>
 </div>
  </div>
</div>
<?php }} ?>
