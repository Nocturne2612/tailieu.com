<div class="page-title">
  <div class="title-env">
    <h1 class="title">Danh sách tài khoản quản trị</h1>
    <p class="description">Thêm, sửa, xóa, phân quyền tài khoản quản trị</p>
  </div>
  <div class="breadcrumb-env">
    <ol class="breadcrumb bc-1">
      <li> <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a> </li>
      <li class="active"> <strong>Tài khoản quản trị</strong> </li>
    </ol>
  </div>
</div>
<a href="{Yii::app()->createUrl("admin/useradmin/create/")}">
<div class="alert alert-info"> Thêm tài khoản </div>
</a>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Tìm kiếm người dùng</h3>
        <div class="panel-options"> <a data-toggle="panel" href="#"> <span class="collapse-icon">&ndash;</span> <span class="expand-icon">+</span> </a> </div>
      </div>
      
      <!--fillter-->
      
      <div class="panel-body"> {CHtml::beginForm($link_action,'get',['enctype' => '','class'=>'form-inline','name'=>'userform'])}
        <div class="form-group">
          <input placeholder="Tài khoản" type="text" class="form-control" id="username" name="username" value="{$get_data.username}" />
        </div>
        <div class="form-group">
          <input placeholder="Email" type="text" class="form-control" id="email" name="email" value="{$get_data.email}" />
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info btn-single">Tìm kiếm</button>
          <button type="reset" class="btn btn-warning btn-single" name="reset" value="   " onclick="location.href = '{$link_action}'">Bỏ lọc</button>
        </div>
        {CHtml::endForm()} </div>
    </div>
  </div>
</div>
<!--Fillter-->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
          <div class="pull-left">Có <strong class="blueFont">{$totalRecord}</strong> tài khoản</div>
        </h3>
        <div class="panel-options"> <a data-toggle="panel" href="#"> <span class="collapse-icon">&ndash;</span> <span class="expand-icon">+</span> </a> </div>
      </div>
      
      <!--fillter-->
      
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-small-font table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Họ và tên</th>
                <th>Tài khoản</th>
                <th>Email</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody class="table-hover">
            
            {if $accounts}
            
            {foreach item=item from=$accounts key=k}
            <tr>
              <td>{$item.id}</td>
              <td>{$item.fullname}</td>
              <td>{$item.username}</td>
              <td>{$item.email}</td>
              <td>{$item.status}</td>
              <td><a href="{Yii::app()->createUrl("admin/useradmin/edit/",['id'=>$item.id])}">Sửa</a> | <a onclick="return confirm('Bạn có chắc chắn xóa.');" href="{Yii::app()->createUrl("admin/useradmin/del/",['id'=>$item.id])}">Xóa</a></td>
            </tr>
            {/foreach}
            
            {else}
            <tr>
              <td colspan="5" class="alert-danger danger"> Không có dữ liệu.</td>
            </tr>
            {/if}
              </tbody>
            
          </table>
        </div>
        <!--Paging--->
        <div class="row">
          <div class="col-xs-6"> {$pageHtml} </div>
        </div>
      </div>
    </div>
  </div>
</div>
