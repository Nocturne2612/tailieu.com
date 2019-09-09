<?php /* Smarty version Smarty-3.1.19, created on 2018-03-19 08:12:43
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/tailieu/components/widgets/views/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:262292537598139e3442174-61890673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cf6b58caf2cc9e9114459539e5b19dd37459b3d' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/tailieu/components/widgets/views/head.tpl',
      1 => 1521447162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262292537598139e3442174-61890673',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_598139e3492038_69632662',
  'variables' => 
  array (
    'this' => 0,
    'check_login' => 0,
    'data' => 0,
    'v' => 0,
    'platforms' => 0,
    'keyword' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598139e3492038_69632662')) {function content_598139e3492038_69632662($_smarty_tpl) {?>﻿<div id="header">
    <div id="navbar">
        <div class="layout-fluid fn-clear">
            <h1 id="logo"><a href="<?php echo @constant('ROOT_URL');?>
">Thư viện, Tài liệu kiến trúc</a></h1>
            <div id="navigation">
                <ul class="ui-nav">
                    <li class="nav-item dropdown" id="mininav">
                        <a class="nav-link dropdown-menu" >Danh mục <i class="icon-reorder"></i></a>
                        <div class="dropdown-box" id="mininav-box">
                            <ul class="nav-group mininav-group fn-clear" style="">
                                <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'CategoryMenu','check'=>false),true);?>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item "><a ref="nofollow" class="nav-link" href="<?php echo SystemBase::buildUrl('tailieu/home',array('sort'=>'hot'));?>
">Models mới</a></li>
                    <li class="nav-item "><a ref="nofollow" class="nav-link" href="<?php echo SystemBase::buildUrl('tailieu/home',array('sort'=>'free'));?>
">MIỄN PHÍ</a></li> 
                    <li class="nav-item "><a ref="nofollow" class="nav-link" href="<?php echo SystemBase::buildUrl('tailieu/categorynews',array());?>
">TIN TỨC</a></li> 

                </ul>
            </div>
            <?php if (!$_smarty_tpl->tpl_vars['check_login']->value) {?>
                <div id="user-interaction">
                    <ul class="ui-nav fn-clear">
                        <li class="nav-item dropdown" id="signav">
                            <a class="nav-link dropdown-menu" style="width:150px;"><span></span>						
                                <i class="icon-user"></i> <span>Tài khoản</span></a>
                            <div class="dropdown-box" id="signav-box" style="display: none;">
                                <ul class="signav-group fn-clear">
                                    <li><a ref="nofollow" class="btn btn-small btn-primary" id="header_signin" href="<?php echo SystemBase::buildUrl('tailieu/login',array());?>
">Đăng nhập</a>
                                        <a ref="nofollow" href="<?php echo SystemBase::buildUrl('tailieu/login/facebook',array());?>
" class="btn btn-small btn-primary">Facebook</a>
                                        <a ref="nofollow" href="<?php echo SystemBase::buildUrl('tailieu/login/google',array());?>
" class="btn btn-small btn-secondary"><i class="icon-google"></i> Google</a>
                                    </li>
                                    <li><span class="or"><span>hoặc</span></span></li>
                                    <li><a class="btn btn-small  btn-secondary" id="header_signup" ref="nofollow" href="<?php echo SystemBase::buildUrl('tailieu/register',array());?>
">Đăng ký</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            <?php } else { ?>
                <div id="user-interaction">
                    <ul class="ui-nav fn-clear">

                        <li class="nav-item dropdown" id="signav">
                            <a class="nav-link dropdown-menu" style="width:200px;"><span> <?php echo $_smarty_tpl->tpl_vars['check_login']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['check_login']->value['last_name'];?>
</span>						
                            </a>
                            <div class="dropdown-box" id="signav-box" style="display: none;">
                                <ul class="signav-group fn-clear">

                                    <li><a ref="nofollow" class="btn btn-small btn-primary" href="<?php echo SystemBase::buildUrl('tailieu/account',array());?>
"> Tài khoản</a></li>
                                    <li><a ref="nofollow" class="btn btn-small btn-primary" href="<?php echo SystemBase::buildUrl('tailieu/addfund',array());?>
"> Nạp tiền</a></li>
                                    <li><a ref="nofollow" class="btn btn-small btn-secondary" href="<?php echo SystemBase::buildUrl('tailieu/account/logout',array());?>
">Đăng xuất</a></li>
                                </ul>
                            </div>
                        </li>


                    </ul>
                </div>

            <?php }?>
        </div>
    </div>
    <div id="filters">	
        <div class="layout-fluid fn-clear">
<?php $_smarty_tpl->tpl_vars['platforms'] = new Smarty_variable(ObjInput::get('platforms','int'), null, 0);?>
            <div class="search-wrap fn-left" id="searchBox">
                <form role="search" action="https://tailieukientruc.net/tim-kiem.html" id="cse-search-box">
                    <div class="search-select-wrapper dropdown">
                        <span class="search-sprite dropdown-menu"><i class="icon-angle-down"></i></span>
                        <div class="search-select dropdown-box">
                            <ul class="search-filter">
                                <li class="current" id="0">Tất cả <span style="padding-top: 10px;"><i class="icon-check"></i></span></li>
                                <li class="current" id="0"><a href="<?php echo SystemBase::buildUrl('tailieu/nangcao/index',array());?>
">Tìm kiếm nâng cao</a></li>
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['parent_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                    <li id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" for="category__<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['platforms']->value==$_smarty_tpl->tpl_vars['v']->value['id']) {?>class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
<span style="padding-top: 10px;"><i class="icon-check"></i></span></li>
                                        <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <?php $_smarty_tpl->tpl_vars['keyword'] = new Smarty_variable(ObjInput::get('keyword','str'), null, 0);?>
                    
                    
                    <input name='keyword' id="q" type="text" class="search-input" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="Nhập từ có dấu để tìm hơn 5000 tài liệu...">
                    <input type="hidden" name="cx" value="002889697032014665731:vb_xsc__cgq">
                    <input type="hidden" name="tid" id="tid" value="<?php echo $_smarty_tpl->tpl_vars['platforms']->value;?>
">
                    <button class="search-button" type="submit" onClick="return searching()"><i class="icon-search"></i></button>
                </form>
            </div>
            <div class="upload-enter fn-right">
                <div class="upload-enter fn-right">
                    <a href="<?php echo SystemBase::buildUrl('tailieu/account/upload',array());?>
" class="btn btn-secondary upload-btn">Upload a Model &nbsp;<i class="icon-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
 <script type="text/javascript">        function searching() {
        var cate = document.getElementById('tid').value;
        var keyword = document.getElementById('q').value;
        if (keyword == '' || typeof keyword == 'undefined') {
            return false;
        }
        keyword = keyword.replace(/&quot;/g, '"');
        keyword = keyword.replace(/([?*#<>!$%^&()/]+)/g, "");
        keyword = keyword.replace(/([ ]+)/g, " ");
        keyword = keyword.replace(/"/g, '');
        if (parseInt(cate) > 0) {
            location.href = '<?php echo @constant('ROOT_URL');?>
/tim-kiem/' + cate + '-' + encodeURIComponent(keyword).replace(/%20/g, '+') + '.html';
        } else {
            location.href = '<?php echo @constant('ROOT_URL');?>
/tim-kiem/' + encodeURIComponent(keyword).replace(/%20/g, '+') + '.html';
        }
        return false;
    }</script><?php }} ?>
