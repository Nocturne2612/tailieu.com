<?php /* Smarty version Smarty-3.1.19, created on 2018-01-11 14:43:30
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/admin/views/news/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13285404855981f41ae22ee2-01664170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6288871678d4d2f442aa185bd761be09d6377135' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/admin/views/news/index.tpl',
      1 => 1512951054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13285404855981f41ae22ee2-01664170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5981f41af1c987_01285018',
  'variables' => 
  array (
    'link_action' => 0,
    'get_data' => 0,
    'combo_category' => 0,
    'combo_status' => 0,
    'totalRecord' => 0,
    'error' => 0,
    'success' => 0,
    'news' => 0,
    'item' => 0,
    'array_category' => 0,
    'link_images' => 0,
    'arr_statuss' => 0,
    'pageHtml' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5981f41af1c987_01285018')) {function content_5981f41af1c987_01285018($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/iyuyjfxt/public_html/webapp/vendors/smarty/libs/plugins/modifier.date_format.php';
?>﻿<div class="page-title">
  <div class="title-env">
    <h1 class="title">Danh sách tin tức</h1>
    <p class="description">Thêm, sửa, xóa danh sách tin tức</p>
  </div>
  <div class="breadcrumb-env">
    <ol class="breadcrumb bc-1">
      <li> <a href="<?php echo @constant('BASE_URL_ADMIN');?>
"><i class="fa-home"></i>Trang chủ</a> </li>
      <li class="active"> <strong>Danh sách tin tức</strong> </li>
    </ol>
  </div>
</div>
<a href="<?php echo Yii::app()->createUrl("admin/news/create/");?>
">
<div class="alert alert-info"> Thêm tin tức </div>
</a>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Tìm kiếm tin tức</h3>
        <div class="panel-options"> <a data-toggle="panel" href="#"> <span class="collapse-icon">&ndash;</span> <span class="expand-icon">+</span> </a> </div>
      </div>
      <div class="panel-body"> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link_action']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo CHtml::beginForm($_tmp1,'get',array('role'=>'form','class'=>'form-wizard'));?>

        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label" for="title">Tiêu đề:</label>
            <input type="text" class="form-control" id="title" class="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['title'];?>
">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label" for="category">Danh mục:</label>
            <?php echo $_smarty_tpl->tpl_vars['combo_category']->value;?>
 </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label" for="status">Trạng thái:</label>
            <?php echo $_smarty_tpl->tpl_vars['combo_status']->value;?>
 </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label" for="begin_createtime">Ngày tạo:</label>
            <input type="text" class="form-control datepicker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" id="begin_createtime" name="begin_createtime" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['begin_createtime'];?>
">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label class="control-label" for="end_createtime">Đến:</label>
            <input type="text" class="form-control datepicker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" id="end_createtime" name="end_createtime" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['end_createtime'];?>
">
          </div>
        </div>
        <div class="col-md-2 pager">
          <div class="form-group">
            <button type="submit" class="btn btn-success" name="search">Tìm kiếm</button>
            <button type="reset" class="btn btn-default" onclick=" location.href = '<?php echo $_smarty_tpl->tpl_vars['link_action']->value;?>
';" > Bỏ lọc </button>
          </div>
        </div>
        <?php echo CHtml::endForm();?>
 </div>
    </div>
  </div>
</div>
<div class="row" >
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
          <div class="pull-left">Có <strong class="blueFont"><?php echo $_smarty_tpl->tpl_vars['totalRecord']->value;?>
</strong> tin tức</div>
        </h3>
        <div class="panel-options"> <a data-toggle="panel" href="#"> <span class="collapse-icon">&ndash;</span> <span class="expand-icon">+</span> </a> </div>
      </div>
      <div class="panel-body"> <?php if ($_smarty_tpl->tpl_vars['error']->value!=false) {?>
        <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['success']->value!=false) {?>
        <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
        <?php }?>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['link_action']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo CHtml::beginForm($_tmp2,'post',array('role'=>'form','class'=>'form-horizontal','name'=>'frmV'));?>
 
        <!--Table style1-->
        
        <div class="table-responsive">
          <table class="table table-small-font table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Danh mục</th>
                <th>Hình ảnh</th>
                <th>Thuộc tính</th>
                <th>Thời gian</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <?php if ($_smarty_tpl->tpl_vars['news']->value) {?>
            <tbody class="table-hover">
            
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <tr <?php if ($_smarty_tpl->tpl_vars['item']->value['status']=='2') {?>class="alert-danger danger"<?php }?>>
              <td><label>
                  <input name="element[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="checkbox">
                  &nbsp;<br>
                  <?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</label></td>
              <td><a href="<?php echo SystemBase::buildUrl('tailieu/news/',array('id'=>$_smarty_tpl->tpl_vars['item']->value['id'],'title'=>$_smarty_tpl->tpl_vars['item']->value['title']));?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
              <td> <?php if (isset($_smarty_tpl->tpl_vars['array_category']->value[$_smarty_tpl->tpl_vars['item']->value['parent_id']]['title'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['array_category']->value[$_smarty_tpl->tpl_vars['item']->value['parent_id']]['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['array_category']->value[$_smarty_tpl->tpl_vars['item']->value['parent_id']]['title'];?>
<a><?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['array_category']->value[$_smarty_tpl->tpl_vars['item']->value['sub_id']]['title'])) {?> &rAarr; <a href="<?php echo $_smarty_tpl->tpl_vars['array_category']->value[$_smarty_tpl->tpl_vars['item']->value['sub_id']]['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['array_category']->value[$_smarty_tpl->tpl_vars['item']->value['sub_id']]['title'];?>
<a><?php }?> </td>
              <td><img src="<?php if ($_smarty_tpl->tpl_vars['item']->value['image']!='') {?><?php echo $_smarty_tpl->tpl_vars['link_images']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
<?php } else { ?><?php echo Yii::app()->baseUrl;?>
/assets/xeon/images/user-1.png<?php }?>" width="50"/></td>
              <th><?php if ($_smarty_tpl->tpl_vars['item']->value['position']!='1') {?><?php } else { ?> Nổi bật<?php }?></th>
              <td>Tạo: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['create_time'],"%d-%m-%Y");?>
<br>
                Cập nhật: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['update_time'],"%d-%m-%Y");?>
 </td>
              <td style="width:250px;"><span class="input-group-btn"> <a href="<?php echo Yii::app()->createUrl("admin/news/edit/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id'],'status'=>$_smarty_tpl->tpl_vars['item']->value['status']));?>
" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['arr_statuss']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
</a> <a href="<?php echo Yii::app()->createUrl("admin/news/edit/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']));?>
" class="btn btn-warning">Sửa</a> | <a href="<?php echo Yii::app()->createUrl("admin/news/del/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']));?>
" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xoá');">Xóa</a> </span></td>
            </tr>
            <?php } ?>
              </tbody>
            
            <?php } else { ?>
            <tr>
              <td colspan="8" class="alert-danger danger"> Không có dữ liệu.</td>
            </tr>
            <?php }?>
          </table>
        </div>
        <div class="row">
          <input onclick="return uncheck();" type="button" value="Chọn tất cả" class="btn btn-warning">
          &nbsp;
          <button type="submit" class="btn btn-warning" name="submit" onclick="return confirm('Bạn chắc chắn');"> Xoá mục đã chọn </button>
        </div>
        <?php echo CHtml::endForm();?>
 
        <!--Paging--->
        <div class="row"><?php echo $_smarty_tpl->tpl_vars['pageHtml']->value;?>

          <p>&nbsp; </p>
        </div>
      </div>
    </div>
  </div>
</div>
 
<script type="text/javascript">
                                                            $(document).ready(function () {

                                                                $('.datepicker').datepicker({
                                                                    format: "dd-mm-yyyy",
                                                                    autoclose: true,
                                                                });

                                                            });
                                                            function uncheck() {
                                                                for (i = 0; i < document.frmV.length; i++) {
                                                                    if (document.frmV[i].type == "checkbox") { //Kiểm tra xem có phải là checkbox ?
                                                                        if (document.frmV[i].checked) {
                                                                            document.frmV[i].checked = false;
                                                                        }
                                                                        else {
                                                                            document.frmV[i].checked = true;
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        </script> 
<?php }} ?>
