
<a rel="v:url" property="v:title" href="{$smarty.const.ROOT_URL}" class="home">Trang chủ</a> &nbsp;> &nbsp;
{if $output.parent_id > 0} 
    <a rel="v:url" property="v:title" href="{SystemBase::buildUrl('tailieu/categorydocument',['title'=>$data_p.title])}" title="{$data_p.title}">{$data_p.title}</a>&nbsp;> &nbsp;
    {if $controller <> 'search'}
    <a rel="v:url" property="v:title" href="{SystemBase::buildUrl('tailieu/categorydocument',['title'=>$output.title])}" title="{$output.title}">{$output.title}</a>
    {else}
    <a rel="v:url" property="v:title" href="{SystemBase::buildUrl('tailieu/search',['keyword'=>$output.title,'platforms'=>$output.parent_id])}" title="{$output.title}">{$output.title}</a>
    {/if}
{else}
    {if $controller <> 'search'}
    <a rel="v:url" property="v:title" href="{SystemBase::buildUrl('tailieu/categorydocument',['title'=>$output.title])}" title="{$output.title}">{$output.title}</a>
    {else}
    <a rel="v:url" property="v:title" href="{SystemBase::buildUrl('tailieu/search',['keyword'=>$output.title,'platforms'=>$output.parent_id])}" title="{$output.title}">{$output.title}</a>
    {/if}
{/if}




