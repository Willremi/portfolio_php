<!DOCTYPE html>
<html lang="fr" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? "Rémi W - Portfolio" ?></title>
    <link rel="icon" href="/img/favicon.ico" />
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body class="h-100 text-white">
    <header class="position-absolute">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="text-white h-50" href="/">
                    <img src="/img/rw.png" alt="logo de rw" id="rw">
                </a>
                <!-- <a class="navbar-brand text-white" href="/">RW</a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Accueil</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/competences">Compétences</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Formations</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Expériences</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?= $content ?>
    <footer class="text-white text-center py-2 rounded">
        <p class="my-1">© <?= date('Y') ?> - Rémi W.</p>
    </footer>
    <script src="/bootstrap/js/bootstrap.js"></script>
</body>

</html>