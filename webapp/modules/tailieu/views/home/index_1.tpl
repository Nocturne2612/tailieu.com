{$this->widget('TWidgets',['methodName'=>'slider_hot'],true)}
{$this->widget('TWidgets',['methodName'=>'top_countdown'],true)}
<div class="subtabs">
  <ul>
    <li {if $sort=='hot'}class='selected'{/if}> <a title="Hot nhất trong tuần" href="{SystemBase::buildUrl('tailieu/home',['sort'=>'hot'])}"> <span>Hot nhất trong tuần</span> </a> </li>
    <li {if $sort==''}class='selected'{/if}> <a href="{SystemBase::buildUrl('tailieu/home',[])}"> <span>Mới cập nhật</span> </a> </li>
    <li {if $sort=='free'}class='selected'{/if}> <a href="{SystemBase::buildUrl('tailieu/home',['sort'=>'free'])}"> <span>Mới và miễn phí </span> </a> </li>
  </ul>
</div>
<div> {$this->widget('TWidgets',['methodName'=>'tabs_new'],true)} </div>
