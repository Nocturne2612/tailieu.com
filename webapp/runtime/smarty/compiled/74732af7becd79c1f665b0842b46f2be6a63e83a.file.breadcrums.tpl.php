<?php /* Smarty version Smarty-3.1.19, created on 2019-07-20 11:06:40
         compiled from "D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/components/widgets/views/breadcrums.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304675d2e8c4a60e1c7-89896547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74732af7becd79c1f665b0842b46f2be6a63e83a' => 
    array (
      0 => 'D:/xampp/htdocs/du_an/tailieukientruc/webapp/modules/tailieu/components/widgets/views/breadcrums.tpl',
      1 => 1563617327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304675d2e8c4a60e1c7-89896547',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d2e8c4a6a5019_48448695',
  'variables' => 
  array (
    'output' => 0,
    'data_p' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d2e8c4a6a5019_48448695')) {function content_5d2e8c4a6a5019_48448695($_smarty_tpl) {?><div class="rdfa-breadcrumb">

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
