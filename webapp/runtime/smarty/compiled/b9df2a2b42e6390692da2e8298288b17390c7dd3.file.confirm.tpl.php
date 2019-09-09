<?php /* Smarty version Smarty-3.1.19, created on 2018-03-29 10:03:49
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/views/download/confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7987484535abcba054b6926-85360119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9df2a2b42e6390692da2e8298288b17390c7dd3' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/views/download/confirm.tpl',
      1 => 1522308732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7987484535abcba054b6926-85360119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abcba054f7b83_04814449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abcba054f7b83_04814449')) {function content_5abcba054f7b83_04814449($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['errors']->value!='') {?>
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
