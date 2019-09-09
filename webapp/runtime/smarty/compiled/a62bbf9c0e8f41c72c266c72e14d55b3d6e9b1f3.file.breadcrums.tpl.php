<?php /* Smarty version Smarty-3.1.19, created on 2019-09-09 04:19:08
         compiled from "/home/tailieuk/public_html/webapp/modules/tailieu/components/widgets/views/breadcrums.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19293231535abc88d09fbcc8-17360692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a62bbf9c0e8f41c72c266c72e14d55b3d6e9b1f3' => 
    array (
      0 => '/home/tailieuk/public_html/webapp/modules/tailieu/components/widgets/views/breadcrums.tpl',
      1 => 1568001974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19293231535abc88d09fbcc8-17360692',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abc88d0a3ac37_31420222',
  'variables' => 
  array (
    'output' => 0,
    'data_p' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abc88d0a3ac37_31420222')) {function content_5abc88d0a3ac37_31420222($_smarty_tpl) {?><div class="rdfa-breadcrumb">

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
