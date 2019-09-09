<?php /* Smarty version Smarty-3.1.19, created on 2018-07-26 06:54:01
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/admin/views/ads/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8960694855b597009dd93c2-01965635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4a1523416a906150c76594b3708dcb0028ee7f8' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/admin/views/ads/form.tpl',
      1 => 1529384677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8960694855b597009dd93c2-01965635',
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
    'combo_position' => 0,
    'link_images' => 0,
    'combo_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b597009e4a6c3_99336221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b597009e4a6c3_99336221')) {function content_5b597009e4a6c3_99336221($_smarty_tpl) {?>
<div class="page-title">
    <div class="title-env">
        <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['title_page']->value;?>
</h1>
        <p class="description">Thêm, sửa, phân ads</p>
    </div>
    <div class="breadcrumb-env">
        <ol class="breadcrumb bc-1">
            <li> <a href="<?php echo @constant('BASE_URL_ADMIN');?>
"><i class="fa-home"></i>Trang chủ</a> </li>
            <li> <a href="<?php echo $_smarty_tpl->tpl_vars['link_back']->value;?>
">Ads</a> </li>
            <li class="active"> <strong><?php echo $_smarty_tpl->tpl_vars['title_page']->value;?>
</strong> </li>
        </ol>
    </div>
</div>
<div class="panel panel-default">

    <div class="panel-heading hidden-print"><?php echo $_smarty_tpl->tpl_vars['title_page']->value;?>
</div>
    <div class="panel-body">

        <?php echo CHtml::beginForm($_smarty_tpl->tpl_vars['link_action']->value,'post',array('role'=>'form','class'=>'form-horizontal','enctype'=>'multipart/form-data'));?>

        <?php if ($_smarty_tpl->tpl_vars['error']->value!=false) {?>
            <div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
        <?php }?>
        <div class="col-md-12" >
            <div class="form-group">
                <label for="title" class="control-label">Tiêu đề :</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" required=""> 
            </div>
        </div>

        <div class="col-md-12">    
            <div class="form-group">
                <label class="control-label">Vị trí:</label>
                <?php echo $_smarty_tpl->tpl_vars['combo_position']->value;?>

            </div>
        </div>    
        <div class="col-md-12">        
            <div class="form-group">
                <label class="control-label">Ảnh quảng cáo: </label>
                <input type="file" id="file" name="file" data-bfi-disabled>
                <br>
                <?php if ($_smarty_tpl->tpl_vars['data']->value['picture']!='') {?>
                    <a href="javascript:;" onclick="jQuery('#modal').modal('show', {backdrop: 'fade'});"  > <img src="<?php echo $_smarty_tpl->tpl_vars['link_images']->value;?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['picture'];?>
" height="80"/></a>
                    <div class="modal fade custom-width" id="modal">
                        <div class="modal-dialog" style="width: 80%">
                            <div class="modal-content">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>


                                <img src="<?php echo $_smarty_tpl->tpl_vars['link_images']->value;?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['picture'];?>
" width="60%"/>

                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>

        <div class="col-md-12" >
            <div class="form-group">
                <label for="pic_link" class="control-label">Code quảng cáo:</label>

                <textarea  class="form-control" id="pic_link" name="pic_link"><?php echo $_smarty_tpl->tpl_vars['data']->value['pic_link'];?>
</textarea>
            </div>
        </div>

        <div class="col-md-12" >
            <div class="form-group">
                <label for="link" class="control-label">Link quảng cáo:</label>
                <input type="text" class="form-control" id="link" name="link" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['link'];?>
">
            </div>
        </div>  
        <div class="col-md-3" >
            <div class="form-group">
                <label for="stt" class="control-label">STT:</label>
                <input type="number" class="form-control" id="stt" name="stt" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['stt'];?>
">
            </div>
        </div>   <div class="col-md-1"> </div>
        <div class="col-md-3">    
            <div class="form-group">
                <label class="control-label">Trạng thái:</label>
                <?php echo $_smarty_tpl->tpl_vars['combo_status']->value;?>

            </div>
        </div><div class="col-md-1"> </div>
        <div class="col-md-3">    
            <div class="form-group">
                <label class="control-label">Scroll:
                <input class="form-control"  type="checkbox" name="sticky" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['sticky']=='1') {?>checked<?php }?>/></label>
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
<?php }} ?>
