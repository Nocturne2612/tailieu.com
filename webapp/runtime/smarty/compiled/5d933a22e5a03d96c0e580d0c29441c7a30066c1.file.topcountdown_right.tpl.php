<?php /* Smarty version Smarty-3.1.19, created on 2018-07-26 06:49:06
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/components/widgets/views/topcountdown_right.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14476251275b28a9042d7fb5-78171257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d933a22e5a03d96c0e580d0c29441c7a30066c1' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/components/widgets/views/topcountdown_right.tpl',
      1 => 1532587743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14476251275b28a9042d7fb5-78171257',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28a90432c912_57456680',
  'variables' => 
  array (
    'data' => 0,
    'd' => 0,
    'arr_pic' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28a90432c912_57456680')) {function content_5b28a90432c912_57456680($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/tailieu1/tailieukientruc.net/webapp/vendors/smarty/libs/plugins/modifier.replace.php';
?><div class="ui-box tab-box">
    <div class="tab-title">
        <ul    class="tabs">
            <li id="tab1" onmouseover="setTab('tab', 1, 3);" class="current">Tải nhiều</li>
            <li id="tab2" onmouseover="setTab('tab', 2, 3);" class="">Mới nhất</li>
            <li id="tab3" onmouseover="setTab('tab', 3, 3);" class="">Miễn phí</li>
        </ul>
    </div>
    <div class="tab-cnt">
        <div id="con_tab_1" class="tab-item">
            <ul class="list-group">
                
                <?php if ($_smarty_tpl->tpl_vars['data']->value) {?> 
                    <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
                        <li>
                            <div class="thumb ">
                                <a href="<?php echo SystemBase::buildUrl('tailieu/document',array('id'=>$_smarty_tpl->tpl_vars['d']->value['id_product'],'title'=>$_smarty_tpl->tpl_vars['d']->value['title']));?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['d']->value['picture']!='') {?><?php $_smarty_tpl->tpl_vars["arr_pic"] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['d']->value['picture']), null, 0);?> <img  alt="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
" src="<?php echo @constant('ROOT_URL');?>
/<?php echo @constant('IMG_PRODUCT_THUMB');?>
<?php echo $_smarty_tpl->tpl_vars['arr_pic']->value[0];?>
" style="margin:-25px 0 0 -30px;"/> <?php }?></a>

                            </div>
                            <h5><a href="<?php echo SystemBase::buildUrl('tailieu/document',array('id'=>$_smarty_tpl->tpl_vars['d']->value['id_product'],'title'=>$_smarty_tpl->tpl_vars['d']->value['title']));?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</a></h5>
                            <p class="category"><?php echo rand('1','5');?>
 <i class="icon-star"></i>  <?php if (isset($_smarty_tpl->tpl_vars['d']->value['count_down'])) {?><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['d']->value['count_down'],2,",","."),',00','');?>
<?php } else { ?> 0<?php }?> <i class="icon-download"></i>

                        </p>
                        </li>
                <?php } ?>
                <?php }?>
            </ul>
        </div>
        <div id="con_tab_2" class="tab-item fn-hide">
            <ul class="list-group">
                <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'tabs_new','check'=>'new'),true);?>

            </ul>
        </div>
        <div id="con_tab_3" class="tab-item fn-hide">
            <ul class="list-group">	
                <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'tabs_new','check'=>'free'),true);?>

            </ul>
        </div>
    </div>
</div>
<?php }} ?>
