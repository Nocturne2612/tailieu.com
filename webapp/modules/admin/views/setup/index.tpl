<div class="page-title">
    <div class="title-env">
        <h1 class="title">Cấu hình hệ thống</h1>
        <p class="description">Thêm, sửa, </p>
    </div>
    <div class="breadcrumb-env">
        <ol class="breadcrumb bc-1">
            <li> <a href="{$smarty.const.BASE_URL_ADMIN}"><i class="fa-home"></i>Trang chủ</a> </li>
            <li class="active"> <strong>Cấu hình hệ thống</strong> </li>
        </ol>
    </div>
</div>

<!--Fillter-->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default"> {if $error <> false}
            <div class="alert alert-danger">{$error}</div>
            {/if}
                {if $success <> false}
                    <div class="alert alert-success">{$success}</div>
                {/if}
                <div class="row"> {CHtml::beginForm($link_action,'post',['role' => 'form','class'=>'form-horizontal','enctype'=>'multipart/form-data'])}
                    {if $error <> false}
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                            {$error}</div>
                        {/if}
                    <div class="col-sm-6">
                        {if $arr_define}
                            {foreach $arr_define as $k1 => $s1}
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">{$k1}:</label>
                                    <div class="col-sm-8">
                                        {if $k1 =='CHANGE_POINT'} Tỉ lệ quy đổi &rarr; POINT = (Số tiền nạp * 50%) - Nhập 0.5{/if}
                                        <input type="text" name="{$k1}" value="{$s1}"  class="form-control"/>
                                    </div>
                                </div>
                            {/foreach}
                        {/if}  
                    </div>
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Mệnh giá thẻ cào:</label>
                            <div class="col-sm-8">
                                {if $arr_point}
                                    {foreach $arr_point as $k => $s}
                                        Thẻ {$k} VNĐ &rarr; POINT<input type="text" name="POINT[{$k}]" value="{$s}" class="form-control"/>

                                    {/foreach}
                                {/if}   
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">PAYPAL POINT:</label>
                            <div class="col-sm-8">
                                {if $arr_point2}
                                    {foreach $arr_point2 as $k => $s}
                                         {$k} $ &rarr; POINT<input type="text" name="PAYPAL[{$k}]" value="{$s}" class="form-control"/>

                                    {/foreach}
                                {/if}   
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6  control-label"></label>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-warning" name="submit">Cập nhật</button>
                            <button type="button" class="btn btn-success" name="SiteMap" onClick="location.href = '{Yii::app()->createUrl('admin/setup/CreatedSiteMap')}'">Tạo site map</button>
                        </div>
                    </div>
                    {CHtml::endForm()} </div>
            </div>
        </div>
    </div>
