<?php
/* Smarty version 4.3.4, created on 2025-01-31 16:02:38
  from 'C:\xampp\htdocs\MikolajBoborowski\app\views\transactions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_679ce60e99ac94_99505122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a67f07e7f50818299462be05ed7d17f36261cc07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MikolajBoborowski\\app\\views\\transactions.tpl',
      1 => 1738334949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679ce60e99ac94_99505122 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_318455101679ce60e9702b5_08930678', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_537322723679ce60e970c39_36379051', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "title"} */
class Block_318455101679ce60e9702b5_08930678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_318455101679ce60e9702b5_08930678',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Transakcje<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_537322723679ce60e970c39_36379051 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_537322723679ce60e970c39_36379051',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\MikolajBoborowski\\lib\\smarty\\plugins\\modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>

    <h1>Transakcje</h1>

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

    <form method="POST" class="mb-4">
        <h3>Dodaj nową transakcję</h3>
        <div class="mb-3">
            <label for="amount" class="form-label">Kwota</label>
            <input type="number" class="form-control" id="amount" name="amount" step="1" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Typ</label>
            <select class="form-select" id="type" name="type" required>
                <option value="przychód">Przychód</option>
                <option value="wydatek">Wydatek</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Kategoria</label>
            <input type="text" class="form-control" id="category" name="category">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Opis</label>
            <textarea class="form-control" id="description" placeholder="*Opis niewymagany*" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Data</label>
            <input type="date" class="form-control" id="date" name="date" value="<?php echo date('Y-m-d');?>
" required>
        </div>
        <button type="submit" class="btn btn-primary">Dodaj transakcję</button>
    </form>

    <h3>Historia transakcji</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Data</th>
                <th>Kwota</th>
                <th>Typ</th>
                <th>Kategoria</th>
                <th>Opis</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transactions']->value, 'transaction');
$_smarty_tpl->tpl_vars['transaction']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['transaction']->value) {
$_smarty_tpl->tpl_vars['transaction']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value['data_transakcji'];?>
</td>
                    <td><?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['transaction']->value['kwota'],2);?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value['typ'];?>
</td>
                    <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['transaction']->value['kategoria'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['transaction']->value['opis'], ENT_QUOTES, 'UTF-8', true);?>
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
