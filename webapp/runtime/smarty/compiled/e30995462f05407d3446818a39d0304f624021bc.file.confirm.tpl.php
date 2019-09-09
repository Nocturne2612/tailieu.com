<?php /* Smarty version Smarty-3.1.19, created on 2017-12-11 11:43:34
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/download/confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152723457159817cc7a84285-32496584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e30995462f05407d3446818a39d0304f624021bc' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/download/confirm.tpl',
      1 => 1512951055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152723457159817cc7a84285-32496584',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59817cc7ac9d96_20638033',
  'variables' => 
  array (
    'errors' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59817cc7ac9d96_20638033')) {function content_59817cc7ac9d96_20638033($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['errors']->value!='') {?>
    <div id="content">
        <div class="layout fn-clear" style="margin-bottom: 100px;">
            <div class="btn btn-large btn-secondary"><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</div>
			<center><a class="error_show" href="https://www.facebook.com/messages/422261074623309" target="_blank" class="download-button">Nhấn vào đây để thông báo link download lỗi với ban quản trị!</a>

			    <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'DETAIL_CENTER'),true);?>

				<?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'HOME_LEFT_SLIDER'),true);?>
</center>

        </div>
    </div>
<?php }?>
<?php }} ?>
