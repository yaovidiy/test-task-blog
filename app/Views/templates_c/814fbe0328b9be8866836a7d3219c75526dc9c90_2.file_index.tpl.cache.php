<?php
/* Smarty version 5.8.0, created on 2026-04-28 16:30:04
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f0e08c40f862_73611804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '814fbe0328b9be8866836a7d3219c75526dc9c90' => 
    array (
      0 => 'index.tpl',
      1 => 1777392061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f0e08c40f862_73611804 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/app/Views/templates';
$_smarty_tpl->getCompiled()->nocache_hash = '185850182869f0e08c40cd44_03959572';
?>
<h1>Hello <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('name')), ENT_QUOTES, 'UTF-8');?>
, welcome to Smarty!</h1>
<?php }
}
