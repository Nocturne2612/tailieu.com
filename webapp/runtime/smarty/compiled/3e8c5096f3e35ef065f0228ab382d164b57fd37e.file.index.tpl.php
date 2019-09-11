<?php /* Smarty version Smarty-3.1.19, created on 2019-09-10 17:49:02
         compiled from "/home/tailieuk/public_html/webapp/modules/admin/views/link/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:290233475ad2a80a19c430-38860567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e8c5096f3e35ef065f0228ab382d164b57fd37e' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/admin/views/link/index.tpl',
      1 => 1568137731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290233475ad2a80a19c430-38860567',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad2a80a1e6fc2_30830991',
  'variables' => 
  array (
    'counts' => 0,
    'links' => 0,
    'item' => 0,
    'link_images' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad2a80a1e6fc2_30830991')) {function content_5ad2a80a1e6fc2_30830991($_smarty_tpl) {?><div class="page-title">
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
<a href="<?php echo Yii::app()->createUrl("admin/link/create/");?>
">  
    <div class="alert alert-info"> Thêm Link </div>
</a>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"> 
                    <div class="pull-left">Có <strong class="blueFont"><?php echo $_smarty_tpl->tpl_vars['counts']->value;?>
</strong> danh mục</div>
                </h3>
                <div class="panel-options">
                    <a data-toggle="panel" href="#">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>
                </div>
                <div class="clearfix"></div> 
            </div>

            <!--fillter-->

            <div class="panel-body">  
                <?php echo CHtml::beginForm(Yii::app()->createUrl("admin/link/edit/"),'post',array('role'=>'form','class'=>'form-horizontal'));?>

                <div class="table-responsive">
                    <table class="table table-small-font table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cột</th>
                                <th>Text hiển thị</th>
                                <th>Vị trí</th>
                                <th>Link</th>
                                <th>Ảnh Nền</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                        <?php if ($_smarty_tpl->tpl_vars['links']->value) {?>
                          <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                            <tr>
                                <th><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</th>
                                <th>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['type']==1) {?>
                                        TRANG
                                    <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']==2) {?>
                                        TRỢ GIÚP
                                    <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type']==3) {?>
                                        PHÁP LÝ
                                    <?php } else { ?>
                                        MẠNG XÃ HỘI    
                                    <?php }?>
                                </th>
                                <th><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['item']->value['position'];?>
</th>
                                <th><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
</a></th>
                                <td><?php if ($_smarty_tpl->tpl_vars['item']->value['image']!='') {?><img src="<?php echo $_smarty_tpl->tpl_vars['link_images']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="50"/><?php }?></td>
                                <th style="width:250px;">
                                <span class="input-group-btn">                                   
                                    <a class="btn btn-warning" href='<?php echo Yii::app()->createUrl("admin/link/view/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']));?>
' >Sửa</a>
                                    <a class="btn btn-red" onclick="return confirm('Bạn có chắc chắn xoá');" href='<?php echo Yii::app()->createUrl("admin/link/del/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']));?>
'>Xóa</a>
                                </span>
                                </th>
                            </tr>
                          <?php } ?>
                        <?php } else { ?> 
                            <tr> <td colspan="6" class="alert-danger danger">Không có dữ liệu</td></tr>  
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
