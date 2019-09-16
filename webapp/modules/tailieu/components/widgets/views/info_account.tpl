
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
                        <b style="color: red;font-weight: bold">VIP</b> đến <b style="color: #468847;font-weight: bold;">{$data.time_vip_end|date_format:"%d-%m-%Y"}</b>
                        {else}
                        <b style="font-weight: bold">Bình thường</b>
                        {/if}
                </span><br/>
                <span class="user-panel-id">Gia nhập từ: <b style="color: #468847;font-weight: bold;">{$data.create_time|date_format:"%d-%m-%Y"}</b></span><br/>
                <span class="user-panel-id">Số Point: <b style="color: #468847;font-weight: bold;">{$data.point|number_format:2:",":"."|replace:',00':''}</b> Point</span><br/>
                <span class="user-panel-id">Upload: <b style="color: #468847;font-weight: bold;">{$data.count_upload}</b> tài liệu</span><br/>
                <span class="user-panel-id">Download: <b style="color: #468847;font-weight: bold;">{$data.count_down}</b> tài liệu</span>
            </div>
        </div>
        <ul class="user-router">
            <li {if $action eq 'changeinfo'}class=' new-color'{/if}><a href="{SystemBase::buildUrl('tailieu/account/changeinfo',[])}"><i class="iconfont icon-yonghu"></i> Cập nhật tài khoản</a> </li>
            <li {if $action eq 'index'}class=' new-color'{/if}><a href="{SystemBase::buildUrl('tailieu/account',[])}"><i class="iconfont icon-xiazai"></i> Lịch sử download</a> </li>	
            <li {if $action eq 'historyupload'}class=' new-color'{/if}><a href="{SystemBase::buildUrl('tailieu/account/historyupload',[])}"><i class="iconfont icon-upload"></i> Lịch sử Upload</a> </li>
            <li {if $action eq 'historypoint'}class=' new-color'{/if}><a href="{SystemBase::buildUrl('tailieu/account/historypoint',[])}"><i class="iconfont icon-qia"></i> Lịch sử POINT</a> </li>
            <li {if $action eq 'favorite'}class=' new-color'{/if}><a href="{SystemBase::buildUrl('tailieu/account/favorite',[])}"><i class="iconfont icon-xin"></i> Ưa thích</a> </li>
            <li {if $action eq 'changepass'}class=' new-color'{/if}><a href="{SystemBase::buildUrl('tailieu/account/changepass',[])}"><i class="iconfont icon-chilun"></i> Đổi mật khẩu</a> </li>
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


