<?php /* Smarty version Smarty-3.1.19, created on 2019-09-10 09:38:40
         compiled from "/home/tailieuk/public_html/webapp/modules/admin/views/news/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16767537415acc8ee3263970-88692614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab74943913b148e2f9ba5900ebbdf5a9dfbbbfaa' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/admin/views/news/form.tpl',
      1 => 1563752344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16767537415acc8ee3263970-88692614',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5acc8ee3333094_72191033',
  'variables' => 
  array (
    'title_page' => 0,
    'link_news' => 0,
    'link_action' => 0,
    'err' => 0,
    'data' => 0,
    'combo_category' => 0,
    'link_images' => 0,
    'fck_tomtat' => 0,
    'fck_noidung' => 0,
    'combo_status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acc8ee3333094_72191033')) {function content_5acc8ee3333094_72191033($_smarty_tpl) {?><div class="page-title">
    <div class="title-env">
        <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['title_page']->value;?>
</h1>
        <p class="description"><?php echo $_smarty_tpl->tpl_vars['title_page']->value;?>
</p>
    </div>

    <div class="breadcrumb-env">

        <ol class="breadcrumb bc-1">
            <li>
                <a href="<?php echo @constant('BASE_URL_ADMIN');?>
"><i class="fa-home"></i>Trang chủ</a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['link_news']->value;?>
">Danh sách tin tức</a>
            </li>
            <li class="active">
                <strong><?php echo $_smarty_tpl->tpl_vars['title_page']->value;?>
</strong>
            </li>
        </ol>

    </div>

</div>
<div class="container-fluid"> 
    <div class="boxModule">
        <ul class="nav nav-tabs" role="tablist">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['link_news']->value;?>
" role="tab">Danh sách tin tức</a></li>
            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['link_action']->value;?>
" role="tab"><?php echo $_smarty_tpl->tpl_vars['title_page']->value;?>
</a></li>
        </ul>
    </div>
    <div class="row">


        <div class="panel panel-default">
            <div class="panel-body"> 
                <?php if ($_smarty_tpl->tpl_vars['err']->value!='') {?>
                    <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</div>
                <?php }?>
                <?php echo CHtml::beginForm('','post',array('role'=>'form','class'=>'form-wizard','enctype'=>'multipart/form-data'));?>

                <div class="col-md-12" >
                    <div class="form-group">
                        <label for="title" class="control-label">Tiêu đề :</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
">
                    </div>
                </div>
                <div class="col-md-12">    
                    <div class="form-group">
                        <label for="category" class="control-label">Danh mục:</label>
                        <?php echo $_smarty_tpl->tpl_vars['combo_category']->value;?>


                    </div>
                </div>    
                <div class="col-md-12">        
                    <div class="form-group">
                        <label class="control-label">Ảnh bìa: </label>
                        <input type="file" id="file" name="file" data-bfi-disabled>
                        <br>
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['image']!='') {?><img src="<?php echo $_smarty_tpl->tpl_vars['link_images']->value;?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" height="80"/><?php }?>
                    </div>
                </div>
                <div class="col-md-12">          
                    <div class="form-group">
                        <label class="control-label">Tóm tắt:</label>
                        <?php echo $_smarty_tpl->tpl_vars['fck_tomtat']->value;?>

                    </div>

                </div>
                <div class="col-md-12">          
                    <div class="form-group">
                        <label class="control-label">Nội dung:</label>       
                        <?php echo $_smarty_tpl->tpl_vars['fck_noidung']->value;?>

                    </div>

                </div>    

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label" for="tagsinput-1">Tag</label>
                        <input value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tag'];?>
" type="text" class="form-control" name="tag"  maxlength="255"  autocomplete="off"/>	
                    </div>
                </div>     
                <div class="col-md-4">    
                    <div class="form-group">
                        <label class="control-label">Trạng thái:</label>
                        <?php echo $_smarty_tpl->tpl_vars['combo_status']->value;?>

                    </div>
                </div>

                <div class="col-md-3">  
                    <div class="form-group">
                        <label class="control-label"> Tác giả( Nguồn bài viết ): </label> 
                        <input type="text" class="form-control" id="author" name="author" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['author'];?>
">
                    </div>  
                </div> 
                <div class="col-md-3">  
                    <div class="form-group">
                        <label class="control-label"> Nổi bật <input type="checkbox" class="form-control" id="position" name="position" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['position']=='1') {?>checked="checked"<?php }?>> </label> 
                    </div>  
                </div>
                <div class="col-md-12">  
                    <div class="form-group">
                        <label class="control-label"></label>
                        <button type="submit" class="btn btn-warning" name="submit">Cập nhật</button>
                    </div> 
                </div>
                <?php echo CHtml::endForm();?>
  
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


    </script> 
<?php }} ?>
