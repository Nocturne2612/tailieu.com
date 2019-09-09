<?php /* Smarty version Smarty-3.1.19, created on 2019-09-09 08:08:04
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/views/categorynews/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13931220205abc8dd5c13903-76726514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7c162c28961641bec9542a0d3bf01bc78dd5e10' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/views/categorynews/index.tpl',
      1 => 1568001968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13931220205abc8dd5c13903-76726514',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc8dd5c76248_94803264',
  'variables' => 
  array (
    'arrC' => 0,
    'd' => 0,
    'this' => 0,
    'category' => 0,
    'arr_news' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abc8dd5c76248_94803264')) {function content_5abc8dd5c76248_94803264($_smarty_tpl) {?>
<div class="ui-box layout fn-clear" id="common-panel">
    <div class="common-aside">
        <div class="about-menu">
            <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrC']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['d']->key;
?>
                <h5><a href="<?php echo SystemBase::buildUrl('tailieu/categorynews',array('id'=>$_smarty_tpl->tpl_vars['d']->value['id'],'title'=>$_smarty_tpl->tpl_vars['d']->value['title']));?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
"> <?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
 <i class="icon-angle-right menuright"></i></a></h5>				
                    <?php } ?>
            <br>
 <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'HOME_LEFT'),true);?>

        </div>
    </div>
        <div class="common-mains" style="float: left;
    width: 80%;
    margin: 0px;">
        <div class="about-content">
            <?php if ($_smarty_tpl->tpl_vars['category']->value) {?><h1><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</h1><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['arr_news']->value['data']) {?>
                <ul>
				<!-- // adsense-->
				<div class="bread-crumbs fn-clear" id="adsref-0054412141412" style="padding-top: 10px;">
                        <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER'),true);?>

                         </div>
				<!-- // end_adsense-->	
                    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'newView','product'=>$_smarty_tpl->tpl_vars['arr_news']->value['data'],'check'=>true),true);?>
 
                </ul>
                <?php echo $_smarty_tpl->tpl_vars['arr_news']->value['pageHtml'];?>

            <?php }?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER2'),true);?>


        </div>
    </div>
</div><?php }} ?>
