<?php /* Smarty version Smarty-3.1.19, created on 2019-07-16 14:09:35
         compiled from "/var/www/html/modernfuny.com/webapp/modules/tailieu/components/widgets/views/product_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9303077755d2d782fd1e0e6-46097451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0d1665e97f12f6d5d5adc7223d8212f98405c86' => 
    array (
      0 => '/var/www/html/modernfuny.com/webapp/modules/tailieu/components/widgets/views/product_view.tpl',
      1 => 1563125838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9303077755d2d782fd1e0e6-46097451',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'count' => 0,
    'rs' => 0,
    'arr_pic' => 0,
    'count3' => 0,
    'no' => 0,
    'laplai' => 0,
    'count4' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d2d782fd51006_62128509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d2d782fd51006_62128509')) {function content_5d2d782fd51006_62128509($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/html/modernfuny.com/webapp/vendors/smarty/libs/plugins/modifier.replace.php';
?><?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
    <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable(0, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['data']->value), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['count']->value<=2) {?>
        <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
            <li>
                <div class="image">
                    <a href="<?php echo SystemBase::buildUrl('tailieu/document',array('id'=>$_smarty_tpl->tpl_vars['rs']->value['id'],'title'=>$_smarty_tpl->tpl_vars['rs']->value['title']));?>
">
                        <?php if (isset($_smarty_tpl->tpl_vars['rs']->value['picture'])&&$_smarty_tpl->tpl_vars['rs']->value['picture']!='') {?>
                            <?php $_smarty_tpl->tpl_vars["arr_pic"] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['rs']->value['picture']), null, 0);?> <img title="<?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
" src="<?php echo @constant('ROOT_URL');?>
/<?php echo @constant('IMG_PRODUCT_THUMB');?>
<?php echo $_smarty_tpl->tpl_vars['arr_pic']->value[0];?>
" style="margin:-93px 0 0 -125px;"/> <?php }?>
                        </a>
                    </div>
                            <h2><a href="<?php echo SystemBase::buildUrl('tailieu/document',array('id'=>$_smarty_tpl->tpl_vars['rs']->value['id'],'title'=>$_smarty_tpl->tpl_vars['rs']->value['title']));?>
" title="<?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>

                        </a></h2>
                    <p class="category"><?php echo rand('1','5');?>
 <i class="icon-star"></i>  <?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['rs']->value['count_down'],2,",","."),',00','');?>
 <i class="icon-download"></i>

                    </p>
                </li>
                
            <?php } ?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['count3'] = new Smarty_variable(ROUND($_smarty_tpl->tpl_vars['count']->value/2), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['count4'] = new Smarty_variable($_smarty_tpl->tpl_vars['count3']->value, null, 0);?> 
            <?php $_smarty_tpl->tpl_vars['laplai'] = new Smarty_variable(0, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
                <li>
                    <div class="image">
                        <a href="<?php echo SystemBase::buildUrl('tailieu/document',array('id'=>$_smarty_tpl->tpl_vars['rs']->value['id'],'title'=>$_smarty_tpl->tpl_vars['rs']->value['title']));?>
">
                            <?php if (isset($_smarty_tpl->tpl_vars['rs']->value['picture'])&&$_smarty_tpl->tpl_vars['rs']->value['picture']!='') {?>
                                <?php $_smarty_tpl->tpl_vars["arr_pic"] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['rs']->value['picture']), null, 0);?> <img title="<?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
" src="<?php echo @constant('ROOT_URL');?>
/<?php echo @constant('IMG_PRODUCT_THUMB');?>
<?php echo $_smarty_tpl->tpl_vars['arr_pic']->value[0];?>
" style="margin:-93px 0 0 -125px;"/> <?php }?>
                            </a>
                        </div>
                        <h2><a title="<?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
" href="<?php echo SystemBase::buildUrl('tailieu/document',array('id'=>$_smarty_tpl->tpl_vars['rs']->value['id'],'title'=>$_smarty_tpl->tpl_vars['rs']->value['title']));?>
" title="<?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>

                            </a></h2>
                        <p class="category"><?php echo rand('1','5');?>
 <i class="icon-star"></i>  <?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['rs']->value['count_down'],2,",","."),',00','');?>
 <i class="icon-download"></i>

                        </p>
                    </li>
                    <?php if ($_smarty_tpl->tpl_vars['count3']->value==$_smarty_tpl->tpl_vars['no']->value&&$_smarty_tpl->tpl_vars['laplai']->value<=2) {?>
                        <?php if ($_smarty_tpl->tpl_vars['count3']->value>($_smarty_tpl->tpl_vars['count']->value-$_smarty_tpl->tpl_vars['count3']->value)) {?>
                            <?php $_smarty_tpl->tpl_vars['count3'] = new Smarty_variable($_smarty_tpl->tpl_vars['count3']->value+($_smarty_tpl->tpl_vars['count']->value-$_smarty_tpl->tpl_vars['count3']->value), null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['count3'] = new Smarty_variable($_smarty_tpl->tpl_vars['count3']->value+$_smarty_tpl->tpl_vars['count4']->value, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['laplai'] = new Smarty_variable($_smarty_tpl->tpl_vars['laplai']->value+1, null, 0);?>
                        <?php }?>
                        
                    <?php }?>

                <?php } ?>
            <?php }?>

        <?php }?>
        <script>
            $(function () {
                var $ads;
                $('div[id^="adsref-"]').each(function () {
                    $ads = $('#ads-' + this.id.substr(7)).empty();
                    $('ins:first', this).appendTo($ads);
                });
            });
        </script><?php }} ?>
