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
                            style="color: #468847;font-weight: bold;">{$data.create_time|date_format:"%d-%m-%Y"}</b></span><br/>
                <span class="user-panel-id">Số Point: <b
                            style="color: #468847;font-weight: bold;">{$data.point|number_format:2:",":"."|replace:',00':''}</b> Point</span><br/>
                <span class="user-panel-id">Upload: <b
                            style="color: #468847;font-weight: bold;">{$data.count_upload}</b> tài liệu</span><br/>
                <span class="user-panel-id">Up miễn phí: <b
                            style="color: #468847;font-weight: bold;">{$total_free}</b> tài liệu</span><br/>
                <span class="user-panel-id">Up có phí: <b
                            style="color: #468847;font-weight: bold;">{$total_fee}</b> tài liệu</span><br/>
                <span class="user-panel-id">Download: <b
                            style="color: #468847;font-weight: bold;">{$data.count_down}</b> tài liệu</span><br/><br/>
{*                <a class="btn btn-small btn-primary" href="{SystemBase::buildUrl('tailieu/addfund/',[])}">Nạp tiền</a>*}
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
<div class="user-main">
    <div class="user-main-inner">
        <h1 class="user-main-title">Tài liệu đã upload</h1>
    </div>
    {if $outputs}
        <div class="user-list-wrap">
            <ul class="user-gdlist" style="display: flex;flex-wrap: wrap;">
                {foreach $outputs['data'] as $k=>$t}
                    <li class="user-gditem">
                        <div class="user-gditem-inner">
                            <div class="item-img">
                                <a target="_blank"
                                   href="{SystemBase::buildUrl('tailieu/document',['title'=>$t.title,'id'=>$t.id])}"
                                   class="item-link"></a>
                                {if isset($t.picture) && $t.picture != ""}
                                    {assign var="arr_pic" value="|"|explode:$t.picture}
                                    <img src="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT_THUMB}{$arr_pic[0]}"
                                         alt="{$t.title}">
                                {/if}
                            </div>
                            <h4 class="item-title">{$t.title}</h4>
                            <div class="item-info">
                                <span class="item-size">{$t.price|number_format:2:",":"."|replace:',00':''} POINT &nbsp;&nbsp;</span>
                            </div>
                        </div>
                    </li>
                {/foreach}
            </ul>
            <div class="user-list-wrap">
                {$outputs['pageHtml']}
            </div>
        </div>
    {else}
        <div class="user-main-inner">
            <div class="user-empty">
                <div class="user-empty-img"></div>
                <p class="user-empty-tips">You don't have any downloads yet.</p>
            </div>
        </div>
    {/if}
</div>