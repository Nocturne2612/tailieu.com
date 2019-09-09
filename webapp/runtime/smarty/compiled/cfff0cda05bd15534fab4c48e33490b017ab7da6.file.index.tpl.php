<?php /* Smarty version Smarty-3.1.19, created on 2019-09-09 06:30:17
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/views/search/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11794773525abc8b92f1e4e2-24728168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfff0cda05bd15534fab4c48e33490b017ab7da6' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/views/search/index.tpl',
      1 => 1568001972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11794773525abc8b92f1e4e2-24728168',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc8b93047462_68981713',
  'variables' => 
  array (
    'data' => 0,
    'cache_category' => 0,
    'v' => 0,
    'this' => 0,
    'output' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abc8b93047462_68981713')) {function content_5abc8b93047462_68981713($_smarty_tpl) {?>﻿<div class="icon-searchNav subpageBan ">
    
    <div class="res-search js_search w1520">
        <div class="res-search-select js_search-select" data-type="<?php echo $_smarty_tpl->tpl_vars['data']->value['platforms'];?>
">
            <span class="res-search-selected text-overflow js_search-check xs-search-selected " data-type="<?php echo $_smarty_tpl->tpl_vars['data']->value['platforms'];?>
">
           <?php if (isset($_smarty_tpl->tpl_vars['cache_category']->value['parent_category'][$_smarty_tpl->tpl_vars['data']->value['platforms']])) {?> <?php echo $_smarty_tpl->tpl_vars['cache_category']->value['parent_category'][$_smarty_tpl->tpl_vars['data']->value['platforms']]['title'];?>
  <?php } else { ?>ALL<?php }?>            </span>
            <ul class="res-search-optgroup ">
                 <li class="res-search-option" data-placeholder="Search <?php if (isset($_smarty_tpl->tpl_vars['cache_category']->value['parent_category'][$_smarty_tpl->tpl_vars['data']->value['platforms']])) {?> <?php echo $_smarty_tpl->tpl_vars['cache_category']->value['parent_category'][$_smarty_tpl->tpl_vars['data']->value['platforms']]['title'];?>
  <?php } else { ?>ALL<?php }?>" data-type="<?php echo $_smarty_tpl->tpl_vars['data']->value['platforms'];?>
">
                    <span>ALL</span><i></i>
                     </li>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cache_category']->value['parent_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['e']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                     <li class="res-search-option" data-placeholder="Search <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                    <span><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</span><i></i>
                     </li>
                <?php } ?>
            </ul>
            <i class="iconfont icon-triangle"></i>
        </div>
        <div class="res-search-input">
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" placeholder="Search <?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" data-type="1" class="js_search-input search-keyword-box-input-app search-box-input search_keyword_statis_value">
        </div>
        <a href="javascript:;" class="res-search-btn search-box-input-search-app ">
            <i class="iconfont icon-sousuo"></i>
            </a>

            <!--首页搜索推荐下拉框-->
            <div class="search-dropdown-wrap comment-search-dropdown-wrap" style="display: none;">
                <div class="search-dropdown">

                </div>
            </div>
            <!--首页搜索推荐下拉框 end-->
    </div>

</div>



<div id="v2-subpageBan" class="subpageBan new-subpageBan">
    <div class="w1520 pr">
        <h1 class="title-main"><?php if (isset($_smarty_tpl->tpl_vars['cache_category']->value['parent_category'][$_smarty_tpl->tpl_vars['data']->value['platforms']])) {?><?php echo $_smarty_tpl->tpl_vars['cache_category']->value['parent_category'][$_smarty_tpl->tpl_vars['data']->value['platforms']]['title'];?>
: <?php }?><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h1>
        <p class="detail-breadcrumbs" style="font-size: 12px;">
            <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'breadcrums','data'=>$_smarty_tpl->tpl_vars['data']->value),true);?>

        </p>
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
                    <div class="subpage-menu-box new-subpage-menu-box">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cache_category']->value['parent_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['e']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <div class="subpage-menu-inneBox">
                                <a href="<?php echo @constant('ROOT_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['acsii'];?>
.html" class="sort-btn "><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
                            </div>
                        <?php } ?>
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


                    <ul class="mb-box clearfix">
                        <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'productView','product'=>$_smarty_tpl->tpl_vars['output']->value['data'],'check'=>true),true);?>
 
                    </ul>
                    <?php echo $_smarty_tpl->tpl_vars['output']->value['pageHtml'];?>


                </div>
            </div>
        </div>
    </div>
</div>


<?php }} ?>
