<?php
/* Smarty version 4.3.4, created on 2025-01-31 16:02:36
  from 'C:\xampp\htdocs\MikolajBoborowski\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_679ce60cf1cb34_19743396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2df86fd1fdcc30679ac662a4f2eed3687ace120' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MikolajBoborowski\\app\\views\\templates\\main.tpl',
      1 => 1738334949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679ce60cf1cb34_19743396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/styles.css">
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_427063988679ce60cf0c617_22611402', "title");
?>
</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
    <header class="bg-primary text-white py-3">
        <div class="container">
            <h1 class="h3">Budżet Domowy</h1>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="main">Strona główna</a>
                            </li>
                            <?php if ((isset($_SESSION['user']))) {?>
        <?php if ($_SESSION['user']['role_id'] != 1) {?> 
            <li class="nav-item">
                <a class="nav-link" href="transactions">Transakcje</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sorting">Sortowanie i Filtrowanie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="budgetAnalysis">Analiza Budżetu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="goals">Cele Oszczędnościowe</a>
            </li>
        <?php }?>
        
        <?php if ($_SESSION['user']['role_id'] == 1) {?>
            <li class="nav-item">
                <a class="nav-link" href="adminPanel">Panel Admina</a>
            </li>
        <?php }?>

        <li class="nav-item">
            <a class="nav-link" href="logout">Wyloguj</a>
        </li>
    <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link" href="login">Logowanie</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="register">Rejestracja</a>
        </li>
    <?php }?>
</ul>
                    </div>
                </div>
            </nav>
        </div>

    </header>

    <main class="container my-4 ">
        
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_891989221679ce60cf1c455_03073745', "content");
?>

    </main>

    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <div class="container">
            <p>&copy; 2025 Budżet Domowy. Wszelkie prawa zastrzeżone.</p>
        </div>
    </footer>

    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block "title"} */
class Block_427063988679ce60cf0c617_22611402 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_427063988679ce60cf0c617_22611402',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Budżet Domowy<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_891989221679ce60cf1c455_03073745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_891989221679ce60cf1c455_03073745',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
