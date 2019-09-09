<?php /* Smarty version Smarty-3.1.19, created on 2018-01-26 02:38:25
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/admin/views/category/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203751259859cb4d5a601821-03690711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38e703755747696175ec1b8c84e7a233eee42d2b' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/admin/views/category/index.tpl',
      1 => 1512951054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203751259859cb4d5a601821-03690711',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59cb4d5a666305_38439078',
  'variables' => 
  array (
    'link_action' => 0,
    'get_data' => 0,
    'error' => 0,
    'success' => 0,
    'totalRecord' => 0,
    'output' => 0,
    'output_tr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cb4d5a666305_38439078')) {function content_59cb4d5a666305_38439078($_smarty_tpl) {?><div class="page-title">
    <div class="title-env">
        <h1 class="title">Danh sách danh mục</h1>
        <p class="description">Thêm, sửa, xóa danh mục</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1">
            <li>
                <a href="<?php echo @constant('BASE_URL_ADMIN');?>
"><i class="fa-home"></i>Trang chủ</a>
            </li>

            <li class="active">
                <strong>Danh mục</strong>
            </li>
        </ol>

    </div>

</div>
<a href="<?php echo Yii::app()->createUrl("admin/category/create/");?>
">  
    <div class="alert alert-info"> Thêm danh mục </div>                
</a>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Tìm kiếm danh mục</h3>
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
                    <input placeholder="Tên danh mục" type="text" class="form-control" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['get_data']->value['title'];?>
" />	
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info btn-single">Tìm kiếm</button>
                    <button type="reset" class="btn btn-warning btn-single" name="reset" value="   " onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['link_action']->value;?>
'">Bỏ lọc</button>

                    <button type="submit" class="btn btn-single btn-danger" name="cache" value="1">Tạo cache</button>
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
            <?php if ($_smarty_tpl->tpl_vars['error']->value!=false) {?>
                <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['success']->value!=false) {?>
                <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
            <?php }?>
            <div class="panel-heading">
                <h3 class="panel-title"> 
                    <div class="pull-left">Có <strong class="blueFont"><?php echo $_smarty_tpl->tpl_vars['totalRecord']->value;?>
</strong> danh mục</div>
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
                <div class="table-responsive">
                    <table class="table table-small-font table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Loại danh mục</th>
                                <th>Số thứ tự</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            <?php if ($_smarty_tpl->tpl_vars['output']->value) {?>
                                <?php echo $_smarty_tpl->tpl_vars['output_tr']->value;?>


                            <?php } else { ?>
                                <tr><td colspan="5"> Không có dữ liệu.</td></tr>
                            <?php }?>  
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

</div>      

<?php }} ?>
