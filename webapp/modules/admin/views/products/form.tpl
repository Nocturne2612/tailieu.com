<div class="page-title">
    <div class="title-env">
        <h1 class="title">Thêm tài liệu</h1>
        <p class="description">Thêm tài liệu</p>
    </div>
    <div class="breadcrumb-env">
        <ol class="breadcrumb bc-1">
            <li> <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a> </li>
            <li> <a href="{$link_back}">Danh sách tài liệu</a> </li>
            <li class="active"> <strong>{$title_page}</strong> </li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="boxModule">
        <ul class="nav nav-tabs" role="tablist">
            <li><a href="{$link_back}" role="tab">Danh sách tài liệu</a></li>
            <li class="active"><a href="{$link_action}" role="tab">{$title_page}</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">{if $error <> false}
                <div class="alert alert-danger">{$error}</div>
            {/if}
            {if $success <> false}
                <div class="alert alert-success">{$success}</div>
            {/if}
                        {CHtml::beginForm('','post',['role' => 'form','class'=>'form-wizard','enctype'=>'multipart/form-data'])}
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="title" class="control-label">Tiêu đề:</label>
                            <input type="text" class="form-control" id="title" name="title" value="{$data.title}" required="" placeholder="Bắt buộc nhập">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="p_id" class="control-label">Mã tài liệu:</label>
                            <input type="text" class="form-control" id="p_id" name="p_id" value="{$data.p_id}" required="" placeholder="Bắt buộc nhập">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="link_other" class="control-label">Link tài liệu:(Dạng link https://drive.google.com/open?id=0B8doUciFn3didFJtUWM5OXJLVDA)</label>
                            <input type="text" class="form-control" id="link_other" name="link_other" value="{$data.link_other}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="count" class="control-label">Lượt view:</label>
                            <input type="text" class="form-control" id="count" name="count" value="{$data.count}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="count_down" class="control-label">Lượt down:</label>
                            <input type="text" class="form-control" id="count_down" name="count_down" value="{$data.count_down}">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="acsii" class="control-label">Desc:</label>
                            <input type="text" class="form-control" id="desc" name="desc" value="{$data.desc}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="category" class="control-label">Danh mục (*):</label>
                            {$combo_category} 
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="category" class="control-label">Danh mục Hiển thị thêm:</label>
                            {$combo_category2} 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tag" class="control-label">Tag:</label>
                            <input type="text" class="form-control" id="tag" name="tag" value="{$data.tag}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Thuộc tính tài liệu</label>
                            <br>
                            {assign var="arr_types" value="|"|explode:$data.type}
                            {for $i = 1 to 3}
                                <label class="cbr-inline">
                                    <input type="checkbox" class="cbr cbr-secondary" name="type[]" value="{$i}" {if isset($arr_types[$i-1]) && $arr_types[$i-1] == $i} checked="" {/if} >
                                    {$type[$i]}&nbsp; &nbsp;&nbsp; </label>
                            {/for} </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="price" class="control-label">Giá bán:</label>
                                <input type="text" class="form-control" id="price" name="price" value="{$data.price}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="proprice" class="control-label">Giá khuyến mãi:</label>
                                <input type="text" class="form-control" id="proprice" name="proprice" value="{$data.proprice}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="qty" class="control-label">Số lượng:</label>
                                <input type="text" class="form-control" id="qty" name="qty" value="{$data.qty}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Trạng thái:</label>
                                {$combo_status} </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Thời gian đăng:</label>
                                <input type="text" class="form-control datepicker" data-date-format="dd-mm-yyyy" id="begin_time" name="begin_time" value="{$data.create_time|date_format:"%d-%m-%Y"}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Người đăng: {if $data.account_id}<a href="{Yii::app()->createUrl("admin/account/view/",['id'=>$data.account_id])}">{$data.account_name}</a>{/if}</label>
                                <input type="text" class="form-control" name="account_name" value="{$data.account_name}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Ảnh bìa  </label>
                            <div id="uploadfile">
                                <input type="file" id="file" name="file[]" data-bfi-disabled>
                            </div>
                        </div>
                        <div class="col-md-12"> {if isset($data.picture2) && $data.picture2 !='' } 
                            {assign var="arr_img" value="|"|explode:$data.picture2}
                            {foreach $arr_img as $img}
                                {if $img <>''}
                                    <div class="col-md-2 center"> <a href="{$link_images_full}{$img}" target="_blank"><img src="{$link_images}{$img}" width="80"/> </a><br>
                                        <a  style="padding-left:30px; " href="{Yii::app()->createUrl("admin/products/edit/",['id'=>$data.id,'image'=>base64_encode($img)])}" class="fa-hover"><i class="fa fa-trash"></i></a></div>
                                        {/if}  
                                    {/foreach} 
                                    {/if} </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Nhiều ảnh  </label>
                                <div id="uploadfile2">
                                    <input type="file"  name="file2[]" data-bfi-disabled multiple>
                                </div>
                            </div>
                        </div>        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Upload tài liệu</label>
                                <div id="uploadfile">
                                    <input type="file" id="file" name="file_tailieu" data-bfi-disabled>
                                    {if isset($data.file) && $data.file !='' }
                                        <p><a href="{$smarty.const.ROOT_URL}/{$link_tailieu}{$data.file}">{$smarty.const.ROOT_URL}/{$link_tailieu}{$data.file}</a></p>

                                        <a  style="padding-left:30px; " href="{Yii::app()->createUrl("admin/products/edit/",['id'=>$data.id,'files'=>$data.file])}" class="fa-hover"><i class="fa fa-trash"></i></a>
                                    {/if} </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Tóm tắt:</label>
                                <textarea name="short" class="form-control">{$data.short}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Nội dung:</label>
                                {$fck_noidung} </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label"></label>
                                <button type="submit" class="btn btn-warning" name="submit">Cập nhật</button>
                            </div>
                        </div>
                        {CHtml::endForm()} </div>
                </div>
            </div>
        </div>
        {literal} 
            <script type="text/javascript">

                function onPlus(value) {
                    if (parseInt(value) > 0) {
                        var tag = "";
                        for (var i = 0; i < parseInt(value); i++)
                        {
                            tag += "<input type='file' name='file[]' data-bfi-disabled/>";
                        }
                        document.getElementById('uploadfile').innerHTML = tag;
                    }
                }
                $(document).ready(function() {
                    $('.datepicker').datepicker({
                        format: "dd-mm-yyyy",
                        autoclose: true,
                    });
                    $('#sub_category_id').change(function() {
                        console.log($(this).val());
                    }).multipleSelect({
                        width: '100%'
                    });
                });

            </script> 

        {/literal}