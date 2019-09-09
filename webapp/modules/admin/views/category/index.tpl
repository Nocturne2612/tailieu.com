<div class="page-title">
    <div class="title-env">
        <h1 class="title">Danh sách danh mục</h1>
        <p class="description">Thêm, sửa, xóa danh mục</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1">
            <li>
                <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a>
            </li>

            <li class="active">
                <strong>Danh mục</strong>
            </li>
        </ol>

    </div>

</div>
<a href="{Yii::app()->createUrl("admin/category/create/")}">  
    <div class="alert alert-info"> Thêm danh mục </div>                
</a>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Tìm kiếm danh mục</h3>
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
                    <input placeholder="Tên danh mục" type="text" class="form-control" id="title" name="title" value="{$get_data.title}" />	
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info btn-single">Tìm kiếm</button>
                    <button type="reset" class="btn btn-warning btn-single" name="reset" value="   " onclick="location.href = '{$link_action}'">Bỏ lọc</button>

                    <button type="submit" class="btn btn-single btn-danger" name="cache" value="1">Tạo cache</button>
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
            {if $error <> false}
                <div class="alert alert-danger">{$error}</div>
            {/if}
            {if $success <> false}
                <div class="alert alert-success">{$success}</div>
            {/if}
            <div class="panel-heading">
                <h3 class="panel-title"> 
                    <div class="pull-left">Có <strong class="blueFont">{$totalRecord}</strong> danh mục</div>
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
                                <th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Loại danh mục</th>
                                <th>Số thứ tự</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            {if $output}
                                {$output_tr}

                            {else}
                                <tr><td colspan="5"> Không có dữ liệu.</td></tr>
                            {/if}  
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

</div>      

