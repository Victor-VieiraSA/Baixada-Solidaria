<?= $this->include('layouts/header'); ?>

<main>
    <section class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center gy-5">
                
                <div class="col-lg-6">
                    <span class="hero-badge">
                        ♡ PLATAFORMA SOLIDÁRIA DA BAIXADA SANTISTA
                    </span>

                    <h1 class="hero-title mt-4 title">
                        Conectando doações a quem mais precisa
                    </h1>

                    <p class="hero-text mt-4">
                        Encontre pontos de coleta, apoie iniciativas sociais e fortaleça redes de solidariedade na região.
                    </p>

                    <div class="hero-buttons mt-4 d-flex flex-wrap gap-3">
                        <a href="<?= base_url('pontos') ?>" class="btn btn-hero-primary">
                            Explorar pontos de coleta
                        </a>

                        <a href="<?= base_url('indicar-ponto') ?>" class="btn btn-hero-secondary">
                            Indicar um ponto
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 text-center">
                    <img 
                        src="<?= base_url('assets/img/hero-ilustracao.png') ?>" 
                        alt="Ilustração de solidariedade" 
                        class="img-fluid hero-image"
                    >
                </div>

            </div>

            <div class="hero-bottom text-center mt-5">
                <a href="#sobre" class="hero-scroll">
                    ↓ Saiba Mais
                </a>
            </div>
        </div>
    </section>

     <section id="sobre" class="sobre-section">
            <div class="container">
                <div class="row align-items-center gy-5">
                    <div class="col-lg-6">
                        <div class="sobre-content">
                            <h2 class="sobre-title title">
                                Uma ponte entre a vontade de ajudar e quem precisa
                            </h2>

                            <p class="sobre-text">
                                Nossa missão é simplificar o processo de doação na Baixada Santista. Acreditamos que a solidariedade deve ser acessível e transparente.</br>
                                Centralizamos informações de dezenas de iniciativas locais
                                para que você saiba exatamente onde e como contribuir de
                                forma eficaz.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 text-center">
                        <img
                            src="<?= base_url('assets/img/sobre-ilustracao.png') ?>"
                            alt="Ilustração sobre doações"
                            class="img-fluid sobre-image"
                        >
                    </div>
                </div>
            </div>
    </section>

    <section class="pilares-section">
        <div class="container">
            <h2 class="pilares-title text-center">Nossos Pilares</h2>

            <div class="row g-4 mt-4">
                <div class="col-md-6 col-lg-3">
                    <div class="pilar-card">
                        <div class="pilar-icon">A</div>
                        <h3 class="pilar-card-title title">Solidariedade</h3>
                        <p class="pilar-card-text">
                            O motor que move nossa comunidade em direção a um futuro mais justo.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="pilar-card">
                        <div class="pilar-icon">A</div>
                        <h3 class="pilar-card-title title">Conexão</h3>
                        <p class="pilar-card-text">
                            Unindo doadores, voluntários e organizações em uma rede forte.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="pilar-card">
                        <div class="pilar-icon">A</div>
                        <h3 class="pilar-card-title title">Impacto Local</h3>
                        <p class="pilar-card-text">
                            Foco total em fortalecer as iniciativas das cidades da nossa região.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="pilar-card">
                        <div class="pilar-icon">A</div>
                        <h3 class="pilar-card-title title">Acesso à Informação</h3>
                        <p class="pilar-card-text">
                            Dados claros e atualizados sobre necessidades e pontos de coleta.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?= $this->include('layouts/footer'); ?>