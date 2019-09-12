{if $data}
    {$action = Yii::app()->controller->action->id}

    <div class="user-aside">
        <div class="user-panel">
            <div class="user-panel-mask">
                <img src="/assets/images/007-nature-29.png" alt="">
            </div>
            <div class="user-panel-img sliver">
                <img src="/assets/images/007-nature-29.png" alt="">
            </div>
            <div class="user-panel-info">
                <p class="user-panel-name">{$data.first_name} {$data.last_name}</p><br/>
                <span class="user-panel-id">Loại TK: <b style="color: red">{if $data.type == 2}VIP{else}Thường{/if}</b></span><br/>
                <span class="user-panel-id">Gia nhập từ: <b
                            style="color: #468847">{$data.create_time|date_format:"%d-%m-%Y"}</b></span><br/>
                <span class="user-panel-id">Số Point: <b
                            style="color: #468847">{$data.point|number_format:2:",":"."|replace:',00':''}</b> Point</span><br/>
                <span class="user-panel-id">Upload: <b
                            style="color: #468847">{$data.count_upload}</b> tài liệu</span><br/>
                <span class="user-panel-id">Up miễn phí: <b
                            style="color: #468847">{$total_free}</b> tài liệu</span><br/>
                <span class="user-panel-id">Up có phí: <b
                            style="color: #468847">{$total_fee}</b> tài liệu</span><br/>
                <span class="user-panel-id">Download: <b
                            style="color: #468847">{$data.count_down}</b> tài liệu</span><br/><br/>
                <a class="btn btn-small btn-primary" href="{SystemBase::buildUrl('tailieu/addfund/',[])}">Nạp tiền</a>
            </div>
        </div>
    </div>
    <style>
        .about-menu .active {
            border: 1px solid red
        }

        .about-menu .active a {
            font-weight: bold;
            color: red
        }
    </style>
{/if}