<div class="ui-box tab-box">
    <div class="tab-title">
        <ul    class="tabs">
            <li id="tab1" onmouseover="setTab('tab', 1, 3);" class="current">Tải nhiều</li>
            <li id="tab2" onmouseover="setTab('tab', 2, 3);" class="">Mới nhất</li>
            <li id="tab3" onmouseover="setTab('tab', 3, 3);" class="">Miễn phí</li>
        </ul>
    </div>
    <div class="tab-cnt">
        <div id="con_tab_1" class="tab-item">
            <ul class="list-group">
                
                {if $data} 
                    {foreach $data as $d}
                        <li>
                            <div class="thumb ">
                                <a href="{SystemBase::buildUrl('tailieu/document',['id'=>$d.id_product,'title'=>$d.title])}">
                                    {if $d.picture <> ""}{assign var="arr_pic" value="|"|explode:$d.picture} <img  alt="{$d.title}" src="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT_THUMB}{$arr_pic[0]}" style="margin:-25px 0 0 -30px;"/> {/if}</a>

                            </div>
                            <h5><a href="{SystemBase::buildUrl('tailieu/document',['id'=>$d.id_product,'title'=>$d.title])}">{$d.title}</a></h5>
                            <p class="category">{rand('1','5')} <i class="icon-star"></i>  {if isset($d.count_down)}{$d.count_down|number_format:2:",":"."|replace:',00':''}{else} 0{/if} <i class="icon-download"></i>

                        </p>
                        </li>
                {/foreach}
                {/if}
            </ul>
        </div>
        <div id="con_tab_2" class="tab-item fn-hide">
            <ul class="list-group">
                {$this->widget('TWidgets',['methodName'=>'tabs_new','check'=> 'new'],true)}
            </ul>
        </div>
        <div id="con_tab_3" class="tab-item fn-hide">
            <ul class="list-group">	
                {$this->widget('TWidgets',['methodName'=>'tabs_new','check'=> 'free'],true)}
            </ul>
        </div>
    </div>
</div>
