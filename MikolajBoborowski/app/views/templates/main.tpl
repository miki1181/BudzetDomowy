<!doctype html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="{$conf->app_url}/css/styles.css">
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{block name="title"}Budżet Domowy{/block}</title>
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
                            {if isset($smarty.session.user)}
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
                                <li class="nav-item">
                                    <a class="nav-link" href="logout">Wyloguj</a>
                                </li>
                            {else}
                                <li class="nav-item">
                                    <a class="nav-link" href="login">Logowanie</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="register">Rejestracja</a>
                                </li>
                            {/if}
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main class="container my-4">
        {block name="content"}{/block}
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <div class="container">
            <p>&copy; 2025 Budżet Domowy. Wszelkie prawa zastrzeżone.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>