<div class="icon-searchNav subpageBan ">
    
    <div class="res-search js_search w1520">
        <div class="res-search-select js_search-select" data-type="{$data.platforms}">
            <span class="res-search-selected text-overflow js_search-check xs-search-selected " data-type="{$data.platforms}">
           {if isset($cache_category['parent_category'][$data.platforms])} {$cache_category['parent_category'][$data.platforms]['title']}  {else}ALL{/if}            </span>
            <ul class="res-search-optgroup ">
                 <li class="res-search-option" data-placeholder="Search {if isset($cache_category['parent_category'][$data.platforms])} {$cache_category['parent_category'][$data.platforms]['title']}  {else}ALL{/if}" data-type="{$data.platforms}">
                    <span>ALL</span><i></i>
                     </li>
                {foreach item=v from=$cache_category['parent_category'] key =e}
                     <li class="res-search-option" data-placeholder="Search {$v.title}" data-type="{$v.id}">
                    <span>{$v.title}</span><i></i>
                     </li>
                {/foreach}
            </ul>
            <i class="iconfont icon-triangle"></i>
        </div>
        <div class="res-search-input">
            <input type="text" value="{$data.title}" placeholder="Search {$data.title}" data-type="1" class="js_search-input search-keyword-box-input-app search-box-input search_keyword_statis_value">
        </div>
        <a href="javascript:;" class="res-search-btn search-box-input-search-app ">
            <i class="iconfont icon-sousuo"></i>
            </a>

            <div class="search-dropdown-wrap comment-search-dropdown-wrap" style="display: none;">
                <div class="search-dropdown">

                </div>
            </div>
    </div>

</div>



<div id="v2-subpageBan" class="subpageBan new-subpageBan">
    <div class="w1520 pr">
        <h1 class="title-main">{if isset($cache_category['parent_category'][$data.platforms])}{$cache_category['parent_category'][$data.platforms]['title']}: {/if}{$data.title}</h1>
        
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
                    <div class="subpage-menu-box new-subpage-menu-box">
                        {foreach item=v from=$cache_category['parent_category'] key =e}
                            <div class="subpage-menu-inneBox">
                                <a href="{$smarty.const.ROOT_URL}/{$v.acsii}.html" class="sort-btn ">{$v.title}</a>
                            </div>
                        {/foreach}
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


                    <ul class="mb-box clearfix">
                        {$this->widget('TWidgets',['methodName'=>'productView','product'=> $output['data'],'check'=> true],true)} 
                    </ul>
                    {$output['pageHtml']}

                </div>
            </div>
        </div>
    </div>
</div>


