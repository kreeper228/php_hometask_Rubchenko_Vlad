<?php
/* Smarty version 4.3.1, created on 2023-04-02 14:29:47
  from 'D:\Dropbox\PHPTestProject\Home\public\templates\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6429915bcf9ff1_99773725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b265fcfaec5e27bde56f99414ab5233a100f1bee' => 
    array (
      0 => 'D:\\Dropbox\\PHPTestProject\\Home\\public\\templates\\default\\index.tpl',
      1 => 1680445759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/head.tpl' => 1,
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_6429915bcf9ff1_99773725 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['content']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
