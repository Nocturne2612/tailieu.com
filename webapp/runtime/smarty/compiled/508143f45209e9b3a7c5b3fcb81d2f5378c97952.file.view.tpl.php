<?php /* Smarty version Smarty-3.1.19, created on 2019-07-22 08:08:45
         compiled from "/home/tailieuk/public_html/webapp/modules/admin/views/account/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12298847485abcbad9c71f73-80451203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '508143f45209e9b3a7c5b3fcb81d2f5378c97952' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/admin/views/account/view.tpl',
      1 => 1563752343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12298847485abcbad9c71f73-80451203',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abcbad9cd5502_79147875',
  'variables' => 
  array (
    'link_account' => 0,
    'data' => 0,
    'link_action' => 0,
    'type_arr' => 0,
    'active_status_arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abcbad9cd5502_79147875')) {function content_5abcbad9cd5502_79147875($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tailieuk/public_html/webapp/vendors/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) include '/home/tailieuk/public_html/webapp/vendors/smarty/libs/plugins/modifier.replace.php';
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
        <label class="col-sm-3 control-label">Email UPDATE:</label>
        <div class="col-sm-9">
          <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['data']->value['email_other'];?>
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
        <label class="col-sm-3 control-label">TG VIP START:</label>
        <div class="col-sm-9">
          <label class="control-label">
			<input type="text" class="form-control datepicker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" id="time_vip_start" name="time_vip_start" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['time_vip_start'],"%d-%m-%Y");?>
">
		  </label>
        </div>
      </div>
	   <div class="form-group">
        <label class="col-sm-3 control-label">TG VIP END:</label>
        <div class="col-sm-9">
          <label class="control-label">
			<input type="text" class="form-control datepicker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" id="time_vip_end" name="time_vip_end" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['time_vip_end'],"%d-%m-%Y");?>
">
		  </label>
        </div>
      </div>
	  
        <div class="form-group">
        <label class="col-sm-3 control-label">Trạng thái TK:</label>
        <div class="col-sm-9">
          <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['active_status_arr']->value;?>
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
 
    <script type="text/javascript">
        $(document).ready(function () {

            $('.datepicker').datepicker({
                format: "dd-mm-yyyy",
                autoclose: true,
            });

        });
    </script> 

<?php }} ?>
