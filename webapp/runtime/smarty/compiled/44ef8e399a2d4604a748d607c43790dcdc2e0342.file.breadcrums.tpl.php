<?php /* Smarty version Smarty-3.1.19, created on 2017-12-11 07:11:03
         compiled from "/home/iyuyjfxt/public_html/webapp/modules/tailieu/components/widgets/views/breadcrums.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1351796052598139e33b0934-05493887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44ef8e399a2d4604a748d607c43790dcdc2e0342' => 
    array (
      0 => '/home/iyuyjfxt/public_html/webapp/modules/tailieu/components/widgets/views/breadcrums.tpl',
      1 => 1512951055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1351796052598139e33b0934-05493887',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_598139e33fd9a6_64376744',
  'variables' => 
  array (
    'output' => 0,
    'data_p' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598139e33fd9a6_64376744')) {function content_598139e33fd9a6_64376744($_smarty_tpl) {?><div class="rdfa-breadcrumb">

    <div xmlns:v="http://rdf.data-vocabulary.org/#">
        <span typeof="v:Breadcrumb">
            <a rel="v:url" property="v:title" href="<?php echo @constant('ROOT_URL');?>
" class="home">Trang chủ</a>
        </span>
        &raquo
        <?php if ($_smarty_tpl->tpl_vars['output']->value['parent_id']>0) {?> 

            <span typeof="v:Breadcrumb">
                <a rel="v:url" property="v:title" href="<?php echo SystemBase::buildUrl('tailieu/categorydocument',array('title'=>$_smarty_tpl->tpl_vars['data_p']->value['title']));?>
" title="<?php echo $_smarty_tpl->tpl_vars['data_p']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['data_p']->value['title'];?>
</a>
            </span>&raquo
            <?php if ($_smarty_tpl->tpl_vars['controller']->value!='search') {?>
                <span typeof="v:Breadcrumb">
                    <a rel="v:url" property="v:title" href="<?php echo SystemBase::buildUrl('tailieu/categorydocument',array('title'=>$_smarty_tpl->tpl_vars['output']->value['title']));?>
" title="<?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
</a>
                </span>
            <?php } else { ?>
                <span typeof="v:Breadcrumb">
                    <a rel="v:url" property="v:title" href="<?php echo SystemBase::buildUrl('tailieu/search',array('keyword'=>$_smarty_tpl->tpl_vars['output']->value['title'],'platforms'=>$_smarty_tpl->tpl_vars['output']->value['parent_id']));?>
" title="<?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
</a>
                </span>
            <?php }?>
        <?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['controller']->value!='search') {?>
                <span typeof="v:Breadcrumb">
                    <a rel="v:url" property="v:title" href="<?php echo SystemBase::buildUrl('tailieu/categorydocument',array('title'=>$_smarty_tpl->tpl_vars['output']->value['title']));?>
" title="<?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
</a>
                </span>
            <?php } else { ?>
                <span typeof="v:Breadcrumb">
                    <a rel="v:url" property="v:title" href="<?php echo SystemBase::buildUrl('tailieu/search',array('keyword'=>$_smarty_tpl->tpl_vars['output']->value['title'],'platforms'=>$_smarty_tpl->tpl_vars['output']->value['parent_id']));?>
" title="<?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['output']->value['title'];?>
</a>
                </span>
            <?php }?>
        <?php }?>
    </div>
</div>




<?php }} ?>
