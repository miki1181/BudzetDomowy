<?php
/* Smarty version 4.3.4, created on 2025-01-30 22:44:19
  from 'C:\xampp\htdocs\MikolajBoborowski\app\views\adminPanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_679bf2b3e78ea8_42446360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e951978842703655aa78e2749abae09ac85a1ce4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MikolajBoborowski\\app\\views\\adminPanel.tpl',
      1 => 1738273458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679bf2b3e78ea8_42446360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1168322764679bf2b3e6e076_86625122', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1739215187679bf2b3e6e894_57462152', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "title"} */
class Block_1168322764679bf2b3e6e076_86625122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1168322764679bf2b3e6e076_86625122',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Panel administracyjny<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_1739215187679bf2b3e6e894_57462152 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1739215187679bf2b3e6e894_57462152',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Panel administracyjny</h1>

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

<h3>Lista użytkowników</h3>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Email</th>
            <th>Akcje</th>
            <th>Uprawnienia</th> 
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                <td>
                    <form method="post">
                        <input type="hidden" name="delete_user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
                        <button type="submit" class="btn btn-danger">Usuń</button>
                    </form>
                </td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['nazwa_roli'] != 'admin') {?>
                        <form method="post" action="promoteToAdmin">
                            <input type="hidden" name="promote_user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
                            <button type="submit" class="btn btn-primary">Nadaj Admina</button>
                        </form>
                    <?php } else { ?>
                        <a>Administrator</a>
                    <?php }?>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php
}
}
/* {/block "content"} */
}
