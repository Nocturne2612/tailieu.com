{*
<div class="ui-box layout fn-clear" id="common-panel">
    <div class="common-aside">
        <div class="about-menu">
            {foreach $arrC as $k => $d}
            <h5><a href="{SystemBase::buildUrl('tailieu/categorynews',['id'=>$d.id,'title'=>$d.title])}"
                    title="{$d.title}"> {$d.title} <i class="icon-angle-right menuright"></i></a></h5>
            {/foreach}
            <br>
            {$this->widget('TWidgets',['methodName'=>'ads','position'=>'HOME_LEFT'],true)}
        </div>
    </div>
    <div class="common-mains" style="float: left;
    width: 80%;
    margin: 0px;">
        <div class="about-content">
            {if $category}<h1>{$category.title}</h1>{/if}
            {if $arr_news.data}
            <ul>
                <!-- // adsense-->
                <div class="bread-crumbs fn-clear" id="adsref-0054412141412" style="padding-top: 10px;">
                    {$this->widget('TWidgets',['methodName'=>'ads','position'=>'DETAIL_CENTER'],true)}
                </div>
                <!-- // end_adsense-->
                {$this->widget('TWidgets',['methodName'=>'newView','product'=> $arr_news.data,'check'=> true],true)}
            </ul>
            {$arr_news.pageHtml}
            {/if}

            {$this->widget('TWidgets',['methodName'=>'ads','position'=>'DETAIL_CENTER2'],true)}

        </div>
    </div>
</div> *}

<div class="help">
    <div class="help-query">
        <div class="w1000">
            <form class="help-query-form">
                <input class="help-query-search" type="text" placeholder="Search help articles">
                <button class="help-query-btn"><i class="icon-search"></i></button>
            </form>
        </div>
    </div>
    <div class="help-main">
        <div class="w1000">
            <div class="help-nav">
                <div class="help-back-btn"><a href="https://pngtree.com/help-center"><i class="icon-back"></i>
                        Quay lại trang chủ</a></div>
                {foreach $arrC as $k => $d}
                <dt class="router-mainenter">
                    <a href="{{SystemBase::buildUrl('tailieu/categorynews',['id'=>$d.id,'title'=>$d.title])}}"
                        class="help-cate-hot one-hot-cate " data-type="{$d.title}">{$d.title} </a>
                </dt>
                {/foreach}
                {$this->widget('TWidgets',['methodName'=>'ads','position'=>'HOME_LEFT'],true)}
            </div>
            <div class="help-contain">
                <ul class="help-contain-list">
                    {if $category}<h3 class="help-contain-title">{$category.title}</h3>{/if}
                    {if $arr_news.data}
                    {foreach $arr_news.data as $e}
                    {* <li>
                        <div style="float:left;margin-right:20px;margin-bottom:20px">
                            <a href="{SystemBase::buildUrl('tailieu/news',['id'=>$e.id,'title'=>$e.title])}"><img
                                    src="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_NEWS_THUMB}{$e.image}"
                                    alt="{$e.title}" width="220"></a>
                        </div>
                        <p style="float:right;">
                        </p>
                        <h3><a
                                href="{SystemBase::buildUrl('tailieu/news',['id'=>$e.id,'title'=>$e.title])}">{$e.title}</a>
                        </h3>
                        {$e.subcontent}
                    </li> *}
                    <li>
                        <img src="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_NEWS_THUMB}{$e.image}" alt="{$e.title}" width="220">
                        <a href="{SystemBase::buildUrl('tailieu/news',['id'=>$e.id,'title'=>$e.title])}" class="help-cate-sug"
                            data-type="{$e.title}">{$e.title}</a>
                        {$e.subcontent}
                    </li>
                    {/foreach}
                    {/if}
                    {$arr_news.pageHtml}
                </ul>
            </div>
        </div>
    </div>
    <div class="help-foot">
        <div class="w1000">
            <div class="contact-group">
            {$this->widget('TWidgets',['methodName'=>'ads','position'=>'DETAIL_CENTER2'],true)}
                
            </div>
        </div>
    </div>
</div>