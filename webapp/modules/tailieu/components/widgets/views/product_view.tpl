{if $data}
    {$no = 0}
    {$count = count($data)}
    {if $count <= 2}
        {foreach $data as $rs}
            <li class="">
                <div class="hover-show">
                    <span class="commercial-use" title="{$rs.title}"></span>
                    <a href="javascript:;" data-id="{$rs.id}" data-type="1" title="Add to favorites" class="hs-star  star-btn-click element-list-click" data-like="4773403_like">
                        <i class="iconfont icon-xin"></i>
                    </a>
                    <a data-down="{$rs.id}_DOWNLOAD" rel="nofollow" href="/element/down?id=NDc3MzQwMw==&type=1" class="hs-downPng down-jpg-click element-list-click">
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

        {/foreach}
    {else}
        {$count3 = ROUND($count / 2)}
        {$count4 = $count3} 
        {$laplai = 0}
        {foreach $data as $rs}
            {$no = $no + 1}
            <li class="li-box grid-sizer search_keyword_statis_js" data-id="{$rs.id}">
                <div class="hover-show">
                    <span class="commercial-use" title="{$rs.title}"></span>
                    <a href="javascript:;" data-id="{$rs.id}" data-type="1" title="Add to favorites" class="hs-star  star-btn-click element-list-click" data-like="{$rs.id}_like">
                        <i class="iconfont icon-xin"></i>
                    </a>
                    <a data-down="{$rs.id}_DOWNLOAD" rel="nofollow" href="{SystemBase::buildUrl('tailieu/download',['id'=>$rs.id,'title'=>$rs.title])}" class="hs-downPng down-jpg-click element-list-click">
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
            {if $count3 eq $no && $laplai lte 2}
                {if $count3 > ($count - $count3)}
                    {$count3 = $count3 + ($count - $count3)}
                {else}
                    {$count3 = $count3 + $count4}
                    {$laplai = $laplai + 1}
                {/if}

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