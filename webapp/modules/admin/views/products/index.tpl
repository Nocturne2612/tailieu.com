<div class="page-title">
    <div class="title-env">
        <h1 class="title">Danh sách tài liệu</h1>
        <p class="description">Thêm, sửa, xóa danh sách tài liệu</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1">
            <li>
                <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a>
            </li>

            <li class="active">
                <strong>Danh sách tài liệu</strong>
            </li>
        </ol>

    </div>

</div>
<a href="{Yii::app()->createUrl("admin/products/create/")}">  
    <div class="alert alert-info"> Thêm tài liệu </div>                
</a>
<div class="row"> 
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Tìm kiếm tài liệu</h3>
                <div class="panel-options">
                    <a data-toggle="panel" href="#">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>
                </div>
            </div>
            <div class="panel-body">

                {CHtml::beginForm({$link_action},'get',['role' => 'form','class'=>'form-wizard'])}


                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="title">Mã tài liệu:</label>
                        <input type="text" class="form-control" id="p_id" class="p_id" name="p_id" value="{if $get_data.p_id <> '' }{$get_data.p_id}{/if}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="title">Tiêu đề:</label>
                        <input type="text" class="form-control" id="title" class="title" name="title" value="{$get_data.title}">
                    </div>
                </div>

                <div class="col-md-4">    
                    <div class="form-group">
                        <label class="control-label" for="category">Danh mục:</label>
                        {$combo_category}
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
                        <label class="control-label" for="category">Loại tài liệu:</label>
                        {$combo_types}
                    </div>
                </div>
				 <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="account_id">Mã tài khoản:</label>
                         <input type="text" class="form-control" id="account_id" class="account_id" name="account_id" value="{$get_data.account_id}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="account_name">Tên tài khoản:</label>
                         <input type="text" class="form-control" id="account_name" class="account_name" name="account_name" value="{$get_data.account_name}">
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

                {CHtml::endForm()}  
            </div>

        </div>
    </div>
</div>
<div class="row" >   
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
                    <div class="pull-left">Có <strong class="blueFont">{$totalRecord}</strong> tài liệu</div>
                </h3>
                <div class="panel-options">
                    <a data-toggle="panel" href="#">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>
                </div>
            </div>


            <div class="panel-body"> 
                {CHtml::beginForm({$link_action},'post',['role' => 'form','class'=>'form-horizontal','name'=>'frmV'])}  
                <!--Table style1-->

                <div class="table-responsive">
                    <table class="table table-small-font table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Mã tài liệu</th>
                                <th>Tiêu đề</th>
                                <th>Danh mục</th>
                                <th>Hình ảnh</th>
                                <th>SL Tải</th>
                                <th>TG tạo</th>
                                <th>TG cập nhật</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        {if $data_ouput}
                            <tbody class="table-hover">

                                {foreach item=item from=$data_ouput key=k}
                                    <tr {if $item.status == '2'}class="danger"{/if}>
                                        <td><label><input name="element[]" value="{$item.id}" type="checkbox">&nbsp;{$item.p_id}</label></td>
                                        <td style="width:350px;"><a href="{SystemBase::buildUrl('tailieu/document/',['id'=>$item.id,'title'=>$item.title])}" target="_blank">{$item.title}</a>
                                            {if $item.type !='0' &&  $item.type !=''}
                                                {assign var="arr_type" value="|"|explode:$item.type}

                                                {foreach $arr_type as $t}<br /> <strong> - {$type[$t]}</strong>{/foreach}
                                            {/if} 
                                            {if $item.proprice > 0}<br />Giá KM: <strong class="label label-danger">{$item.proprice|number_format:2:",":"."|replace:',00':''} đ</strong> {/if}
                                            <br />Giá: <strong>{$item.price|number_format:2:",":"."|replace:',00':''} đ</strong> 
                                        </td>

                                        <td>{if isset($array_category[$item.category_id])}
                                            {$array_category[$item.category_id]['title']}
                                            {/if}
                                                {if isset($array_category[$item.sub_category_id])}
                                                    &rightarrow;{$array_category[$item.sub_category_id]['title']}
													
                                                {/if}
                                            </td>
                                            <td>
                                                {if $item.picture2 <>""}
                                                    {assign var="arr_pic" value="|"|explode:$item.picture2}<img src="{$link_images}{$arr_pic[0]}" height="50"/>
                                                {/if}
                                            </td>
                                            <td>{$item.count_down}</td>
                                            <td>{$item.create_time|date_format:"%d-%m-%Y"}<br> Người tạo: {$item.account_name}</td>
                                            <td>{if $item.update_time > 0}{$item.update_time|date_format:"%d-%m-%Y"}{/if}</td>
                                            <td style="width:250px;"> 
                                                <span class="input-group-btn">
                                                    <a href="{Yii::app()->createUrl("admin/products/edit/",['id'=>$item.id,'status'=>$item.status,'key_change'=>'tailieu.net'])}" class="btn btn-info">{$arr_statuss[$item.status]}</a>
                                                    <a href="{Yii::app()->createUrl("admin/products/edit/",['id'=>$item.id])}" class="btn btn-warning">Sửa</a> | 
                                                    <a href="{Yii::app()->createUrl("admin/products/del/",['id'=>$item.id])}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xoá');">Xóa</a>
                                                </span>

                                            </td>
                                        </tr>
                                        {/foreach}
                                        </tbody>
                                        {else}
                                            <tr><td colspan="8" class="alert-danger danger"> Không có dữ liệu.</td></tr>
                                            {/if}

                                            </table>
                                        </div>
                                        <div class="row">
                                            <input onclick="return uncheck();" type="button" value="Chọn tất cả" class="btn btn-warning"> &nbsp; 
                                            <button type="submit" class="btn btn-warning" name="submit" onclick="return confirm('Bạn chắc chắn');"> Xoá mục đã chọn </button>
                                        </div>
                                        {CHtml::endForm()}  
                                        <!--Paging--->
                                        <div class="row">{$pageHtml}<p>&nbsp; </p> </div>
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