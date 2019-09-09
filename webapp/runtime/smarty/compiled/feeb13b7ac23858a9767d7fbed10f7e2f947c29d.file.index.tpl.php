<?php /* Smarty version Smarty-3.1.19, created on 2018-06-19 07:03:43
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/search/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19390274355b28aacf89bbd0-70941491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'feeb13b7ac23858a9767d7fbed10f7e2f947c29d' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/search/index.tpl',
      1 => 1529384684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19390274355b28aacf89bbd0-70941491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'this' => 0,
    'output' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28aacf8f9454_55611451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28aacf8f9454_55611451')) {function content_5b28aacf8f9454_55611451($_smarty_tpl) {?>


<div id="content">


    <div class="layout-fluid  fn-clear">
        <div class="" style="padding-top: 10px;">
            <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'breadcrums','data'=>$_smarty_tpl->tpl_vars['data']->value),true);?>

            <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER'),true);?>

        </div>
        <div class="thumbnail-wrapper">
            <h3 style="color: #8dc63f;font-weight: bold">Kết quả tìm kiếm: <span style="color:red"><?php echo $_smarty_tpl->tpl_vars['output']->value['totalRecord'];?>
</span></h3>
            <ul class="thumbnail-group fn-clear">
                
                <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'productView','product'=>$_smarty_tpl->tpl_vars['output']->value['data'],'check'=>true),true);?>
 
            </ul>

        </div>
        <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER'),true);?>

        <?php echo $_smarty_tpl->tpl_vars['output']->value['pageHtml'];?>


    </div>

</div>



<?php }} ?>
