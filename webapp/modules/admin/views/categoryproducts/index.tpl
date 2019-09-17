<div class="page-title">
    <div class="title-env">
        <h1 class="title">Danh mục tài liệu</h1>
        <p class="description">Thêm, sửa, xóa danh mục tài liệu</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1">
            <li>
                <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a>
            </li>

            <li class="active">
                <strong>Danh mục tài liệu</strong>
            </li>
        </ol>

    </div>

</div>
<a href="{Yii::app()->createUrl("admin/categoryproducts/create/")}">  
    <div class="alert alert-info"> Thêm danh mục </div>                
</a>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"> 
                    <div class="pull-left">Có <strong class="blueFont">{$category.counts}</strong> danh mục</div>
                </h3>
                <div class="panel-options">
                    <a data-toggle="panel" href="#">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>
                </div>
                <div class="clearfix"></div>

                {CHtml::beginForm('','get',['enctype' => '','class'=>'form-inline','name'=>'userform'])}
                <button type="submit" class="btn btn-single btn-danger" name="cache" value="1">Tạo cache</button>

                {CHtml::endForm()} 
            </div>

            <!--fillter-->

            <div class="panel-body">  
                {CHtml::beginForm(Yii::app()->createUrl("admin/categoryproducts/edit/"),'post',['role' => 'form','class'=>'form-horizontal'])}
                <div class="table-responsive">
                    <table class="table table-small-font table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Danh mục cha</th>
                                <th>Link</th>
                                <th>Thời gian tạo</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>

                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            {if $category.parent_category}
                                {foreach $category.parent_category as $k => $item}
                                    <tr {if $item.status <> '1'}class="alert-danger danger"{/if}>
                                        <th>{$item.id}</th>
                                        <th>{$item.title}<br> </th>
                                          <th></th>
                                        <td> {SystemBase::buildUrl('tailieu/categorydocument',['title'=>$item.title])}</td>
                                      
                                        <th>{$item.create_time|date_format:"%d-%m-%Y"}</th>
                                        <th>{$arr_status[$item.status]} - <a href="{Yii::app()->createUrl("admin/categoryproducts/edit/",['id'=>$item.id,'status'=>$item.status])}" class="btn btn-info">{$arr_statuss[$item.status]}</a></th>
                                        <th style="width:250px;">
                                <div class="col-sm-3" style="padding: 0px;">
                                    <input class="form-control no-right-border form-focus-purple" type="text" value="{$item.stt}" name="stt[]">
                                </div>
                                <input type="hidden" value="{$item.id}" name="ids[]">
                                <span class="input-group-btn">                                   
                                    <button class="btn btn-purple" name="save" type="submit" value="save">Lưu</button>                                        
                                    <a class="btn btn-warning" href='{Yii::app()->createUrl("admin/categoryproducts/edit/",['id'=>$item.id])}' >Sửa</a>
                                    <a class="btn btn-red" onclick="return confirm('Bạn có chắc chắn xoá');" href='{Yii::app()->createUrl("admin/categoryproducts/del/",['id'=>$item.id])}'>Xóa</a>
                                </span>

                                </th>

                                </tr>
                                {if isset($category['sub_category'][$k])}
                                    {foreach $category['sub_category'][$k] as $item1}
                                        <tr {if $item1.status == '0'}class="alert-danger danger"{/if}>
                                            <td>{$item1.id}</td>
                                            <td>{if $item1.parent_id <> '0'}  <span class="label label-success">[Cấp 2 - {$item.title}]</span> {/if}{$item1.title}<br></td>
                                            <td>{if $item1.parent_id <> '0'}{$item.title}{/if}</td>
                                            <td>
                                         {SystemBase::buildUrl('tailieu/categorydocument',['title'=>$item.title])}</td>
                                            
                                            <td>{$item1.create_time|date_format:"%d-%m-%Y"}</td>
                                            <td>{$arr_status[$item1.status]} -<a href="{Yii::app()->createUrl("admin/categoryproducts/edit/",['id'=>$item1.id,'status'=>$item1.status])}" class="btn btn-info">{$arr_statuss[$item1.status]}</a></td>
                                            <td>
                                                <div class="col-sm-3" style="padding: 0px;">
                                                    <input class="form-control no-right-border form-focus-purple" type="text" value="{$item1.stt}" name="stt[]">
                                                </div>
                                                <input type="hidden" value="{$item1.id}" name="ids[]">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-purple" name="save" type="submit" value="save">Lưu</button>
                                                    <a class="btn btn-warning" href='{Yii::app()->createUrl("admin/categoryproducts/edit/",['id'=>$item1.id])}'>Sửa</a>
                                                    <a class="btn btn-red" onclick="return confirm('Bạn có chắc chắn xoá');" href='{Yii::app()->createUrl("admin/categoryproducts/del/",['id'=>$item1.id])}'>Xóa</a>
                                                </span>


                                            </td>
                                        </tr>
                                    {/foreach}
                                {/if}
                            {/foreach}
                        {else} 
                            <tr> <td colspan="7" class="alert-danger danger">Không có dữ liệu</td></tr>  
                        {/if} 
                        </tbody>
                    </table>
                </div>
                {CHtml::endForm()}     
            </div>

        </div>
    </div>

</div>    
