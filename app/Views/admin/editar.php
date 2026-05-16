<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Ponto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-4" style="max-width:700px">
    <h2 class="mb-4">Editar: <?= esc($ponto['nome_ponto']) ?></h2>

    <form action="<?= site_url('/admin/atualizar/' . $ponto['id']) ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label class="form-label">Imagem do ponto</label>
            <input type="file" name="imagem" class="form-control" accept="image/*">
            <?php if (!empty($ponto['imagem'])): ?>
                <img src="<?= base_url('uploads/pontos/' . $ponto['imagem']) ?>"
                     class="mt-2 rounded" style="height:120px">
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label class="form-label">Link do Google Maps</label>
            <input type="text" name="link_maps" class="form-control"
                   value="<?= esc($ponto['link_maps'] ?? '') ?>"
                   placeholder="https://maps.google.com/...">
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="<?= site_url('/admin') ?>" class="btn btn-secondary">Voltar</a>
        </div>
    </form>
</div>
</body>
</html>