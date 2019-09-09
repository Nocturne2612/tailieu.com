<div class="user-main user-main-inner">
    <h1>Lịch sử Upload</h1>
    <ul class="mb-box masonry-element  clearfix tpl-ul">
            {if $product}
                {foreach $product['data'] as $k=>$t}
                <li class="user-gditem">
                    <div class="user-gditem-inner">
                        <div class="item-img">
                            <a target="_blank" href="{SystemBase::buildUrl('tailieu/document',['title'=>$t.title,'id'=>$t.id])}" class="item-link"></a>
                            
                            {if isset($t.picture) && $t.picture <>""}
                            {assign var="arr_pic" value="|"|explode:$t.picture} 
                             <img src="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT_THUMB}{$arr_pic[0]}" alt="{$t.title}"  >
                            {/if}
                           
                        </div>
                        <h4 class="item-title">{$t.title}</h4>
                        <div class="item-info">
                            <span class="item-size">{$smarty.const.POINT_ADD_UPLOAD} POINT </span>
                            <span class="item-size">{$arr_status[$t.status]}&nbsp;&nbsp; </span>
                        </div>
                    </div>
                </li>
                <div class="gutter-sizer"></div>
            {/foreach}
            {$product['pageHtml']}
        {else}
            <tr class="danger">
                <td colspan="6" align="center">Không tồn tại tài liệu</td>
            </tr>
        {/if}

    </ul>
</div>