<div class="page-title">
    <div class="title-env">
        <h1 class="title">Danh sách download tài liệu</h1>
        <p class="description">Thêm, sửa, xóa download tài liệu</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1">
            <li>
                <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a>
            </li>

            <li class="active">
                <strong>download tài liệu</strong>
            </li>
        </ol>
    </div>
</div>
<!--<a href="{Yii::app()->createUrl("admin/orders/create/")}">  
    <div class="alert alert-info"> Tạo download tài liệu</div>                
</a>-->
{CHtml::beginForm($link_action,'get',['enctype' => '','class'=>'form-wizard','name'=>'ordersform'])}    
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Tìm kiếm download tài liệu</h3>
                <div class="panel-options">
                    <a data-toggle="panel" href="#">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>
                </div>
            </div>

            <!--fillter-->  
            <div class="panel-body">

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="id">Mã download:</label>
                        <input type="text" class="form-control" id="id" class="id" name="id" value="{$get_data.id}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="id_product">Mã tài liệu:</label>
                        <input type="text" class="form-control" id="id_product" class="id_product" name="id_product" value="{$get_data.id_product}">
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
                        {$combo_status}
                    </div>
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
{CHtml::beginForm(Yii::app()->createUrl("admin/orders/del/"),'post',['enctype' => '','name'=>'ordersforms'])}   
<!--Fillter--> 
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            {if $error <> false}
                <div class="alert alert-danger">{$error}</div>
            {/if}
            {if $success <> false}
                <div class="alert alert-success">{$success}</div>
            {/if}
            <div class="panel-heading">
                <h3 class="panel-title"> 
                    <div class="pull-left">Có <strong class="blueFont">{$totalRecord}</strong> download tài liệu</div>
                </h3>
                <div class="panel-options">
                    <a data-toggle="panel" href="#">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>
                </div>
            </div>

            <!--fillter-->

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-small-font table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Mã </th>
                                <th>Ngày download</th>
                                <th>Thông tin tài liệu</th>
                                <th>Thông tin khách hàng</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            {if $output}
                                {foreach item=item from=$output key=k}
                                    <tr>
                                        <td><label><input name="element[]" value="{$item.id}" type="checkbox">&nbsp;{$item.id}</label></td>
                                        <td>{$item.time_download|date_format:"%H:%M ,%d/%m/%Y"}</td>
                                        <td  style="overflow: auto;">
                                            <strong>Tiêu đề </strong>: {$item.title}<br>
                                            <strong>Mã tài liệu</strong>: {$item.id_product}<br>
                                            <strong>Giá</strong>: {$item.price|number_format:2:",":"."|replace:',00':''}

                                        </td>

                                        <td><a href="{Yii::app()->createUrl("admin/account/view",['id'=>$item.id_account])}">Mã TK : {$item.id_account}</a></td>
                                        <td> <strong>{$arr_status[$item.status]}</strong> </td>
                                        <td>
                                           
                                            <a onclick="return confirm('Bạn có chắc chắn xóa.');" href="{Yii::app()->createUrl("admin/orders/del/",['id'=>$item.id])}">Xóa</a> 

                                        </td>
                                    </tr>
                                {/foreach}

                            {else}
                                <tr><td colspan="6" class="alert-danger danger"> Không có dữ liệu.</td></tr>
                            {/if}  
                        </tbody>
                    </table>

                </div>
                <div class="row">
                   <!--  <input onclick="return uncheck();" type="button" value="Chọn tất cả" class="btn btn-warning"> &nbsp; 
                    <button type="submit" class="btn btn-warning" name="submit" onclick="return confirm('Bạn chắc chắn');"> Xoá mục đã chọn </button>
                    <!--Paging--->
                    <div class="row"><div class="col-xs-6"> {$pageHtml} </div></div>
                </div>

            </div>
        </div>

    </div>      
</div>

{CHtml::endForm()} 

{literal} 
    <script type="text/javascript">
        $(document).ready(function () {

            $('.datepicker').datepicker({
                format: "dd-mm-yyyy",
                autoclose: true,
            });

        });
        function uncheck() {
            for (i = 0; i < document.ordersforms.length; i++) {
                if (document.ordersforms[i].type == "checkbox") { //Kiểm tra xem có phải là checkbox ?
                    if (document.ordersforms[i].checked) {
                        document.ordersforms[i].checked = false;
                    }
                    else {
                        document.ordersforms[i].checked = true;
                    }
                }
            }
        }
    </script> 


{/literal}