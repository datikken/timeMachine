<?php
/* Smarty version 3.1.33, created on 2019-05-05 15:25:27
  from '/Applications/MAMP/htdocs/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ccf0067a1c070_70667230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f46b29d8acfc9b79e91879451e8b7b9d38976d0' => 
    array (
      0 => '/Applications/MAMP/htdocs/templates/index.tpl',
      1 => 1557069888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:main.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ccf0067a1c070_70667230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
