<?php /* Smarty version Smarty-3.1.19, created on 2018-05-15 02:26:09
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/views/addfund/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14020251625af97e23c10720-71244023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4628730856ef8b658a736ce762ec698682a993ad' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/views/addfund/error.tpl',
      1 => 1526351082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14020251625af97e23c10720-71244023',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5af97e23c886c4_38024497',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af97e23c886c4_38024497')) {function content_5af97e23c886c4_38024497($_smarty_tpl) {?><div id="content" class="row">
  <div class="col-md-12">
    <h1 class="title" align="center">NOTIFY PAYMENT</h1>
    <div class="panel panel-deafault">
      <div class="panel-body">
        <div class="form-horizontal pdtop2"> 
          <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
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
