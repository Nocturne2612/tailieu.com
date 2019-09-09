{if $data}
    {foreach $data as $e}
        <li>
            <div style="float:left;margin-right:20px;margin-bottom:20px">
                <a href="{SystemBase::buildUrl('tailieu/news',['id'=>$e.id,'title'=>$e.title])}"><img src="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_NEWS_THUMB}{$e.image}" alt="{$e.title}" width="220"></a>
            </div><p style="float:right;">
            </p><h3><a href="{SystemBase::buildUrl('tailieu/news',['id'=>$e.id,'title'=>$e.title])}">{$e.title}</a></h3>
            {$e.subcontent}
        </li>
        <div class="fn-clear" style="border-bottom:1px dotted #e4e6e7;margin-bottom:20px;"></div>
    {/foreach} 
{/if}