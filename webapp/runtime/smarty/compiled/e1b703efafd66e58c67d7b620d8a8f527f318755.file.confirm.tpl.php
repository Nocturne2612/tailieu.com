<?php /* Smarty version Smarty-3.1.19, created on 2018-07-27 09:57:26
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/download/confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14459010995b28b3dcb631e3-61589358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1b703efafd66e58c67d7b620d8a8f527f318755' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/download/confirm.tpl',
      1 => 1532685369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14459010995b28b3dcb631e3-61589358',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28b3dcbb0931_80243083',
  'variables' => 
  array (
    'errors' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28b3dcbb0931_80243083')) {function content_5b28b3dcbb0931_80243083($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['errors']->value!='') {?>
    <div id="content">
        <div class="layout fn-clear" style="margin-bottom: 100px;">
            <div class="btn btn-large btn-secondary"><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</div>
			<center><img src="https://tailieukientruc.net/images/Sorry_2.png" alt=""><br> 
			<a class="error_show" href="https://www.facebook.com/messages/t/thuvienkientrucchiase" target="_blank" class="download-button">Nhấn vào đây để thông báo link download lỗi với ban quản trị!</a>

				<?php echo $_smarty_tpl->tpl_vars['this']->value->widget('TWidgets',array('methodName'=>'ads','position'=>'HOME_LEFT_SLIDER'),true);?>
</center>

        </div>
    </div>
<?php }?>
<?php }} ?>
