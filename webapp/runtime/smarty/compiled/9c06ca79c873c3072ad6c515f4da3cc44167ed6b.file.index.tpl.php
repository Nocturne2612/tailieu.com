<?php /* Smarty version Smarty-3.1.19, created on 2018-06-25 03:43:14
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/admin/views/permission/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:921862655b3064d2ab3733-92315132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c06ca79c873c3072ad6c515f4da3cc44167ed6b' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/admin/views/permission/index.tpl',
      1 => 1529384680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '921862655b3064d2ab3733-92315132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link_action' => 0,
    'get_data' => 0,
    'combo_type' => 0,
    'link_scan' => 0,
    'totalRecord' => 0,
    'error' => 0,
    'data_list' => 0,
    'item' => 0,
    'pageHtml' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b3064d2bb5631_29616321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3064d2bb5631_29616321')) {function content_5b3064d2bb5631_29616321($_smarty_tpl) {?><div class="page-title">
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

            <li class="active">
                <strong>quyền</strong>
            </li>
        </ol>

    </div>

</div>
<a href="<?php echo Yii::app()->createUrl("admin/permission/create/");?>
">  
    <div class="alert alert-info"> Thêm quyền </div>                
</a>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Tìm kiếm quyền</h3>
                <div class="panel-options">
                    <a data-toggle="panel" href="#">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>
                </div>
            </div>

            <!--fillter-->

            <div class="panel-body">
                <?php echo CHtml::beginForm($_smarty_tpl->tpl_vars['link_action']->value,'get',array('enctype'=>'','class'=>'form-inline','name'=>'userform'));?>

                <div class="form-group">
                    <input placeholder="Tên quyền" type="text" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['name'];?>
" />	
                </div>
                <div class="form-group">
                    <?php echo $_smarty_tpl->tpl_vars['combo_type']->value;?>

                </div>    
                <div class="form-group">  
                    <button type="submit" class="btn btn-info btn-single">Tìm kiếm</button>
                    <button type="reset" class="btn btn-warning btn-single" name="reset" value="   " onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['link_action']->value;?>
'">Bỏ lọc</button>
                    <button type="button" class="btn btn-success btn-single" onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['link_scan']->value;?>
'">Quét quyền</button>
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
</strong> quyền</div>
                </h3>
                <div class="panel-options">
                    <a data-toggle="panel" href="#">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>
                </div>
            </div>

            <!--fillter-->

            <div class="panel-body">
                <?php if ($_smarty_tpl->tpl_vars['error']->value!=false) {?>
                    <div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
                <?php }?>
                <div class="table-responsive">
                    <table class="table table-small-font table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên quyền</th>
                                <th>Controller/Action</th>
                                <th>Loại</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            <?php if ($_smarty_tpl->tpl_vars['data_list']->value) {?>

                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['type'];?>
</td>
                                        <td>
                                            <a href="<?php echo Yii::app()->createUrl("admin/permission/edit/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']));?>
">Sửa</a> |                         
                                            <a onclick="return confirm('Bạn có chắc chắn xóa.');" href="<?php echo Yii::app()->createUrl("admin/permission/del/",array('id'=>$_smarty_tpl->tpl_vars['item']->value['id']));?>
">Xóa</a>
                                        </td>
                                    </tr>
                                <?php } ?>

                            <?php } else { ?>
                                <tr><td colspan="5" class="alert-danger danger"> Không có dữ liệu.</td></tr>
                            <?php }?>  
                        </tbody>
                    </table>
                </div>
                <!--Paging--->
                <div class="row"><div class="col-xs-6"> <?php echo $_smarty_tpl->tpl_vars['pageHtml']->value;?>
 </div></div>
            </div>

        </div>
    </div>

</div>      




<?php }} ?>
