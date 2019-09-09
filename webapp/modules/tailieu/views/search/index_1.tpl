{$this->widget('TWidgets',['methodName'=>'breadcrums','data'=>$data],true)}
{if $output}
<div class="list-view">
{foreach $output['data'] as $d}
  <div class="list-item clearfix">
    <h2 class="list-item-title"> <a title="{$d.title}" href="{SystemBase::buildUrl('tailieu/document',['id'=>$d.id,'title'=>$d.title])}"  class="title"> <b>{$d.title}</b> </a> </h2>
    <div class="list-item-info">
     <a title="{$d.title}" href="{SystemBase::buildUrl('tailieu/document',['id'=>$d.id,'title'=>$d.title])}"  class="item-image" class="item-image"> {if $d.picture <> ""}
      {assign var="arr_pic" value="|"|explode:$d.picture} <img  alt="{$d.title}" src="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT_THUMB}{$arr_pic[0]}"/> {/if} </a>
      <ul class="specs-info">
        <li class="publisher-info"> <span class="item-label">Phát hành:</span> <a class="item-info" title="{$d.title}"> {$d.create_time|date_format:"%d-%m-%Y"}</a> </li>
        <li class="brief-info"> {$d.desc} </li>
        <li class="version-info"> <span class="item-platform platform-windows">windows</span> </li>
        <li class="filesize-info"> <span class="item-label">{$d.count|number_format:2:",":"."|replace:',00':''}</span> <span class="item-info"> lượt xem<span class="item-info"> </span> </span> </li>
        <li class="tags"> 
        <span class="item-label">Tìm thêm:</span> 
        <span class="item-info">
        {assign var="arr_tag" value=","|explode:$d.tag}
          {foreach $arr_tag as $t} <a href="{SystemBase::buildUrl('tailieu/search',['keyword'=>$t])}">{$t}</a> {/foreach}
         </span> 
        </li>
      </ul>
    </div>
    <div class="list-item-plus">
      <ul class="specs-info">
      
          <li class="rating-info"> <span class="item-label">Đánh giá:</span>
    <div itemtype="http://data-vocabulary.org/Review-aggregate" itemscope="" class="item-info">
      <meta content="{$d.title}" itemprop="itemreviewed">
      <meta content="{if $d.picture <> ""}{assign var="arr_pic" value="|"|explode:$d.picture} {$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT_THUMB}{$arr_pic[0]} {/if} " itemprop="photo">
      <meta content="4" itemprop="rating">
      <meta content="{assign var='random' value=2000|rand:3000}{$random}" itemprop="votes">
      <a class="rating-icon icon-3"> <span data-id="65472" data-rating="3" id="rating" style="width: 100px; cursor: pointer;"><img class="rating" title="bad" alt="1" src="{$smarty.const.ROOT_URL}/assets/tailieu/css/images/star-on.png" id="rating-1"><img class="rating" title="poor" alt="2" src="{$smarty.const.ROOT_URL}/assets/tailieu/css/images/star-on.png" id="rating-2"><img class="rating" title="regular" alt="3" src="{$smarty.const.ROOT_URL}/assets/tailieu/css/images/star-on.png" id="rating-3"><img class="rating" title="good" alt="4" src="{$smarty.const.ROOT_URL}/assets/tailieu/css/images/star-on.png" id="rating-4"><img class="rating" title="gorgeous" alt="5" src="{$smarty.const.ROOT_URL}/assets/tailieu/css/images/star-off.png" id="rating-5">
      <input type="hidden" id="rating-score" name="score" value="4">
      </span> </a> <span class="votes">{$random}</span> </div>
  </li>
        
        
        
        
        <li class="license-info"> <span class="item-label">Sử dụng:</span> <span class="item-info"> {if $d.proprice > 0} <span class="oldprice">{$d.price|number_format:2:",":"."|replace:',00':''} POINT</span> <span class="proprice"> {$d.proprice|number_format:2:",":"."|replace:',00':''} POINT</span> {else if $d.proprice == '0' && $d.price > 0} <span class="price">{$d.price|number_format:2:",":"."|replace:',00':''} POINT</span> {else} <span class="free">Miễn phí</span> {/if}</span> </li>
      
        
        
        <li class="download-info"> <a class="download-button" href="{SystemBase::buildUrl('tailieu/download',['id'=>$d.id,'title'=>$d.title])}"> <span>Tải về</span> </a> </li>
        <li class="downloads-info"> <span class="item-label">Lượt tải:</span> <span class="item-info">{$d.count_down|number_format:2:",":"."|replace:',00':''}</span> </li>
      </ul>
    </div>
  </div>
{/foreach}
</div>
      {$output['pageHtml']}
{/if}
{$this->widget('TWidgets',['methodName'=>'top_countdown'],true)} 