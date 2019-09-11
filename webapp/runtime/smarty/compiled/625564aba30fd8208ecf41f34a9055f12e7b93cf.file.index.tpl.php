<?php /* Smarty version Smarty-3.1.19, created on 2019-09-11 08:43:28
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/views/categorydocument/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7652901785abc88d214e9f3-26844288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '625564aba30fd8208ecf41f34a9055f12e7b93cf' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/views/categorydocument/index.tpl',
      1 => 1568191379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7652901785abc88d214e9f3-26844288',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc88d21f4d39_17619251',
  'variables' => 
  array (
    'data' => 0,
    'category' => 0,
    'v' => 0,
    'arr_tag' => 0,
    't' => 0,
    'outputs' => 0,
    'this' => 0,
    'output' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abc88d21f4d39_17619251')) {function content_5abc88d21f4d39_17619251($_smarty_tpl) {?>﻿<div id="v2-subpageBan" class="subpageBan new-subpageBan">
    <div class="w1520 pr">
        <h1 class="title-main"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h1>
        
        <!-- search -->
        <div class="serach-box">
            <form class="sb-form clearfix">
                <input type="text" placeholder="Tìm kiếm <?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" class="sb-input fl-l comment-search-keyword-box-input">
                <a href="javascript:;" class="sb-btn fl-l search-box-input-index" data-ga="1">
                    <i class="iconfont icon-sousuo"></i>
                </a>
                <!--首页搜索推荐下拉框-->
                <div class="search-dropdown-wrap comment-search-dropdown-wrap" id="search-dropdown-wrap">
                    <div class="search-dropdown">

                    </div>
                </div>
                <!--首页搜索推荐下拉框 end-->
            </form>
            <div class="xs-contain">
                <form class="xs-search">
                    <div class="xs-search-select">
                        <span class="xs-search-selected" data-type="1"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</span>
                        <ul class="xs-search-options">
                            <?php if ($_smarty_tpl->tpl_vars['data']->value['parent_id']>0&&isset($_smarty_tpl->tpl_vars['category']->value['sub_category'][$_smarty_tpl->tpl_vars['data']->value['parent_id']])) {?>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['category']->value['sub_category'][$_smarty_tpl->tpl_vars['data']->value['parent_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['e']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['v']->value['id']!=$_smarty_tpl->tpl_vars['data']->value['id']) {?>
                                        <li class="">
                                            <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>

                                        </li>
                                    <?php }?>
                                <?php } ?>
                            <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['data']->value['parent_id']==0&&isset($_smarty_tpl->tpl_vars['category']->value['sub_category'][$_smarty_tpl->tpl_vars['data']->value['id']])) {?>
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['category']->value['sub_category'][$_smarty_tpl->tpl_vars['data']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['e']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                        <li class="">
                                            <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>

                                        </li>
                                    <?php } ?>
                                <?php }?>
                            <?php }?>
                            <?php $_smarty_tpl->tpl_vars["arr_tag"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['data']->value['tag']), null, 0);?>
                            <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr_tag']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?> 
                            <li><a href="<?php echo SystemBase::buildUrl('tailieu/search',array('keyword'=>$_smarty_tpl->tpl_vars['t']->value));?>
" title="<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
" class=""><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</a></li>
                            <?php } ?> 
                        </ul>
                        <i class="iconfont icon-triangle"></i>
                    </div>
                    <div class="xs-search-input"><input type="text" class="search-keyword-box-input-app"  placeholder="Search <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
" value=""></div>
                    <a href="javascript:;" class="xs-search-btn search-box-input-search-app">
                        <i class="iconfont icon-sousuo"></i>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="v2-content">
    <div id="v2-content">
        <div class="xs-contain">
            <div class="xs-subpage-filter">
                <p class="xs-filter-title"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</p>
                <a href="javascript:;" class="xs-filters-btn">
                    <i class="iconfont icon-sort"></i>
                </a>
            </div>
            <div class="xs-subpage-menu-mask" style="display:none;"></div>
        </div>
        <div class="tem-wrapper w1520">
            <div class="subpage-menu new-subpage-menu">
                <div class="xs-contain">
                    <a href="javascript:;" class="subpage-menu-close" >
                        <i class="iconfont icon-guanbi"></i>
                    </a>
                </div>
                <div class="xs-contain">
                    <p class="xs-subpage-menu-title">Filters</p>
                </div>

                <div class="subpage-menu-toggleBox">
                    <span class="lg-subpage-filter-sort-title xs-hide" style="width: 120px;">Danh mục con:</span>
                    <div class="subpage-menu-box new-subpage-menu-box">

                        <?php if ($_smarty_tpl->tpl_vars['data']->value['parent_id']>0&&isset($_smarty_tpl->tpl_vars['category']->value['sub_category'][$_smarty_tpl->tpl_vars['data']->value['parent_id']])) {?>
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['category']->value['sub_category'][$_smarty_tpl->tpl_vars['data']->value['parent_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['e']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                <?php if ($_smarty_tpl->tpl_vars['v']->value['id']!=$_smarty_tpl->tpl_vars['data']->value['id']) {?>
                                    <div class="subpage-menu-inneBox">
                                        <a href="<?php echo @constant('ROOT_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['acsii'];?>
.html" class="sort-btn"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
                                    </div>
                                <?php }?>
                            <?php } ?>
                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['data']->value['parent_id']==0&&isset($_smarty_tpl->tpl_vars['category']->value['sub_category'][$_smarty_tpl->tpl_vars['data']->value['id']])) {?>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['category']->value['sub_category'][$_smarty_tpl->tpl_vars['data']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['e']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <div class="subpage-menu-inneBox">
                                        <a href="<?php echo @constant('ROOT_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['acsii'];?>
.html" class="sort-btn"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
                                    </div>
                                <?php } ?>
                            <?php }?>
                        <?php }?>
                    </div>
                </div>



                <!-- 二级菜单结构 -->
                <div class="subpage-menu-toggleBox " style="display: none ">
                    <a href="javascript:;" class="xs-subpage-menu-sort-title"> <span href="javascript:;"><i class="iconfont icon-triangle"></i></span></a>
                    <span class="lg-subpage-filter-sort-title xs-hide">Usage:</span>
                    <div class="subpage-menu-box new-subpage-menu-box">
                    </div>
                </div>

            </div>
            <div class="main-con gd-photobox ">

                <div class="main-body">

                    <?php if ($_smarty_tpl->tpl_vars['outputs']->value) {?>
                        <ul class="mb-box masonry-element clearfix tpl-ul">
                            <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'productView','product'=>$_smarty_tpl->tpl_vars['outputs']->value['data'],'check'=>true),true);?>
 
                        </ul>
                        <?php echo $_smarty_tpl->tpl_vars['outputs']->value['pageHtml'];?>

                    <?php } else { ?>
                        <ul class="mb-box masonry-element clearfix tpl-ul">
                            <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'productView','product'=>$_smarty_tpl->tpl_vars['output']->value['data'],'check'=>true),true);?>
 
                        </ul>
                        <?php echo $_smarty_tpl->tpl_vars['output']->value['pageHtml'];?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }} ?>
