
<style>
    .custom ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .custom li {
        font: 200 20px/1.5 Helvetica, Verdana, sans-serif;
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
        font-size: 1.1em;
        background: #f6f6f6;
        text-decoration: underline;

    }
</style>
<div class="help">
    <div class="help-query">
        <div class="w1000">
            
        </div>
    </div>
    <div class="help-main custom">
        <div class="w1360">
            <div class="help-nav">
                <div class="help-back-btn"><a href="/"><i class="icon-back"></i>
                        Quay lại trang chủ</a></div>
                <ul>
                    {foreach $arrC as $k => $d1}
                    <li class="router-mainenter">
                        <a href="{{SystemBase::buildUrl('tailieu/categorynews',['id'=>$d1.id,'title'=>$d1.title])}}"
                            class="" data-type="{$d1.title}">{$d1.title} </a>
                    </li>
                    {/foreach}
                </ul>
                {$this->widget('TWidgets',['methodName'=>'ads','position'=>'HOME_LEFT'],true)}
            </div>
            <div class="help-contain">
                <ul class="help-contain-list">
                    <h1 class="help-contain-title">{$d.title}</h1>
                    {$d.content}
                </ul>
            </div>
        </div>
    </div>

    <div class="help-foot custom">
        <div class="w1360">
            {if $arr_lq.data}
            <h2 class="help-contain-title">Bài xem thêm</h2>
            <ul>
                {foreach item=v from= $arr_lq.data}
                <li>
                    <a class="more-link"
                        href="{SystemBase::buildUrl('tailieu/news',['id'=>$v.id,'title'=>$v.title])}">{$v.title}</a>
                </li>

                {/foreach}
            </ul>
            {/if}
        </div>
    </div>
</div>