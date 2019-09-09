<?php /* Smarty version Smarty-3.1.19, created on 2018-07-19 08:26:33
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/admin/views/link/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11437012335b504b39d532f1-43090675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1315282536293ffb40b236fb0c3d84b7879c863f' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/admin/views/link/index.tpl',
      1 => 1529384679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11437012335b504b39d532f1-43090675',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'success' => 0,
    'link_action' => 0,
    'fck_tomtat' => 0,
    'fck_noidung' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b504b39e31f51_98136193',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b504b39e31f51_98136193')) {function content_5b504b39e31f51_98136193($_smarty_tpl) {?><div class="page-title">
  <div class="title-env">
    <h1 class="title">Quản trị Link</h1>
    <p class="description">Thêm, sửa, xóa link</p>
  </div>
  <div class="breadcrumb-env">
    <ol class="breadcrumb bc-1">
      <li> <a href="<?php echo @constant('BASE_URL_ADMIN');?>
"><i class="fa-home"></i>Trang chủ</a> </li>
      <li class="active"> <strong>Link</strong> </li>
    </ol>
  </div>
</div>

<!--Fillter-->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default"> <?php if ($_smarty_tpl->tpl_vars['error']->value!=false) {?>
      <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['success']->value!=false) {?>
      <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
      <?php }?>
      <div class="row"> <?php echo CHtml::beginForm($_smarty_tpl->tpl_vars['link_action']->value,'post',array('role'=>'form','class'=>'form-horizontal','enctype'=>'multipart/form-data'));?>

        <?php if ($_smarty_tpl->tpl_vars['error']->value!=false) {?>
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
        <?php }?>
        <div class="form-group">
          <label class="col-sm-3 control-label">Link top:</label>
          <div class="col-sm-9"> 
          	<?php echo $_smarty_tpl->tpl_vars['fck_tomtat']->value;?>

          </div>
        </div>
          <div class="form-group">
          <label class="col-sm-3 control-label">Footer:</label>
          <div class="col-sm-9"> <?php echo $_smarty_tpl->tpl_vars['fck_noidung']->value;?>
  </div>
        </div>
        
        <div class="form-group">
          <label class="col-sm-3  control-label"></label>
          <div class="col-sm-9">
            <button type="submit" class="btn btn-warning" name="submit">Cập nhật</button>
          </div>
        </div>
        <?php echo CHtml::endForm();?>
 </div>
    </div>
  </div>
</div>
<?php }} ?>
