<?php
/* Smarty version 3.1.30, created on 2019-04-07 03:22:35
  from "/var/www/booked/tpl/json_data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ca96cfb053e37_23528596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9ac3baec3004c9d8189e250bccc5c9c01b18c7f' => 
    array (
      0 => '/var/www/booked/tpl/json_data.tpl',
      1 => 1549400612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca96cfb053e37_23528596 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
