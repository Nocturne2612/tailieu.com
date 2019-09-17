<ul class="mb-box masonry-element clearfix tpl-ul">
{if $check}
    {$this->widget('TWidgets',['methodName'=>'productView','product'=> $data['data'],'check'=> false],true)}
{else}
    {$this->widget('TWidgets',['methodName'=>'productView','product'=> $data['data'],'check'=> true],true)}
{/if}
</ul>
{$data['pageHtml']}

