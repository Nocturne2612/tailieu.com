<div class="page-title">
    <div class="title-env">
        <h1 class="title">Danh sách tài khoản người dùng</h1>
        <p class="description">Thêm, sửa, xóa người dùng</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1">
            <li>
                <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a>
            </li>

            <li class="active">
                <strong>Tài khoản người dùng</strong>
            </li>
        </ol>

    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Tìm kiếm người dùng</h3>
                <div class="panel-options">
                    <a data-toggle="panel" href="#">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>
                </div>
            </div>

            <!--fillter-->

            <div class="panel-body">

                {CHtml::beginForm($link_action,'get',['enctype' => '','class'=>'form-inline','name'=>'userform'])}
                 <div class="form-group">
                    <input placeholder="Mã khách hàng" type="text" class="form-control" id="id" name="id" value="{if $get_data.id} {$get_data.id} {else}{/if}" />	
                </div>

                <div class="form-group">
                    <input placeholder="Tên đầy đủ" type="text" class="form-control" id="fullname" name="fullname" value="{$get_data.fullname}" />	
                </div>
                <div class="form-group">
                    <input placeholder="Email" type="text" class="form-control" id="email" name="email" value="{$get_data.email}" />	
                </div>
				<div class="form-group">
                    <input placeholder="Email Tài khoản" type="text" class="form-control" id="email" name="email_other" value="{$get_data.email_other}" />	
                </div>
                <div class="form-group">
                    <input placeholder="Số điện thoại" type="text" class="form-control" id="mobile_phone" name="mobile_phone" value="{$get_data.mobile_phone}" />	
                </div>
                <div class="form-group">
                    <label for="begin_createtime">Ngày tạo:</label>
                    <input type="text" class="form-control datepicker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" id="begin_createtime" name="begin_createtime" value="{$get_data.begin_createtime}">
                </div>
                <div class="form-group">
                    <label class="control-label" for="end_createtime">Đến:</label>
                    <input type="text" class="form-control datepicker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" id="end_createtime" name="end_createtime" value="{$get_data.end_createtime}">
                </div>
                
                <div class="form-group">
                    <label class="control-label" for="end_createtime">Loại TK:</label>
                    {$type_arr}
                </div>
                
                
                <hr>
                <div class="form-group">
                    <button type="submit" class="btn btn-info btn-single">Tìm kiếm</button>
                    <button type="reset" class="btn btn-warning btn-single" name="reset" value="   " onclick="location.href = '{$link_action}'">Bỏ lọc</button>
                </div>
                {CHtml::endForm()}   
            </div>
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
                <div class="panel-options">
                    <a data-toggle="panel" href="#">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>
                </div>
            </div>

            <!--fillter-->

            <div class="panel-body dataTables_wrapper form-inline dt-bootstrap">

                <div class="table-responsive">
                    <table class="table table-small-font table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Loại TK</th>
                                <th>Email 
                                    <a href="{Yii::app()->createUrl('admin/account',['sort'=>'email','by'=>'asc'])}" rel="point_asc" class="sorting sorting_asc"></a>
                                    <a href="{Yii::app()->createUrl('admin/account',['sort'=>'email','by'=>'desc'])}" rel="point_desc" class="sorting sorting_desc"></a>
                                </th>
								<th>Email tài khoản
                                    <a href="{Yii::app()->createUrl('admin/account',['sort'=>'email_other','by'=>'asc'])}" rel="point_asc" class="sorting sorting_asc"></a>
                                    <a href="{Yii::app()->createUrl('admin/account',['sort'=>'email_other','by'=>'desc'])}" rel="point_desc" class="sorting sorting_desc"></a>
                                </th>
                                <th>
                                    Point
                                    <a href="{Yii::app()->createUrl('admin/account',['sort'=>'point','by'=>'asc'])}" rel="point_asc" class="sorting sorting_asc"></a>
                                    <a href="{Yii::app()->createUrl('admin/account',['sort'=>'point','by'=>'desc'])}" rel="point_desc" class="sorting sorting_desc"></a>
                                </th>
                                <th>Họ Tên
                                    <a href="{Yii::app()->createUrl('admin/account',['sort'=>'first_name','by'=>'asc'])}" rel="point_asc" class="sorting sorting_asc"></a>
                                    <a href="{Yii::app()->createUrl('admin/account',['sort'=>'first_name','by'=>'desc'])}" rel="point_desc" class="sorting sorting_desc"></a>
                                </th>
                                <th>Mobile  <a href="{Yii::app()->createUrl('admin/account',['sort'=>'mobile_phone','by'=>'asc'])}" rel="point_asc" class="sorting sorting_asc"></a>
                                    <a href="{Yii::app()->createUrl('admin/account',['sort'=>'mobile_phone','by'=>'desc'])}" rel="point_desc" class="sorting sorting_desc"></a></th>
                                <th>Giới tính</th>
                                <th>Ngày tạo</th>
                                 <th>Trạng thái TK</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            {if $accounts}

                                {foreach item=item from=$accounts key=k}
                                    <tr>
                                        <td>{$item.id}</td>
                                        <td><b style="{if $item.type == 2}color:red{/if}">{$typeArr[$item.type]}</b></td>
                                        <td>{$item.email}</td>
										<td>{$item.email_other}</td>
                                        <td>{$item.point|number_format:2:",":"."|replace:',00':''}</td>
                                        <td>{$item.last_name } {$item.first_name}</td>
                                        <td>{$item.mobile_phone}</td>
                                        <td>{if $item.gender=='M'}Nam{else}Nữ{/if}</td>
                                        <td>{$item.create_time|date_format:"%d-%m-%Y"}</td>
                                        <td>{if $item.active_status eq 1}Hoạt động{else if $item.active_status eq 0}Chưa xác thực {else} bị khóa{/if} {$item.active_status}</td>
                                        
                                        
                                        <td>
                                            <a href="{Yii::app()->createUrl("admin/account/view/",['id'=>$item.id])}">Xem</a> |                         
                                            <a onclick="return confirm('Bạn có chắc chắn xóa.');" href="{Yii::app()->createUrl("admin/account/del/",['id'=>$item.id])}">Xóa</a>
                                        </td>
                                    </tr>
                                {/foreach}

                            {else}
                                <tr><td colspan="5"> Không có dữ liệu.</td></tr>
                            {/if}  
                        </tbody>
                    </table>
                </div>
                <!--Paging--->
                <div class="row"><div class="col-xs-6"> {$pageHtml} </div></div>
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