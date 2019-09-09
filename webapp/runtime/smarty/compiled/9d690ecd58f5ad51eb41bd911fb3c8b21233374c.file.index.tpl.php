<?php /* Smarty version Smarty-3.1.19, created on 2018-06-26 10:19:07
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/admin/views/useradmin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15467866325b29ceac2449d3-67694669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d690ecd58f5ad51eb41bd911fb3c8b21233374c' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/admin/views/useradmin/index.tpl',
      1 => 1530008346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15467866325b29ceac2449d3-67694669',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b29ceac2e2012_11091546',
  'variables' => 
  array (
    'link_action' => 0,
    'get_data' => 0,
    'totalRecord' => 0,
    'accounts' => 0,
    'item' => 0,
    'pageHtml' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b29ceac2e2012_11091546')) {function content_5b29ceac2e2012_11091546($_smarty_tpl) {?><div class="page-title">
  <div class="title-env">
    <h1 class="title">Danh sách tài khoản quản trị</h1>
    <p class="description">Thêm, sửa, xóa, phân quyền tài khoản quản trị</p>
  </div>
  <div class="breadcrumb-env">
    <ol class="breadcrumb bc-1">
      <li> <a href="<?php echo @constant('BASE_URL_ADMIN');?>
"><i class="fa-home"></i>Trang chủ</a> </li>
      <li class="active"> <strong>Tài khoản quản trị</strong> </li>
    </ol>
  </div>
</div>
<a href="<?php echo Yii::app()->createUrl("admin/useradmin/create/");?>
">
<div class="alert alert-info"> Thêm tài khoản </div>
</a>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Tìm kiếm người dùng</h3>
        <div class="panel-options"> <a data-toggle="panel" href="#"> <span class="collapse-icon">&ndash;</span> <span class="expand-icon">+</span> </a> </div>
      </div>
      
      <!--fillter-->
      
      <div class="panel-body"> <?php echo CHtml::beginForm($_smarty_tpl->tpl_vars['link_action']->value,'get',array('enctype'=>'','class'=>'form-inline','name'=>'userform'));?>

        <div class="form-group">
          <input placeholder="Tài khoản" type="text" class="form-control" id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['username'];?>
" />
        </div>
        <div class="form-group">
          <input placeholder="Email" type="text" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['email'];?>
" />
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info btn-single">Tìm kiếm</button>
          <button type="reset" class="btn btn-warning btn-single" name="reset" value="   " onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['link_action']->value;?>
'">Bỏ lọc</button>
        </div>
        <?php echo CHtml::endForm();?>
 </div>
    </div>
  </div>
</div>
<!--Fillter-->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
          <div class="pull-left">Có <strong class="blueFont"><?php echo $_smarty_tpl->tpl_vars['totalRecord']->value;?>
</strong> tài khoản</div>
        </h3>
        <div class="panel-options"> <a data-toggle="panel" href="#"> <span class="collapse-icon">&ndash;</span> <span class="expand-icon">+</span> </a> </div>
      </div>
      
      <!--fillter-->
      
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-small-font table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Họ và tên</th>
                <th>Tài khoản</th>
                <th>Email</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody class="table-hover">
            
            <?php if ($_smarty_tpl->tpl_vars['accounts']->value) {?>
            
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['accounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['item']->value['fullname'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</td>
              <td><a href="<?php echo Yii::app()->createUrl("admin/useradmin/edit/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']));?>
">Sửa</a> | <a onclick="return confirm('Bạn có chắc chắn xóa.');" href="<?php echo Yii::app()->createUrl("admin/useradmin/del/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']));?>
">Xóa</a></td>
            </tr>
            <?php } ?>
            
            <?php } else { ?>
            <tr>
              <td colspan="5" class="alert-danger danger"> Không có dữ liệu.</td>
            </tr>
            <?php }?>
              </tbody>
            
          </table>
        </div>
        <!--Paging--->
        <div class="row">
          <div class="col-xs-6"> <?php echo $_smarty_tpl->tpl_vars['pageHtml']->value;?>
 </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
