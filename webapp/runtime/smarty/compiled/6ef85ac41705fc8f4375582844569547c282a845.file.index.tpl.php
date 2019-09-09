<?php /* Smarty version Smarty-3.1.19, created on 2018-06-21 02:07:31
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/admin/views/categorynews/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6486820825b2b086323d8a3-57005286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ef85ac41705fc8f4375582844569547c282a845' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/admin/views/categorynews/index.tpl',
      1 => 1529384678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6486820825b2b086323d8a3-57005286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'item' => 0,
    'arr_statuss' => 0,
    'k' => 0,
    'item1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b2b08633292b8_42559885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2b08633292b8_42559885')) {function content_5b2b08633292b8_42559885($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tailieu1/tailieukientruc.net/webapp/vendors/smarty/libs/plugins/modifier.date_format.php';
?><div class="page-title">
  <div class="title-env">
    <h1 class="title">Danh mục tin tức</h1>
    <p class="description">Thêm, sửa, xóa danh mục tin tức</p>
  </div>
  <div class="breadcrumb-env">
    <ol class="breadcrumb bc-1">
      <li> <a href="<?php echo @constant('BASE_URL_ADMIN');?>
"><i class="fa-home"></i>Trang chủ</a> </li>
      <li class="active"> <strong>Danh mục tin tức</strong> </li>
    </ol>
  </div>
</div>
<a href="<?php echo Yii::app()->createUrl("admin/categorynews/create/");?>
">
<div class="alert alert-info"> Thêm danh mục </div>
</a>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
          <div class="pull-left">Có <strong class="blueFont"><?php echo $_smarty_tpl->tpl_vars['category']->value['counts'];?>
</strong> danh mục</div>
        </h3>
        <div class="panel-options"> <a data-toggle="panel" href="#"> <span class="collapse-icon">&ndash;</span> <span class="expand-icon">+</span> </a> </div>
      </div>
      
      <!--fillter-->
      
      <div class="panel-body"> <?php echo CHtml::beginForm(Yii::app()->createUrl("admin/categorynews/edit/"),'post',array('role'=>'form','class'=>''));?>

        <div class="table-responsive">
          <table class="table table-small-font table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Danh mục cha</th>
                <th>Thời gian tạo</th>
                <th>Trạng thái</th>
                <th>STT</th>
              </tr>
            </thead>
            <tbody class="table-hover">
            
            <?php if ($_smarty_tpl->tpl_vars['category']->value['parent_category']) {?>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['category']->value['parent_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <tr <?php if ($_smarty_tpl->tpl_vars['item']->value['status']=='0') {?>class="alert-danger danger"<?php }?>>
              <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
              <td></td>
              <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['create_time'],"%d-%m-%Y");?>
</td>
              <td><a href="<?php echo Yii::app()->createUrl("admin/categorynews/edit/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id'],'status'=>$_smarty_tpl->tpl_vars['item']->value['status']));?>
" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['arr_statuss']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
</a></td>
              <td style="width:250px;"><div class="col-sm-3" style="padding: 0px;">
                  <input class="form-control no-right-border form-focus-purple" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['stt'];?>
" name="stt[]">
                </div>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" name="ids[]">
                <span class="input-group-btn">
                <button class="btn btn-purple" name="save" type="submit" value="save">Lưu</button>
                <a class="btn btn-warning" href='<?php echo Yii::app()->createUrl("admin/categorynews/edit/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']));?>
' >Sửa</a> <a class="btn btn-red" onclick="return confirm('Bạn có chắc chắn xoá');" href='<?php echo Yii::app()->createUrl("admin/categorynews/del/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']));?>
'>Xóa</a> </span></td>
            </tr>
            <?php if (isset($_smarty_tpl->tpl_vars['category']->value['sub_category'][$_smarty_tpl->tpl_vars['k']->value])) {?>
            <?php  $_smarty_tpl->tpl_vars['item1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value['sub_category'][$_smarty_tpl->tpl_vars['k']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item1']->key => $_smarty_tpl->tpl_vars['item1']->value) {
$_smarty_tpl->tpl_vars['item1']->_loop = true;
?>
            <tr <?php if ($_smarty_tpl->tpl_vars['item1']->value['status']=='0') {?>class="alert-danger danger"<?php }?>>
              <td><?php echo $_smarty_tpl->tpl_vars['item1']->value['id'];?>
</td>
              <td><?php if ($_smarty_tpl->tpl_vars['item1']->value['parent_id']!='0') {?> <span class="label label-success">[Cấp 2 - <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
]</span> <?php }?><?php echo $_smarty_tpl->tpl_vars['item1']->value['title'];?>
</td>
              <td><?php if ($_smarty_tpl->tpl_vars['item1']->value['parent_id']!='0') {?><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
<?php }?></td>
              <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item1']->value['create_time'],"%d-%m-%Y");?>
</td>
              <td><a href="<?php echo Yii::app()->createUrl("admin/categorynews/edit/",array('id'=>$_smarty_tpl->tpl_vars['item1']->value['id'],'status'=>$_smarty_tpl->tpl_vars['item1']->value['status']));?>
" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['arr_statuss']->value[$_smarty_tpl->tpl_vars['item1']->value['status']];?>
</a></td>
              <td style="width:250px;"><div class="col-sm-3" style="padding: 0px;">
                  <input class="form-control no-right-border form-focus-purple" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item1']->value['stt'];?>
" name="stt[]">
                </div>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item1']->value['id'];?>
" name="ids[]">
                <span class="input-group-btn">
                <button class="btn btn-purple" value="save" name="save" type="submit">Lưu</button>
                <a class="btn btn-warning" href='<?php echo Yii::app()->createUrl("admin/categorynews/edit/",array('id'=>$_smarty_tpl->tpl_vars['item1']->value['id']));?>
'>Sửa</a> <a class="btn btn-red" onclick="return confirm('Bạn có chắc chắn xoá');" href='<?php echo Yii::app()->createUrl("admin/categorynews/del/",array('id'=>$_smarty_tpl->tpl_vars['item1']->value['id']));?>
'>Xóa</a> </span></td>
            </tr>
            <?php } ?>
            <?php }?>
            <?php } ?>
            <?php } else { ?>
            <tr>
              <td colspan="7" class="alert-danger danger">Không có dữ liệu</td>
            </tr>
            <?php }?>
            </tbody>
          </table>
        </div>
        <?php echo CHtml::endForm();?>
 </div>
    </div>
  </div>
</div>
<?php }} ?>
