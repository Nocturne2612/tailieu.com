<?php /* Smarty version Smarty-3.1.19, created on 2018-03-21 05:04:19
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/categorydocument/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202619340598139e31d6342-83138737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '446e5c8cb41e1f00a978b912313343b2622cc653' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/categorydocument/index.tpl',
      1 => 1521608658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202619340598139e31d6342-83138737',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_598139e32a9155_12439978',
  'variables' => 
  array (
    'data' => 0,
    'category' => 0,
    'v' => 0,
    'this' => 0,
    'outputs' => 0,
    'output' => 0,
    'arr_tag' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598139e32a9155_12439978')) {function content_598139e32a9155_12439978($_smarty_tpl) {?>﻿
<div id="content">

    <div class="layout-fluid fn-clear">
        <div class="aside fn-left">
            <div class="ui-box listing-aside">

                <h2><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h2>
                <ul class="category-group fn-clear">
                    <li class="current">

                        <a href="#"><h1 class="title"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h1></a>
                    </li>
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
                                    <a href="<?php echo @constant('ROOT_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['acsii'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
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
                                    <a href="<?php echo @constant('ROOT_URL');?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['acsii'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
                                </li>
                            <?php } ?>
                        <?php }?>
                    <?php }?>
                </ul>
                <br>
                <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'HOME_LEFT_SLIDER'),true);?>

                <!-- // category-groupt end -->
            </div>
            <!-- listing-aside end -->
        </div>
        <div class="mains fn-right">
            <div class="thumbnail-wrapper">
                <?php if ($_smarty_tpl->tpl_vars['outputs']->value) {?>
                    <ul class="thumbnail-group search-images fn-clear">
                        <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'productView','product'=>$_smarty_tpl->tpl_vars['outputs']->value['data'],'check'=>true),true);?>
 
                    </ul>
                    <?php echo $_smarty_tpl->tpl_vars['outputs']->value['pageHtml'];?>

                <?php } else { ?>
                    <ul class="thumbnail-group search-images fn-clear">
                        <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'productView','product'=>$_smarty_tpl->tpl_vars['output']->value['data'],'check'=>true),true);?>
 
                    </ul>
					

<div class="ui-box listing-aside"></div>		
<!-- // adsense-->		
<?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER2'),true);?>

<!-- // end adsense-->

					
                    <?php echo $_smarty_tpl->tpl_vars['output']->value['pageHtml'];?>


                <?php }?>
            </div>
			
			

            <div class="fn-clear">
                <div class="ui-box" style="padding: 8px"><?php echo $_smarty_tpl->tpl_vars['data']->value['short'];?>
</div>
<?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER'),true);?>

            </div>

            <div class="fn-clear">
                <div class="ui-box">
                    <ul class="tags-group fn-clear">
                        <?php $_smarty_tpl->tpl_vars["arr_tag"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['data']->value['tag']), null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr_tag']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?> 
                            <li><a href="<?php echo SystemBase::buildUrl('tailieu/search',array('keyword'=>$_smarty_tpl->tpl_vars['t']->value));?>
" title="<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
" class="style4 f14"><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</a></li>
                            <?php } ?> 
                    </ul>
                    <!-- // tags-group end -->

                </div>
            </div>
            <div class="bread-crumbs fn-clear">
                ﻿<?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'breadcrums','data'=>$_smarty_tpl->tpl_vars['data']->value),true);?>

            </div>


        </div>
    </div>

</div>
<?php }} ?>
