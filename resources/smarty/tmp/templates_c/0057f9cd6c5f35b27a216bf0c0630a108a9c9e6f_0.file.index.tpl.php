<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-14 01:35:50
  from '/Applications/MAMP/htdocs/client/view/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_619067f6ed8607_83283979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0057f9cd6c5f35b27a216bf0c0630a108a9c9e6f' => 
    array (
      0 => '/Applications/MAMP/htdocs/client/view/templates/index.tpl',
      1 => 1636853734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
  ),
),false)) {
function content_619067f6ed8607_83283979 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
