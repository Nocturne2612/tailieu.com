<?php /* Smarty version Smarty-3.1.19, created on 2017-12-12 18:36:15
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/addfund/confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:453878507598188d9bfe631-16755036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '257a6fc4d4608e00e8216ed842bfdb89cc1a03ac' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/tailieu/views/addfund/confirm.tpl',
      1 => 1512951055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '453878507598188d9bfe631-16755036',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_598188d9c43351_35856184',
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
    'link_addfund' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598188d9c43351_35856184')) {function content_598188d9c43351_35856184($_smarty_tpl) {?><div id="content" class="row">
  <div class="col-md-12">
    <h1 class="title" align="center">Xác nhận nạp Point</h1>
    <div class="panel panel-deafault">
      <div class="panel-body">
        <div class="form-horizontal pdtop2"> <?php if ($_smarty_tpl->tpl_vars['errors']->value!='') {?>
          <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['success']->value!='') {?>
          <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
          <?php }?>
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-3 pdr5">
              <input type="button" class="btn btn-info" value="Quay lại" onClick="location.href='<?php echo $_smarty_tpl->tpl_vars['link_addfund']->value;?>
'">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style> 
#ccaptcha{width:80px;} 
</style>
<?php }} ?>
