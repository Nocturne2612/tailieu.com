<?php /* Smarty version Smarty-3.1.19, created on 2018-06-20 10:07:23
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/admin/views/categoryproducts/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1433297375b2a275b8ae767-65913929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84de62e230a6c7ace7bd6c9a9c766951118fe60d' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/admin/views/categoryproducts/index.tpl',
      1 => 1529384679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1433297375b2a275b8ae767-65913929',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'item' => 0,
    'arr_status' => 0,
    'arr_statuss' => 0,
    'k' => 0,
    'item1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b2a275b9a63a2_89792408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2a275b9a63a2_89792408')) {function content_5b2a275b9a63a2_89792408($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/tailieu1/tailieukientruc.net/webapp/vendors/smarty/libs/plugins/modifier.date_format.php';
?><div class="page-title">
    <div class="title-env">
        <h1 class="title">Danh mục tài liệu</h1>
        <p class="description">Thêm, sửa, xóa danh mục tài liệu</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1">
            <li>
                <a href="<?php echo @constant('BASE_URL_ADMIN');?>
"><i class="fa-home"></i>Trang chủ</a>
            </li>

            <li class="active">
                <strong>Danh mục tài liệu</strong>
            </li>
        </ol>

    </div>

</div>
<a href="<?php echo Yii::app()->createUrl("admin/categoryproducts/create/");?>
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
                <div class="panel-options">
                    <a data-toggle="panel" href="#">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>
                </div>
                <div class="clearfix"></div>

                <?php echo CHtml::beginForm('','get',array('enctype'=>'','class'=>'form-inline','name'=>'userform'));?>

                <button type="submit" class="btn btn-single btn-danger" name="cache" value="1">Tạo cache</button>

                <?php echo CHtml::endForm();?>
 
            </div>

            <!--fillter-->

            <div class="panel-body">  
                <?php echo CHtml::beginForm(Yii::app()->createUrl("admin/categoryproducts/edit/"),'post',array('role'=>'form','class'=>'form-horizontal'));?>

                <div class="table-responsive">
                    <table class="table table-small-font table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Danh mục cha</th>
                                <th>Link</th>
                                <th>Thời gian tạo</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>

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
                                    <tr <?php if ($_smarty_tpl->tpl_vars['item']->value['status']!='1') {?>class="alert-danger danger"<?php }?>>
                                        <th><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
<br> </th>
                                          <th></th>
                                        <td> <?php echo SystemBase::buildUrl('tailieu/categorydocument',array('title'=>$_smarty_tpl->tpl_vars['item']->value['title']));?>
</td>
                                      
                                        <th><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['create_time'],"%d-%m-%Y");?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['arr_status']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
 - <a href="<?php echo Yii::app()->createUrl("admin/categoryproducts/edit/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id'],'status'=>$_smarty_tpl->tpl_vars['item']->value['status']));?>
" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['arr_statuss']->value[$_smarty_tpl->tpl_vars['item']->value['status']];?>
</a></th>
                                        <th style="width:250px;">
                                <div class="col-sm-3" style="padding: 0px;">
                                    <input class="form-control no-right-border form-focus-purple" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['stt'];?>
" name="stt[]">
                                </div>
                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" name="ids[]">
                                <span class="input-group-btn">                                   
                                    <button class="btn btn-purple" name="save" type="submit" value="save">Lưu</button>                                        
                                    <a class="btn btn-warning" href='<?php echo Yii::app()->createUrl("admin/categoryproducts/edit/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']));?>
' >Sửa</a>
                                    <a class="btn btn-red" onclick="return confirm('Bạn có chắc chắn xoá');" href='<?php echo Yii::app()->createUrl("admin/categoryproducts/del/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']));?>
'>Xóa</a>
                                </span>

                                </th>

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
                                            <td><?php if ($_smarty_tpl->tpl_vars['item1']->value['parent_id']!='0') {?>  <span class="label label-success">[Cấp 2 - <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
]</span> <?php }?><?php echo $_smarty_tpl->tpl_vars['item1']->value['title'];?>
<br></td>
                                            <td><?php if ($_smarty_tpl->tpl_vars['item1']->value['parent_id']!='0') {?><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
<?php }?></td>
                                            <td>
                                         <?php echo SystemBase::buildUrl('tailieu/categorydocument',array('title'=>$_smarty_tpl->tpl_vars['item']->value['title']));?>
</td>
                                            
                                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item1']->value['create_time'],"%d-%m-%Y");?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['arr_status']->value[$_smarty_tpl->tpl_vars['item1']->value['status']];?>
 -<a href="<?php echo Yii::app()->createUrl("admin/categoryproducts/edit/",array('id'=>$_smarty_tpl->tpl_vars['item1']->value['id'],'status'=>$_smarty_tpl->tpl_vars['item1']->value['status']));?>
" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['arr_statuss']->value[$_smarty_tpl->tpl_vars['item1']->value['status']];?>
</a></td>
                                            <td>
                                                <div class="col-sm-3" style="padding: 0px;">
                                                    <input class="form-control no-right-border form-focus-purple" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item1']->value['stt'];?>
" name="stt[]">
                                                </div>
                                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item1']->value['id'];?>
" name="ids[]">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-purple" name="save" type="submit" value="save">Lưu</button>
                                                    <a class="btn btn-warning" href='<?php echo Yii::app()->createUrl("admin/categoryproducts/edit/",array('id'=>$_smarty_tpl->tpl_vars['item1']->value['id']));?>
'>Sửa</a>
                                                    <a class="btn btn-red" onclick="return confirm('Bạn có chắc chắn xoá');" href='<?php echo Yii::app()->createUrl("admin/categoryproducts/del/",array('id'=>$_smarty_tpl->tpl_vars['item1']->value['id']));?>
'>Xóa</a>
                                                </span>


                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php }?>
                            <?php } ?>
                        <?php } else { ?> 
                            <tr> <td colspan="7" class="alert-danger danger">Không có dữ liệu</td></tr>  
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
