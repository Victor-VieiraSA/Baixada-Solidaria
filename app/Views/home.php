<?= $this->include('layouts/header'); ?>

<main>
    <section class="hero">
        <h2>Conectando doações a quem mais precisa</h2>
        <p>
            Encontre pontos de coleta, apoie iniciativas sociais e fortaleça redes de solidariedade na região.
        </p>

        <a href="<?= base_url('pontos') ?>">Ver pontos de coleta</a>
        <a href="<?= base_url('indicar-ponto') ?>">Indicar um ponto</a>
    </section>
</main>

<?= $this->include('layouts/footer'); ?>