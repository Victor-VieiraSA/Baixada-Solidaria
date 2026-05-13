<footer class="footer-section">

    <div class="container">

        <!-- TOPO -->
        <div class="footer-top">

            <div class="row gy-5">

                <!-- LOGO / SOBRE -->
                <div class="col-lg-4">

                    <img
                        src="<?= base_url('assets/img/logo.png') ?>"
                        alt="Baixada Solidária"
                        class="footer-logo"
                    >

                    <p class="footer-description">
                        Conectando doações a quem mais precisa
                        na Baixada Santista.
                    </p>

                    <p class="footer-description">
                        Fortalecendo redes de solidariedade e
                        impacto social.
                    </p>

                    <!-- REDES -->
                    <div class="footer-socials">

                        <a href="https://www.instagram.com/univespoficial/" class="footer-social">
                            <i class="bi bi-instagram"></i>
                        </a>

                        <a href="https://www.facebook.com/" class="footer-social">
                            <i class="bi bi-facebook"></i>
                        </a>

                        <a href="mailto:contato@baixadasolidaria.org.br" class="footer-social">
                            <i class="bi bi-envelope-fill"></i>
                        </a>

                    </div>

                </div>

                <!-- NAVEGAÇÃO -->
                <div class="col-lg-2">

                    <h3 class="footer-title">
                        Navegação
                    </h3>

                    <ul class="footer-links">

                        <!-- INÍCIO -->
                        <li>

                            <a href="<?= uri_string() == '' ? '#topo' : base_url('/') ?>">

                                Início

                            </a>

                        </li>

                        <!-- SOBRE -->
                        <li>

                            <a href="<?= current_url() == base_url('/') ? '#sobre' : base_url('/#sobre') ?>">

                                Sobre nós

                            </a>

                        </li>

                        <!-- PONTOS -->
                        <li>

                            <a href="<?= base_url('pontos') ?>">

                                Pontos de coleta

                            </a>

                        </li>

                        <!-- INDICAR -->
                        <li>

                            <a href="<?= base_url('indicar-ponto') ?>">

                                Indicar um ponto

                            </a>

                        </li>

                    </ul>

                </div>

                <!-- INSTITUCIONAL -->
                <div class="col-lg-3">

                    <h3 class="footer-title">
                        Institucional
                    </h3>

                    <ul class="footer-links">

                        <!-- QUEM SOMOS -->
                        <li>

                            <a href="<?= current_url() == base_url('/') ? '#sobre' : base_url('/#sobre') ?>">

                                Quem somos

                            </a>

                        </li>

                        <!-- COMO FUNCIONA -->
                        <li>

                            <a href="<?= current_url() == base_url('/') ? '#saibaMais' : base_url('/#saibaMais') ?>">

                                Como funciona

                            </a>

                        </li>

                        <!-- PONTOS -->
                        <li>

                            <a href="<?= base_url('pontos') ?>">

                                Onde são os Pontos?

                            </a>

                        </li>

                        <!-- CONTATO -->
                        <li>

                            <a href="#foterFim">

                                Contato

                            </a>

                        </li>

                    </ul>

                </div>

                <!-- CTA -->
                <div class="col-lg-3">

                    <h3 class="footer-title">
                        Ajude a transformar
                    </h3>

                    <p class="footer-description">
                        Pequenas ações geram grandes
                        impactos na nossa comunidade.
                    </p>

                    <a href="<?= base_url('indicar-ponto') ?>" class="footer-cta-btn">

                        ♡ Indicar um ponto

                    </a>

                </div>

            </div>

        </div>

        <!-- CONTATOS -->
        <div class="footer-contact" id="foterFim">

            <div class="row gy-4">

                <div class="col-lg-4">

                    <div class="footer-contact-item">

                        <div class="footer-contact-icon">
                            📍
                        </div>

                        <div>

                            <h4>
                                Baixada Santista, SP
                            </h4>

                            <p>
                                Brasil
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="footer-contact-item">

                        <div class="footer-contact-icon">
                            ☎
                        </div>

                        <div>

                            <h4>
                                (13) 4002-8922
                            </h4>

                            <p>
                                Telefone para contato
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="footer-contact-item">

                        <div class="footer-contact-icon">
                            ✉
                        </div>

                        <div>

                            <h4>
                                contato@baixadasolidaria.org.br
                            </h4>

                            <p>
                                Responderemos em breve
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- BOTTOM -->
    <div class="footer-bottom">

        <div class="container">

            <div class="footer-bottom-content">

                <p>
                    © 2026 Baixada Solidária. Todos os direitos reservados.
                </p>

                <div class="footer-bottom-links">

                    <span>
                        Criado e Desenvolvido por
                    </span>

                    <span>•</span>

                    <a href="https://www.instagram.com/univespoficial/">
                        Alunos Univesp
                    </a>

                </div>

            </div>

        </div>

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/js/navbar.js') ?>"></script>

</body>
</html>