{* 
<div class="ui-box layout fn-clear" id="common-panel">
    <div class="common-aside">
        <div class="about-menu">
            {foreach $arrC as $k => $d}
                <h5><a href="{SystemBase::buildUrl('tailieu/categorynews',['id'=>$d.id,'title'=>$d.title])}" title="{$d.title}"> {$d.title} <i class="icon-angle-right menuright"></i></a></h5>				
                    {/foreach}
            <br>
 {$this->widget('TWidgets',['methodName'=>'ads','position'=>'HOME_LEFT'],true)}
        </div>
    </div>
        <div class="common-mains" style="float: left;
    width: 80%;
    margin: 0px;">
        <div class="about-content">
            {if $category}<h1>{$category.title}</h1>{/if}
            {if $arr_news.data}
                <ul>
				<!-- // adsense-->
				<div class="bread-crumbs fn-clear" id="adsref-0054412141412" style="padding-top: 10px;">
                        {$this->widget('TWidgets',['methodName'=>'ads','position'=>'DETAIL_CENTER'],true)}
                         </div>
				<!-- // end_adsense-->	
                    {$this->widget('TWidgets',['methodName'=>'newView','product'=> $arr_news.data,'check'=> true],true)} 
                </ul>
                {$arr_news.pageHtml}
            {/if}

{$this->widget('TWidgets',['methodName'=>'ads','position'=>'DETAIL_CENTER2'],true)}

        </div>
    </div>
</div> *}

<div class="help">
            <div class="help-query">
                <div class="w1000">
                    <form class="help-query-form">
                        <input class="help-query-search" type="text" placeholder="Search help articles">
                        <button class="help-query-btn"><i class="icon-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="help-main">
                <div class="w1000">
                    <div class="help-nav">
                        <div class="help-back-btn"><a href="https://pngtree.com/help-center"><i class="icon-back"></i>
                                Back to help home</a></div>
                        <dl class="nav-mainenter ">
                            <dt class="router-mainenter">
                                <a href="billing-and-payments.html" class="help-cate-hot one-hot-cate "
                                    data-type="Billing and Payments">Billing and Payments </a>
                            </dt>
                            <dd class="router-detailenter "><a href="payments.html" class="help-cate-hot"
                                    data-type="Payments">
                                    Payments</a>
                            </dd>
                            <dd class="router-detailenter "><a href="refunds.html" class="help-cate-hot"
                                    data-type="Refunds">
                                    Refunds</a>
                            </dd>
                            <dd class="router-detailenter "><a href="receipts.html" class="help-cate-hot"
                                    data-type="Receipts">
                                    Receipts</a>
                            </dd>
                        </dl>
                        <dl class="nav-mainenter ">
                            <dt class="router-mainenter">
                                <a href="licensing-%26-products.html" class="help-cate-hot one-hot-cate "
                                    data-type="Licensing & Products">Licensing & Products </a>
                            </dt>
                            <dd class="router-detailenter "><a href="license.html" class="help-cate-hot"
                                    data-type="License">
                                    License</a>
                            </dd>
                            <dd class="router-detailenter "><a href="report-infringement.html" class="help-cate-hot"
                                    data-type="Report infringement">
                                    Report infringement</a>
                            </dd>
                            <dd class="router-detailenter "><a href="image.html" class="help-cate-hot"
                                    data-type="Image">
                                    Image</a>
                            </dd>
                        </dl>
                        <dl class="nav-mainenter on">
                            <dt class="router-mainenter">
                                <a href="technical-help.html" class="help-cate-hot one-hot-cate on"
                                    data-type="Technical Help">Technical Help </a>
                            </dt>
                            <dd class="router-detailenter "><a href="downloading.html" class="help-cate-hot"
                                    data-type="Downloading">
                                    Downloading</a>
                            </dd>
                            <dd class="router-detailenter "><a href="website-issue.html" class="help-cate-hot"
                                    data-type="Website Issue">
                                    Website Issue</a>
                            </dd>
                            <dd class="router-detailenter "><a href="using-image.html" class="help-cate-hot"
                                    data-type="Using Image">
                                    Using Image</a>
                            </dd>
                            <dd class="router-detailenter on"><a href="javascript:;" class="help-cate-hot"
                                    data-type="Account Issue">
                                    Account Issue</a>
                            </dd>
                        </dl>
                        <dl class="nav-mainenter ">
                            <dt class="router-mainenter">
                                <a href="contributor-project.html" class="help-cate-hot one-hot-cate "
                                    data-type="Contributor Project">Contributor Project </a>
                            </dt>
                            <dd class="router-detailenter "><a href="become-a-contributor.html" class="help-cate-hot"
                                    data-type="Become a contributor">
                                    Become a contributor</a>
                            </dd>
                            <dd class="router-detailenter "><a href="uploading.html" class="help-cate-hot"
                                    data-type="Uploading">
                                    Uploading</a>
                            </dd>
                            <dd class="router-detailenter "><a href="manage-earnings.html" class="help-cate-hot"
                                    data-type="Manage earnings">
                                    Manage earnings</a>
                            </dd>
                            <dd class="router-detailenter "><a href="manage-account-%26-legal-issue.html"
                                    class="help-cate-hot" data-type="Manage account & Legal issue">
                                    Manage account & Legal issue</a>
                            </dd>
                        </dl>
                    </div>
                    <div class="help-contain">
                        <ul class="help-contain-list">
                            <h3 class="help-contain-title">Account Issue</h3>
                            <li>
                                <a href="https://pngtree.com/help-center/account-issue_24.html" class="help-cate-sug"
                                    data-type="Why can't I log in?">Why can't I log in?</a>
                            </li>
                            <li>
                                <a href="https://pngtree.com/help-center/account-issue_25.html" class="help-cate-sug"
                                    data-type="Want to Delete Account
">Want to Delete Account
                                </a>
                            </li>
                            <li>
                                <a href="https://pngtree.com/help-center/account-issue_49.html" class="help-cate-sug"
                                    data-type="Why I can't find my Premium account?">Why I can't find my Premium
                                    account?</a>
                            </li>
                            <li>
                                <a href="https://pngtree.com/help-center/account-issue_76.html" class="help-cate-sug"
                                    data-type="How can I edit my personal information?">How can I edit my personal
                                    information?</a>
                            </li>
                            <li>
                                <a href="https://pngtree.com/help-center/account-issue_77.html" class="help-cate-sug"
                                    data-type="How to log out from pngtree?">How to log out from pngtree?</a>
                            </li>
                            <li>
                                <a href="https://pngtree.com/help-center/account-issue_79.html" class="help-cate-sug"
                                    data-type="Where can I browse my downloads or saved pictures?">Where can I browse my
                                    downloads or saved pictures?</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="help-foot">
                <div class="w1000">
                    <div class="contact-group">
                        <p class="contact-us-text">Can’t find what you’re looking for?</p>
                        <a href="https://pngtree.com/help-center/contact" class="contact-us-link">Contact us</a>
                    </div>
                </div>
            </div>
        </div>