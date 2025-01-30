<?php
/* Smarty version 4.3.4, created on 2025-01-23 22:16:36
  from 'C:\xampp\htdocs\MikolajBoborowski\app\views\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6792b1b46a6027_84043425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92061f5a16fbb2505ff468e0dc2bb1e1c950b61a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MikolajBoborowski\\app\\views\\register.tpl',
      1 => 1737666994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6792b1b46a6027_84043425 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3036247606792b1b4697d21_88813806', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8801420436792b1b4698c81_46788106', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "title"} */
class Block_3036247606792b1b4697d21_88813806 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3036247606792b1b4697d21_88813806',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Rejestracja<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_8801420436792b1b4698c81_46788106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8801420436792b1b4698c81_46788106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Rejestracja</h1>

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
        <label>Powtórz hasło: <input type="password" name="confirm_password" required></label><br>
        <button type="submit">Zarejestruj się</button>
    </form>
<?php
}
}
/* {/block "content"} */
}
