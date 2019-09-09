
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
</div>