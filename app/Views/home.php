<?= $this->include('layouts/header'); ?>

<main id="topo">

    <!-- HERO -->
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
                        alt="Ilustração solidariedade"
                        class="img-fluid hero-image"
                    >

                </div>

            </div>
<div class="hero-bottom text-center mt-5">

    <div class="hero-scroll">

        <span class="hero-arrow">
            ↓
        </span>

<a href="#saibaMais" class="hero-text-link">
    <span>Saiba Mais</span>
</a>

    </div>

</div>

        </div>
    </section>

    <!-- SOBRE -->
    <section id="sobre" class="sobre-section">
        <div class="container">

            <div class="row align-items-center gy-5">

                <div class="col-lg-6">

                    <div class="sobre-content">

                        <h2 class="sobre-title title">
                            Uma curta ponte entre a vontade de ajudar e quem precisa
                        </h2>

                        <p class="sobre-text">
                            Nossa missão é simplificar o processo de doação na Baixada Santista.
                            Acreditamos que a solidariedade deve ser acessível e transparente.
                            Centralizamos informações de dezenas de iniciativas locais
                            para que você saiba exatamente onde e como contribuir
                            de forma eficaz.
                        </p>

                    </div>

                </div>

                <div class="col-lg-6 text-center">

                    <img
                        src="<?= base_url('assets/img/sobre-ilustracao.png') ?>"
                        alt="Ilustração sobre"
                        class="img-fluid sobre-image"
                    >

                </div>

            </div>

        </div>
    </section>

    <!-- PILARES -->
    <section class="pilares-section">

        <div class="container">

            <h2 class="section-title title text-center">
                Nossos Pilares
            </h2>

            <div class="row g-4 mt-4">

                <!-- CARD 1 -->

                <div class="col-md-6 col-lg-3">

                    <div class="pilar-card">

                        <div class="pilar-icon">

                            <img
                                src="<?= base_url('assets/img/Icon-solidariedade-1.png') ?>"
                                alt="Ícone Solidariedade"
                                class="pilar-icon-img"
                            >

                        </div>

                        <h3 class="pilar-card-title title">
                            Solidariedade
                        </h3>

                        <p class="pilar-card-text">
                            Incentivamos ações sociais que aproximam pessoas e fortalecem comunidades.
                        </p>

                    </div>

                </div>

                <!-- CARD 2 -->

                <div class="col-md-6 col-lg-3">

                    <div class="pilar-card">

                        <div class="pilar-icon">

                            <img
                                src="<?= base_url('assets/img/Icon-conexao-2.png') ?>"
                                alt="Ícone Conexão"
                                class="pilar-icon-img"
                            >

                        </div>

                        <h3 class="pilar-card-title title">
                            Conexão
                        </h3>

                        <p class="pilar-card-text">
                            Unimos doadores, voluntários e instituições em uma rede acessível.
                        </p>

                    </div>

                </div>

                <!-- CARD 3 -->

                <div class="col-md-6 col-lg-3">

                    <div class="pilar-card">

                        <div class="pilar-icon">

                            <img
                                src="<?= base_url('assets/img/Icon-impacto-3.png') ?>"
                                alt="Ícone Impacto Local"
                                class="pilar-icon-img"
                            >

                        </div>

                        <h3 class="pilar-card-title title">
                            Impacto Local
                        </h3>

                        <p class="pilar-card-text">
                            Fortalecemos iniciativas da Baixada Santista com impacto direto.
                        </p>

                    </div>

                </div>

                <!-- CARD 4 -->

                <div class="col-md-6 col-lg-3">

                    <div class="pilar-card">

                        <div class="pilar-icon">

                            <img
                                src="<?= base_url('assets/img/icon-informacao-4.png') ?>"
                                alt="Ícone Transparência"
                                class="pilar-icon-img"
                            >

                        </div>

                        <h3 class="pilar-card-title title">
                            Transparência
                        </h3>

                        <p class="pilar-card-text">
                            Informações claras sobre campanhas, pontos de coleta e necessidades.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- COMO FUNCIONA -->
    <section id="saibaMais" class="funciona-section">

        <div class="container">

            <h2 class="section-title title text-center">
                Como Funciona
            </h2>

            <div class="row justify-content-center g-5 mt-4">

                <div class="col-md-4 text-center">

                    <div class="funciona-number">
                        1
                    </div>

                    <h3 class="funciona-title title">
                        Encontre pontos
                    </h3>

                    <p class="funciona-text">
                        Descubra instituições e locais de coleta próximos de você.
                    </p>

                </div>

                <div class="col-md-4 text-center">

                    <div class="funciona-number">
                        2
                    </div>

                    <h3 class="funciona-title title">
                        Escolha como ajudar
                    </h3>

                    <p class="funciona-text">
                        Doe alimentos, roupas, brinquedos ou participe como voluntário.
                    </p>

                </div>

                <div class="col-md-4 text-center">

                    <div class="funciona-number">
                        3
                    </div>

                    <h3 class="funciona-title title">
                        Fortaleça ações locais
                    </h3>

                    <p class="funciona-text">
                        Pequenas ações geram grandes impactos na comunidade.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- CTA -->
    <section class="cta-section">

        <div class="container">

            <div class="cta-box text-center">

                <h2 class="cta-title title" id="destaqueCinza">
                    Faça parte dessa rede
                    <br> de transformação
                </h2>

                <p class="cta-text" id="destaqueCinzaEscuro">
                    Cada pequena ação conta. Descubra onde sua ajuda é mais necessária hoje e comece a impactar vidas na Baixada Santista.
                </p>

                <div class="d-flex justify-content-center flex-wrap gap-3 mt-4">

                    <a href="<?= base_url('pontos') ?>" class="btn btn-hero-primary">
                        Acessar pontos de coleta
                    </a>

                    <a href="<?= base_url('indicar-ponto') ?>" class="btn btn-hero-secondary btn-cta-light">
                        Indicar ponto
                    </a>

                </div>

            </div>

        </div>

    </section>

</main>

<?= $this->include('layouts/footer'); ?>