
<div class="page-title">
    <div class="title-env">
        <h1 class="title">{$title_page}</h1>
        <p class="description">Thêm, sửa, phân quyền keywords</p>
    </div>
    <div class="breadcrumb-env">
        <ol class="breadcrumb bc-1">
            <li> <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a> </li>
            <li> <a href="{$link_back}">Keywords</a> </li>
            <li class="active"> <strong>{$title_page}</strong> </li>
        </ol>
    </div>
</div>
<div class="panel panel-default">
    <h3 class="panel-title">{$title_page}</h3>
    <div class="panel-body">
        <div class="row"> 
            {CHtml::beginForm($link_action,'post',['role' => 'form','class'=>'form-horizontal'])}
            {if $error <> false}
                <div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>{$error}</div>
            {/if}
            <div class="form-group">
                <label class="col-sm-3 control-label">Từ khóa:</label>
                <div class="col-sm-9">
                    <div class="input-group input-group-minimal">
                        <input type="text" name="title" value="{$data.title}" class="form-control" placeholder="Bắt buộc nhập" required=""/>
                        <span class="input-group-addon">
                            <i class="fa fa-empire"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Ancol text:</label>
                <div class="col-sm-9">
                    <input type="text" name="ancol_text" value="{$data.ancol_text}" id="ancol_text" class="form-control" />
                </div>
            </div>
             <div class="form-group">
                <label class="col-sm-3 control-label">Số lượng chèn:</label>
                <div class="col-sm-9">
                    <input type="text" name="qty" value="{$data.qty}" id="qty" class="form-control" />
                </div>
            </div>      
            <div class="form-group">
                <label class="col-sm-3 control-label">Link:</label>
                <div class="col-sm-9">
                    <div class="input-group input-group-minimal">
                        <input type="text" name="link" value="{$data.link}" id="link" class="form-control" placeholder="Bắt buộc nhập" required=""/>
                        <span class="input-group-addon">
                            <i class="fa fa-empire"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Loại từ khóa:</label>
                <div class="col-sm-9">
                    {$combo_type}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Rel:</label>
                <div class="col-sm-9">
                    {$combo_rel}
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3  control-label"></label>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-warning" name="submit">Cập nhật</button>
                    <a href="{$link_back}" class="btn btn-info" name="goback">Bỏ qua</a>
                </div>
            </div>
            {CHtml::endForm()} </div>
    </div>
</div>
