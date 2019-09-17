<div class="page-title">
    <div class="title-env">
        <h1 class="title">{$title_page}</h1>
        <p class="description">{$title_page}</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1">
            <li>
                <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a>
            </li>
            <li>
                <a href="{$link_news}">Danh sách tin tức</a>
            </li>
            <li class="active">
                <strong>{$title_page}</strong>
            </li>
        </ol>

    </div>

</div>
<div class="container-fluid"> 
    <div class="boxModule">
        <ul class="nav nav-tabs" role="tablist">
            <li><a href="{$link_news}" role="tab">Danh sách tin tức</a></li>
            <li class="active"><a href="{$link_action}" role="tab">{$title_page}</a></li>
        </ul>
    </div>
    <div class="row">


        <div class="panel panel-default">
            <div class="panel-body"> 
                {if $err <>''}
                    <div class="alert alert-danger" role="alert">{$err}</div>
                {/if}
                {CHtml::beginForm('','post',['role' => 'form','class'=>'form-wizard','enctype'=>'multipart/form-data'])}
                <div class="col-md-12" >
                    <div class="form-group">
                        <label for="title" class="control-label">Tiêu đề :</label>
                        <input type="text" class="form-control" id="title" name="title" value="{$data.title}">
                    </div>
                </div>
                <div class="col-md-12">    
                    <div class="form-group">
                        <label for="category" class="control-label">Danh mục:</label>
                        {$combo_category}

                    </div>
                </div>    
                <div class="col-md-12">        
                    <div class="form-group">
                        <label class="control-label">Ảnh bìa: </label>
                        <input type="file" id="file" name="file" data-bfi-disabled>
                        <br>
                        {if $data.image <> ""}<img src="{$link_images}{$data.image}" height="80"/>{/if}
                    </div>
                </div>
                <div class="col-md-12">          
                    <div class="form-group">
                        <label class="control-label">Tóm tắt:</label>
                        {$fck_tomtat}
                    </div>

                </div>
                <div class="col-md-12">          
                    <div class="form-group">
                        <label class="control-label">Nội dung:</label>       
                        {$fck_noidung}
                    </div>

                </div>    

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label" for="tagsinput-1">Tag</label>
                        <input value="{$data.tag}" type="text" class="form-control" name="tag"  maxlength="255"  autocomplete="off"/>	
                    </div>
                </div>     
                <div class="col-md-4">    
                    <div class="form-group">
                        <label class="control-label">Trạng thái:</label>
                        {$combo_status}
                    </div>
                </div>

                <div class="col-md-3">  
                    <div class="form-group">
                        <label class="control-label"> Tác giả( Nguồn bài viết ): </label> 
                        <input type="text" class="form-control" id="author" name="author" value="{$data.author}">
                    </div>  
                </div> 
                <div class="col-md-3">  
                    <div class="form-group">
                        <label class="control-label"> Nổi bật <input type="checkbox" class="form-control" id="position" name="position" value="1" {if $data.position =='1'}checked="checked"{/if}> </label> 
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


    </script> 
{/literal}