<style>
    .new-image {
        box-shadow: 5px 5px 10px #ddd;
        border: 2px solid #ddd;
    }
    .new-text {
        padding-left: 10px;
    }
    .new-text a {
        font-size: 2em;
        color: #3e3e3e;
    }
    .new-text a:hover {
        font-size: 2em;
        color: #3e3e3e;
        text-decoration: underline;
    }

    .custom ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .custom li {
        font: 200 20px/1.5 Helvetica, Verdana, sans-serif;
        border-bottom: 1px solid #ccc;
    }

    .custom li:last-child {
        border: none;
    }

    .custom li a {
        text-decoration: none;
        color: #000;
        display: block;
        -webkit-transition: font-size 0.3s ease, background-color 0.3s ease;
        -moz-transition: font-size 0.3s ease, background-color 0.3s ease;
        -o-transition: font-size 0.3s ease, background-color 0.3s ease;
        -ms-transition: font-size 0.3s ease, background-color 0.3s ease;
        transition: font-size 0.3s ease, background-color 0.3s ease;
    }

    .custom li a:hover {
        font-size: 30px;
        background: #f6f6f6;
    }
</style>
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
            <div class="help-nav custom">
                <div class="help-back-btn"><a href="https://pngtree.com/help-center"><i class="icon-back"></i>
                        Quay lại trang chủ</a></div>
                <ul>
                {foreach $arrC as $k => $d}
                <li class="router-mainenter">
                    <a href="{{SystemBase::buildUrl('tailieu/categorynews',['id'=>$d.id,'title'=>$d.title])}}"
                        class="" data-type="{$d.title}">{$d.title} </a>
                </li>
                {/foreach}
                </ul>
                {$this->widget('TWidgets',['methodName'=>'ads','position'=>'HOME_LEFT'],true)}
            </div>
            <div class="help-contain">
                <ul class="help-contain-list">
                    {if $category}<h3 class="help-contain-title">{$category.title}</h3>{/if}
                    {if $arr_news.data}
                    {foreach $arr_news.data as $e}
                    <li style="display: flex">
                        <div class="new-image">
                            <img src="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_NEWS_THUMB}{$e.image}"
                                alt="{$e.title}" width="220">
                        </div>
                        <div class="new-text">
                            <a href="{SystemBase::buildUrl('tailieu/news',['id'=>$e.id,'title'=>$e.title])}"
                                class="help-cate-sug" data-type="{$e.title}">{$e.title}</a>
                            {$e.subcontent}
                        </div>
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