{if $data}
    {$count = count($data)}
    {foreach $data as $d}
        <div class="recommend-img-box">
            <a href="{SystemBase::buildUrl('tailieu/document',['id'=>$d.id,'title'=>$d.title])}" title="{$d.title}"  alt="{$d.title}"  width="100%">
                
                {if $d.picture <> ""}{assign var="arr_pic" value="|"|explode:$d.picture}
                <img  data-original="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT_THUMB}{$arr_pic[0]}" itemprop="image" title="{$d.title}" alt="{$d.title}" class="lazy">
                    {/if}
            </a>
        </div>
{/foreach}
{if ($count%2) gt 0 }
        <div class="recommend-img-box">
            <a href="{SystemBase::buildUrl('tailieu/document',['id'=>$data[0].id,'title'=>$d.title])}" title="{$data[0].title}"  alt="{$data[0].title}"  width="100%">
                
                {if $data[0].picture <> ""}{assign var="arr_pic" value="|"|explode:$data[0].picture}
                <img  data-original="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT_THUMB}{$arr_pic[0]}" itemprop="image" title="{$data[0].title}" alt="{$data[0].title}" class="lazy">
                    {/if}
            </a>
        </div>
    {/if}
{/if}