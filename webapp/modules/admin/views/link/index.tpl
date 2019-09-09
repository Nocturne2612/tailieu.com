<div class="page-title">
  <div class="title-env">
    <h1 class="title">Quản trị Link</h1>
    <p class="description">Thêm, sửa, xóa link</p>
  </div>
  <div class="breadcrumb-env">
    <ol class="breadcrumb bc-1">
      <li> <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a> </li>
      <li class="active"> <strong>Link</strong> </li>
    </ol>
  </div>
</div>

<!--Fillter-->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default"> {if $error <> false}
      <div class="alert alert-danger">{$error}</div>
      {/if}
      {if $success <> false}
      <div class="alert alert-success">{$success}</div>
      {/if}
      <div class="row"> {CHtml::beginForm($link_action,'post',['role' => 'form','class'=>'form-horizontal','enctype'=>'multipart/form-data'])}
        {if $error <> false}
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          {$error}</div>
        {/if}
        <div class="form-group">
          <label class="col-sm-3 control-label">Link top:</label>
          <div class="col-sm-9"> 
          	{$fck_tomtat}
          </div>
        </div>
          <div class="form-group">
          <label class="col-sm-3 control-label">Footer:</label>
          <div class="col-sm-9"> {$fck_noidung}  </div>
        </div>
        
        <div class="form-group">
          <label class="col-sm-3  control-label"></label>
          <div class="col-sm-9">
            <button type="submit" class="btn btn-warning" name="submit">Cập nhật</button>
          </div>
        </div>
        {CHtml::endForm()} </div>
    </div>
  </div>
</div>
