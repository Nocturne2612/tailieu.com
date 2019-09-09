
<div class="user-main">
    <div class="user-main-inner">
        <div class="user-profile">

            <h1>Upload</h1>
            {CHtml::beginForm('','post',['name' => 'changepass','id'=>'changepass'])}
            <div class="user-profile-inner user-connect"> 
                <div class="window-jobCollect-contain">
                    {if $errors <> ''}
                        <div class="alert alert-danger">{$errors}</div>
                    {/if}
                    {if $success <> ''}
                        <div class="alert alert-success">{$success}</div>
                    {/if}
                    <p class="window-jobCollect-question">Tiêu đề *</p>
                    <div class="window-jobCollect-group _job">
                        <input class="ui-input" id="title" placeholder="" name="title" type="text" data-toggle="popover" required="" autocomplete="off" value="{$params.title}">

                    </div>
                    <p class="window-jobCollect-question">Danh mục</p>
                    <div class="window-jobCollect-group _job">
                        {$combo_category}
                    </div>
                    <p class="window-jobCollect-question">POINT *</p>
                    <div class="window-jobCollect-group _job">
                        <input class="ui-input" id="price" placeholder="" name="price" type="text" data-toggle="popover" required="" autocomplete="off" value="{$params.price}">
                    </div>
                    <p class="window-jobCollect-question">Ảnh bìa đại diện bài viết *</p>
                    <div class="form-item">
                        <input type="file" id="file" name="file[]" class="ui-info">               
                    </div>
                    <br>
                    <p style="font-size: 12px">Chỉ chấp nhận ảnh JPG, PNG, GIF có kích thước < 1000x1000px và dung lượng <2Mb.</p> 
                    {if isset($params.picture2) && $params.picture2 !='' } 
                        <div class="ui-form-item fn-clear">
                            <label class="ui-label">&nbsp;</label>
                            <div style="">{assign var="arr_img" value="|"|explode:$params.picture2}
                                {if $arr_img <>''}
                                    <a href="{$link_images_full}{$arr_img[0]}" target="_blank"><img src="{$link_images}{$arr_img[0]}" width="80"/> </a>
                                    {/if}
                            </div>
                        </div>
                    {/if}

                    <p class="window-jobCollect-question">Link Tài liệu</p>
                    <div class="window-jobCollect-group _job">
                        <input type="text" id="link_other" name="link_other" class="ui-input" value="{$params.link_other}" placeholder="Link tải từ các web như Mediafire, Fshare, Google Driver">         
                    </div>
                    <p class="window-jobCollect-question">Từ khóa</p>
                    <div class="window-jobCollect-group _job">
                        <input type="text" class="ui-input" id="tag" name="tag" value="{$params.tag}" placeholder="Từ khóa tìm kiếm">
                    </div>
                    <p style="font-size: 12px">Từ khóa liên quan để công cụ search có thể tìm thấy tài liệu của bạn, VD: Thư viện cad, Thư viện autocad, Cad nội thất...</p>

                    <p class="window-jobCollect-question">Mô tả</p>
                    <div class="window-jobCollect-group _briefly">
                        <textarea class="position_question" id="desc" name="desc" placeholder="Mô tả tài liệu của bạn là tài liệu gì">{$params.desc}</textarea>

                    </div>
                    <p class="window-jobCollect-question">Mã bảo mật</p>
                    <div class="window-jobCollect-group _job ccaptcha">
                        <input class="ui-input" id="verifyCode" name="verifyCode" type="text">
                        {$this->widget('CCaptcha',['id'=>'ccaptcha'],true)}
                    </div>
                    <button type="submit" href="javascript:;" class="submit">Thực hiện</button>

                </div>
            </div>

            {CHtml::endForm()}
        </div>
        {literal}
            <style>
                #ccaptcha{width:80px;}
            </style>
            <style>
                #ccaptcha_button {
                    display: none}
            </style>
        {/literal}
    </div>
</div>











