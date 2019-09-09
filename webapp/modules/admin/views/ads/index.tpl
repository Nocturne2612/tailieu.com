<div class="page-title">
    <div class="title-env">
        <h1 class="title">Danh sách ads</h1>
        <p class="description">Thêm, sửa, xóa banner, quảng cáo</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1">
            <li>
                <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a>
            </li>

            <li class="active">
                <strong>Ads</strong>
            </li>
        </ol>
    </div>
</div>
<a href="{Yii::app()->createUrl("admin/ads/create/")}">  
    <div class="alert alert-info"> Tạo ads</div>                
</a>
{CHtml::beginForm($link_action,'get',['enctype' => '','class'=>'form-wizard','name'=>'ordersform'])}    
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Tìm kiếm ads</h3>
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
                        <label class="control-label" for="fullname">Tiêu đề:</label>
                        <input type="text" class="form-control" id="title" class="title" name="title" value="{$get_data.title}">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="status">Trạng thái:</label>
                        {$combo_status}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label" for="view">Vị trí:</label>
                        {$combo_position}
                    </div>
                </div>
                <div class="col-md-12">

                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-success" name="search" value="   ">Tìm kiếm</button>
                        <button type="reset" class="btn btn-default" name="reset" value="   " onclick="location.href = '{$link_action}'">Bỏ lọc</button>

                    </div>



                </div>

            </div>

        </div>
        <div class="panel panel-default">            
            <div class="panel-body">
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-danger" value="1" name="cache" onclick="return confirm('Bạn chắc chắn');"> Tạo cache </button></div><div class="col-sm-5">
                    {$combo_position}
                </div>

            </div>        
        </div> 
    </div>
</div> 
{CHtml::endForm()}                     
{CHtml::beginForm(Yii::app()->createUrl("admin/ads/del/"),'post',['enctype' => '','name'=>'ordersforms'])}   
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
                    <div class="pull-left">Có <strong class="blueFont">{$totalRecord}</strong> ads</div>
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
                            <tr><th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Hình ảnh</th>
                                <th>STT</th>
                                <th>Trạng thái</th>
                                <th>Vị trí</th>
                                <th>Link liên kết</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            {if $output}
                                {foreach item=item from=$output key=k}
                                    <tr>
                                        <td><label>
                                                <input name="element[]" value="{$item.id}" type="checkbox">&nbsp;{$item.id}</label></td>
                                        <td>{$item.title}</td>
                                        <td>{if $item.pic_link <>""}{else}<img src="{$link_images}{$item.picture}" width="50"/>{/if}</td>
                                        <td>{$item.stt} </td>
                                        <td> <strong>{$arr_status[$item.status]}</strong></td>
                                        <td><san class="text-danger">{$posititons[$item.position]}</san></td>
                                <td>{$item.link}</td>
                                <td>
                                    <a href="{Yii::app()->createUrl("admin/ads/view/",['id'=>$item.id])}">Xem</a> |                         
                                    <a onclick="return confirm('Bạn có chắc chắn xóa.');" href="{Yii::app()->createUrl("admin/ads/del/",['id'=>$item.id])}">Xóa</a> 

                                </td>
                                </tr>
                            {/foreach}

                        {else}
                            <tr><td colspan="7"> Không có dữ liệu.</td></tr>
                        {/if}  
                        </tbody>
                    </table>

                </div>
                <div class="row">

                    <input onclick="return uncheck();" type="button" value="Chọn tất cả" class="btn btn-warning"> &nbsp; 
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