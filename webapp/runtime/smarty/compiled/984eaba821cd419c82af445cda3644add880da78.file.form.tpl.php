<?php /* Smarty version Smarty-3.1.19, created on 2018-01-26 02:39:21
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/admin/views/category/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20812435855a6a3269a35bb3-73624143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '984eaba821cd419c82af445cda3644add880da78' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/admin/views/category/form.tpl',
      1 => 1512951054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20812435855a6a3269a35bb3-73624143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title_page' => 0,
    'link_back' => 0,
    'link_action' => 0,
    'error' => 0,
    'data' => 0,
    'link_images' => 0,
    'combo_parent' => 0,
    'combo_ctype' => 0,
    'combo_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a3269aae9f8_96191785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a3269aae9f8_96191785')) {function content_5a6a3269aae9f8_96191785($_smarty_tpl) {?>
<div class="page-title">
  <div class="title-env">
    <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['title_page']->value;?>
</h1>
    <p class="description">Thêm, sửa, phân quyền danh mục</p>
  </div>
  <div class="breadcrumb-env">
    <ol class="breadcrumb bc-1">
      <li> <a href="<?php echo @constant('BASE_URL_ADMIN');?>
"><i class="fa-home"></i>Trang chủ</a> </li>
      <li> <a href="<?php echo $_smarty_tpl->tpl_vars['link_back']->value;?>
">Nhóm thuộc tính</a> </li>
      <li class="active"> <strong><?php echo $_smarty_tpl->tpl_vars['title_page']->value;?>
</strong> </li>
    </ol>
  </div>
</div>
<div class="panel panel-default">
  <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['title_page']->value;?>
</h3>
  <div class="panel-body">
    <div class="row"> <?php echo CHtml::beginForm($_smarty_tpl->tpl_vars['link_action']->value,'post',array('role'=>'form','class'=>'form-horizontal','enctype'=>'multipart/form-data'));?>

      <?php if ($_smarty_tpl->tpl_vars['error']->value!=false) {?>
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
      <?php }?>
      <div class="form-group">
        <label class="col-sm-3 control-label">Tên danh mục(*):</label>
        <div class="col-sm-9">
          <div class="input-group input-group-minimal">
            <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" class="form-control" placeholder="Bắt buộc nhập" required=""/>
            <span class="input-group-addon"> <i class="fa fa-empire"></i> </span> </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Link:</label>
        <div class="col-sm-9">
          <input type="text" name="link" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['link'];?>
" class="form-control"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Mã màu sắc:(Mã màu #000000)</label>
        <div class="col-sm-9">
          <input type="text" name="color" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['color'];?>
" class="form-control"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Icon: </label>
        <div class="col-md-9">
          <input type="file" id="file" name="file" data-bfi-disabled>
          <br>
          <?php if (isset($_smarty_tpl->tpl_vars['data']->value['icon'])&&$_smarty_tpl->tpl_vars['data']->value['icon']!='') {?><img src="<?php echo $_smarty_tpl->tpl_vars['link_images']->value;?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['icon'];?>
" height="80"/>
          <br> <a  style="padding-left:10px; " href="<?php echo Yii::app()->createUrl("admin/category/edit/",array('id'=>$_smarty_tpl->tpl_vars['data']->value['id'],'image'=>base64_encode($_smarty_tpl->tpl_vars['data']->value['icon'])));?>
" class="fa-hover"><i class="fa fa-trash"></i></a>
          <?php }?> </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Thuộc danh mục:</label>
        <div class="col-sm-9">
          <select class="form-control" name="parent_id">
            <option value="0">-- CẤP CHA --</option>
            
            
                        <?php echo $_smarty_tpl->tpl_vars['combo_parent']->value;?>

                    
          
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Loại danh mục:</label>
        <div class="col-sm-9"> <?php echo $_smarty_tpl->tpl_vars['combo_ctype']->value;?>
 </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Số thứ tự (*):</label>
        <div class="col-sm-9">
          <input type="text" name="stt" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['stt'];?>
" id="stt" class="form-control" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Trạng thái (*):</label>
        <div class="col-sm-9"> <?php echo $_smarty_tpl->tpl_vars['combo_status']->value;?>
 </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3  control-label"></label>
        <div class="col-sm-9">
          <button type="submit" class="btn btn-warning" name="submit">Cập nhật</button>
          <a href="<?php echo $_smarty_tpl->tpl_vars['link_back']->value;?>
" class="btn btn-info" name="goback">Bỏ qua</a> </div>
      </div>
      <?php echo CHtml::endForm();?>
 </div>
  </div>
</div>
<?php }} ?>
