<?php
/* Smarty version 3.1.30, created on 2018-01-26 09:42:37
  from "C:\xampp\htdocs\spAdminPage\application\views\breadcrumbs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6ae9fdbe6195_06915099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f5be9d6dd451fc8956c67b37f22eaaceac96305' => 
    array (
      0 => 'C:\\xampp\\htdocs\\spAdminPage\\application\\views\\breadcrumbs.tpl',
      1 => 1516955606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6ae9fdbe6195_06915099 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb">
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
'assessment/index">Beranda</a></li>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumbs']->value, 'nav');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value) {
?>
    	<li><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['text'];?>
</a></li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ol><?php }
}
