<?php
/* Smarty version 4.3.4, created on 2025-01-27 16:20:08
  from 'C:\xampp\htdocs\MikolajBoborowski\app\views\Hello.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6797a42844fb13_55819827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'febe5ff061940fb691ff6a7a7b803a00093ea7cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MikolajBoborowski\\app\\views\\Hello.tpl',
      1 => 1737991208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6797a42844fb13_55819827 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5348288866797a42844eb48_33505177', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_456771536797a42844f472_02661589', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "title"} */
class Block_5348288866797a42844eb48_33505177 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5348288866797a42844eb48_33505177',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Strona główna<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_456771536797a42844f472_02661589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_456771536797a42844f472_02661589',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Witaj w aplikacji Budżet Domowy!</h1>
    <p>Wybierz opcję z menu powyżej.</p>
<?php
}
}
/* {/block "content"} */
}
