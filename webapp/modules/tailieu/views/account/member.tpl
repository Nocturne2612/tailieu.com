

<div id="">
    <div class="layout-fluid fn-clear">
        {if $data}
            {$action = Yii::app()->controller->action->id}
            <div class="aside fn-left">
                <div class="ui-box listing-aside">
                    <h5><strong> &nbsp;&nbsp; {if $data.type == 2}TK VIP{else}TK Bình thường{/if}</strong></h5> 

                    <ul class="category-group fn-clear">
                        <li class="list-group-item">Họ tên: <b class="alert-success">{$data.first_name} {$data.last_name} </b></li>
                        <li class="list-group-item">Mã Thành viên: <b class="alert-success">{$data.id}</b></li>
                        <li class="list-group-item">Thành viên từ: <b class="alert-warning">{$data.create_time|date_format:"%d-%m-%Y"}</b></li>
                        <li class="list-group-item">Loại TK: <b class="alert-danger">{if $data.type == 2}VIP{else}Bình thường {/if}</b> </li>
                        <li class="list-group-item">Upload: <b class="alert-danger">{$data.count_upload}</b> tài liệu</li>
                        <li class="list-group-item">Upload: <b class="alert-danger">{$total_free}</b> miễn phí</li>
                        <li class="list-group-item">Upload: <b class="alert-danger">{$total_fee}</b> có phí</li>
                        <li class="list-group-item">Download: <b class="alert-danger">{$data.count_down}</b> tài liệu</li>
                    </ul> 
                    <hr>
                    <a class="btn btn-small btn-primary"  href="{SystemBase::buildUrl('tailieu/addfund/',[])}">Nạp tiền</a>
                </div>
            </div> 
            <style>
                .about-menu  .active  {
                    border: 1px solid red
                }
                .about-menu  .active  a {
                    font-weight: bold;color:red
                }
            </style>
        {/if}
        <div class="mains fn-right">
            <div class="ui-box listing-aside">

                <h2>Tài liệu đã up</h2>
                <div class=" ">
                    <div class="thumbnail-wrapper">
                        {if $outputs}
                            <ul class="thumbnail-group search-images fn-clear">
                                {$this->widget('TWidgets',['methodName'=>'productView','product'=> $outputs['data'],'check'=> true],true)} 
                            </ul>
                            {$outputs['pageHtml']}
                        {else}
                            CHUA CO

                        {/if}
                    </div>
                </div></div>
        </div>
    </div>
</div>