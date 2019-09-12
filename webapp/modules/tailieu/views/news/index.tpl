{* 
<div class="ui-box layout fn-clear" id="common-panel">
    <div class="common-aside">
        <div class="about-menu"> 
            {foreach $arrC as $k => $d1}
                <h5><a href="{SystemBase::buildUrl('tailieu/categorynews',['id'=>$d1.id,'title'=>$d1.title])}" title="{$d1.title}"> {$d1.title} <i class="icon-angle-right menuright"></i></a></h5>				
                    {/foreach}


        </div>
        {$this->widget('TWidgets',['methodName'=>'ads','position'=>'HOME_LEFT_SLIDER'],true)}
    </div>
    <div class="common-mains">
        <div class="about-content">
            <h1>{$d.title}</h1>
            <div class="about-block">
                {$this->widget('TWidgets',['methodName'=>'ads','position'=>'DETAIL_CENTER'],true)}
                {$d.content}
                {$this->widget('TWidgets',['methodName'=>'ads','position'=>'DETAIL_CENTER2'],true)} 

                {if $arr_lq.data}
                    <h2>Bài xem thêm</h2>
                    <ul>
                        {foreach item=v from= $arr_lq.data}
                            <li>
                                <a class="more-link" href="{SystemBase::buildUrl('tailieu/news',['id'=>$v.id,'title'=>$v.title])}">{$v.title}</a>
                            </li>

                        {/foreach}
                    </ul>
                    {$arr_lq.pageHtml}
                {/if}
                <!-- // about-block end -->
            </div>
        </div>
    </div>
</div> *}

<div id="scroll-Nav" class="v2-header scroll-Nav">
            <div class="w1520 clearfix">
                <!-- logo -->
                <a href="https://pngtree.com/" class="Newlogo fl-l"></a>

                <!-- 新scroll -->
                <div class="scroll-cate">
                    <span class="scroll-selected text-overflow">CATEGORIES <i class="iconfont icon-triangle"></i></span>
                    <div class="searchItems-list">
                        <div class="cate-list">
                            <a class="scroll-option" href="https://pngtree.com/free-graphic-design">
                                <span>PNG RESOURCE</span>
                            </a>
                            <a class="scroll-option" href="https://pngtree.com/free-backgrounds">
                                <span>BACKGROUNDS</span>
                            </a>
                            <a class="scroll-option" href="https://pngtree.com/design-templates">
                                <span>TEMPLATES</span>
                            </a>
                            <a class="scroll-option" href="https://pngtree.com/free-fonts">
                                <span>ART FONT</span>
                            </a>
                            <a class="scroll-option" href="https://pngtree.com/illustration-design">
                                <span>ILLUSTRATION</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- 新vip -->
                <div class="scroll-vip">
                    <a href="https://pngtree.com/pay?b=1" rel="nofollow" class="nav-pricing2">
                        <span class="header-crown">
                            <img src="http://js.pngtree.com/web3/images/vip.png?code=156818352112">
                        </span> PREMIUM </a>
                    <div class="premium-pulldown">
                        <a href="https://pngtree.com/pay?b=2" class="premium-pulldown-link renewal-plan">
                            <div class="premium-pulldown-img">
                                <img src="http://js.pngtree.com/web3/images/v2/premium-pulldown-img.png?code=156818352112"
                                    alt="">
                            </div>
                            <p class="premium-pulldown-text">
                                Commercial use <br>
                                Unlimited download </p>
                            <span class="premium-pulldown-btn">JOIN US</span>
                        </a>
                    </div>
                </div>


                <!--scroll search -->
                <div class=" index-search js_search pullDown ">

                    <div class="index-search-select js_search-select" data-type="1">
                        <span class="index-search-selected text-overflow js_search-check">Png Resource</span>
                        <div class="searchItems-list">
                            <ul class="index-search-optgroup">
                                <li class="index-search-option on" data-placeholder="Search Png Resource" data-type="1">
                                    <span>Png Resource</span><i></i>
                                </li>
                                <li class="index-search-option " data-placeholder="Search Background" data-type="2">
                                    <span>Backgrounds</span><i></i>
                                </li>
                                <li class="index-search-option " data-placeholder="Search Templates" data-type="5">
                                    <span>Templates</span><i></i>
                                </li>
                                <li class="index-search-option " data-placeholder="Search Art Fonts" data-type="7">
                                    <span>Art Font</span><i></i>
                                </li>
                                <li class="index-search-option " data-placeholder="Search Illustration" data-type="8">
                                    <span>Illustration</span><i></i>
                                </li>
                            </ul>
                        </div>
                        <i class="iconfont icon-triangle"></i>
                    </div>
                    <div class="index-search-input">
                        <input type="text" placeholder="Millions of graphics for free download" class="js_search-input "
                            data-type="1" value="">
                    </div>
                    <a href="javascript:;" class="index-search-btn" data-text="Please enter keywords">
                        <i class="iconfont icon-sousuo"></i>
                    </a>

                    <div class="search-dropdown-wrap comment-search-dropdown-wrap" style="display: none;">
                        <div class="search-dropdown"></div>
                    </div>

                </div> <!-- search search end -->

                <!-- right infor -->
                <div class="Top-infor fl-r clearfix">


                    <div class="fl-l top-collect-box pr" style="display: block">
                        <a class="iconfont icon-star"></a>
                        <div class="top-collect-down">
                            <img src="http://js.pngtree.com/web3/images/v2/collect-xx.jpg" alt="">
                            <p><i class="iconfont icon-star"></i>Ctrl+D</p>
                            <p>Mark us if you like us</p>
                        </div>
                    </div>

                    <div class="Beforelogin-boxs fl-l">
                        <a href="javascript:;" rel="nofollow" class="btn-logo base-public-login-button"
                            data-lg="">Login</a>
                        <a href="javascript:;" rel="nofollow" class="btn-register base-public-register-button "
                            data-lg="">Register</a>
                    </div>

                </div>
            </div>
        </div>