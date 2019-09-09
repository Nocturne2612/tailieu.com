<?php /* Smarty version Smarty-3.1.19, created on 2018-06-19 07:41:16
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/addfund/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19392388425b28b39c8da8a3-30105648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec93e0c28929fe4a1430fc2662311f0aac4b36aa' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/addfund/error.tpl',
      1 => 1529384682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19392388425b28b39c8da8a3-30105648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28b39c915021_21412522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28b39c915021_21412522')) {function content_5b28b39c915021_21412522($_smarty_tpl) {?><div id="content" class="row">
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
