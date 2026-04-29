<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baixada Solidária</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">

</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="<?= base_url('/') ?>">
            <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo Baixada Solidária" height="50">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar" aria-controls="menuNavbar" aria-expanded="false" aria-label="Alternar navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuNavbar">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-4">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('/') ?>">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('sobre') ?>">Sobre nós</a>
                </li>
            </ul>

            <a href="<?= base_url('pontos') ?>" class="btn btn-primary rounded-pill px-4">
                Pontos de Coleta
            </a>
        </div>
    </div>
</nav>