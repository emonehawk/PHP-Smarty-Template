<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-14 21:58:36
  from '/Applications/MAMP/htdocs/client/view/templates/startup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61b9138c61dc58_64043237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7208508a8e5db34617c67284337ea05e42b90203' => 
    array (
      0 => '/Applications/MAMP/htdocs/client/view/templates/startup.tpl',
      1 => 1639519004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/head.tpl' => 1,
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_61b9138c61dc58_64043237 (Smarty_Internal_Template $_smarty_tpl) {
?><!--- include common file --->
<?php $_smarty_tpl->_subTemplateRender('file:common/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--- page body --->

<body>
    <div>
        <div class="container">
        </div class="text-center">
        <h1>Buy Cheapest Hosting </h1>
        <p>Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!</p>
    </div>
    <div>
    </div>
</body>

<!--- include footer --->
<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
