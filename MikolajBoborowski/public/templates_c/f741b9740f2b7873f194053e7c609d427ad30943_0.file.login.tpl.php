<?php
/* Smarty version 4.3.4, created on 2025-01-23 22:20:11
  from 'C:\xampp\htdocs\MikolajBoborowski\app\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6792b28b84c0a2_09979533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f741b9740f2b7873f194053e7c609d427ad30943' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MikolajBoborowski\\app\\views\\login.tpl',
      1 => 1737667189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6792b28b84c0a2_09979533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4461168506792b28b8402f0_56451280', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6285833146792b28b840eb5_62987164', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "title"} */
class Block_4461168506792b28b8402f0_56451280 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4461168506792b28b8402f0_56451280',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Logowanie<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_6285833146792b28b840eb5_62987164 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6285833146792b28b840eb5_62987164',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Logowanie</h1>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
        <div class="alert 
                    <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>alert-success<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>alert-warning<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>alert-danger<?php }?>" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <form method="POST">
        <label>Email: <input type="email" name="email" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" required></label><br>
        <label>Hasło: <input type="password" name="password" required></label><br>
        <button type="submit">Zaloguj</button>
    </form>
<?php
}
}
/* {/block "content"} */
}
