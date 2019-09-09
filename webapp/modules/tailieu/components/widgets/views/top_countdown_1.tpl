{if $data}
<div class="bucket topdownloads clearfix" id="topdownloads">
  <h2 class="title"> Top tài liệu tải nhiều nhất </h2>
  <ul class="listbox-view clearfix">
  {foreach $data as $d}
    <li class="list-item clearfix">
      <div class="list-item-title">
      <a title="{$d.title}" class="title" href="{SystemBase::buildUrl('tailieu/document',['id'=>$d.id,'title'=>$d.title])}"> {$d.title} </a>
       <a title="{$d.title}" class="item-image" href="{SystemBase::buildUrl('tailieu/document',['id'=>$d.id,'title'=>$d.title])}">   {if $d.picture <> ""}
    {assign var="arr_pic" value="|"|explode:$d.picture} <img  alt="{$d.title}" src="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT_THUMB}{$arr_pic[0]}"/> {/if}</a>
       
        <span class="item-downloads">{$d.count_down|number_format:2:",":"."|replace:',00':''}</span> <i>{$d.short}</i> </div>
    </li>
 {/foreach}
  </ul>
</div>
{/if}