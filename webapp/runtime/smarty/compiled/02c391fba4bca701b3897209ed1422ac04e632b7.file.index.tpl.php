<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 13:07:40
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/search/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2070679973598139e6c57c91-93661930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02c391fba4bca701b3897209ed1422ac04e632b7' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/search/index.tpl',
      1 => 1519711658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2070679973598139e6c57c91-93661930',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_598139e6cb13d8_25654018',
  'variables' => 
  array (
    'data' => 0,
    'this' => 0,
    'output' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598139e6cb13d8_25654018')) {function content_598139e6cb13d8_25654018($_smarty_tpl) {?>


<div id="content">


    <div class="layout-fluid  fn-clear">
        <div class="" style="padding-top: 10px;">
            <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'breadcrums','data'=>$_smarty_tpl->tpl_vars['data']->value),true);?>

            <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER'),true);?>

        </div>
        <div class="thumbnail-wrapper">
            <ul class="thumbnail-group fn-clear">

                <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'productView','product'=>$_smarty_tpl->tpl_vars['output']->value['data'],'check'=>true),true);?>
 
            </ul>

        </div>
        <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER'),true);?>

        <?php echo $_smarty_tpl->tpl_vars['output']->value['pageHtml'];?>


    </div>

</div>



<?php }} ?>
