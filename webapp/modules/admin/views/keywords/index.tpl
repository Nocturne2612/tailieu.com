<div class="page-title">
    <div class="title-env">
        <h1 class="title">Danh sách từ khóa</h1>
        <p class="description">Thêm, sửa, xóa từ khóa</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1">
            <li>
                <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a>
            </li>

            <li class="active">
                <strong>Keywords</strong>
            </li>
        </ol>

    </div>

</div>
<a href="{Yii::app()->createUrl("admin/keywords/create/")}">  
    <div class="alert alert-info"> Thêm từ khóa </div>                
</a>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Tìm kiếm từ khóa</h3>
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
                    <input placeholder="Từ khóa" type="text" class="form-control" id="title" name="title" value="{$get_data.title}" />	
                </div>
                <div class="form-group">
                    <input placeholder="Link" type="text" class="form-control" id="link" name="link" value="{$get_data.link}" />	
                </div>
                <div class="form-group">
                    <label class="control-label" for="category">Loại từ khóa:</label>
                    {$combo_type}	
                </div>
                <div class="form-group">
                    <label class="control-label" for="category">Rel:</label>
                    {$combo_rel}	
                </div>
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
            {if $error <> false}
                <div class="alert alert-danger">{$error}</div>
            {/if}
            {if $success <> false}
                <div class="alert alert-success">{$success}</div>
            {/if}
            <div class="panel-heading">
                <h3 class="panel-title"> 
                    <div class="pull-left">Có <strong class="blueFont">{$totalRecord}</strong> từ khóa</div>
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
                                <th>Từ khóa</th>
                                <th>Loại từ khóa</th>
                                <th>Link</th>
                                <th>Rel</th>
                                <th>Ancol text</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            {if $output}
                                {foreach item=item from=$output key=k}
                                    <tr>
                                        <td>{$item.id}</td>
                                        <td>{$item.title}</td>
                                        <td>{$arr_type[$item.type]}</td>
                                        <td>{$item.link} </td>
                                        <td>{$arr_rel[$item.rel]}</td>
                                        <td>{$item.ancol_text}</td>
                                        <td>
                                            <a href="{Yii::app()->createUrl("admin/keywords/view/",['id'=>$item.id])}">Xem</a> |                         
                                            <a onclick="return confirm('Bạn có chắc chắn xóa.');" href="{Yii::app()->createUrl("admin/keywords/del/",['id'=>$item.id])}">Xóa</a>
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

