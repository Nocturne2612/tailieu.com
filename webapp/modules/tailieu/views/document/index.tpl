<div id="v2-details">
    <div class="clearfix details-box detail_ele">
        <div class="db-nav">
            <div class="detail-header">
                <h1 class="detail-title"><span class="detail-title-contain">{$output.title}</span></h1>
                <p class="detail-breadcrumbs" style="font-size: 12px;">
                    {$this->widget('TWidgets',['methodName'=>'breadcrums','data'=>$data],true)}
                </p>
            </div>
            <div class="inner-search-wrap js_search">
                <div class="inner-search-select js_search-select" data-type="1">
                    <span class="inner-search-select-checked js_search-check">Graphic
                        design</span>
                    <ul class="inner-search-optgroup">
                        <li class="inner-search-option on" data-type="1" data-placeholder="Search Graphic Design">
                            Graphic
                            design</li>
                        <li class="inner-search-option" data-type="2" data-placeholder="Search Backgrounds">Backgrounds
                        </li>
                        <li class="inner-search-option" data-type="5" data-placeholder="Search Templates">Templates</li>
                        <li class="inner-search-option" data-type="8" data-placeholder="Search Illustration">
                            Illustration</li>
                        <li class="inner-search-option" data-type="7" data-placeholder="Search Fonts">Fonts</li>
                    </ul>
                    <i class="iconfont icon-triangle"></i>
                </div>
                <div class="inner-search-input">
                    <input class="js_search-input" id="detailsearch-input" type="text"
                        placeholder="Millions of graphics for free download" data-type="1">
                </div>
                <a href="javascript:;" class="inner-search-btn bg-greenLinear js_search-btn"><i
                        class="iconfont icon-sousuo"></i></a>
            </div>
        </div>


        <div class="fl-l db-leftPic">
            <div class="detail-inner">
                <a href="javascript:;">
                    <div class="dbl-picbox commercial">
                        {if $output.picture <> ""}
                            <li data-thumb="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT_THUMB}{$arr_pic[0]}">
                                {assign var="arr_pic" value="|"|explode:$output.picture}
                                <img data-original="{$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT}{$arr_pic[0]}"
                                    itemprop="image" title="{$output.title}" alt="{$output.title}" class="lazy"
                                    style="width: 100%">

                            </li>
                            {/if}
                    </div>
                </a>
                {literal}
                <script type="application/ld+json">
                    {
                        "@context": "http://schema.org",
                        "@type": "ImageObject",
                        "contentUrl": "{/literal}{$smarty.const.ROOT_URL}/{$smarty.const.IMG_PRODUCT_THUMB}{$arr_pic[0]}{literal}",
                        "caption": "{/literal}{$output.title}{literal}",
                        "uploadDate": ""
                    }
                </script>
                {/literal}
                <div class="detail-infoBox">
                    <ul class="detail-info-list">
                        <li>
                            <span>{if $account}
                                <a style="color:#2e9fe2"
                                    href="{Yii::app()->createUrl('tailieu/account/member',['id'=> $account.id])}"
                                    title="Views all models upload by tailieukientruc.net">{$account.first_name}
                                    {$account.last_name}</a>
                                {else}
                                <label>Upload: </label>
                                <a style="color:#2e9fe2" href="{$smarty.const.ROOT_URL}"
                                    title="Views all models upload by tailieukientruc.net">{$admin.fullname}</a>
                                {/if}
                            </span>
                        </li>
                        <li>
                            <label>Ngày đăng: </label>
                            <span>{$output.create_time|date_format:"%d-%m-%Y"}</span>
                        </li>
                        <li>
                            <label>Lượt tải: </label>
                            <span>{$output.count_down|number_format:2:",":"."|replace:',00':''}</span>
                        </li>
                        <li>
                            <label>Lượt xem: </label>
                            <span>{$output.count}</span>
                        </li>
                        <li>
                            <span>Share this: </span>
                            <div class="
