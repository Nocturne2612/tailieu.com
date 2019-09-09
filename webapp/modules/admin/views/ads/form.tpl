
<div class="page-title">
    <div class="title-env">
        <h1 class="title">{$title_page}</h1>
        <p class="description">Thêm, sửa, phân ads</p>
    </div>
    <div class="breadcrumb-env">
        <ol class="breadcrumb bc-1">
            <li> <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a> </li>
            <li> <a href="{$link_back}">Ads</a> </li>
            <li class="active"> <strong>{$title_page}</strong> </li>
        </ol>
    </div>
</div>
<div class="panel panel-default">

    <div class="panel-heading hidden-print">{$title_page}</div>
    <div class="panel-body">

        {CHtml::beginForm($link_action,'post',['role' => 'form','class'=>'form-horizontal','enctype'=>'multipart/form-data'])}
        {if $error <> false}
            <div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>{$error}</div>
        {/if}
        <div class="col-md-12" >
            <div class="form-group">
                <label for="title" class="control-label">Tiêu đề :</label>
                <input type="text" class="form-control" id="title" name="title" value="{$data.title}" required=""> 
            </div>
        </div>

        <div class="col-md-12">    
            <div class="form-group">
                <label class="control-label">Vị trí:</label>
                {$combo_position}
            </div>
        </div>    
        <div class="col-md-12">        
            <div class="form-group">
                <label class="control-label">Ảnh quảng cáo: </label>
                <input type="file" id="file" name="file" data-bfi-disabled>
                <br>
                {if $data.picture <> ""}
                    <a href="javascript:;" {literal}onclick="jQuery('#modal').modal('show', {backdrop: 'fade'});" {/literal} > <img src="{$link_images}{$data.picture}" height="80"/></a>
                    <div class="modal fade custom-width" id="modal">
                        <div class="modal-dialog" style="width: 80%">
                            <div class="modal-content">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>


                                <img src="{$link_images}{$data.picture}" width="60%"/>

                            </div>
                        </div>
                    </div>
                {/if}
            </div>
        </div>

        <div class="col-md-12" >
            <div class="form-group">
                <label for="pic_link" class="control-label">Code quảng cáo:</label>

                <textarea  class="form-control" id="pic_link" name="pic_link">{$data.pic_link}</textarea>
            </div>
        </div>

        <div class="col-md-12" >
            <div class="form-group">
                <label for="link" class="control-label">Link quảng cáo:</label>
                <input type="text" class="form-control" id="link" name="link" value="{$data.link}">
            </div>
        </div>  
        <div class="col-md-3" >
            <div class="form-group">
                <label for="stt" class="control-label">STT:</label>
                <input type="number" class="form-control" id="stt" name="stt" value="{$data.stt}">
            </div>
        </div>   <div class="col-md-1"> </div>
        <div class="col-md-3">    
            <div class="form-group">
                <label class="control-label">Trạng thái:</label>
                {$combo_status}
            </div>
        </div><div class="col-md-1"> </div>
        <div class="col-md-3">    
            <div class="form-group">
                <label class="control-label">Scroll:
                <input class="form-control"  type="checkbox" name="sticky" value="1" {if $data.sticky=='1'}checked{/if}/></label>
            </div>
        </div>    
        <div class="col-md-12">  
            <div class="form-group">
                <label class="control-label"></label>
                <button type="submit" class="btn btn-warning" name="submit">Cập nhật</button>
            </div> 
        </div>
        {CHtml::endForm()} 
    </div>
</div>
