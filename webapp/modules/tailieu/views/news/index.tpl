{* 
<div class="ui-box layout fn-clear" id="common-panel">
    <div class="common-aside">
        <div class="about-menu"> 
            {foreach $arrC as $k => $d1}
                <h5><a href="{SystemBase::buildUrl('tailieu/categorynews',['id'=>$d1.id,'title'=>$d1.title])}" title="{$d1.title}"> {$d1.title} <i class="icon-angle-right menuright"></i></a></h5>				
                    {/foreach}


        </div>
        {$this->widget('TWidgets',['methodName'=>'ads','position'=>'HOME_LEFT_SLIDER'],true)}
    </div>
    <div class="common-mains">
        <div class="about-content">
            <h1>{$d.title}</h1>
            <div class="about-block">
                {$this->widget('TWidgets',['methodName'=>'ads','position'=>'DETAIL_CENTER'],true)}
                {$d.content}
                {$this->widget('TWidgets',['methodName'=>'ads','position'=>'DETAIL_CENTER2'],true)} 

                {if $arr_lq.data}
                    <h2>Bài xem thêm</h2>
                    <ul>
                        {foreach item=v from= $arr_lq.data}
                            <li>
                                <a class="more-link" href="{SystemBase::buildUrl('tailieu/news',['id'=>$v.id,'title'=>$v.title])}">{$v.title}</a>
                            </li>

                        {/foreach}
                    </ul>
                    {$arr_lq.pageHtml}
                {/if}
                <!-- // about-block end -->
            </div>
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
                {foreach $arrC as $k => $d1}
                <dt class="router-mainenter">
                    <a href="{{SystemBase::buildUrl('tailieu/categorynews',['id'=>$d1.id,'title'=>$d1.title])}}"
                        class="help-cate-hot one-hot-cate " data-type="{$d1.title}">{$d1.title} </a>
                </dt>
                {/foreach}
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
    <div class="help-foot">
        <div class="w1000" >
                {if $arr_lq.data}
                    <h2>Bài xem thêm</h2>
                    <ul>
                        {foreach item=v from= $arr_lq.data}
                            <li>
                                <a class="more-link" href="{SystemBase::buildUrl('tailieu/news',['id'=>$v.id,'title'=>$v.title])}">{$v.title}</a>
                            </li>

                        {/foreach}
                    </ul>
                {/if}
        </div>
    </div>
</div>