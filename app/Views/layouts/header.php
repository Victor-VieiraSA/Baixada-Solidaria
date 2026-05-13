<!DOCTYPE html> 
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Baixada Solidária</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="<?= base_url('assets/css/navbar.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/hero.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/sobre.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/pontos.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/indicar.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/footer.css') ?>">
    
</head>

<body>

<nav class="navbar navbar-expand-lg py-3 fixed-top">

    <div class="container">

        <!-- LOGO -->
        <a 
            class="navbar-brand d-flex align-items-center gap-2"
            href="<?= base_url('/') ?>"
        >

            <img
                src="<?= base_url('assets/img/logo.png') ?>"
                alt="Logo Baixada Solidária"
                height="50"
            >

        </a>

        <!-- BOTÃO MOBILE -->
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#menuNavbar"
            aria-controls="menuNavbar"
            aria-expanded="false"
            aria-label="Alternar navegação"
        >

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="menuNavbar">

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-4">

                <?php $isHome = uri_string() == ''; ?>

                    <li class="nav-item">

                    <a 
                        id="navInicio"
                        class="nav-link <?= $isHome ? 'active' : '' ?>"
                        href="<?= $isHome ? '#topo' : base_url('/') ?>"
                    >
                        Início
                    </a>

                    </li>

                    <li class="nav-item">

                        <a 
                            id="navSobre"
                            class="nav-link"
                            href="<?= $isHome ? '#sobre' : base_url('/#sobre') ?>"
                        >
                            Sobre Nós
                        </a>

                    </li>
            </ul>

            <!-- BOTÃO -->
            <a
                href="<?= base_url('pontos') ?>"
                class="btn btn-primary rounded-pill px-4"
            >
                Pontos de Coleta
            </a>

        </div>

    </div>

</nav>