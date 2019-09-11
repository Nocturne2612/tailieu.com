<?php /* Smarty version Smarty-3.1.19, created on 2019-09-09 17:03:14
         compiled from "/home/tailieuk/public_html/webapp/modules/admin/views/categoryproducts/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5597874555abf00b5a45961-04037964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30b0a6f54c26f52036f018a2a876e85f2db3afd9' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/admin/views/categoryproducts/form.tpl',
      1 => 1563752343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5597874555abf00b5a45961-04037964',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abf00b5af0bb7_17628981',
  'variables' => 
  array (
    'link_home' => 0,
    'link_create' => 0,
    'err' => 0,
    'data' => 0,
    'combo_parent' => 0,
    'combo_status' => 0,
    'link_images' => 0,
    'fck_short' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abf00b5af0bb7_17628981')) {function content_5abf00b5af0bb7_17628981($_smarty_tpl) {?><div class="page-title">
  <div class="title-env">
    <h1 class="title">Thông tin danh mục tài liệu</h1>
    <p class="description">Thêm, sửa danh mục</p>
  </div>
  <div class="breadcrumb-env">
    <ol class="breadcrumb bc-1">
      <li> <a href="<?php echo @constant('BASE_URL_ADMIN');?>
"><i class="fa-home"></i>Trang chủ</a> </li>
      <li> <a href="<?php echo $_smarty_tpl->tpl_vars['link_home']->value;?>
">Danh sách danh mục</a> </li>
      <li class="active"> <strong>Thông tin danh mục</strong> </li>
    </ol>
  </div>
</div>
<a href="<?php echo $_smarty_tpl->tpl_vars['link_create']->value;?>
">
<div class="alert alert-info"> Thêm,sửa danh mục </div>
</a>
<div class="panel panel-default">
  <div class="panel-body">
    <div class="row"> <?php if ($_smarty_tpl->tpl_vars['err']->value!='') {?>
      <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</div>
      <?php }?>
      
      <?php echo CHtml::beginForm('','post',array('enctype'=>'multipart/form-data','class'=>'form-horizontal'));?>

      <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Tiêu đề:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
">
        </div>
      </div>
      <div class="form-group">
        <label for="desc" class="col-sm-2 control-label">DESC:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="desc" name="desc" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['desc'];?>
">
        </div>
      </div>
      <div class="form-group">
        <label for="desc" class="col-sm-2 control-label">Tag:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="tag" name="tag" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tag'];?>
">
        </div>
      </div>
      <div class="form-group">
        <label for="category" class="col-sm-2 control-label">Danh mục:</label>
        <div class="col-sm-9"> <?php echo $_smarty_tpl->tpl_vars['combo_parent']->value;?>
 </div>
      </div>
      <div class="form-group">
        <label for="category_type" class="col-sm-2 control-label">Hiện trang chủ:</label>
        <div class="col-sm-1">
          <input type="checkbox" class="form-control" id="category_type" name="category_type" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['category_type']=='1') {?>checked=""<?php }?>>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">STT:</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="stt" name="stt" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['stt'];?>
" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Trạng thái:</label>
        <div class="col-sm-9"> <?php echo $_smarty_tpl->tpl_vars['combo_status']->value;?>
 </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Icon: </label>
        <div class="col-md-9">
          <input type="file" id="file" name="file" data-bfi-disabled>
          <br>
          <?php if (isset($_smarty_tpl->tpl_vars['data']->value['icon'])&&$_smarty_tpl->tpl_vars['data']->value['icon']!='') {?><img src="<?php echo $_smarty_tpl->tpl_vars['link_images']->value;?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['icon'];?>
" height="80"/>  <br> <a  style="padding-left:10px; " href="<?php echo Yii::app()->createUrl("admin/categoryproducts/edit/",array('id'=>$_smarty_tpl->tpl_vars['data']->value['id'],'image'=>base64_encode($_smarty_tpl->tpl_vars['data']->value['icon'])));?>
" class="fa-hover"><i class="fa fa-trash"></i></a>
          <?php }?> </div>
      </div>
       <div class="form-group">
        <label class="col-sm-2 control-label">Mô tả: </label>
        <div class="col-md-9">
         <?php echo $_smarty_tpl->tpl_vars['fck_short']->value;?>
 </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label"></label>
        <div class="col-sm-9">
          <button type="submit" class="btn btn-warning" name="submit">Cập nhật</button>
          <button type="button" class="btn btn-default pull-right" name="reset" value="   " onclick="window.history.back();">Quay lại</button>
        </div>
      </div>
      <?php echo CHtml::endForm();?>
 </div>
  </div>
</div>
<?php }} ?>
