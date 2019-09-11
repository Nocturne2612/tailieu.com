<div class="user-main">
    <div class="user-main-inner">
        <h1 class="user-main-title">Lịch sử download</h1>
    </div>
    {if $transactions}
    <div class="user-list-wrap">
        <ul class="user-gdlist">
            <li class="user-gdsizer"></li>
        {foreach $transactions['data'] as $k=>$t}
            <li class="user-gditem">
                <div class="user-gditem-inner">
                    <div class="item-img">
                        <a target="_blank"
                            href="{SystemBase::buildUrl('tailieu/document',['title'=>$t.title,'id'=>$t.id_product])}"
                            class="item-link"></a>
                        {if isset($t.picture) && $t.picture <>""}
                        {assign var="arr_pic" value="|"|explode:$t.picture}
                        <img src="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT_THUMB}{$arr_pic[0]}"
                            alt="{$t.title}">
                        {/if}
                    </div>
                    <h4 class="item-title">{$t.title}</h4>
                   <div class="item-info">
                    <span class="item-size">{$t.price|number_format:2:",":"."|replace:',00':''} POINT </span>
                    <span class="item-size">{$arr_status[$t.status]}&nbsp;&nbsp; </span>
                </div>
                </div>
            </li>
            {/foreach}
        </ul>
        {$transactions['pageHtml']}
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