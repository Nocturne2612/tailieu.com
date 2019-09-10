<div class="page-title">
  <div class="title-env">
    <h1 class="title">Thông tin Link</h1>
    <p class="description">Thêm, sửa link</p>
  </div>
  <div class="breadcrumb-env">
    <ol class="breadcrumb bc-1">
      <li> <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a> </li>
      <li> <a href="{$link_home}">Danh sách Link</a> </li>
      <li class="active"> <strong>Thông tin Link</strong> </li>
    </ol>
  </div>
</div>
<a href="{$link_create}">
<div class="alert alert-info"> Thêm Footer Link </div>
</a>
<div class="panel panel-default">
  <div class="panel-body">
    <div class="row"> {if $err <> ''}
      <div class="alert alert-danger" role="alert">{$err}</div>
      {/if}
      
      {CHtml::beginForm('','post',['enctype'=>'multipart/form-data','class'=>'form-horizontal'])}
      <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Cột:</label>
        <div class="col-sm-9">
          <select name="type" id="type" style="width: " class="form-control">
            <option  {if !$data.type}selected{/if}>---Chọn cột hiển thị---</option>
            <option value="1" {if $data.type == 1}selected{/if}>TRANG</option>
            <option value="2" {if $data.type == 2}selected{/if}>TRỢ GIÚP</option>
            <option value="3" {if $data.type == 3}selected{/if}>PHÁP LÝ</option>
            <option value="4" {if $data.type == 4}selected{/if}>MẠNG XÃ HỘI</option></select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Ảnh nền cho Mạng Xã hội: </label>
        <div class="col-md-9">
          <input type="file" id="image" name="image" data-bfi-disabled {if $data.type == 4}disabled{/if}>
          <br>
          {if isset($data.image) && $data.image != ""}<img src="{$link_images}{$data.image}" height="80"/>
          <br> <a  style="padding-left:10px; " href="{Yii::app()->createUrl("admin/link/edit/",['id'=>$data.id,'image'=>base64_encode($data.image)])}" class="fa-hover"><i class="fa fa-trash"></i></a>
          {/if} </div>
      </div>
      <div class="form-group">
        <label for="desc" class="col-sm-2 control-label">Text hiển thị(*):</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="name" name="name" value="{$data.name}">
        </div>
      </div>
      <div class="form-group">
        <label for="desc" class="col-sm-2 control-label">Vị trí(*):</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="position" name="position" value="{$data.position}">
        </div>
      </div>
      <div class="form-group">
        <label for="desc" class="col-sm-2 control-label">Đường dẫn:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="link" name="link" value="{$data.link}">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label"></label>
        <div class="col-sm-9">
          <button type="submit" class="btn btn-warning" name="submit">Cập nhật</button>
          <button type="button" class="btn btn-default pull-right" name="reset" value="   " onclick="window.history.back();">Quay lại</button>
        </div>
      </div>
      <script>
        $("#type").change(function(){
          var selectedType = $(this).children("option:selected").val();
          if (selectedType != 4) {
            $("#image").attr('disabled', 'disabled');
          } else {
            $("#image").removeAttr('disabled');
          }
        });
      </script>
      {CHtml::endForm()} </div>
  </div>
</div>
