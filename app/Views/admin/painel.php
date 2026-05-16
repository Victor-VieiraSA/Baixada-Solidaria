<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Indicações de Pontos</h2>
        <a href="<?= site_url('/admin/logout') ?>" class="btn btn-outline-danger btn-sm">Sair</a>
    </div>

    <?php if (session()->getFlashdata('sucesso')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('sucesso') ?></div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('erro')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('erro') ?></div>
    <?php endif; ?>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nome do Ponto</th>
                <th>Cidade</th>
                <th>Bairro</th>
                <th>Responsável</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($pontos as $p): ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= esc($p['nome_ponto']) ?></td>
                <td><?= esc($p['cidade']) ?></td>
                <td><?= esc($p['bairro']) ?></td>
                <td><?= esc($p['responsavel']) ?></td>
                <td>
                    <a href="<?= site_url('/admin/editar/' . $p['id']) ?>" class="btn btn-sm btn-primary">Editar</a>
                    <a href="<?= site_url('/admin/aprovar/' . $p['id']) ?>"
                       class="btn btn-sm btn-success"
                       onclick="return confirm('Aprovar e publicar este ponto?')">
                       ✅ Aprovar
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>