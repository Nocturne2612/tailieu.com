
<div class="page-title">
  <div class="title-env">
    <h1 class="title">{$title_page}</h1>
    <p class="description">Thêm, sửa, phân quyền danh mục</p>
  </div>
  <div class="breadcrumb-env">
    <ol class="breadcrumb bc-1">
      <li> <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a> </li>
      <li> <a href="{$link_back}">Nhóm thuộc tính</a> </li>
      <li class="active"> <strong>{$title_page}</strong> </li>
    </ol>
  </div>
</div>
<div class="panel panel-default">
  <h3 class="panel-title">{$title_page}</h3>
  <div class="panel-body">
    <div class="row"> {CHtml::beginForm($link_action,'post',['role' => 'form','class'=>'form-horizontal','enctype'=>'multipart/form-data'])}
      {if $error <> false}
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        {$error}</div>
      {/if}
      <div class="form-group">
        <label class="col-sm-3 control-label">Tên danh mục(*):</label>
        <div class="col-sm-9">
          <div class="input-group input-group-minimal">
            <input type="text" name="title" value="{$data.title}" class="form-control" placeholder="Bắt buộc nhập" required=""/>
            <span class="input-group-addon"> <i class="fa fa-empire"></i> </span> </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Link:</label>
        <div class="col-sm-9">
          <input type="text" name="link" value="{$data.link}" class="form-control"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Mã màu sắc:(Mã màu #000000)</label>
        <div class="col-sm-9">
          <input type="text" name="color" value="{$data.color}" class="form-control"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Icon: </label>
        <div class="col-md-9">
          <input type="file" id="file" name="file" data-bfi-disabled>
          <br>
          {if isset($data.icon) && $data.icon <> ""}<img src="{$link_images}{$data.icon}" height="80"/>
          <br> <a  style="padding-left:10px; " href="{Yii::app()->createUrl("admin/category/edit/",['id'=>$data.id,'image'=>base64_encode($data.icon)])}" class="fa-hover"><i class="fa fa-trash"></i></a>
          {/if} </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Thuộc danh mục:</label>
        <div class="col-sm-9">
          <select class="form-control" name="parent_id">
            <option value="0">-- CẤP CHA --</option>
            
            
                        {$combo_parent}
                    
          
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Loại danh mục:</label>
        <div class="col-sm-9"> {$combo_ctype} </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Số thứ tự (*):</label>
        <div class="col-sm-9">
          <input type="text" name="stt" value="{$data.stt}" id="stt" class="form-control" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Trạng thái (*):</label>
        <div class="col-sm-9"> {$combo_status} </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3  control-label"></label>
        <div class="col-sm-9">
          <button type="submit" class="btn btn-warning" name="submit">Cập nhật</button>
          <a href="{$link_back}" class="btn btn-info" name="goback">Bỏ qua</a> </div>
      </div>
      {CHtml::endForm()} </div>
  </div>
</div>
