<?= $this->include('layouts/header') ?>

<main>

    <!-- HERO -->
    <section class="pontos-hero">
        <div class="container">

            <div class="text-center">
                <span class="pontos-badge">
                    REDE SOLIDÁRIA DA BAIXADA SANTISTA
                </span>

                <h1 class="pontos-title title mt-4">
                    Encontre pontos de doações <br>
                    perto de você
                </h1>

                <p class="pontos-text mx-auto mt-4">
                    Explore locais de coleta parceiros, conheça as instituições
                    apoiadas e saiba como contribuir com doações que fazem
                    a diferença na nossa região.
                </p>
            </div>

            <!-- FILTROS -->
            <div class="filtros-box mt-5">
                <div class="row g-3">

                    <div class="col-lg-5">
                        <label class="filtro-label">Busca</label>

                        <input
                            type="text"
                            class="form-control filtro-input"
                            placeholder="Busque por bairro, cidade..."
                        >
                    </div>

                    <div class="col-lg-2">
                        <label class="filtro-label">Cidade</label>

                        <select class="form-select filtro-input">
                            <option>Todas as Cidades</option>
                        </select>
                    </div>

                    <div class="col-lg-2">
                        <label class="filtro-label">Bairro</label>

                        <select class="form-select filtro-input">
                            <option>Todos os Bairros</option>
                        </select>
                    </div>

                    <div class="col-lg-3">
                        <label class="filtro-label">Tipo de Doação</label>

                        <select class="form-select filtro-input">
                            <option>Todos os Tipos</option>
                        </select>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- CARDS -->
    <section class="pontos-cards">
        <div class="container">

            <div class="row g-4">

                <!-- CARD -->
                <div class="col-md-6 col-lg-4">
                    <div class="ponto-card">

                        <img
                            src="<?= base_url('assets/img/ponto1.png') ?>"
                            alt="Ponto de coleta"
                            class="img-fluid ponto-card-image"
                        >

                        <div class="ponto-card-body">

                            <div class="ponto-tags">
                                <span>ALIMENTOS</span>
                                <span>ROUPAS</span>
                            </div>

                            <h3 class="ponto-card-title title">
                                Centro Comunitário Esperança
                            </h3>

                            <p class="ponto-card-inst">
                                Inst. Mãos Dadas
                            </p>

                            <ul class="ponto-info">
                                <li>Rua Flores, 123 - Gonzaga, Santos - SP</li>
                                <li>Seg a Sex, 08h às 17h</li>
                            </ul>

                            <p class="ponto-desc">
                                Ponto principal de arrecadação de alimentos
                                não perecíveis e roupas.
                            </p>

                            <a href="#" class="btn ponto-btn">
                                Como chegar
                            </a>

                        </div>
                    </div>
                </div>

                <!-- CARD -->
                <div class="col-md-6 col-lg-4">
                    <div class="ponto-card">

                        <img
                            src="<?= base_url('assets/img/ponto2.png') ?>"
                            alt="Ponto de coleta"
                            class="img-fluid ponto-card-image"
                        >

                        <div class="ponto-card-body">

                            <div class="ponto-tags">
                                <span>BRINQUEDOS</span>
                                <span>LIVROS</span>
                            </div>

                            <h3 class="ponto-card-title title">
                                Espaço Biblioteca Solidária
                            </h3>

                            <p class="ponto-card-inst">
                                Assoc. Cultura Viva
                            </p>

                            <ul class="ponto-info">
                                <li>Av. Presidente Wilson, 45 - SP</li>
                                <li>Ter a Sáb, 10h às 18h</li>
                            </ul>

                            <p class="ponto-desc">
                                Foco em materiais educativos,
                                livros infantis e brinquedos.
                            </p>

                            <a href="#" class="btn ponto-btn">
                                Como chegar
                            </a>

                        </div>
                    </div>
                </div>

                <!-- CARD -->
                <div class="col-md-6 col-lg-4">
                    <div class="ponto-card">

                        <img
                            src="<?= base_url('assets/img/ponto3.png') ?>"
                            alt="Ponto de coleta"
                            class="img-fluid ponto-card-image"
                        >

                        <div class="ponto-card-body">

                            <div class="ponto-tags">
                                <span>HIGIENE</span>
                                <span>ALIMENTOS</span>
                            </div>

                            <h3 class="ponto-card-title title">
                                Posto de Arrecadação Central
                            </h3>

                            <p class="ponto-card-inst">
                                Projeto Acolher
                            </p>

                            <ul class="ponto-info">
                                <li>Rua Marechal Deodoro, 890</li>
                                <li>Seg a Dom, 09h às 20h</li>
                            </ul>

                            <p class="ponto-desc">
                                Grande capacidade para itens de higiene
                                pessoal e alimentos.
                            </p>

                            <a href="#" class="btn ponto-btn">
                                Como chegar
                            </a>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- DESTAQUES -->
    <section class="destaques-section">
        <div class="container">

            <div class="row justify-content-center g-4">

                <div class="col-lg-4">
                    <div class="destaque-card destaque-primary">

                        <h3 id="destaqueBranco">
                            Diversas Categorias
                        </h3>

                        <p id="destaqueBranco">
                            De alimentos e roupas a brinquedos e itens
                            de higiene, há sempre uma causa precisando
                            de você.
                        </p>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="destaque-card">

                <h3 class="title">
                    Impacto Local
                </h3>

                <p>
                    Suas doações ajudam diretamente famílias
                    e instituições da nossa própria comunidade.
                    Cada contribuição gera mudanças reais na vida 
                    de pessoas da Baixada Santista.
                </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- CTA -->
    <section class="cta-ponto">
        <div class="container">

            <div class="destaque-card text-center">

                <h2 class="title">
                    Conhece um novo ponto de coleta?
                </h2>

                <p>
                    Ajude a expandir nossa rede indicando locais seguros
                    e confiáveis que aceitam doações na Baixada Santista.
                </p>

                <a href="<?= base_url('indicar-ponto') ?>" class="btn cta-btn">
                    Indicar um ponto
                </a>

            </div>

        </div>
    </section>

</main>

<?= $this->include('layouts/footer') ?>