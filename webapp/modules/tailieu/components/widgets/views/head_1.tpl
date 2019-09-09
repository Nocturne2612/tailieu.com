<div id="header" class="clearfix">
  {if Yii::app()->controller->id == 'home'}
  <h1 id="logo"><a href="{$smarty.const.ROOT_URL}" title="Thư viện, Tài liệu kiến trúc">Thư viện, Tài liệu kiến trúc</a></h1>
  {else}
  <div id="logo"><a href="{$smarty.const.ROOT_URL}" title="Thư viện, Tài liệu kiến trúc">Thư viện, Tài liệu kiến trúc</a></div>
  {/if}
  <div id="searchBox">
    <form action="/timkiem" method="post">
      <input type="text" name='q' id="q" placeholder="Tìm kiếm tài liệu" x-webkit-speech value="{$title}" />
      {$combo}
      <input id="btnHeaderFind" type="button" value="Tìm kiếm" onClick="return searching()"/>
    </form>
	
    <div class="sharebox">
      <div class="addthis_native_toolbox"></div>
    </div>
  </div>
</div>
{literal} <script type="text/javascript">        function searching() {		    var cate = document.getElementById('platforms').value;            var keyword = document.getElementById('q').value;            if (keyword == '' || typeof keyword == 'undefined') {                return false;            }            keyword = keyword.replace(/&quot;/g, '"');            keyword = keyword.replace(/([?*#<>!$%^&()/]+)/g, "");            keyword = keyword.replace(/([ ]+)/g, " ");            keyword = keyword.replace(/"/g, '');			if(parseInt(cate) > 0 ){				location.href = '{/literal}{$smarty.const.ROOT_URL}/{literal}tim-kiem/'+cate+'-' + encodeURIComponent(keyword).replace(/%20/g, '+') + '.html';			}else{ 				location.href = '{/literal}{$smarty.const.ROOT_URL}/{literal}tim-kiem/'+ encodeURIComponent(keyword).replace(/%20/g, '+') + '.html';			}                        return false;        }    </script>{/literal}