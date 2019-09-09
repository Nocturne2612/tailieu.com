<?php /* Smarty version Smarty-3.1.19, created on 2018-03-29 10:30:21
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/views/addfund/confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9672105605abcc03d7e63d1-93473776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '609b6bce2f489ce0c4a3537e5c62c2b16c8592a7' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/views/addfund/confirm.tpl',
      1 => 1522308731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9672105605abcc03d7e63d1-93473776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
    'link_addfund' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abcc03d81d3f5_83169812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abcc03d81d3f5_83169812')) {function content_5abcc03d81d3f5_83169812($_smarty_tpl) {?><div id="content" class="row">
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
