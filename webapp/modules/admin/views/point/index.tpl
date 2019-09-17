<div class="page-title">
  <div class="title-env">
    <h1 class="title">Danh sách lịch sử point</h1>
    <p class="description">Thêm, sửa, xóa lịch sử point</p>
  </div>
  <div class="breadcrumb-env">
    <ol class="breadcrumb bc-1">
      <li> <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a> </li>
      <li class="active"> <strong>lịch sử point</strong> </li>
    </ol>
  </div>
</div>
<!--<a href="{Yii::app()->createUrl("admin/point/create/")}">  
    <div class="alert alert-info"> Tạo lịch sử point</div>                
</a>--> 
{CHtml::beginForm($link_action,'get',['enctype' => '','class'=>'form-wizard','name'=>'ordersform'])}
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Tìm kiếm lịch sử point</h3>
        <div class="panel-options"> <a data-toggle="panel" href="#"> <span class="collapse-icon">&ndash;</span> <span class="expand-icon">+</span> </a> </div>
      </div>
      
      <!--fillter-->
      <div class="panel-body">
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label" for="ref_code">Mã ref_code:</label>
            <input type="text" class="form-control" id="ref_code" class="ref_code" name="ref_code" value="{$get_data.ref_code}">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label" for="id_product">Keyword(serial, pin_card...):</label>
            <input type="text" class="form-control" id="keyword" class="keyword" name="keyword" value="{$get_data.keyword}">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label" for="id_account">Mã tài khoản:</label>
            <input type="text" class="form-control" id="id_account" class="id_account" name="id_account" value="{$get_data.id_account}">
          </div>
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
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label" for="status">Trạng thái:</label>
            {$combo_status} </div>
        </div>
         <div class="col-md-4">
          <div class="form-group">
            <label class="control-label" for="status">Loại point</label>
            {$combo_type} </div>
        </div>
        <div class="col-md-4 pager">
          <div class="form-group">
            <button type="submit" class="btn btn-success" name="search" value="   ">Tìm kiếm</button>
            <button type="reset" class="btn btn-default" name="reset" value="   " onclick="location.href = '{$link_action}'">Bỏ lọc</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{CHtml::endForm()}                     

<!--Fillter-->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default"> {if $error <> false}
      <div class="alert alert-danger">{$error}</div>
      {/if}
      {if $success <> false}
      <div class="alert alert-success">{$success}</div>
      {/if}
      <div class="panel-heading">
        <h3 class="panel-title">
          <div class="pull-left">Có <strong class="blueFont">{$totalRecord}</strong> lịch sử point</div>
        </h3>
        <div class="panel-options"> <a data-toggle="panel" href="#"> <span class="collapse-icon">&ndash;</span> <span class="expand-icon">+</span> </a> </div>
      </div>
      
      <!--fillter-->
      
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-small-font table-bordered table-striped">
            <thead>
              <tr>
                <th>Mã </th>
                <th>Ngày tạo</th>
                <th>Loại</th>
                 <th>Point</th>
                <th>Mô tả</th>
                <th>ID accunt</th>
                <th>Trạng thái</th>
              </tr>
            </thead>
            <tbody class="table-hover">
            
            {if $output}
            {foreach item=item from=$output key=k}
            <tr>
              <td><label>{$item.id}</label></td>
              <td>{$item.create_time|date_format:"%d/%m/%Y %H:%M"}</td>
              <td>{$arr_type[$item.type]}</td>
              <td>{$item.point}</td>
              <td  style="overflow: auto;">{$item.desc} </td>
              <td><a href="{Yii::app()->createUrl("admin/account/view",['id'=>$item.id_account])}">Mã TK : {$item.id_account}</a></td>
              <td><strong>{$arr_status[$item.status]}</strong></td>
            </tr>
            {/foreach}
            
            {else}
            <tr>
              <td colspan="7" class="alert-danger danger"> Không có dữ liệu.</td>
            </tr>
            {/if}
              </tbody>
            
          </table>
        </div>
        <div class="row"> 
          <!--  <input onclick="return uncheck();" type="button" value="Chọn tất cả" class="btn btn-warning"> &nbsp; 
                     <button type="submit" class="btn btn-warning" name="submit" onclick="return confirm('Bạn chắc chắn');"> Xoá mục đã chọn </button>
                    <!--Paging--->
          <div class="row">
            <div class="col-xs-6"> {$pageHtml} </div>
          </div>
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
      
    </script> 
{/literal}