<!-- Right links for user info navbar -->
<li class="dropdown xs-left">
    <a class="notification-icon notification-icon-messages" data-toggle="dropdown" href="#" style="line-height: 85px;">
        <i class="fa-bell-o"></i>
        <span class="badge badge-purple">{$count}</span>
    </a>

    <ul class="dropdown-menu notifications">
        <li class="top">
            <p class="small">

                <a href="{Yii::app()->createUrl('admin/products')}"> Có  <strong>{$count}</strong> chưa được duyệt.</a>
            </p>
        </li>


    </ul>
</li>


<li class="dropdown user-profile">
    <a href="#" data-toggle="dropdown">
        <img src="{$smarty.const.ROOT_URL}/assets/xeon/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
        <span>
            {$info.username}
            <i class="fa-angle-down"></i>
        </span>
    </a>

    <ul class="dropdown-menu user-profile-menu list-unstyled">
        <li>
            <a href="{Yii::app()->createUrl('admin/default')}">
                <i class="fa-edit"></i>
                Bảng điều khiển
            </a>
        </li><li>        
            <a href="{Yii::app()->createUrl('tailieu')}">
                <i class="fa-edit"></i>
                Xem trang chủ
            </a>
        </li>
        <!-- <li>
             <a href="#settings">
                 <i class="fa-wrench"></i>
                 Cài đặt
             </a>
         </li>
         <li>
             <a href="{Yii::app()->createUrl('admin/useradmin/view/',['id'=>$info.id])}">
                 <i class="fa-user"></i>
                 Thông tin cá nhân
             </a>
         </li>-->

        <li class="last">
            <a href="{Yii::app()->createUrl('admin/account/logout/')}">
                <i class="fa-lock"></i>
                Logout
            </a>
        </li>
    </ul>
</li>


