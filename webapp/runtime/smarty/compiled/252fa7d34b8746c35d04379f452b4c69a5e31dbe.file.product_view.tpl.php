<?php /* Smarty version Smarty-3.1.19, created on 2019-09-09 04:07:41
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/components/widgets/views/product_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10323218165abc88d0a43599-26354836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '252fa7d34b8746c35d04379f452b4c69a5e31dbe' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/components/widgets/views/product_view.tpl',
      1 => 1568001976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10323218165abc88d0a43599-26354836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc88d0ae51d7_38869474',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abc88d0ae51d7_38869474')) {function content_5abc88d0ae51d7_38869474($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/tailieuk/public_html/webapp/vendors/smarty/libs/plugins/modifier.replace.php';
?><?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
    <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable(0, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['data']->value), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['count']->value<=2) {?>
        <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
            <li class="">
                <div class="hover-show">
                    <span class="commercial-use" title="<?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
"></span>
                    <a href="javascript:;" data-id="<?php echo $_smarty_tpl->tpl_vars['rs']->value['id'];?>
" data-type="1" title="Add to favorites" class="hs-star  star-btn-click element-list-click" data-like="4773403_like">
                        <i class="iconfont icon-xin"></i>
                    </a>
                    <a target="_blank" data-down="<?php echo $_smarty_tpl->tpl_vars['rs']->value['id'];?>
_DOWNLOAD" rel="nofollow" href="/element/down?id=NDc3MzQwMw==&type=1" class="hs-downPng down-jpg-click element-list-click">
                        <i class="iconfont icon-xiazai"></i>&nbsp;<?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['rs']->value['count_down'],2,",","."),',00','');?>

                    </a>
                </div>
                <!-- png -->
                <div class="mb-picbox">
                    <?php if (isset($_smarty_tpl->tpl_vars['rs']->value['picture'])&&$_smarty_tpl->tpl_vars['rs']->value['picture']!='') {?>
                            <?php $_smarty_tpl->tpl_vars["arr_pic"] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['rs']->value['picture']), null, 0);?> <img src="<?php echo @constant('ROOT_URL');?>
/<?php echo @constant('IMG_PRODUCT_THUMB');?>
<?php echo $_smarty_tpl->tpl_vars['arr_pic']->value[0];?>
" title="<?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
" class="lazy"><?php }?>
                    <a target="_blank" data-ga="<?php echo $_smarty_tpl->tpl_vars['rs']->value['id'];?>
_ImgUrl" title="<?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
" href="<?php echo SystemBase::buildUrl('tailieu/document',array('id'=>$_smarty_tpl->tpl_vars['rs']->value['id'],'title'=>$_smarty_tpl->tpl_vars['rs']->value['title']));?>
" class="tran element-list-click"></a>
                </div>
                <p class="pic-detail text-overflow"><?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
</p>
                <!-- infor -->
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
            <li class="li-box grid-sizer search_keyword_statis_js" data-id="<?php echo $_smarty_tpl->tpl_vars['rs']->value['id'];?>
">
                <div class="hover-show">
                    <span class="commercial-use" title="<?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
"></span>
                    <a href="javascript:;" data-id="<?php echo $_smarty_tpl->tpl_vars['rs']->value['id'];?>
" data-type="1" title="Add to favorites" class="hs-star  star-btn-click element-list-click" data-like="<?php echo $_smarty_tpl->tpl_vars['rs']->value['id'];?>
_like">
                        <i class="iconfont icon-xin"></i>
                    </a>
                    <a target="_blank" data-down="<?php echo $_smarty_tpl->tpl_vars['rs']->value['id'];?>
_DOWNLOAD" rel="nofollow" href="<?php echo SystemBase::buildUrl('tailieu/download',array('id'=>$_smarty_tpl->tpl_vars['rs']->value['id'],'title'=>$_smarty_tpl->tpl_vars['rs']->value['title']));?>
" class="hs-downPng down-jpg-click element-list-click">
                        <i class="iconfont icon-xiazai"></i>&nbsp;<?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['rs']->value['count_down'],2,",","."),',00','');?>

                    </a>
                </div>
                <!-- png -->
                <div class="mb-picbox">
                    <?php if (isset($_smarty_tpl->tpl_vars['rs']->value['picture'])&&$_smarty_tpl->tpl_vars['rs']->value['picture']!='') {?>
                            <?php $_smarty_tpl->tpl_vars["arr_pic"] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['rs']->value['picture']), null, 0);?> <img src="<?php echo @constant('ROOT_URL');?>
/<?php echo @constant('IMG_PRODUCT_THUMB');?>
<?php echo $_smarty_tpl->tpl_vars['arr_pic']->value[0];?>
" title="<?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
" class="lazy"><?php }?>
                    <a target="_blank" data-ga="<?php echo $_smarty_tpl->tpl_vars['rs']->value['id'];?>
_ImgUrl" title="<?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
" href="<?php echo SystemBase::buildUrl('tailieu/document',array('id'=>$_smarty_tpl->tpl_vars['rs']->value['id'],'title'=>$_smarty_tpl->tpl_vars['rs']->value['title']));?>
" class="tran element-list-click"></a>
                </div>
                <p class="pic-detail text-overflow"><?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
</p>
                <!-- infor -->
            </li>
            <div class="gutter-sizer"></div>
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
