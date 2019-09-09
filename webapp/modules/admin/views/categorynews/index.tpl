<div class="page-title">
  <div class="title-env">
    <h1 class="title">Danh mục tin tức</h1>
    <p class="description">Thêm, sửa, xóa danh mục tin tức</p>
  </div>
  <div class="breadcrumb-env">
    <ol class="breadcrumb bc-1">
      <li> <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a> </li>
      <li class="active"> <strong>Danh mục tin tức</strong> </li>
    </ol>
  </div>
</div>
<a href="{Yii::app()->createUrl("admin/categorynews/create/")}">
<div class="alert alert-info"> Thêm danh mục </div>
</a>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
          <div class="pull-left">Có <strong class="blueFont">{$category.counts}</strong> danh mục</div>
        </h3>
        <div class="panel-options"> <a data-toggle="panel" href="#"> <span class="collapse-icon">&ndash;</span> <span class="expand-icon">+</span> </a> </div>
      </div>
      
      <!--fillter-->
      
      <div class="panel-body"> {CHtml::beginForm(Yii::app()->createUrl("admin/categorynews/edit/"),'post',['role' => 'form','class'=>''])}
        <div class="table-responsive">
          <table class="table table-small-font table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Danh mục cha</th>
                <th>Thời gian tạo</th>
                <th>Trạng thái</th>
                <th>STT</th>
              </tr>
            </thead>
            <tbody class="table-hover">
            
            {if $category.parent_category}
            {foreach $category.parent_category as $k => $item}
            <tr {if $item.status == '0'}class="alert-danger danger"{/if}>
              <td>{$item.id}</td>
              <td>{$item.title}</td>
              <td></td>
              <td>{$item.create_time|date_format:"%d-%m-%Y"}</td>
              <td><a href="{Yii::app()->createUrl("admin/categorynews/edit/",['id'=>$item.id,'status'=>$item.status])}" class="btn btn-info">{$arr_statuss[$item.status]}</a></td>
              <td style="width:250px;"><div class="col-sm-3" style="padding: 0px;">
                  <input class="form-control no-right-border form-focus-purple" type="text" value="{$item.stt}" name="stt[]">
                </div>
                <input type="hidden" value="{$item.id}" name="ids[]">
                <span class="input-group-btn">
                <button class="btn btn-purple" name="save" type="submit" value="save">Lưu</button>
                <a class="btn btn-warning" href='{Yii::app()->createUrl("admin/categorynews/edit/",['id'=>$item.id])}' >Sửa</a> <a class="btn btn-red" onclick="return confirm('Bạn có chắc chắn xoá');" href='{Yii::app()->createUrl("admin/categorynews/del/",['id'=>$item.id])}'>Xóa</a> </span></td>
            </tr>
            {if isset($category['sub_category'][$k])}
            {foreach $category['sub_category'][$k] as $item1}
            <tr {if $item1.status == '0'}class="alert-danger danger"{/if}>
              <td>{$item1.id}</td>
              <td>{if $item1.parent_id <> '0'} <span class="label label-success">[Cấp 2 - {$item.title}]</span> {/if}{$item1.title}</td>
              <td>{if $item1.parent_id <> '0'}{$item.title}{/if}</td>
              <td>{$item1.create_time|date_format:"%d-%m-%Y"}</td>
              <td><a href="{Yii::app()->createUrl("admin/categorynews/edit/",['id'=>$item1.id,'status'=>$item1.status])}" class="btn btn-info">{$arr_statuss[$item1.status]}</a></td>
              <td style="width:250px;"><div class="col-sm-3" style="padding: 0px;">
                  <input class="form-control no-right-border form-focus-purple" type="text" value="{$item1.stt}" name="stt[]">
                </div>
                <input type="hidden" value="{$item1.id}" name="ids[]">
                <span class="input-group-btn">
                <button class="btn btn-purple" value="save" name="save" type="submit">Lưu</button>
                <a class="btn btn-warning" href='{Yii::app()->createUrl("admin/categorynews/edit/",['id'=>$item1.id])}'>Sửa</a> <a class="btn btn-red" onclick="return confirm('Bạn có chắc chắn xoá');" href='{Yii::app()->createUrl("admin/categorynews/del/",['id'=>$item1.id])}'>Xóa</a> </span></td>
            </tr>
            {/foreach}
            {/if}
            {/foreach}
            {else}
            <tr>
              <td colspan="7" class="alert-danger danger">Không có dữ liệu</td>
            </tr>
            {/if}
            </tbody>
          </table>
        </div>
        {CHtml::endForm()} </div>
    </div>
  </div>
</div>
