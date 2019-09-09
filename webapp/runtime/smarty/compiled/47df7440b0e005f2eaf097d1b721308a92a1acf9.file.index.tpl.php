<?php /* Smarty version Smarty-3.1.19, created on 2019-07-16 14:09:40
         compiled from "/var/www/html/modernfuny.com/webapp/modules/tailieu/views/categorynews/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18944178325d2d783486eb93-13124433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47df7440b0e005f2eaf097d1b721308a92a1acf9' => 
    array (
      0 => '/var/www/html/modernfuny.com/webapp/modules/tailieu/views/categorynews/index.tpl',
      1 => 1563125846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18944178325d2d783486eb93-13124433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arrC' => 0,
    'd' => 0,
    'this' => 0,
    'category' => 0,
    'arr_news' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d2d7834882df4_75955468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d2d7834882df4_75955468')) {function content_5d2d7834882df4_75955468($_smarty_tpl) {?>
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
