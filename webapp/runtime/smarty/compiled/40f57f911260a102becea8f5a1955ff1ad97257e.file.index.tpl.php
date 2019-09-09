<?php /* Smarty version Smarty-3.1.19, created on 2019-07-21 20:57:22
         compiled from "D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/views/home/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:317635d2d93a47d4bd9-72664464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40f57f911260a102becea8f5a1955ff1ad97257e' => 
    array (
      0 => 'D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/views/home/index.tpl',
      1 => 1563742636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317635d2d93a47d4bd9-72664464',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d2d93a4829643_58536790',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d2d93a4829643_58536790')) {function content_5d2d93a4829643_58536790($_smarty_tpl) {?>
<!-- v2  Scroll navigation end -->


<div id="v2-content">
    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER2'),true);?>
   
    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER'),true);?>
 
    <div class="tem-wrapper w1520">
        <div class="main-con et-photobox">
            <div class="main-body">
               
                         <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'tabs_new'),true);?>

                    </div>
             
            </div>
        </div>
                    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER2'),true);?>

</div><?php }} ?>
