<div class="user-main user-main-inner">
    <h1>Lịch sử download</h1>
    {if $transactions}
    <ul class="mb-box masonry-element  clearfix tpl-ul">
                {foreach $transactions['data'] as $k=>$t}
                <li class="user-gditem">
                    <div class="user-gditem-inner">
                        <div class="item-img">
                            <a target="_blank" href="{SystemBase::buildUrl('tailieu/document',['title'=>$t.title,'id'=>$t.id_product])}" class="item-link"></a>
                            
                            {if isset($t.picture) && $t.picture <>""}
                            {assign var="arr_pic" value="|"|explode:$t.picture} 
                             <img src="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT_THUMB}{$arr_pic[0]}" alt="{$t.title}"  >
                            {/if}
                           
                        </div>
                        <h4 class="item-title">{$t.title}</h4>
                        <div class="item-info">
                            <span class="item-size">{$t.price|number_format:2:",":"."|replace:',00':''} POINT </span>
                            <span class="item-size">{$arr_status[$t.status]}&nbsp;&nbsp; </span>
                        </div>
                    </div>
                </li>
                <div class="gutter-sizer"></div>
            {/foreach}
        </ul>
            {$transactions['pageHtml']}
        {else}
            <tr class="danger">
                <td colspan="6" align="center">Không tồn tại tài liệu</td>
            </tr>
        {/if}
</div>



