
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
                <p class="user-panel-name">{$data.first_name}                
                </p>
                <span class="user-panel-id">
                    {if $data.type == 2}
                        <li class="list-group-item"><b style="color: red;font-weight: bold">VIP</b> đến <b style="color: #468847">{$data.time_vip_end|date_format:"%d-%m-%Y"}</b></li>
                        {else}
                        <li class="list-group-item"> <b style="font-weight: bold">Bình thường</b></li>
                        {/if}

                </span>
                <li class="list-group-item">Gia nhập từ: <b class="alert-warning">{$data.create_time|date_format:"%d-%m-%Y"}</b></li>
                <li class="list-group-item">Số Point: <b class="alert-danger">{$data.point|number_format:2:",":"."|replace:',00':''}</b> Point</li>
                <li class="list-group-item">Upload: <b class="alert-danger">{$data.count_upload}</b> tài liệu</li>
                <li class="list-group-item">Download: <b class="alert-danger">{$data.count_down}</b> tài liệu</li>
            </div>
        </div>
        <ul class="user-router">
            <li {if $action eq 'changeinfo'}class=' new-color'{/if}><a href="{SystemBase::buildUrl('tailieu/account/changeinfo',[])}">Cập nhật tài khoản</a> </li>
            <li {if $action eq 'index'}class=' new-color'{/if}><a href="{SystemBase::buildUrl('tailieu/account',[])}">Lịch sử download</a> </li>	
            <li {if $action eq 'historyupload'}class=' new-color'{/if}><a href="{SystemBase::buildUrl('tailieu/account/historyupload',[])}">Lịch sử Upload</a> </li>
            <li {if $action eq 'historypoint'}class=' new-color'{/if}><a href="{SystemBase::buildUrl('tailieu/account/historypoint',[])}">Lịch sử POINT</a> </li>
            <li {if $action eq 'favorite'}class=' new-color'{/if}><a href="{SystemBase::buildUrl('tailieu/account/favorite',[])}">Ưa thích</a> </li>
            <li {if $action eq 'changepass'}class=' new-color'{/if}><a href="{SystemBase::buildUrl('tailieu/account/changepass',[])}">Đổi mật khẩu</a> </li>
        </ul>
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


