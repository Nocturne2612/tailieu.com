<div class="rdfa-breadcrumb">

    <div xmlns:v="http://rdf.data-vocabulary.org/#">
        <span typeof="v:Breadcrumb">
            <a rel="v:url" property="v:title" href="{$smarty.const.ROOT_URL}" class="home">Trang chủ</a>
        </span>
        &raquo
        {if $output.parent_id > 0} 

            <span typeof="v:Breadcrumb">
                <a rel="v:url" property="v:title" href="{SystemBase::buildUrl('tailieu/categorydocument',['title'=>$data_p.title])}" title="{$data_p.title}">{$data_p.title}</a>
            </span>&raquo
            {if $controller <> 'search'}
                <span typeof="v:Breadcrumb">
                    <a rel="v:url" property="v:title" href="{SystemBase::buildUrl('tailieu/categorydocument',['title'=>$output.title])}" title="{$output.title}">{$output.title}</a>
                </span>
            {else}
                <span typeof="v:Breadcrumb">
                    <a rel="v:url" property="v:title" href="{SystemBase::buildUrl('tailieu/search',['keyword'=>$output.title,'platforms'=>$output.parent_id])}" title="{$output.title}">{$output.title}</a>
                </span>
            {/if}
        {else}
{if $controller <> 'search'}
                <span typeof="v:Breadcrumb">
                    <a rel="v:url" property="v:title" href="{SystemBase::buildUrl('tailieu/categorydocument',['title'=>$output.title])}" title="{$output.title}">{$output.title}</a>
                </span>
            {else}
                <span typeof="v:Breadcrumb">
                    <a rel="v:url" property="v:title" href="{SystemBase::buildUrl('tailieu/search',['keyword'=>$output.title,'platforms'=>$output.parent_id])}" title="{$output.title}">{$output.title}</a>
                </span>
            {/if}
        {/if}
    </div>
</div>




