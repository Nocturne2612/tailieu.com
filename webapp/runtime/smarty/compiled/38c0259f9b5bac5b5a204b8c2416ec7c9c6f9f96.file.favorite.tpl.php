<?php /* Smarty version Smarty-3.1.19, created on 2019-07-21 21:33:53
         compiled from "D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/views/account/favorite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127015d34d93b58bb59-57750313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38c0259f9b5bac5b5a204b8c2416ec7c9c6f9f96' => 
    array (
      0 => 'D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/views/account/favorite.tpl',
      1 => 1563744831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127015d34d93b58bb59-57750313',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d34d93b751e98_78255158',
  'variables' => 
  array (
    'product' => 0,
    't' => 0,
    'arr_pic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d34d93b751e98_78255158')) {function content_5d34d93b751e98_78255158($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\xampp\\htdocs\\du_an\\tailieukientruc\\webapp\\vendors\\smarty\\libs/plugins/modifier.replace.php';
?><div class="user-list-wrap">
    <h1>Lịch sử Upload</h1>
    <ul class="mb-box masonry-element  clearfix tpl-ul">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['data']) {?>
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
                            <span class="item-size"><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['t']->value['price'],2,",","."),',00','');?>
 POINT </span>
                            <span class="item-size"><?php echo $_smarty_tpl->tpl_vars['t']->value['title'];?>
&nbsp;&nbsp; </span>
                        </div>
                    </div>
                </li>
                <div class="gutter-sizer"></div>
            <?php } ?>
            <?php echo $_smarty_tpl->tpl_vars['product']->value['pageHtml'];?>

        <?php } else { ?>
            <li class="user-gditem">
                <div class="user-gditem-inner">
                    <div class="item-info">
                        <span class="item-size">Không tồn tại tài liệu </span>
                    </div>
                </div>
            </li>
        <?php }?>

    </ul>
</div>



















<?php }} ?>
