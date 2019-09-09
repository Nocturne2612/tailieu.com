<?php /* Smarty version Smarty-3.1.19, created on 2018-06-19 07:06:37
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/categorynews/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14244372605b28ab7dc018a1-71957337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26d84dfe02bdd982f00b73669fdf2b1e5233ab74' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/categorynews/index.tpl',
      1 => 1529384682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14244372605b28ab7dc018a1-71957337',
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
  'unifunc' => 'content_5b28ab7dc789e3_54595882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28ab7dc789e3_54595882')) {function content_5b28ab7dc789e3_54595882($_smarty_tpl) {?>
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
