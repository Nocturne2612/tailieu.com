<?php /* Smarty version Smarty-3.1.19, created on 2018-06-09 02:12:08
         compiled from "/home/tailieuk/public_html/webapp/modules/admin/views/permission/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54706185b1b37782d7711-74018595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2ffd26e457f28c5a532b96e11046d8e2bb03a37' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/admin/views/permission/form.tpl',
      1 => 1522308730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54706185b1b37782d7711-74018595',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link_account' => 0,
    'data' => 0,
    'err' => 0,
    'combo_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b1b377836a873_29981027',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1b377836a873_29981027')) {function content_5b1b377836a873_29981027($_smarty_tpl) {?><div class="page-title">
    <div class="title-env">
           <h1 class="title">Danh sách quyền</h1>
        <p class="description">Thêm, sửa, xóa</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1">
            <li>
                <a href="<?php echo @constant('BASE_URL_ADMIN');?>
"><i class="fa-home"></i>Trang chủ</a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['link_account']->value;?>
">Quyền</a>
            </li>
            <li class="active">
                <strong>Thông tin quyền</strong>
            </li>
        </ol>

    </div>

</div>
<a href="<?php echo Yii::app()->createUrl("admin/permission/create/");?>
">  
    <div class="alert alert-info"> Thêm quyền </div>                
</a>
<div class="panel panel-default"> 
    <h3 class="panel-title">Thông tin quyền <?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</h3>
    <div class="panel-body">        
        <div class="row">

            <?php if ($_smarty_tpl->tpl_vars['err']->value!='') {?>
                <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</div>
            <?php }?>

            <?php echo CHtml::beginForm('','post',array('role'=>'form','class'=>'form-horizontal'));?>

            <div class="form-group">
                <label class="col-sm-2 control-label">Tên quyền:</label>
                <div class="col-sm-9">                   
                    <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
" id="name" class="form-control" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Controller/Action:</label>
                <div class="col-sm-9">
                    <input type="text" name="value" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['value'];?>
" id="value" class="form-control" />
                </div>
            </div>

           
            <div class="form-group">
                <label class="col-sm-2 control-label">Loại:</label>
                <div class="col-sm-9">
                   <?php echo $_smarty_tpl->tpl_vars['combo_type']->value;?>

                </div>
            </div>
               
            <div class="form-group"> 
               
                <label class="col-sm-2"></label>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-success" name="edit" value="   ">Cập nhật</button>
                    <button type="button" class="btn btn-default pull-right" name="reset" value="   " onclick="window.history.back();">Quay lại</button>
                </div>
            </div>        
            <?php echo CHtml::endForm();?>
  
        </div>
    </div>
</div>
<?php }} ?>
