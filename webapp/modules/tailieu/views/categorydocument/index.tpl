﻿<style>
.custom a {
    color: #96c244;
}
</style>
<div id="v2-subpageBan" class="subpageBan new-subpageBan">
    <div class="res-search js_search w1520">
    <h1 class="title-main">{$data.title}</h1>
        <div class="res-search-select js_search-select" data-type="{$data.platforms}">
            <span class="res-search-selected text-overflow js_search-check xs-search-selected " data-type="{$data.platforms}">
           {if isset($category['parent_category'][$data.platforms])} {$category['parent_category'][$data.platforms]['title']}  {else}ALL{/if}</span>
            <ul class="res-search-optgroup ">
                 <li class="res-search-option" data-placeholder="Search {if isset($category['parent_category'][$data.platforms])} {$category['parent_category'][$data.platforms]['title']}  {else}ALL{/if}" data-type="{$data.platforms}">
                    <span>ALL</span><i></i>
                </li>
                {foreach item=v from=$category['parent_category'] key =e}
                     <li class="res-search-option" data-placeholder="Search {$v.title}" data-type="{$v.id}">
                        <span>{$v.title}</span><i></i>
                     </li>
                {/foreach}
            </ul>
            <i class="iconfont icon-triangle"></i>
        </div>
        <div class="res-search-input">
            <input type="text" value="{$data.title}" placeholder="Search {$data.title}" data-type="0" class="js_search-input search-keyword-box-input-app search-box-input search_keyword_statis_value">
        </div>
        <a href="javascript:;" class="res-search-btn search-box-input-search-app ">
            <i class="iconfont icon-sousuo"></i>
        </a>

            <div class="search-dropdown-wrap comment-search-dropdown-wrap" style="display: none;">
                <div class="search-dropdown">

                </div>
            </div>
    </div>
    <div class="w1520 pr">
        <div style="color: #999;font-size: 14px;text-align: center;" class="custom">
            {$data.short}
        </div>
        {* <p class="detail-breadcrumbs" style="font-size: 12px;">
            {$this->widget('TWidgets',['methodName'=>'breadcrums','data'=>$data],true)}
        </p> *}
        <!-- search -->
            
            <div class="xs-contain">
                <form class="xs-search">
                    <div class="xs-search-select">
                        <span class="xs-search-selected" data-type="1">{$data.title}</span>
                        <ul class="xs-search-options">
                            {if $data['parent_id'] > 0 && isset($category['sub_category'][$data['parent_id']])}
                                {foreach item=v from=$category['sub_category'][$data['parent_id']] key =e}
                                    {if $v.id neq $data['id']}
                                        <li class="">
                                            {$v.title}
                                        </li>
                                    {/if}
                                {/foreach}
                            {else}
                                {if $data['parent_id'] eq 0 && isset($category['sub_category'][$data['id']])}
                                    {foreach item=v from=$category['sub_category'][$data['id']] key =e}
                                        <li class="">
                                            {$v.title}
                                        </li>
                                    {/foreach}
                                {/if}
                            {/if}
                            {assign var="arr_tag" value=","|explode:$data.tag}
                            {foreach $arr_tag as $t} 
                            <li><a href="{SystemBase::buildUrl('tailieu/search',['keyword'=> $t])}" title="{$t}" class="">{$t}</a></li>
                            {/foreach} 
                        </ul>
                        <i class="iconfont icon-triangle"></i>
                    </div>
                    <div class="xs-search-input"><input type="text" class="search-keyword-box-input-app"  placeholder="Search {$v.title}" value=""></div>
                    <a href="javascript:;" class="xs-search-btn search-box-input-search-app">
                        <i class="iconfont icon-sousuo"></i>
                    </a>
                </form>
            </div>
    </div>
</div>
<div id="v2-content">
    <div id="v2-content">
        <div class="xs-contain">
            <div class="xs-subpage-filter">
                <p class="xs-filter-title">{$v.title}</p>
                <a href="javascript:;" class="xs-filters-btn">
                    <i class="iconfont icon-sort"></i>
                </a>
            </div>
            <div class="xs-subpage-menu-mask" style="display:none;"></div>
        </div>
        <div class="tem-wrapper w1520">
            <div class="subpage-menu new-subpage-menu">
                <div class="xs-contain">
                    <a href="javascript:;" class="subpage-menu-close" >
                        <i class="iconfont icon-guanbi"></i>
                    </a>
                </div>
                <div class="xs-contain">
                    <p class="xs-subpage-menu-title">Filters</p>
                </div>

                <div class="subpage-menu-toggleBox">
                    <span class="lg-subpage-filter-sort-title xs-hide" style="width: 120px;">Danh mục con:</span>
                    <div class="subpage-menu-box new-subpage-menu-box">
                        <div class="subpage-menu-inneBox">
                            <a href="{$smarty.const.ROOT_URL}/{$data.acii}.html" class="sort-btn on">{$data.title}</a>
                        </div>
                        {if $data['parent_id'] > 0 && isset($category['sub_category'][$data['parent_id']])}
                            
                            {foreach item=v from=$category['sub_category'][$data['parent_id']] key =e}
                                {if $v.id neq $data['id']}
                                    <div class="subpage-menu-inneBox">
                                        <a href="{$smarty.const.ROOT_URL}/{$v.acsii}.html" class="sort-btn">{$v.title}</a>
                                    </div>
                                {/if}
                            {/foreach}
                        {else}
                            {if $data['parent_id'] eq 0 && isset($category['sub_category'][$data['id']])}
                                {foreach item=v from=$category['sub_category'][$data['id']] key =e}
                                    <div class="subpage-menu-inneBox">
                                        <a href="{$smarty.const.ROOT_URL}/{$v.acsii}.html" class="sort-btn">{$v.title}</a>
                                    </div>
                                {/foreach}
                            {/if}
                        {/if}
                    </div>
                </div>



                <div class="subpage-menu-toggleBox " style="display: none ">
                    <a href="javascript:;" class="xs-subpage-menu-sort-title"> <span href="javascript:;"><i class="iconfont icon-triangle"></i></span></a>
                    <span class="lg-subpage-filter-sort-title xs-hide">Usage:</span>
                    <div class="subpage-menu-box new-subpage-menu-box">
                    </div>
                </div>

            </div>
            <div class="main-con gd-photobox ">

                <div class="main-body">

                    {if $outputs}
                        <ul class="mb-box masonry-element clearfix tpl-ul">
                            {$this->widget('TWidgets',['methodName'=>'productView','product'=> $outputs['data'],'check'=> true],true)} 
                        </ul>
                        {$outputs['pageHtml']}
                    {else}
                        <ul class="mb-box masonry-element clearfix tpl-ul">
                            {$this->widget('TWidgets',['methodName'=>'productView','product'=> $output['data'],'check'=> true],true)} 
                        </ul>
                        {$output['pageHtml']}
                    {/if}
                </div>
            </div>
        </div>
    </div>
</div>
