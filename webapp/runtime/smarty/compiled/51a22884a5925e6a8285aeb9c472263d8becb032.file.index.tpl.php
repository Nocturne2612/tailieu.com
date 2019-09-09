<?php /* Smarty version Smarty-3.1.19, created on 2019-07-21 11:06:17
         compiled from "D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/views/document/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:279245d2e8c496e1dc2-75022782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51a22884a5925e6a8285aeb9c472263d8becb032' => 
    array (
      0 => 'D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/views/document/index.tpl',
      1 => 1563621266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279245d2e8c496e1dc2-75022782',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d2e8c49a65764_76370327',
  'variables' => 
  array (
    'output' => 0,
    'data' => 0,
    'this' => 0,
    'arr_pic' => 0,
    'account' => 0,
    'admin' => 0,
    'arr_tag' => 0,
    't' => 0,
    'relation' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d2e8c49a65764_76370327')) {function content_5d2e8c49a65764_76370327($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\du_an\\tailieukientruc\\webapp\\vendors\\smarty\\libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) include 'D:\\xampp\\htdocs\\du_an\\tailieukientruc\\webapp\\vendors\\smarty\\libs/plugins/modifier.replace.php';
?><div id="v2-details">
    <div class="clearfix details-box detail_ele">
        <div class="db-nav">
            <div class="detail-header">
                <h1 class="detail-title"><span class="detail-title-contain"><?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
</span></h1>
                <p class="detail-breadcrumbs" style="font-size: 12px;">
                    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'breadcrums','data'=>$_smarty_tpl->tpl_vars['data']->value),true);?>

                </p>
            </div>
            <div class="inner-search-wrap js_search">
                <div class="inner-search-select js_search-select" data-type="1">
                    <span class="inner-search-select-checked js_search-check">Graphic
                        design</span>
                    <ul class="inner-search-optgroup">
                        <li class="inner-search-option on" data-type="1" data-placeholder="Search Graphic Design">Graphic
                            design</li>
                        <li class="inner-search-option" data-type="2" data-placeholder="Search Backgrounds">Backgrounds</li>
                        <li class="inner-search-option" data-type="5" data-placeholder="Search Templates">Templates</li>
                        <li class="inner-search-option" data-type="8" data-placeholder="Search Illustration">Illustration</li>
                        <li class="inner-search-option" data-type="7" data-placeholder="Search Fonts">Fonts</li>
                    </ul>
                    <i class="iconfont icon-triangle"></i>
                </div>
                <div class="inner-search-input">
                    <input class="js_search-input" id="detailsearch-input" type="text" placeholder="Millions of graphics for free download" data-type="1">
                </div>
                <a href="javascript:;" class="inner-search-btn bg-greenLinear js_search-btn"><i class="iconfont icon-sousuo"></i></a>
            </div>
        </div>


        <div class="fl-l db-leftPic">
            <div class="detail-inner">
                <a href="javascript:;" target="_blank">
                    <div class="dbl-picbox commercial">
                        <?php if ($_smarty_tpl->tpl_vars['output']->value['picture']!='') {?>
                            <li data-thumb="<?php echo @constant('ROOT_URL');?>
/<?php echo @constant('IMG_PRODUCT_THUMB');?>
<?php echo $_smarty_tpl->tpl_vars['arr_pic']->value[0];?>
">
                                <?php $_smarty_tpl->tpl_vars["arr_pic"] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['output']->value['picture']), null, 0);?> 
                                <img  data-original="<?php echo @constant('ROOT_URL');?>
/<?php echo @constant('IMG_PRODUCT');?>
<?php echo $_smarty_tpl->tpl_vars['arr_pic']->value[0];?>
" itemprop="image" title="<?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
" class="lazy" style="width: 100%">

                            </li>
                        <?php }?>
                    </div>
                </a>
                
                    <script type="application/ld+json">
                        {
                        "@context": "http://schema.org",
                        "@type": "ImageObject",
                        "contentUrl": "<?php echo @constant('ROOT_URL');?>
/<?php echo @constant('IMG_PRODUCT_THUMB');?>
<?php echo $_smarty_tpl->tpl_vars['arr_pic']->value[0];?>
",
                        "caption": "<?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
",
                        "uploadDate": ""
                        }
                    </script>
                
                <div class="detail-infoBox">
                    <ul class="detail-info-list">
                        <li >
                            <span><?php if ($_smarty_tpl->tpl_vars['account']->value) {?>
                                <a style="color:#2e9fe2" href="<?php echo Yii::app()->createUrl('tailieu/account/member',array('id'=>$_smarty_tpl->tpl_vars['account']->value['id']));?>
" title="Views all models upload by tailieukientruc.net"><?php echo $_smarty_tpl->tpl_vars['account']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['account']->value['last_name'];?>
</a>
                                <?php } else { ?>
                                    <a style="color:#2e9fe2" href="<?php echo @constant('ROOT_URL');?>
" title="Views all models upload by tailieukientruc.net"><?php echo $_smarty_tpl->tpl_vars['admin']->value['fullname'];?>
</a>
                                    <?php }?>
                                    </span>
                                    <label>Upload</label>
                                </li>
                                <li >
                                    <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['output']->value['create_time'],"%d-%m-%Y");?>
</span>
                                    <label>Ngày đăng</label>
                                </li>
                                <li >
                                    <span><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['output']->value['count_down'],2,",","."),',00','');?>
</span>
                                    <label>Lượt tải</label>
                                </li>
                                <li >
                                    <span><?php echo $_smarty_tpl->tpl_vars['output']->value['count'];?>
</span>
                                    <label>Lượt xem</label>
                                </li>
                                <li>
                                    <span>Share this:</span>
                                    <div class="normal share-group circle ">
                                        <a class="btn btn-large btn-secondary" href="<?php echo SystemBase::buildUrl('tailieu/account/favorite',array('like'=>$_smarty_tpl->tpl_vars['output']->value['id']));?>
"  rel="not_faved" title="Collect This File">Thêm vào yêu thích</a>
                                        <br/>
                                        <div style="width: 100%;text-align: center;position: relative;"> 
                                            <div class="fb-like" data-href="<?php echo SystemBase::buildUrl('tailieu/document',array('id'=>$_smarty_tpl->tpl_vars['output']->value['id'],'title'=>$_smarty_tpl->tpl_vars['output']->value['title']));?>
" data-width="450" data-layout="button_count" data-show-faces="false" data-share="true" data-send="false"></div>
                                            <script src="https://apis.google.com/js/platform.js" async defer></script>
                                            <br/>
                                            <g:plusone size='medium'></g:plusone>
                                            <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                                            <script>!function (d, s, id) {
                                                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                                    if (!d.getElementById(id)) {
                                                        js = d.createElement(s);
                                                        js.id = id;
                                                        js.src = p + '://platform.twitter.com/widgets.js';
                                                        fjs.parentNode.insertBefore(js, fjs);
                                                    }
                                                }(document, 'script', 'twitter-wjs');</script>


                                            </div>
                                            <style>
                                                #___plusone_0 {
                                                }
                                                .free {
                                                    font-size: 12px;
                                                    color: #8dc63f;
                                                    font-weight: 600;

                                                }
                                                .free:before {
                                                    content: "Free";
                                                    background: #ff0000;
                                                    color: white;
                                                    font-weight: bold;
                                                    padding: 3px;
                                                    border-radius: 2px;
                                                }
                                            </style>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="keyWords-wrap needmore">
                            <div class="dl-keyWords clearfix ele_keyword ">
                                <?php $_smarty_tpl->tpl_vars["arr_tag"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['output']->value['tag']), null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr_tag']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?> 
                                    <a target="_blank" href="<?php echo SystemBase::buildUrl('tailieu/search',array('keyword'=>$_smarty_tpl->tpl_vars['t']->value));?>
" title="<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
" class=""><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</a>
                                <?php } ?> 
                            </div>
                            <div class="detail-more">
                                <span more>
                                    show more
                                    <i class="iconfont icon-xiangxiazhanhang"></i>
                                </span>
                                <?php echo $_smarty_tpl->tpl_vars['output']->value['full'];?>

                                <div id="fb-root"></div>
                                <script src="https://connect.facebook.net/vi_VN/all.js#appId=882475878492163&xfbml=1"></script>
                                <fb:comments href="<?php echo SystemBase::buildUrl('tailieu/document',array('id'=>$_smarty_tpl->tpl_vars['output']->value['id'],'title'=>$_smarty_tpl->tpl_vars['output']->value['title']));?>
" num_posts="5" width="auto"></fb:comments>

                            </div>
                        </div>


                    </div>
                    <div class="fl-r db-rightInfor">
                        <!-- infor -->
                        <div class="dbr-items">
                            <div class="dbr-btnbox clearfix detail-down-click">
                                <a target="_blank" rel="nofollow" href="javascript:;" data-type="1" class="fl-l btn-free down-no-login">
                                    <i class="iconfont icon-xiazai"></i>
                                    <?php if ($_smarty_tpl->tpl_vars['output']->value['proprice']>0) {?> 
                                        <span class="oldprice" style="text-decoration: line-through;"><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['output']->value['price'],2,",","."),',00','');?>
 POINT</span>
                                        <span class="proprice" style="color: #F44359;"> <?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['output']->value['proprice'],2,",","."),',00','');?>
 POINT  &nbsp;&nbsp;&nbsp;</span> 
                                    <?php } elseif ($_smarty_tpl->tpl_vars['output']->value['proprice']=='0'&&$_smarty_tpl->tpl_vars['output']->value['price']>0) {?> 
                                        <?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['output']->value['price'],2,",","."),',00','');?>
 POINT
                                    <?php } else { ?> 
                                        Free download<?php }?>

                                    </a>
                                    <a href="javascript:;" rel="nofollow" class="btn-star fl-r btn-Temstar star-btn-click " data-id="4830336" data-type="1" id="detail-like-button"><i></i></a>
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
                                                <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'productView','product'=>$_smarty_tpl->tpl_vars['relation']->value,'check'=>false),true);?>
 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-recommend dbr-items ele_recommend needmore">
                                <h3>Related recommendation:</h3>
                                <div class="hpnp-Related">
                                    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'CategoryMenu','check'=>true),true);?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail-banner">
                        <div class="w1520">
                            <div class="detail-banner-inner">
                                <ul class="mb-box clearfix">
                                    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'CategoryMenu','check'=>true),true);?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="qbweb-win bg-buyNow">
                    <div class="win-table ">
                        <div class="win-cell ">
                            <div class="pop-buyNow">
                                <span class="close-btn1"></span>
                                <p>Only the premium user can have the enhanced license</p>
                                <P>subscribing premium plan for authorization.</P>
                                <a target="_blank"  rel="nofollow" href="/pay?b=8" class="btn-buynow" id = 'hide'>Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qbweb-win bg-domnPng">
                    <div class="win-table ">
                        <div class="win-cell ">
                            <div class="pop-buyNow">
                                <span class="close-btn1"></span>
                                <p>You have to download the image first.</p>

                                <a  target="_blank" rel="nofollow" href="" data-type="" class="btn-buynow" id="down-ele-vrf">Download</a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- 下下载图片 end -->
                <!-- 下载图片填写名字弹窗 -->
                <div class="qbweb-win bg-addName">
                    <div class="win-table ">
                        <div class="win-cell ">
                            <div class="pop-buyNow">
                                <span class="close-btn1 add-close"></span>
                                <p>Actual Name（Required）</p>
                                <p>
                                    <input type="text"  placeholder="Real Name" data-ele_id="4830336"  class="addname-input" id="u_name">
                                </p>
                                <a  rel="nofollow" href="javascript:;" class="btn-buynow" id="add_name">Download PRF Agreement</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="qbweb-win bg-addName-team">
                    <div class="win-table ">
                        <div class="win-cell ">
                            <div class="pop-buyNow">
                                <span class="close-btn1 add-close"></span>
                                <p>Actual Name（Required）</p>
                                <p>
                                    <input type="text"  placeholder="Real Name"  class="addname-input" id="u_name_team">
                                </p>
                                <p>Company Name（Required）</p>
                                <p>
                                    <input type="text"  placeholder="Company Name"  class="addname-input" id="u_company_name">
                                </p>
                                <a  rel="nofollow" href="javascript:;" class="btn-buynow" id="add-name-team">Download Team PRF Agreement</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- 下载图片填写名字弹窗 end -->
                <div class="qbweb-win Standard-LicenseBg" id="Standard-LicenseBg" style="">
                    <div class="win-table">
                        <div class="win-cell">
                            <div class="Standard-License">
                                <span class="close-btn1 btn-Popclose"></span>
                                <h3>Pngtree Standard License</h3>
                                <div class="sl-pbox">
                                    <p>This file is free for Personal and Commercial use,</p>
                                    <p>but you must give attribution in one of the following ways:</p>
                                    <p class="sl-icon"><i></i>Video: please add pngtree.com in the final credits</p>
                                    <p class="sl-icon"><i class="icon-print"></i>Print: please add pngtree.com in the final copy</p>
                                    <p class="sl-icon"><i class="icon-web"></i>Web: copy and paste the following code for attribution</p>
                                    <p style="font-size:12px;color:#999;margin: 10px auto 0;margin-left: 26px">Free images by &lt;a href="https://pngtree.com" &gt;pngtree.com&lt;/a&gt;</p>
                                </div>
                                <div class="sl-bob">
                                    <p  style="line-height: 48px;">Don't want to give attribution? </p>
                                    <a href="/pay?pay_ref=1">JOIN OUR PREMIUM</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--  商用元素投诉弹框-->
                <div class="qbweb-win complain-for-commercial" style="display: none">
                    <div class="win-table">
                        <div class="win-cell">
                            <div class="complain-form" style="height:auto;">
                                <h3>Notification of Breaches of Copyright <span class="close-btn"></span></h3>
                                <p style="line-height: 25px;padding-bottom: 25px;">If you are the copyright holder or agent in charge of this and believe that any content on the site pngtree inflicts copyright of your work, you may submit a notification pursuant to the DMCA to notify standards resources which may pose an infringement of the relevant licenses, all necessary information:
                                </p>
                                <a href="javascript:;" onclick="window.open('/dmca_notification')"  class="btn">DMCA Notices</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  商用元素投诉弹框end-->

                <!-- 商用元素投诉提交成功弹框 -->
                <div class="qbweb-win popup-thanks" style="display: none">
                    <div class="win-table">
                        <div class="win-cell">
                            <div class="thanks-box">
                                <h3>THANKS<span class="close-btn"></span></h3>
                                <p>Thank you for your report.<br/>We have received your message.</p>
                                <a href="" class="btn">SUBMIT</a>
                            </div>
                        </div>
                    </div>
                </div><?php }} ?>
