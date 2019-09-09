<div class="page-title">
    <div class="title-env">
        <h1 class="title">Danh sách quyền</h1>
        <p class="description">Thêm, sửa, xóa</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1">
            <li>
                <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a>
            </li>

            <li class="active">
                <strong>quyền</strong>
            </li>
        </ol>

    </div>

</div>
<a href="{Yii::app()->createUrl("admin/permission/create/")}">  
    <div class="alert alert-info"> Thêm quyền </div>                
</a>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Tìm kiếm quyền</h3>
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
                    <input placeholder="Tên quyền" type="text" class="form-control" id="name" name="name" value="{$get_data.name}" />	
                </div>
                <div class="form-group">
                    {$combo_type}
                </div>    
                <div class="form-group">  
                    <button type="submit" class="btn btn-info btn-single">Tìm kiếm</button>
                    <button type="reset" class="btn btn-warning btn-single" name="reset" value="   " onclick="location.href = '{$link_action}'">Bỏ lọc</button>
                    <button type="button" class="btn btn-success btn-single" onclick="location.href = '{$link_scan}'">Quét quyền</button>
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
                    <div class="pull-left">Có <strong class="blueFont">{$totalRecord}</strong> quyền</div>
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
                {if $error <> false}
                    <div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>{$error}</div>
                {/if}
                <div class="table-responsive">
                    <table class="table table-small-font table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên quyền</th>
                                <th>Controller/Action</th>
                                <th>Loại</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            {if $data_list}

                                {foreach item=item from=$data_list key=k}
                                    <tr>
                                        <td>{$item.id}</td>
                                        <td>{$item.name}</td>
                                        <td>{$item.value}</td>
                                        <td>{$item.type}</td>
                                        <td>
                                            <a href="{Yii::app()->createUrl("admin/permission/edit/",['id'=>$item.id])}">Sửa</a> |                         
                                            <a onclick="return confirm('Bạn có chắc chắn xóa.');" href="{Yii::app()->createUrl("admin/permission/del/",['id'=>$item.id])}">Xóa</a>
                                        </td>
                                    </tr>
                                {/foreach}

                            {else}
                                <tr><td colspan="5" class="alert-danger danger"> Không có dữ liệu.</td></tr>
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




