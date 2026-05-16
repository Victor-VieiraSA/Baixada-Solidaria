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
            <form method="get" action="<?= site_url('/pontos') ?>">
                <div class="filtros-box mt-5">
                    <div class="row g-3">

                        <div class="col-lg-5">
                            <label class="filtro-label">Busca</label>
                            <input
                                type="text"
                                name="busca"
                                class="form-control filtro-input"
                                placeholder="Busque por bairro, cidade..."
                                value="<?= esc($filtros['busca'] ?? '') ?>"
                            >
                        </div>

                        <div class="col-lg-2">
                            <label class="filtro-label">Cidade</label>
                            <select name="cidade" class="form-select filtro-input">
                                <option value="">Todas as Cidades</option>
                                <?php foreach ($todasCidades as $c): ?>
                                    <option value="<?= esc($c['cidade']) ?>"
                                        <?= (($filtros['cidade'] ?? '') === $c['cidade']) ? 'selected' : '' ?>>
                                        <?= esc($c['cidade']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-lg-2">
                            <label class="filtro-label">Bairro</label>
                            <select name="bairro" class="form-select filtro-input">
                                <option value="">Todos os Bairros</option>
                                <?php foreach ($todosBairros as $b): ?>
                                    <option value="<?= esc($b['bairro']) ?>"
                                        <?= (($filtros['bairro'] ?? '') === $b['bairro']) ? 'selected' : '' ?>>
                                        <?= esc($b['bairro']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-lg-3">
                            <label class="filtro-label">Tipo de Doação</label>
                            <select name="tipo" class="form-select filtro-input">
                                <option value="">Todos os Tipos</option>
                                <option value="aceita_alimentos"        <?= (($filtros['tipo'] ?? '') === 'aceita_alimentos')        ? 'selected' : '' ?>>Alimentos</option>
                                <option value="aceita_roupas"           <?= (($filtros['tipo'] ?? '') === 'aceita_roupas')           ? 'selected' : '' ?>>Roupas</option>
                                <option value="aceita_brinquedos"       <?= (($filtros['tipo'] ?? '') === 'aceita_brinquedos')       ? 'selected' : '' ?>>Brinquedos</option>
                                <option value="aceita_higiene"          <?= (($filtros['tipo'] ?? '') === 'aceita_higiene')          ? 'selected' : '' ?>>Higiene</option>
                                <option value="aceita_material_escolar" <?= (($filtros['tipo'] ?? '') === 'aceita_material_escolar') ? 'selected' : '' ?>>Material Escolar</option>
                                <option value="aceita_moveis"           <?= (($filtros['tipo'] ?? '') === 'aceita_moveis')           ? 'selected' : '' ?>>Móveis</option>
                                <option value="aceita_outros"           <?= (($filtros['tipo'] ?? '') === 'aceita_outros')           ? 'selected' : '' ?>>Outros</option>
                            </select>
                        </div>
                        <div class="col-lg-7 d-flex align-items-end">
                        </div>
                        <div class="col-lg-5 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">
                                Buscar
                            </button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>

<!-- CARDS -->
<section class="pontos-cards">
    <div class="container">

        <div class="row g-4">

            <?php if (!empty($pontos)): ?>

                <?php foreach ($pontos as $ponto): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="ponto-card">

                        <!-- Imagem -->
                        <?php if (!empty($ponto['imagem'])): ?>
                            <img
                                src="<?= base_url('uploads/pontos/' . $ponto['imagem']) ?>"
                                alt="<?= esc($ponto['nome_ponto']) ?>"
                                class="img-fluid ponto-card-image"
                            >
                        <?php else: ?>
                            <img
                                src="<?= base_url('assets/img/placeholder.jpg') ?>"
                                alt="Sem imagem"
                                class="img-fluid ponto-card-image"
                            >
                        <?php endif; ?>

                        <div class="ponto-card-body">

                            <!-- Tags de doação -->
                            <div class="ponto-tags">
                                <?php if ($ponto['aceita_alimentos'])        echo '<span>ALIMENTOS</span>'; ?>
                                <?php if ($ponto['aceita_roupas'])           echo '<span>ROUPAS</span>'; ?>
                                <?php if ($ponto['aceita_brinquedos'])       echo '<span>BRINQUEDOS</span>'; ?>
                                <?php if ($ponto['aceita_higiene'])          echo '<span>HIGIENE</span>'; ?>
                                <?php if ($ponto['aceita_material_escolar']) echo '<span>MAT. ESCOLAR</span>'; ?>
                                <?php if ($ponto['aceita_moveis'])           echo '<span>MÓVEIS</span>'; ?>
                                <?php if ($ponto['aceita_outros'])           echo '<span>OUTROS</span>'; ?>
                            </div>

                            <!-- Nome -->
                            <h3 class="ponto-card-title title">
                                <?= esc($ponto['nome_ponto']) ?>
                            </h3>

                            <!-- Instituição -->
                            <?php if (!empty($ponto['nome_instituicao'])): ?>
                                <p class="ponto-card-inst">
                                    <?= esc($ponto['nome_instituicao']) ?>
                                </p>
                            <?php endif; ?>

                            <!-- Endereço e horário -->
                            <ul class="ponto-info">
                                <li><?= esc($ponto['endereco_completo']) ?> - <?= esc($ponto['bairro']) ?>, <?= esc($ponto['cidade']) ?></li>
                                <?php if (!empty($ponto['horario_funcionamento'])): ?>
                                    <li><?= esc($ponto['horario_funcionamento']) ?></li>
                                <?php endif; ?>
                            </ul>

                            <!-- Descrição -->
                            <?php if (!empty($ponto['necessidades_urgentes'])): ?>
                                <p class="ponto-desc">
                                    <?= esc($ponto['necessidades_urgentes']) ?>
                                </p>
                            <?php endif; ?>

                            <!-- Botão Google Maps -->
                            <?php if (!empty($ponto['link_maps'])): ?>
                                <a href="<?= esc($ponto['link_maps']) ?>" target="_blank" class="btn ponto-btn">
                                    Como chegar
                                </a>
                            <?php else: ?>
                                <a href="#" class="btn ponto-btn disabled">
                                    Como chegar
                                </a>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            <?php else: ?>

                <div class="col-12 text-center py-5">
                    <p class="text-muted">Nenhum ponto encontrado com os filtros selecionados.</p>
                </div>

            <?php endif; ?>

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