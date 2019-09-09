
<div class="ui-box layout fn-clear" id="common-panel">
    <div class="common-aside">
        <div class="about-menu">
            {foreach $arrC as $k => $d}
                <h5><a href="{SystemBase::buildUrl('tailieu/categorynews',['id'=>$d.id,'title'=>$d.title])}" title="{$d.title}"> {$d.title} <i class="icon-angle-right menuright"></i></a></h5>				
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
</div>