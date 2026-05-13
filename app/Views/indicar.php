<?= $this->include('layouts/header'); ?>

<main>

    <!-- HERO -->
    <section class="indicar-hero">
        <div class="container">

            <div class="row align-items-center gy-5">

                <div class="col-lg-6">
                    <span class="indicar-badge">
                        PARTICIPE DA REDE DE SOLIDARIEDADE
                    </span>

                    <h1 class="hero-title mt-4 title">
                        Indique um novo ponto de coleta
                    </h1>

                    <p class="indicar-text mt-4">
                        Conhece um local que arrecada doações?
                        Envie as informações para nossa equipe.
                        Após análise e aprovação, o ponto poderá
                        ser incluído no sistema Baixada Solidária.
                    </p>
                </div>

                <div class="col-lg-6 text-center">
                    <img
                        src="<?= base_url('assets/img/indicar-ilustracao.png') ?>"
                        alt="Ilustração"
                        class="img-fluid indicar-image"
                    >
                </div>

            </div>

            <!-- SETA SCROLL -->

            <div class="indicar-scroll text-center">

                <a href="#dados-ponto">

                    <img
                        src="<?= base_url('assets/img/duas-setas.png') ?>"
                        alt="Ir para formulário"
                        class="seta-scroll"
                    >

                </a>

            </div>

        </div>
    </section>

    <!-- COMO FUNCIONA -->
    <section class="funciona-section">

        <div class="container">

            <h2 class="funciona-title title text-center">
                Como funciona
            </h2>

            <div class="row g-4 mt-4">

                <div class="col-md-4">
                    <div class="funciona-card">

                        <div class="funciona-icon">
                            📝
                        </div>

                        <h3 class="funciona-card-title title">
                            1. Você envia o formulário
                        </h3>

                        <p class="funciona-card-text">
                            Preencha os dados básicos do local
                            com o máximo de precisão.
                        </p>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="funciona-card">

                        <div class="funciona-icon">
                            ✅
                        </div>

                        <h3 class="funciona-card-title title">
                            2. Nossa equipe analisa as informações
                        </h3>

                        <p class="funciona-card-text">
                            Verificamos a veracidade e os detalhes
                            de funcionamento.
                        </p>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="funciona-card">

                        <div class="funciona-icon">
                            🌎
                        </div>

                        <h3 class="funciona-card-title title">
                            3. O ponto é publicado no sistema
                        </h3>

                        <p class="funciona-card-text">
                            Após aprovado, o local entra no site
                            e passa a receber ajuda.
                        </p>

                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- FORM -->
    <section class="form-section" id="dados-ponto">

        <div class="container">

            <div class="row g-4">

                <!-- FORMULÁRIO -->
                <div class="col-lg-8">

                    <div class="form-wrapper">

                        <form>

                            <!-- DADOS -->
                            <div class="form-block">

                                <h2 class="form-title title">
                                    Dados do Ponto
                                </h2>

                                <div class="row g-3 mt-1">

                                    <div class="col-md-6">
                                        <label class="form-label">
                                            Nome do ponto *
                                        </label>

                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Ex: Creche Alegria"
                                        >
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">
                                            Nome da instituição (se houver)
                                        </label>

                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Ex: Associação de Moradores"
                                        >
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">
                                            Responsável
                                        </label>

                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Nome da pessoa responsável"
                                        >
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">
                                            E-mail
                                        </label>

                                        <input
                                            type="email"
                                            class="form-control"
                                            placeholder="contato@exemplo.com"
                                        >
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">
                                            WhatsApp / Telefone
                                        </label>

                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="(00) 00000-0000"
                                        >
                                    </div>

                                </div>

                            </div>

                            <!-- ENDEREÇO -->
                            <div class="form-block">

                                <h2 class="form-title title">
                                    Endereço
                                </h2>

                                <div class="row g-3 mt-1">

                                    <div class="col-12">
                                        <label class="form-label">
                                            Endereço completo *
                                        </label>

                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Rua, número, complemento"
                                        >
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">
                                            Bairro *
                                        </label>

                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Nome do bairro"
                                        >
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">
                                            Cidade *
                                        </label>

                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Cidade"
                                        >
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">
                                            CEP
                                        </label>

                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="00000-000"
                                        >
                                    </div>

                                </div>

                            </div>

                            <!-- TIPOS -->
                            <div class="form-block">

                                <h2 class="form-title title">
                                    Tipos de Doações Aceitas
                                </h2>

                                <div class="checkbox-grid mt-4">

                                    <label><input type="checkbox"> Alimentos</label>
                                    <label><input type="checkbox"> Roupas</label>
                                    <label><input type="checkbox"> Brinquedos</label>
                                    <label><input type="checkbox"> Higiene</label>
                                    <label><input type="checkbox"> Material Escolar</label>
                                    <label><input type="checkbox"> Móveis</label>
                                    <label><input type="checkbox"> Outros</label>

                                </div>

                            </div>

                            <!-- DETALHES -->
                            <div class="form-block">

                                <h2 class="form-title title">
                                    Detalhes Adicionais
                                </h2>

                                <div class="row g-3 mt-1">

                                    <div class="col-12">
                                        <label class="form-label">
                                            O que estão precisando no momento?
                                        </label>

                                        <textarea
                                            class="form-control textarea"
                                            placeholder="Especifique urgências..."
                                        ></textarea>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">
                                            Horário de funcionamento
                                        </label>

                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Ex: Seg a Sex, 09h às 17h"
                                        >
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">
                                            Redes Sociais
                                        </label>

                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="@instagram ou link do facebook"
                                        >
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">
                                            Observações
                                        </label>

                                        <textarea
                                            class="form-control textarea"
                                            placeholder="Algo mais que devemos saber?"
                                        ></textarea>
                                    </div>

                                </div>

                            </div>

                            <!-- CHECKBOX -->
                            <div class="check-wrapper">

                                <label class="check-item">
                                    <input type="checkbox">

                                    Declaro que as informações fornecidas
                                    são verdadeiras e me responsabilizo por elas.
                                </label>

                                <label class="check-item">
                                    <input type="checkbox">

                                    Consinto com o contato da equipe da
                                    Baixada Solidária para verificação dos dados.
                                </label>

                            </div>

                            <!-- BUTTONS -->
                            <div class="form-buttons">

                                <a href="<?= base_url('/') ?>" class="btn-voltar">
                                    Voltar
                                </a>

                                <button type="submit" class="btn-enviar">
                                    Enviar solicitação
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

                <!-- SIDEBAR -->
                <div class="col-lg-4">

                    <div class="analysis-card">

                        <h3 class="analysis-title title">
                            🛡️ Análise de Dados
                        </h3>

                        <p>
                            Para garantir a segurança e transparência
                            da nossa rede, todos os novos pontos de
                            coleta passam por uma curadoria e
                            verificação manual.
                        </p>

                        <p>
                            Nossa equipe poderá entrar em contato
                            com os responsáveis para confirmar
                            endereço, horários de funcionamento e
                            capacidade de recebimento das doações.
                        </p>

                        <strong>
                            Prazo médio de análise: 3 dias úteis.
                        </strong>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>

<?= $this->include('layouts/footer'); ?>