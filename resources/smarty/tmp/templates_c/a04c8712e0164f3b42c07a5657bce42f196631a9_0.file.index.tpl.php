<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-14 01:33:13
  from '/Applications/MAMP/htdocs/client/view/templates/common/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61906759f1b0a4_81162910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a04c8712e0164f3b42c07a5657bce42f196631a9' => 
    array (
      0 => '/Applications/MAMP/htdocs/client/view/templates/common/index.tpl',
      1 => 1636853585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_61906759f1b0a4_81162910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
<div class="container">
  <h1>My First Bootstrap Page</h1>
  <p>Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!</p> 
</div>

</body>
</html><?php }
}
