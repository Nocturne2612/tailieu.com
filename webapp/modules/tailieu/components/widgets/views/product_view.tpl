{if $data}
    {$no = 0}
    {$count = count($data)}
    {if $count <= 6}
        {foreach $data as $rs}
            <li class="li-box grid-sizer search_keyword_statis_js">
                <div class="hover-show">
                    <span class="commercial-use" title="{$rs.title}"></span>
                    <a href="javascript:;" data-id="{$rs.id}" data-type="1" title="Add to favorites" class="hs-star  star-btn-click element-list-click" data-like="4773403_like">
                        <i class="iconfont icon-xin"></i>
                    </a>
                    <a data-down="{$rs.id}_DOWNLOAD" rel="nofollow" href="javascript:;" class="hs-downPng down-jpg-click element-list-click">
                        <i class="iconfont icon-xiazai"></i>&nbsp;{$rs.count_down|number_format:2:",":"."|replace:',00':''}
                    </a>
                </div>
                <!-- png -->
                <div class="mb-picbox">
                    {if isset($rs.picture) && $rs.picture <>""}
                            {assign var="arr_pic" value="|"|explode:$rs.picture} <img src="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT_THUMB}{$arr_pic[0]}" title="{$rs.title}" alt="{$rs.title}" class="lazy">{/if}
                    <a data-ga="{$rs.id}_ImgUrl" title="{$rs.title}" href="{SystemBase::buildUrl('tailieu/document',['id'=>$rs.id,'title'=>$rs.title])}" class="tran element-list-click"></a>
                </div>
                <p class="pic-detail text-overflow">{$rs.title}</p>
                <!-- infor -->
            <div class="gutter-sizer"></div>
        {/foreach}
            <li class="li-box grid-sizer search_keyword_statis_js">
                {$this->widget('TWidgets',['methodName'=>'ads','position'=>'HOME_LEFT_SLIDER'],true)}
            </li>

    {else}
        {$count3 = ROUND($count / 2)}
        {$count4 = $count3} 
        {$laplai = 0}
        {$no = 0}

        {foreach $data as $rs}
            {$no = $no + 1}
            <li class="li-box grid-sizer search_keyword_statis_js" data-id="{$rs.id}">
                <div class="hover-show">
                    <span class="commercial-use" title="{$rs.title}"></span>
                    <a {if $check_login}href="/tailieu/account/favorite/like/{$rs.id}.html" class="hs-star "{else}href="javascript:;" class="hs-star  star-btn-click element-list-click"{/if} data-id="{$rs.id}" data-type="1" title="Add to favorites" class="hs-star " data-like="{$rs.id}_like">
                        <i class="iconfont icon-xin"></i>
                    </a>
                    <a data-down="{$rs.id}_DOWNLOAD" rel="nofollow" {if $check_login}href="{SystemBase::buildUrl('tailieu/download',['id'=>$rs.id,'title'=>$rs.title])}" class="hs-downPng"{else}href="javascript:;" class="hs-downPng down-jpg-click element-list-click"{/if}>
                        <i class="iconfont icon-xiazai"></i>&nbsp;{$rs.count_down|number_format:2:",":"."|replace:',00':''}
                    </a>
                </div>
                <!-- png -->
                <div class="mb-picbox">
                    {if isset($rs.picture) && $rs.picture <>""}
                            {assign var="arr_pic" value="|"|explode:$rs.picture} <img src="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT_THUMB}{$arr_pic[0]}" title="{$rs.title}" alt="{$rs.title}" class="lazy">{/if}
                    <a data-ga="{$rs.id}_ImgUrl" title="{$rs.title}" href="{SystemBase::buildUrl('tailieu/document',['id'=>$rs.id,'title'=>$rs.title])}" class="tran element-list-click"></a>
                </div>
                <p class="pic-detail text-overflow">{$rs.title}</p>
                <!-- infor -->
            </li>
            <div class="gutter-sizer"></div>
            {if $no eq 7}
                <li class="li-box grid-sizer search_keyword_statis_js">
                    {$this->widget('TWidgets',['methodName'=>'ads','position'=>'HOME_LEFT_SLIDER'],true)}
                </li>
                <div class="gutter-sizer"></div>
            {/if}
            {if $no eq 14}
                <li class="li-box grid-sizer search_keyword_statis_js">
                    {$this->widget('TWidgets',['methodName'=>'ads','position'=>'HOME_LEFT'],true)}
                </li>
                <div class="gutter-sizer"></div>
            {/if}
        {/foreach}
    {/if}

{/if}
<script>
    $(function () {
        var $ads;
        $('div[id^="adsref-"]').each(function () {
            $ads = $('#ads-' + this.id.substr(7)).empty();
            $('ins:first', this).appendTo($ads);
        });
    });
</script>