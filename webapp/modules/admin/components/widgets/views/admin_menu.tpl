
<nav class="navbar horizontal-menu navbar-fixed-top"><!-- set fixed position by adding class "navbar-fixed-top" -->
  
  <div class="navbar-inner"> 
    <!-- Navbar Brand -->
    <div class="navbar-brand"> <a href="{Yii::app()->createUrl('admin/default')}" class="logo"> <img src="{$smarty.const.ROOT_URL}/assets/xeon/images/logo-white-bg@2x.png" width="80" alt="" class="hidden-xs" /> <img src="{$smarty.const.ROOT_URL}/assets/xeon/images/logo@2x.png" width="80" alt="" class="visible-xs" /> </a> </div>
    
    <!-- Mobile Toggles Links -->
    <div class="nav navbar-mobile"> 
      
      <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
      <div class="mobile-menu-toggle"> 
        <!-- This will open the popup with user profile settings, you can use for any purpose, just be creative --> 
        
        <a href="#" data-toggle="user-info-menu-horizontal"> <i class="fa-bell-o"></i> <span class="badge badge-success">{$count}</span> </a> 
        
        <!-- data-toggle="mobile-menu-horizontal" will show horizontal menu links only --> 
        <!-- data-toggle="mobile-menu" will show sidebar menu links only --> 
        <!-- data-toggle="mobile-menu-both" will show sidebar and horizontal menu links --> 
        <a href="#" data-toggle="mobile-menu-horizontal"> <i class="fa-bars"></i> </a> </div>
    </div>
    <div class="navbar-mobile-clear"></div>
    
    <!-- main menu -->
    
    <ul class="navbar-nav">
      {if $menu}
      {foreach $menu as $k=>$item}
      {if $item.visible}
      <li {if strrpos($k,$controller) > 0} class="active opened"{/if}> 
        {if $item.childs} <a><i class="{$item.icon}"></i><span class="title">{$item.title} </span></a>
        <ul>
          {foreach $item.childs as $v=>$item_c}
          <li {if $v == $controller} class="active"{/if}><a href="{$item_c.link}"> <span class="title">{$item_c.title}</span></a></li>
          {/foreach}
        </ul>
        {else} <a href="{$item.link}"><i class="linecons-cog"></i><span class="title">{$item.title} </span></a> {/if} </li>
      {/if}
      {/foreach}
      {/if}
    </ul>
    <ul class="nav nav-userinfo navbar-right">
      <!-- Right links for user info navbar -->
  
      <li class="dropdown xs-left"> 
      <a class="notification-icon notification-icon-messages" data-toggle="dropdown" href="#" > <i class="fa-bell-o"></i> <span class="badge badge-purple">{$count}</span> </a>
        <ul class="dropdown-menu notifications">
          <li class="top">
            <p class="small"> <a href="{Yii::app()->createUrl('admin/products')}"> Có <strong>{$count}</strong> chưa được duyệt.</a> </p>
          </li>
        </ul>
      </li>
      <li class="dropdown user-profile"> <a href="#" data-toggle="dropdown"> <img src="{$smarty.const.ROOT_URL}/assets/xeon/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" /> <span> {$info.username} <i class="fa-angle-down"></i> </span> </a>
        <ul class="dropdown-menu user-profile-menu list-unstyled">
          <li> <a href="{Yii::app()->createUrl('admin/default')}"> <i class="fa-edit"></i> Bảng điều khiển </a> </li>
          <li> <a target="_blank" href="{Yii::app()->createUrl('tailieu')}"> <i class="fa-edit"></i> Xem trang chủ </a> </li>
          <li class="last"> <a href="{Yii::app()->createUrl('admin/account/logout/')}"> <i class="fa-lock"></i> Logout </a> </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
