
<div class="page-title">
  <div class="title-env">
    <h1 class="title">Thông tin tài khoản</h1>
    <p class="description">Thêm, sửa, phân quyền tài khoản</p>
  </div>
  <div class="breadcrumb-env">
    <ol class="breadcrumb bc-1">
      <li> <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a> </li>
      <li> <a href="{$link_account}">Tài khoản</a> </li>
      <li class="active"> <strong>Thông tin tài khoản</strong> </li>
    </ol>
  </div>
</div>
<div class="panel panel-default">
  <h3 class="panel-title">Thông tin tài khoản {$data.email}</h3>
  <div class="panel-body">
    <div class="row"> {CHtml::beginForm($link_action,'post',['role' => 'form','class'=>'form-horizontal'])}
      <div class="form-group">
        <label class="col-sm-3 control-label">Họ tên:</label>
        <div class="col-sm-9">
          <label class="control-label">{$data.last_name}{$data.first_name}</label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Email:</label>
        <div class="col-sm-9">
          <label class="control-label">{$data.email}</label>
        </div>
      </div>
	  <div class="form-group">
        <label class="col-sm-3 control-label">Email UPDATE:</label>
        <div class="col-sm-9">
          <label class="control-label">{$data.email_other}</label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Giới tính:</label>
        <div class="col-sm-9">
          <label class="control-label">{if $data.gender=='M'}Nam{else}Nữ{/if}</label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Mobile:</label>
        <div class="col-sm-9">
          <label class="control-label">{$data.mobile_phone}</label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Số chứng thực:</label>
        <div class="col-sm-9">
          <label class="control-label">{$data.id_no}</label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Ngày sinh:</label>
        <div class="col-sm-9">
          <label class="control-label">{$data.dob|date_format:"%d-%m-%Y %H:%M:%S"}</label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Ngày tạo:</label>
        <div class="col-sm-9">
          <label class="control-label">{$data.create_time|date_format:"%d-%m-%Y %H:%M:%S"}</label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Ngày cập nhật thông tin:</label>
        <div class="col-sm-9">
          <label class="control-label">{$data.update_time|date_format:"%d-%m-%Y %H:%M:%S"}</label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Point:</label>
        <div class="col-sm-9">
          <label class="control-label"><span class="alert-danger">{$data.point|number_format:2:",":"."|replace:',00':''} POINT</span> - Upload: <span class="alert-danger">{$data.count_upload}  tài liệu</span></label>
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
          <label class="control-label">{$type_arr}</label>
        </div>
      </div>
	   <div class="form-group">
        <label class="col-sm-3 control-label">TG VIP START:</label>
        <div class="col-sm-9">
          <label class="control-label">
			<input type="text" class="form-control datepicker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" id="time_vip_start" name="time_vip_start" value="{$data.time_vip_start|date_format:"%d-%m-%Y"}">
		  </label>
        </div>
      </div>
	   <div class="form-group">
        <label class="col-sm-3 control-label">TG VIP END:</label>
        <div class="col-sm-9">
          <label class="control-label">
			<input type="text" class="form-control datepicker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" id="time_vip_end" name="time_vip_end" value="{$data.time_vip_end|date_format:"%d-%m-%Y"}">
		  </label>
        </div>
      </div>
	  
        <div class="form-group">
        <label class="col-sm-3 control-label">Trạng thái TK:</label>
        <div class="col-sm-9">
          <label class="control-label">{$active_status_arr}</label>
        </div>
      </div>
        
        
      <div class="form-group">
        <label class="col-sm-3 control-label">Cập nhật point:</label>
        <div class="col-sm-3">
         <input type="text" name="point" value="{$data.point}" class="form-control">
         <input type="hidden" name="id" value="{$data.id}">
        </div>
         <div class="col-sm-3">
         <input type="submit" name=" " value="Cập nhật" class="btn btn-warning">
        </div>
      </div>
      
      {CHtml::endForm()} </div>
  </div>
</div>
{literal} 
    <script type="text/javascript">
        $(document).ready(function () {

            $('.datepicker').datepicker({
                format: "dd-mm-yyyy",
                autoclose: true,
            });

        });
    </script> 
{/literal}
