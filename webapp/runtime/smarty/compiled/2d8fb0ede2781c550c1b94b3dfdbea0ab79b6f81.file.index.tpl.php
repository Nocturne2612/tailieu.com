<?php /* Smarty version Smarty-3.1.19, created on 2018-06-19 06:56:16
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/categorydocument/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12866754215b28a910243f44-47457503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d8fb0ede2781c550c1b94b3dfdbea0ab79b6f81' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/categorydocument/index.tpl',
      1 => 1529384682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12866754215b28a910243f44-47457503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'output' => 0,
    'outputs' => 0,
    'category' => 0,
    'v' => 0,
    'this' => 0,
    'arr_tag' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28a910325bf0_48327590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28a910325bf0_48327590')) {function content_5b28a910325bf0_48327590($_smarty_tpl) {?>﻿
<div id="content">

    <div class="layout-fluid fn-clear">
        <div class="aside fn-left">
            <div class="ui-box listing-aside">

                <h2><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h2>
                <ul class="category-group fn-clear">
                    <li class="current" style="position: relative;">
                        <a href="#"><h1 class="title"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h1><span class="total_data"><?php if (isset($_smarty_tpl->tpl_vars['output']->value['totalRecord'])) {?><?php echo $_smarty_tpl->tpl_vars['output']->value['totalRecord'];?>
<?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['outputs']->value['totalRecord'];?>
 <?php }?></span></a>
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

    <style>
        .total_data {
            position: absolute;
            color: red;
            right: 0px;
            top: 0px;
            background-color: white;
        }
    </style>
<?php }} ?>
