<?php /* Smarty version Smarty-3.1.19, created on 2019-07-21 21:26:13
         compiled from "D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/views/account/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212785d33da1f9ec708-70147470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65ed45aecc45870c293a0aba398eee360d421f72' => 
    array (
      0 => 'D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/views/account/index.tpl',
      1 => 1563744367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212785d33da1f9ec708-70147470',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d33da1fd55738_71885721',
  'variables' => 
  array (
    'transactions' => 0,
    't' => 0,
    'arr_pic' => 0,
    'arr_status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d33da1fd55738_71885721')) {function content_5d33da1fd55738_71885721($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\xampp\\htdocs\\du_an\\tailieukientruc\\webapp\\vendors\\smarty\\libs/plugins/modifier.replace.php';
?>

<div class="user-list-wrap">
    <h1>Lịch sử download</h1>
    <ul class="mb-box masonry-element  clearfix tpl-ul">
            <?php if ($_smarty_tpl->tpl_vars['transactions']->value) {?>
                <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['transactions']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
                <li class="user-gditem">
                    <div class="user-gditem-inner">
                        <div class="item-img">
                            <a target="_blank" href="<?php echo SystemBase::buildUrl('tailieu/document',array('title'=>$_smarty_tpl->tpl_vars['t']->value['title'],'id'=>$_smarty_tpl->tpl_vars['t']->value['id_product']));?>
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
                            <span class="item-size"><?php echo $_smarty_tpl->tpl_vars['arr_status']->value[$_smarty_tpl->tpl_vars['t']->value['status']];?>
&nbsp;&nbsp; </span>
                        </div>
                    </div>
                </li>
                <div class="gutter-sizer"></div>
            <?php } ?>
            <?php echo $_smarty_tpl->tpl_vars['transactions']->value['pageHtml'];?>

        <?php } else { ?>
            <tr class="danger">
                <td colspan="6" align="center">Không tồn tại tài liệu</td>
            </tr>
        <?php }?>

    </ul>
</div>



<?php }} ?>
