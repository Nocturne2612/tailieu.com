<div class="page-title">
  <div class="title-env">
    <h1 class="title">Danh sách tin tức</h1>
    <p class="description">Thêm, sửa, xóa danh sách tin tức</p>
  </div>
  <div class="breadcrumb-env">
    <ol class="breadcrumb bc-1">
      <li> <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a> </li>
      <li class="active"> <strong>Danh sách tin tức</strong> </li>
    </ol>
  </div>
</div>
<a href="{Yii::app()->createUrl("admin/news/create/")}">
<div class="alert alert-info"> Thêm tin tức </div>
</a>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Tìm kiếm tin tức</h3>
        <div class="panel-options"> <a data-toggle="panel" href="#"> <span class="collapse-icon">&ndash;</span> <span class="expand-icon">+</span> </a> </div>
      </div>
      <div class="panel-body"> {CHtml::beginForm({$link_action},'get',['role' => 'form','class'=>'form-wizard'])}
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label" for="title">Tiêu đề:</label>
            <input type="text" class="form-control" id="title" class="title" name="title" value="{$get_data.title}">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label" for="category">Danh mục:</label>
            {$combo_category} </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label" for="status">Trạng thái:</label>
            {$combo_status} </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label" for="begin_createtime">Ngày tạo:</label>
            <input type="text" class="form-control datepicker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" id="begin_createtime" name="begin_createtime" value="{$get_data.begin_createtime}">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label" for="end_createtime">Đến:</label>
            <input type="text" class="form-control datepicker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" id="end_createtime" name="end_createtime" value="{$get_data.end_createtime}">
          </div>
        </div>
        <div class="col-md-2 pager">
          <div class="form-group">
            <button type="submit" class="btn btn-success" name="search">Tìm kiếm</button>
            <button type="reset" class="btn btn-default" onclick=" location.href = '{$link_action}';" > Bỏ lọc </button>
          </div>
        </div>
        {CHtml::endForm()} </div>
    </div>
  </div>
</div>
<div class="row" >
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
          <div class="pull-left">Có <strong class="blueFont">{$totalRecord}</strong> tin tức</div>
        </h3>
        <div class="panel-options"> <a data-toggle="panel" href="#"> <span class="collapse-icon">&ndash;</span> <span class="expand-icon">+</span> </a> </div>
      </div>
      <div class="panel-body"> {if $error <> false}
        <div class="alert alert-warning">{$error}</div>
        {/if}
        {if $success <> false}
        <div class="alert alert-success">{$success}</div>
        {/if}
        {CHtml::beginForm({$link_action},'post',['role' => 'form','class'=>'form-horizontal','name'=>'frmV'])} 
        <!--Table style1-->
        
        <div class="table-responsive">
          <table class="table table-small-font table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Danh mục</th>
                <th>Hình ảnh</th>
                <th>Thuộc tính</th>
                <th>Thời gian</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            {if $news}
            <tbody class="table-hover">
            
            {foreach item=item from=$news key=k}
            <tr {if $item.status == '2'}class="alert-danger danger"{/if}>
              <td><label>
                  <input name="element[]" value="{$item.id}" type="checkbox">
                  &nbsp;<br>
                  {$item.id}</label></td>
              <td><a href="{SystemBase::buildUrl('tailieu/news/',['id'=>$item.id,'title'=>$item.title])}" target="_blank">{$item.title}</a></td>
              <td> {if isset($array_category[$item.parent_id]['title'])}<a href="{$array_category[$item.parent_id]['link']}">{$array_category[$item.parent_id]['title']}<a>{/if}
                {if isset($array_category[$item.sub_id]['title'])} &rAarr; <a href="{$array_category[$item.sub_id]['link']}">{$array_category[$item.sub_id]['title']}<a>{/if} </td>
              <td><img src="{if $item.image <>""}{$link_images}{$item.image}{else}{Yii::app()->baseUrl}/assets/xeon/images/user-1.png{/if}" width="50"/></td>
              <th>{if $item.position <> '1'}{else} Nổi bật{/if}</th>
              <td>Tạo: {$item.create_time|date_format:"%d-%m-%Y"}<br>
                Cập nhật: {$item.update_time|date_format:"%d-%m-%Y"} </td>
              <td style="width:250px;"><span class="input-group-btn"> <a href="{Yii::app()->createUrl("admin/news/edit/",['id'=>$item.id,'status'=>$item.status])}" class="btn btn-info">{$arr_statuss[$item.status]}</a> <a href="{Yii::app()->createUrl("admin/news/edit/",['id'=>$item.id])}" class="btn btn-warning">Sửa</a> | <a href="{Yii::app()->createUrl("admin/news/del/",['id'=>$item.id])}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xoá');">Xóa</a> </span></td>
            </tr>
            {/foreach}
              </tbody>
            
            {else}
            <tr>
              <td colspan="8" class="alert-danger danger"> Không có dữ liệu.</td>
            </tr>
            {/if}
          </table>
        </div>
        <div class="row">
          <input onclick="return uncheck();" type="button" value="Chọn tất cả" class="btn btn-warning">
          &nbsp;
          <button type="submit" class="btn btn-warning" name="submit" onclick="return confirm('Bạn chắc chắn');"> Xoá mục đã chọn </button>
        </div>
        {CHtml::endForm()} 
        <!--Paging--->
        <div class="row">{$pageHtml}
          <p>&nbsp; </p>
        </div>
      </div>
    </div>
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
                                                            function uncheck() {
                                                                for (i = 0; i < document.frmV.length; i++) {
                                                                    if (document.frmV[i].type == "checkbox") { //Kiểm tra xem có phải là checkbox ?
                                                                        if (document.frmV[i].checked) {
                                                                            document.frmV[i].checked = false;
                                                                        }
                                                                        else {
                                                                            document.frmV[i].checked = true;
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        </script> 
{/literal}