<?php /* Smarty version Smarty-3.1.19, created on 2018-07-26 06:51:40
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/document/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16998450655b28a90297b914-83529903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff765ceb81a5121362f9775f934989d4b5fad91c' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/document/index.tpl',
      1 => 1532587899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16998450655b28a90297b914-83529903',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28a902ad5d76_90058108',
  'variables' => 
  array (
    'account' => 0,
    'admin' => 0,
    'this' => 0,
    'output' => 0,
    'arr_pic' => 0,
    'data' => 0,
    'relation' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28a902ad5d76_90058108')) {function content_5b28a902ad5d76_90058108($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/tailieu1/tailieukientruc.net/webapp/vendors/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/tailieu1/tailieukientruc.net/webapp/vendors/smarty/libs/plugins/modifier.date_format.php';
?>
<div id="content">
    <div class="layout fn-clear">
        <div class="detail-aside fn-left">
            <div class="ui-box " style="text-align:center;">

                <br />
                <a  href="<?php echo @constant('ROOT_URL');?>
" title="Views all models upload by Tailieukientruc.Net"><img width="150"  src="<?php echo @constant('ROOT_URL');?>
/images/user-1.png" /> </a>
                <br />
                Upload by 
                <?php if ($_smarty_tpl->tpl_vars['account']->value) {?>
                <a style="color:#2e9fe2" href="<?php echo Yii::app()->createUrl('tailieu/account/member',array('id'=>$_smarty_tpl->tpl_vars['account']->value['id']));?>
" title="Views all models upload by tailieukientruc.net"><?php echo $_smarty_tpl->tpl_vars['account']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['account']->value['last_name'];?>
</a>
                <?php } else { ?>
                    
                    
                    
                    <a style="color:#2e9fe2" href="<?php echo @constant('ROOT_URL');?>
" title="Views all models upload by tailieukientruc.net"><?php echo $_smarty_tpl->tpl_vars['admin']->value['fullname'];?>
</a>
                    
                <?php }?>
                <br />
            </div>
            <div class="ui-box ">
                <div class="dropdown-box" >
                    <ul class="nav-group mininav-group fn-clear">	
                        <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'CategoryMenu','check'=>true),true);?>

                    </ul>
                </div>
                <div class="dropdown-box" id="adsref-04412141412">
                    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'HOME_LEFT'),true);?>

                </div>
            </div>
        </div>
        <!-- detail-aside end -->

        <div class="detail-mains fn-left">
            <div class="ui-box">
                <div class="detail-focus">

                    <div class="flexslider">
                        <ul class="slides">
                            <?php if ($_smarty_tpl->tpl_vars['output']->value['picture']!='') {?>
                                <li data-thumb="<?php echo @constant('ROOT_URL');?>
/<?php echo @constant('IMG_PRODUCT_THUMB');?>
<?php echo $_smarty_tpl->tpl_vars['arr_pic']->value[0];?>
">

                                    <?php $_smarty_tpl->tpl_vars["arr_pic"] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['output']->value['picture']), null, 0);?> <img itemprop="image" alt="<?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
" src="<?php echo @constant('ROOT_URL');?>
/<?php echo @constant('IMG_PRODUCT');?>
<?php echo $_smarty_tpl->tpl_vars['arr_pic']->value[0];?>
" style="width: 100%"/>


                                </li>
                            <?php }?>
                        </ul>
                        <div id="adsref-00121101">
                            <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_BOTTOM'),true);?>
 
                        </div>
                    </div>
                    <!-- detail-slide end -->

                </div>
                <!-- detail-focus end -->
            </div>
            <!-- ui-box end -->

            <div class="ui-box">
                <div class="bread-crumbs fn-clear" id="adsref-054412141412" style="
                     padding-top: 10px;
                     ">
                    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER'),true);?>

                </div>
                <div class="bread-crumbs fn-clear"><a class="ui-detail-report" href="https://www.facebook.com/messages/t/thuvienkientrucchiase" target="_blank">Thông báo Nếu link lỗi</a>
                    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'breadcrums','data'=>$_smarty_tpl->tpl_vars['data']->value),true);?>

                    
                </div>
                <!-- // bread-crumbs end -->
                <div class="detail-info fn-clear">
                    <div class="info-group-wrapper fn-left">

                        <ul class="info-group fn-clear">
                            <li class="info-item">
                                <span><?php if ($_smarty_tpl->tpl_vars['output']->value['proprice']>0) {?> 
                                    <span class="oldprice" style="text-decoration: line-through;"><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['output']->value['price'],2,",","."),',00','');?>
 POINT</span>

                                    <span class="proprice" style="    color: #F44359;
                                          font-size: 14px;
                                          font-weight: 600;"> <?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['output']->value['proprice'],2,",","."),',00','');?>
 POINT  &nbsp;&nbsp;&nbsp;</span> 
                                    <?php } elseif ($_smarty_tpl->tpl_vars['output']->value['proprice']=='0'&&$_smarty_tpl->tpl_vars['output']->value['price']>0) {?> 
                                        <span class="price" style="    color: #F44359;
                                              font-size: 14px;
                                              font-weight: 600;"><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['output']->value['price'],2,",","."),',00','');?>
 POINT</span> 
                                        <?php } else { ?> 
                                            <span class="" > &nbsp;&nbsp;&nbsp;Miễn phí</span><span class="free" > &nbsp;</span><?php }?></span>
                                        <label>Sử dụng</label>
                                    </li>
                                    <li class="info-item">
                                        <span><h1><?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
</h1></span>
                                        <label>Tên file</label>
                                    </li>

                                    <li class="info-item">
                                        <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['output']->value['create_time'],"%d-%m-%Y");?>
</span>
                                        <label>Ngày đăng</label>
                                    </li>
                                    <li class="info-item">
                                        <span><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['output']->value['count_down'],2,",","."),',00','');?>
</span>
                                        <label>Lượt tải</label>
                                    </li>
                                    <li class="info-item">
                                        <span><?php echo $_smarty_tpl->tpl_vars['output']->value['count'];?>
</span>
                                        <label>Lượt xem</label>
                                    </li>

                                    <li class="info-item">

                                        <ul class="review_text">
                                            <li> <i class="fa fa-arrow-right"></i> </li>
                                        </ul>
                                        <span class="star-rating">
                                            <input type="radio" name="rating" checked="" onClick="rate('<?php echo $_smarty_tpl->tpl_vars['output']->value['id'];?>
', 1);" value="1"><i></i>
                                            <input type="radio" name="rating" checked="" onClick="rate('<?php echo $_smarty_tpl->tpl_vars['output']->value['id'];?>
', 2);" value="2"><i></i>
                                            <input type="radio" name="rating" checked="" onClick="rate('<?php echo $_smarty_tpl->tpl_vars['output']->value['id'];?>
', 3);"  value="3"><i></i>
                                            <input type="radio" name="rating" checked="" onClick="rate('<?php echo $_smarty_tpl->tpl_vars['output']->value['id'];?>
', 4);" value="4"><i></i>
                                            <input type="radio" name="rating" onClick="rate('<?php echo $_smarty_tpl->tpl_vars['output']->value['id'];?>
', 5);"  value="5"><i></i>
                                        </span>

                                        <label>Đánh giá</label>
                                    </li>
                                </ul>
                                <script>
                                    function rate(id, number) {

                                    }
                                </script>
                                <!-- // info-group end -->

                            </div>
                            <!-- // info-group-wrapper end -->

                            <div class="info-group-btn fn-right">
                                <?php if (!$_smarty_tpl->tpl_vars['output']->value['price']) {?>
                                    <a class="btn btn-large btn-primary" target="_blank" data-downloadurl="<?php echo SystemBase::buildUrl('tailieu/download',array('id'=>$_smarty_tpl->tpl_vars['output']->value['id']));?>
" href="<?php echo SystemBase::buildUrl('tailieu/download',array('id'=>$_smarty_tpl->tpl_vars['output']->value['id'],'title'=>$_smarty_tpl->tpl_vars['output']->value['title']));?>
" class="download-button"> <span> Tải về ngay</span> </a> 
                                <?php } else { ?>
                                    <a class="btn btn-large btn-primary" data-downloadurl="<?php echo SystemBase::buildUrl('tailieu/download',array('id'=>$_smarty_tpl->tpl_vars['output']->value['id']));?>
" href="<?php echo SystemBase::buildUrl('tailieu/download',array('id'=>$_smarty_tpl->tpl_vars['output']->value['id'],'title'=>$_smarty_tpl->tpl_vars['output']->value['title']));?>
" class="download-button"> <span> Tải về ngay</span> </a> 
                                    <?php }?>
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
                                            //width:40px !important;
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
                                <!-- // info-group-btnr end -->
                            </div>
                            <div class="bread-crumbs fn-clear cc" id="adsref-0054412141412" style="
                                 padding-top: 10px;
                                 ">
                                <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER'),true);?>

                            </div>
                            <!-- // detail-info end -->
                        </div>
                        <!-- ui-box end -->
                        <div class="detail-info fn-clear cc" style="
                             position: relative;
                             background: white;
                             margin-top: 10px;
                             padding: 6px;">
                            <?php echo $_smarty_tpl->tpl_vars['output']->value['full'];?>

                        </div>
                        <style>
                            .detail-info {

                            }
                            .detail-info img {
                                width: 100%;
                            }
                        </style>

                        <div id="fb-root"></div>
                        <script src="https://connect.facebook.net/vi_VN/all.js#appId=882475878492163&xfbml=1"></script>
                        <fb:comments href="<?php echo SystemBase::buildUrl('tailieu/document',array('id'=>$_smarty_tpl->tpl_vars['output']->value['id'],'title'=>$_smarty_tpl->tpl_vars['output']->value['title']));?>
" num_posts="5" width="auto"></fb:comments>
                            <?php if ($_smarty_tpl->tpl_vars['relation']->value) {?>
                            <div class="detail-thumbnail">
                                <div class="ui-title">


                                    <h3>Các bài viết cùng chủ đề</h3>
                                </div>

                                <ul class="thumbnail-group thumbnail-group236 fn-clear">
                                    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'productView','product'=>$_smarty_tpl->tpl_vars['relation']->value,'check'=>true),true);?>
 
                                </ul>
                                <!-- // thumbnail-group end -->
								
								
                            </div>
                        <?php }?>
                        <!-- // detail-thumbnail end -->
                    </div>

					
                    <div class="detail-rows fn-right">
                        <div class="ui-box "><?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'HOME_RIGHT_1'),true);?>
</div>
						<div class="ui-box "><?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'HOME_RIGHT_SLIDER'),true);?>
</div>

                        <div id="adsref-04412141412">
                            <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'HOME_RIGHT_2'),true);?>

                        </div>
                    </div>
                </div>


            </div>

<?php }} ?>
