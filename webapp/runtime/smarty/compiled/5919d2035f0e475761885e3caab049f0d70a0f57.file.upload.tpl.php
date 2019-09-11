<?php /* Smarty version Smarty-3.1.19, created on 2019-09-10 09:49:45
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/views/account/upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:273513755abc970f0fc0e8-63817676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5919d2035f0e475761885e3caab049f0d70a0f57' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/views/account/upload.tpl',
      1 => 1568001967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273513755abc970f0fc0e8-63817676',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc970f16a3e0_79015131',
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
<?php if ($_valid && !is_callable('content_5abc970f16a3e0_79015131')) {function content_5abc970f16a3e0_79015131($_smarty_tpl) {?>
<div class="user-main">
    <div class="user-main-inner">
        <div class="user-profile">

            <h1>Upload</h1>
            <?php echo CHtml::beginForm('','post',array('name'=>'changepass','id'=>'changepass'));?>

            <div class="user-profile-inner user-connect"> 
                <div class="window-jobCollect-contain">
                    <?php if ($_smarty_tpl->tpl_vars['errors']->value!='') {?>
                        <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['success']->value!='') {?>
                        <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
                    <?php }?>
                    <p class="window-jobCollect-question">Tiêu đề *</p>
                    <div class="window-jobCollect-group _job">
                        <input class="ui-input" id="title" placeholder="" name="title" type="text" data-toggle="popover" required="" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['title'];?>
">

                    </div>
                    <p class="window-jobCollect-question">Danh mục</p>
                    <div class="window-jobCollect-group _job">
                        <?php echo $_smarty_tpl->tpl_vars['combo_category']->value;?>

                    </div>
                    <p class="window-jobCollect-question">POINT *</p>
                    <div class="window-jobCollect-group _job">
                        <input class="ui-input" id="price" placeholder="" name="price" type="text" data-toggle="popover" required="" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['price'];?>
">
                    </div>
                    <p class="window-jobCollect-question">Ảnh bìa đại diện bài viết *</p>
                    <div class="form-item">
                        <input type="file" id="file" name="file[]" class="ui-info">               
                    </div>
                    <br>
                    <p style="font-size: 12px">Chỉ chấp nhận ảnh JPG, PNG, GIF có kích thước < 1000x1000px và dung lượng <2Mb.</p> 
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

                    <p class="window-jobCollect-question">Link Tài liệu</p>
                    <div class="window-jobCollect-group _job">
                        <input type="text" id="link_other" name="link_other" class="ui-input" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['link_other'];?>
" placeholder="Link tải từ các web như Mediafire, Fshare, Google Driver">         
                    </div>
                    <p class="window-jobCollect-question">Từ khóa</p>
                    <div class="window-jobCollect-group _job">
                        <input type="text" class="ui-input" id="tag" name="tag" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['tag'];?>
" placeholder="Từ khóa tìm kiếm">
                    </div>
                    <p style="font-size: 12px">Từ khóa liên quan để công cụ search có thể tìm thấy tài liệu của bạn, VD: Thư viện cad, Thư viện autocad, Cad nội thất...</p>

                    <p class="window-jobCollect-question">Mô tả</p>
                    <div class="window-jobCollect-group _briefly">
                        <textarea class="position_question" id="desc" name="desc" placeholder="Mô tả tài liệu của bạn là tài liệu gì"><?php echo $_smarty_tpl->tpl_vars['params']->value['desc'];?>
</textarea>

                    </div>
                    <p class="window-jobCollect-question">Mã bảo mật</p>
                    <div class="window-jobCollect-group _job ccaptcha">
                        <input class="ui-input" id="verifyCode" name="verifyCode" type="text">
                        <?php echo $_smarty_tpl->tpl_vars['this']->value->widget('CCaptcha',array('id'=>'ccaptcha'),true);?>

                    </div>
                    <button type="submit" href="javascript:;" class="submit">Thực hiện</button>

                </div>
            </div>

            <?php echo CHtml::endForm();?>

        </div>
        
            <style>
                #ccaptcha{width:80px;}
            </style>
            <style>
                #ccaptcha_button {
                    display: none}
            </style>
        
    </div>
</div>











<?php }} ?>
