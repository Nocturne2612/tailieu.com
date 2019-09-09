<div class="page-title">
  <div class="title-env">
    <h1 class="title">Thông tin danh mục tin tức</h1>
    <p class="description">Thêm, sửa danh mục</p>
  </div>
  <div class="breadcrumb-env">
    <ol class="breadcrumb bc-1">
      <li> <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a> </li>
      <li> <a href="{$link_home}">Danh sách danh mục</a> </li>
      <li class="active"> <strong>Thông tin danh mục</strong> </li>
    </ol>
  </div>
</div>
<a href="{$link_create}">
<div class="alert alert-info"> Thêm,sửa danh mục </div>
</a>
<div class="panel panel-default">
  <div class="panel-body">
    <div class="row"> {if $err <> ''}
      <div class="alert alert-danger" role="alert">{$err}</div>
      {/if}
      
      {CHtml::beginForm('','post',['enctype' => '','class'=>'form-horizontal'])}
      <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Tiêu đề:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="title" name="title" value="{$data.title}">
        </div>
      </div>
      <div class="form-group">
        <label for="desc" class="col-sm-2 control-label">Tag:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="tag" name="tag" value="{$data.tag}">
        </div>
      </div>
      <div class="form-group">
        <label for="category" class="col-sm-2 control-label">Danh mục:</label>
        <div class="col-sm-9"> {$combo_parent} </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">STT:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="stt" name="stt" value="{$data.stt}">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Trạng thái:</label>
        <div class="col-sm-9"> {$combo_status} </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label"></label>
        <div class="col-sm-9">
          <button type="submit" class="btn btn-warning" name="submit">Cập nhật</button>
          <button type="button" class="btn btn-default pull-right" name="reset" value="   " onclick="window.history.back();">Quay lại</button>
        </div>
      </div>
      {CHtml::endForm()} </div>
  </div>
</div>
