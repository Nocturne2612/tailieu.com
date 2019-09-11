
{if $check}
    {foreach item=v from=$data.parent_category}
        <a href="{$smarty.const.ROOT_URL}/{$v.acsii}.html" title="{$v.title}">{$v.title}</a>
    {/foreach}
{else}
    {foreach item=v from=$data.parent_category}
        <li class="mc-lists ">
            <a href="{$smarty.const.ROOT_URL}/{$v.acsii}.html" class="btn-classify on" data-type="{$v.title}">{$v.title}</a>
            <div class="clearfix vfp-cont  ">
                <h3>
                    <a href="{$smarty.const.ROOT_URL}/{$v.acsii}.html"> {$v.title} </a>
                </h3>
                {if isset($data['sub_category'][$v.id])}
                    {foreach item=c from=$data['sub_category'][$v.id]}
                         <a href="{$smarty.const.ROOT_URL}/{$c.acsii}.html" title="{$c.title}">{$c.title}</a>
                    {/foreach}
                {/if}
            </div>
        </li>
    {/foreach}

{/if}
