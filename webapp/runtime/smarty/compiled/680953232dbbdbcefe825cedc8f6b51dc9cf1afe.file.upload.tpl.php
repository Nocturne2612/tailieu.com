<?php /* Smarty version Smarty-3.1.19, created on 2018-12-07 03:32:56
         compiled from "/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/account/upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13685244295b28aa0b3ad0a8-76028493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '680953232dbbdbcefe825cedc8f6b51dc9cf1afe' => 
    array (
      0 => '/home/tailieu1/tailieukientruc.net/webapp/modules/tailieu/views/account/upload.tpl',
      1 => 1544151626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13685244295b28aa0b3ad0a8-76028493',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b28aa0b41b6d2_31490795',
  'variables' => 
  array (
    'errors' => 0,
    'success' => 0,
    'params' => 0,
    'combo_category' => 0,
    'arr_img' => 0,
    'link_images_full' => 0,
    'link_images' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28aa0b41b6d2_31490795')) {function content_5b28aa0b41b6d2_31490795($_smarty_tpl) {?>
<div class="common-mains">
    <div class="about-content">

        <h1>Upload tài liệu</h1>
        <?php echo CHtml::beginForm('','post',array('name'=>'upload','id'=>'upload','enctype'=>'multipart/form-data'));?>


        <div class="panel-body fn-clear"> 
            <div class="ui-box panel sign-panel" id="signin-panel" style="width: 100%">

                <?php if ($_smarty_tpl->tpl_vars['errors']->value!='') {?>
                    <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['success']->value!='') {?>
                    <div class="" style="margin: 0 0 20px 0;color: #468847;
                         background-color: #dff0d8;
                         border-color: #d3e2c7;font-size: 14px;
                         cursor: pointer;
                         padding: 10px 20px 10px 14px;
                         margin-top: 20px;
                         text-shadow: 0 1px 0 #fff;
                         border: 1px solid #eadcc0;
                         position: relative;
                         border-radius: 3px;"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>

                <?php }?>
                <div class="ui-form-item fn-clear">
                    <label class="ui-label">Tiêu đề  *</label>
                    <input type="text" class="ui-input" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['title'];?>
" required="" placeholder="Bắt buộc nhập">
                </div>
                <div class="ui-form-item fn-clear">
                    <label class="ui-label">Thuộc danh mục  *</label>
                    <?php echo $_smarty_tpl->tpl_vars['combo_category']->value;?>

                </div>    

                <div class="ui-form-item fn-clear">
                    <label class="ui-label">Ảnh bìa đại diện bài viết *</label>
                    <input type="file" id="file" name="file[]" class="ui-info">                 
                </div> 
				<div class="ui-form-item fn-clear">
                    <label class="ui-label">&nbsp;</label>
                    <div style="">Chỉ chấp nhận ảnh JPG, PNG, GIF có kích thước < 1000x1000px và dung lượng <2Mb.</div> 
                </div>	
                <div class="ui-form-item fn-clear">
                    <label class="ui-label">Số POINT  *</label>
                    <input type="number" class="ui-input" id="price" name="price" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['price'];?>
" required="" placeholder="Bắt buộc nhập">
                </div>
                <?php if (isset($_smarty_tpl->tpl_vars['params']->value['picture2'])&&$_smarty_tpl->tpl_vars['params']->value['picture2']!='') {?> 
                     <div class="ui-form-item fn-clear">
                    <label class="ui-label">&nbsp;</label>
                    <div style=""><?php $_smarty_tpl->tpl_vars["arr_img"] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['params']->value['picture2']), null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['arr_img']->value!='') {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['link_images_full']->value;?>
<?php echo $_smarty_tpl->tpl_vars['arr_img']->value[0];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['link_images']->value;?>
<?php echo $_smarty_tpl->tpl_vars['arr_img']->value[0];?>
" width="80"/> </a>
                            <?php }?>
                        </div>
                </div>
                       <?php }?> 
                
                
                <!--<div class="ui-form-item fn-clear">
                    <label class="ui-label">File</label>
                    <input type="file" id="file" name="file_tailieu" class="ui-input">
                </div>
                    <?php if (isset($_smarty_tpl->tpl_vars['params']->value['file'])) {?>
                     <div class="ui-form-item fn-clear">
                    <label class="ui-label">&nbsp;</label>
                    <div style=""> Tài liệu: <strong><?php echo $_smarty_tpl->tpl_vars['params']->value['file'];?>
</strong></div>
                </div> 
                     <?php }?>
                <div class="ui-form-item fn-clear">
                    <label class="ui-label">&nbsp;</label>
                    <div style="">Chỉ chấp nhận File định dạng rar,zip,7z có dung lượng <10Mb.</div>
                </div> -->
				
				
                <div class="ui-form-item fn-clear">
                    <label class="ui-label">Link tài liệu</label>
                    <input type="text" id="link_other" name="link_other" class="ui-input" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['link_other'];?>
" placeholder="Link tải từ các web như Mediafire, Fshare, Google Driver">
                </div>
                <div class="ui-form-item fn-clear">
                    <label class="ui-label">Từ khóa</label>
                    <input type="text" class="ui-input" id="tag" name="tag" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['tag'];?>
" placeholder="Từ khóa tìm kiếm">
                </div>  
                    <div class="ui-form-item fn-clear">
                    <label class="ui-label">&nbsp;</label>
                    <div style="">Từ khóa liên quan để công cụ search có thể tìm thấy tài liệu của bạn, VD: Thư viện cad, Thư viện autocad, Cad nội thất...</div>
                </div>
                <div class="ui-form-item fn-clear">
                    <label class="ui-label">Mô tả</label>
                    <textarea class="ui-input" id="desc" name="desc" placeholder="Mô tả tài liệu của bạn là tài liệu gì"><?php echo $_smarty_tpl->tpl_vars['params']->value['desc'];?>
</textarea>
                </div>     
                <div class="ui-form-item fn-clear">
                    <label for="" class="ui-label">Mã bảo mật:</label>
                    <div class="col-sm-3 pdr5">
                        <input class="ui-input" id="verifyCode" name="verifyCode" type="text">
                    </div>
                    <div class="col-sm-3 pdl5"> <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('CCaptcha',array('id'=>'ccaptcha'),true);?>
 </div>
                </div>
                <div class="ui-form-item fn-clear">
                    <input type="submit" class="btn btn-warning"  value="Cập nhật">
					
					<label class="ui-label">&nbsp;</label><br>
                    <div style="color: red"><i>Lưu ý: File upload của bạn cần nhập đầy đủ các thông tin bên trên, và sẽ được duyệt trong vòng 1-3 ngày làm việc.</i></div>
                </div>
            </div>
        </div>
        <?php echo CHtml::endForm();?>

    </div>
</div>

    <style>
        #ccaptcha{width:80px;}
    </style>
    <style>
        #ccaptcha_button {
            display: none}
    </style>
<?php }} ?>
