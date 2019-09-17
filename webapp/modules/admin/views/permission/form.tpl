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
            <li>
                <a href="{$link_account}">Quyền</a>
            </li>
            <li class="active">
                <strong>Thông tin quyền</strong>
            </li>
        </ol>

    </div>

</div>
<a href="{Yii::app()->createUrl("admin/permission/create/")}">  
    <div class="alert alert-info"> Thêm quyền </div>                
</a>
<div class="panel panel-default"> 
    <h3 class="panel-title">Thông tin quyền {$data.name}</h3>
    <div class="panel-body">        
        <div class="row">

            {if $err <> ''}
                <div class="alert alert-danger">{$err}</div>
            {/if}

            {CHtml::beginForm('','post',['role' => 'form','class'=>'form-horizontal'])}
            <div class="form-group">
                <label class="col-sm-2 control-label">Tên quyền:</label>
                <div class="col-sm-9">                   
                    <input type="text" name="name" value="{$data.name}" id="name" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Controller/Action:</label>
                <div class="col-sm-9">
                    <input type="text" name="value" value="{$data.value}" id="value" class="form-control" />
                </div>
            </div>

           
            <div class="form-group">
                <label class="col-sm-2 control-label">Loại:</label>
                <div class="col-sm-9">
                   {$combo_type}
                </div>
            </div>
               
            <div class="form-group"> 
               
                <label class="col-sm-2"></label>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-success" name="edit" value="   ">Cập nhật</button>
                    <button type="button" class="btn btn-default pull-right" name="reset" value="   " onclick="window.history.back();">Quay lại</button>
                </div>
            </div>        
            {CHtml::endForm()}  
        </div>
    </div>
</div>