normal share-group circle
">
    <a href="javascript:;" onclick="Pngtree.BaseFun.Base_OpenWin('https://www.facebook.com/share.php?u={SystemBase::buildUrl('tailieu/document',['id'=>$output.id,'title'=>$output.title])}','facebook-share')" data-type="8" class="share-two bg-facebook share-user-btn">
        <i class="iconfont icon-facebook"></i>
    </a>
    <a href="javascript:;" onclick="Pngtree.BaseFun.Base_OpenWin('https://twitter.com/intent/tweet?url={SystemBase::buildUrl('tailieu/document',['id'=>$output.id,'title'=>$output.title])}','twitter-share')" data-type="8" class="bg-twitter share-one share-user-btn">
        <i class="iconfont icon-twitter"></i>
    </a>
    
</div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="keyWords-wrap needmore">
                <div class="dl-keyWords clearfix ele_keyword ">
                    {assign var="arr_tag" value=","|explode:$output.tag}
                    {foreach $arr_tag as $t}
                    <a target="_blank" href="{SystemBase::buildUrl('tailieu/search',['keyword'=> $t])}" title="{$t}"
                        class="">{$t}</a>
                    {/foreach}<br />
                    <br />
                    <div class="detail-more">
                        <span less="">{$output.full}</span>
                    </div>
                </div>
                <div class="detail-more">
                    <span more>
                        show more
                        <i class="iconfont icon-xiangxiazhanhang"></i>
                    </span>
                </div>
                <div id="fb-root"></div>
                <script src="https://connect.facebook.net/vi_VN/all.js#appId=882475878492163&xfbml=1"></script>
                <fb:comments href="{SystemBase::buildUrl('tailieu/document',['id'=>$output.id,'title'=>$output.title])}"
                    num_posts="5" width="auto"></fb:comments>
            </div>


        </div>
        <div class="fl-r db-rightInfor">
            <!-- infor -->
            <div class="dbr-items">
                <div class="dbr-btnbox clearfix detail-down-click">
                    <a target="_blank" rel="nofollow" href="javascript:;" data-type="1"
                        class="fl-l btn-free down-no-login">
                        <i class="iconfont icon-xiazai"></i>
                        {if $output.proprice > 0}
                        <span class="oldprice"
                            style="text-decoration: line-through; font-size: small;">{$output.price|number_format:2:",":"."|replace:',00':''}
                            POINT</span>
                        <span class="proprice" style="color: #F44359; font-size: medium;">
                            {$output.proprice|number_format:2:",":"."|replace:',00':''} POINT &nbsp;&nbsp;&nbsp;</span>
                        {else if $output.proprice == '0' && $output.price > 0}
                        {$output.price|number_format:2:",":"."|replace:',00':''} POINT
                        {else}
                        Free download{/if}

                    </a>
                    <a href="javascript:;" rel="nofollow" class="btn-star fl-r btn-Temstar star-btn-click "
                        data-id="4830336" data-type="1" id="detail-like-button"><i></i></a>
                </div>
            </div>

            <div class="recommend-swiper">
                <p class="recommend-swiper-title">
                    <span>You may also like</span>
                </p>
                <div class="recommend-list-wrap">
                    <div class="recommend-list-page">
                        <a href="javascript:;" class="recommend-list-page-prev page_prev">
                            <i class="iconfont icon-arrowLeft"></i>
                        </a>
                        <a href="javascript:;" data-page="7" class="recommend-list-page-next page_next js-add-slide">
                            <i class="iconfont icon-arrowRight"></i>
                        </a>
                    </div>
                    <div class="recommend-list-box">
                        <div class="recommend-list js_slick">
                            <div class="recommend-list-item slide-item">
                                {$this->widget('TWidgets',['methodName'=>'productView','product'=> $relation,'check'=>
                                false],true)}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-recommend dbr-items ele_recommend needmore">
                <h3>Related recommendation:</h3>
                <div class="hpnp-Related">
                    {$this->widget('TWidgets',['methodName'=>'CategoryMenu','check'=> true],true)}
                </div>
            </div>
        </div>
    </div>
    <div class="detail-banner">
        <div class="w1520">
            <div class="detail-banner-inner">
                <ul class="mb-box clearfix">
                    {$this->widget('TWidgets',['methodName'=>'CategoryMenu','check'=> true],true)}
                </ul>
            </div>
        </div>
    </div>
</div>