<div class="sidebar-menu toggle-others fixed">
    <div class="sidebar-menu-inner">	
        <header class="logo-env">
            <!-- logo -->
            <div class="logo">
                <a href="{Yii::app()->createUrl('admin/default')}" class="logo-expanded">
                    <img src="{$smarty.const.ROOT_URL}/assets/xeon/images/logo@2x.png" width="80" alt="" />
                </a>

                <a href="{Yii::app()->createUrl('admin/default')}" class="logo-collapsed">
                    <img src="{$smarty.const.ROOT_URL}/assets/xeon/images/logo-collapsed@2x.png" width="40" alt="" />
                </a>
            </div>

            <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
            <div class="mobile-menu-toggle visible-xs">
                 <!-- <a href="#" data-toggle="user-info-menu">
                    <i class="fa-bell-o"></i>
                    <span class="badge badge-success">7</span>
                </a> -->

                <a href="#" data-toggle="mobile-menu">
                    <i class="fa-bars"></i>
                </a>
            </div>


        </header>

        <ul id="main-menu" class="main-menu">
            {foreach $menu as $k=>$item}
                {if $item.visible}
                    <li {if strrpos($k,$controller) > 0} class="active opened"{/if}> 
                        {if $item.childs}
                            <a><i class="{$item.icon}"></i><span class="title">{$item.title} </span></a> 
                            <ul> 
                                {foreach $item.childs as $v=>$item_c}
                                    <li {if $v == $controller} class="active"{/if}><a href="{$item_c.link}"> <span class="title">{$item_c.title}</span></a></li>
                                    {/foreach}
                            </ul>
                        {else} 
                            <a href="{$item.link}"><i class="linecons-cog"></i><span class="title">{$item.title} </span></a> 
                        {/if}                      
                    </li>
                {/if}
            {/foreach}
          
        </ul>

    </div>
</div>