<div class="clearfix" id="content">
<div class="two_col">
  <div class="mainbar big-onehome">
    <section class="box-onehome" id="onehome">
      <div class="owl-carousel clearfix"> {if $arr_sl1}
        {foreach $arr_sl1 as $d}
        <ol class="carrousel-view">
          <li> <a href="{SystemBase::buildUrl('tailieu/news',['id'=>$d.id,'title'=>$d.title])}" title="{$d.title}"> <img src="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_NEWS}{$d.image}" alt="{$d.title}"> </a>
            <div class="info-panel">
              <h2> {if $arrC[$d.parent_id]['title']}<a href="{SystemBase::buildUrl('tailieu/categorynews',['id'=>$d.parent_id,'title'=>$arrC[$d.parent_id]['title']])}" title="{$arrC[$d.parent_id]['title']}">{$arrC[$d.parent_id]['title']} </a> {/if}</h2>
              <a class="button-carrousel-action" href="{SystemBase::buildUrl('tailieu/news',['id'=>$d.id,'title'=>$d.title])}" title="{$d.title}">
              <h1>{$d.title}</h1>
              </a> </div>
          </li>
        </ol>
        {/foreach}{/if} </div>
    </section>
  </div>
  <section class="firstbar"> {if $arr_sl2}
    {foreach $arr_sl2 as $d}
    <article class="post-simple-highlights"> {if $arrC[$d.parent_id]['title']}<a href="{SystemBase::buildUrl('tailieu/categorynews',['id'=>$d.parent_id,'title'=>$arrC[$d.parent_id]['title']])}" title="{$arrC[$d.parent_id]['title']}" class="tag-section">{$arrC[$d.parent_id]['title']} </a> {/if}
      <h3> <a class="highlight-title" href="{SystemBase::buildUrl('tailieu/news',['id'=>$d.id,'title'=>$d.title])}" title="{$d.title}">{$d.title}</a> </h3>
      <p>{$d.subcontent|strip_tags}</p>
    </article>
    {/foreach}{/if} </section>
</div>
<section class="background-area-border-double">
<div class="cols-container clearfix" id="cols-container"> {if $arr_news}
  <div class="cols-card"> {foreach $arr_news['data'] as $k => $d}
    <article class="card"> {if $arrC[$d.parent_id]['title']}<a href="{SystemBase::buildUrl('tailieu/categorynews',['id'=>$d.parent_id,'title'=>$arrC[$d.parent_id]['title']])}" title="{$arrC[$d.parent_id]['title']}" class="tag-section-highlight-article">{$arrC[$d.parent_id]['title']}</a> {/if}
      <h3 class="card-title"> <a href="{SystemBase::buildUrl('tailieu/news',['id'=>$d.id,'title'=>$d.title])}" title="{$d.title}"> {$d.title} </a> </h3>
      <a class="img-title" href="{SystemBase::buildUrl('tailieu/news',['id'=>$d.id,'title'=>$d.title])}" title="{$d.title}"> <img class="card-image" src="
      {if $d.image <> ''}
      {$smarty.const.ROOT_URL}/{$smarty.const.IMG_NEWS}{$d.image}
      {else}
      {$smarty.const.IMAGE_DEFAULT}
      {/if}
      " alt="{$d.title}"> 
      
      </a>
      <p class="sub_content">{$d.subcontent|strip_tags}</p>
    </article>
    {if ($k+1) % 3 == 0} </div>
  <div class="cols-card"> {/if}
    {/foreach}
    <div class="pagination-container"> {$arr_news['pageHtml']} </div>
    {/if} </div>
  </section>
</div>
<div class="clear"></div>
