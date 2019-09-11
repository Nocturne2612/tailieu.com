<?php /* Smarty version Smarty-3.1.19, created on 2019-09-10 09:48:55
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/views/account/history_upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7014461655abd13d2709d38-02179555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70bb0a1a52cd367b39b3275edd0d9861df12e145' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/views/account/history_upload.tpl',
      1 => 1568001966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7014461655abd13d2709d38-02179555',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abd13d277f348_05587602',
  'variables' => 
  array (
    'product' => 0,
    't' => 0,
    'arr_pic' => 0,
    'arr_status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abd13d277f348_05587602')) {function content_5abd13d277f348_05587602($_smarty_tpl) {?><div class="user-main user-main-inner">
    <h1>Lịch sử Upload</h1>
    <ul class="mb-box masonry-element  clearfix tpl-ul">
            <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
                <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
                <li class="user-gditem">
                    <div class="user-gditem-inner">
                        <div class="item-img">
                            <a target="_blank" href="<?php echo SystemBase::buildUrl('tailieu/document',array('title'=>$_smarty_tpl->tpl_vars['t']->value['title'],'id'=>$_smarty_tpl->tpl_vars['t']->value['id']));?>
" class="item-link"></a>
                            
                            <?php if (isset($_smarty_tpl->tpl_vars['t']->value['picture'])&&$_smarty_tpl->tpl_vars['t']->value['picture']!='') {?>
                            <?php $_smarty_tpl->tpl_vars["arr_pic"] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['t']->value['picture']), null, 0);?> 
                             <img src="<?php echo @constant('ROOT_URL');?>
/<?php echo @constant('IMG_PRODUCT_THUMB');?>
<?php echo $_smarty_tpl->tpl_vars['arr_pic']->value[0];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['t']->value['title'];?>
"  >
                            <?php }?>
                           
                        </div>
                        <h4 class="item-title"><?php echo $_smarty_tpl->tpl_vars['t']->value['title'];?>
</h4>
                        <div class="item-info">
                            <span class="item-size"><?php echo @constant('POINT_ADD_UPLOAD');?>
 POINT </span>
                            <span class="item-size"><?php echo $_smarty_tpl->tpl_vars['arr_status']->value[$_smarty_tpl->tpl_vars['t']->value['status']];?>
&nbsp;&nbsp; </span>
                        </div>
                    </div>
                </li>
                <div class="gutter-sizer"></div>
            <?php } ?>
            <?php echo $_smarty_tpl->tpl_vars['product']->value['pageHtml'];?>

        <?php } else { ?>
            <tr class="danger">
                <td colspan="6" align="center">Không tồn tại tài liệu</td>
            </tr>
        <?php }?>

    </ul>
</div><?php }} ?>
