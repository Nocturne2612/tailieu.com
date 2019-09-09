{if $data}
    {foreach $data as $d}
        <div class="recommend-img-box">
                <a target="_blank" href="{SystemBase::buildUrl('tailieu/document',['id'=>$d.id,'title'=>$d.title])}" title="{$d.title}"  alt="{$d.title}"  width="100%">
                    
                    {if $d.picture <> ""}{assign var="arr_pic" value="|"|explode:$d.picture}
                    <img  data-original="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT_THUMB}{$arr_pic[0]}" itemprop="image" title="{$d.title}" alt="{$d.title}" class="lazy">
                     {/if}
                </a>
            </div>
{/foreach}
{/if}