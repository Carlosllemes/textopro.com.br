<?php
$tituloPagina = "Mapa do site";
$title = "Textopro - Mapa do site ";
$subpage = "Blog";
$h1 = "Mapa do site";
$desc = "Página não encontrada";
include("assets/inc/head.php");
?>

</head>

<body>
    <!-- ======= Header ======= -->
    <?php include("assets/inc/header.php") ?>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center bread">
        <?php include("assets/components/breadcumbn1.php") ?>
    </section>
    <!-- End Hero -->
    <div class="container post-blog">
        <section class="row">

            <h1 itemprop="headline"><?= $h1 ?></h1>
            <article class="col-12 blog-article">
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Outros Serviços</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a title="Agências de Conteúdo" href="<?= $url ?>">Agências de Conteúdo</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a title="Comprar Blog e Conteúdo" href="<?= $url ?>">Comprar Blog e Conteúdo</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a title="Comprar e-mails e newsletters" href="<?= $url ?>">Comprar e-mails e newsletters</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a title="Empresa de descrições de produtos e serviços" href="<?= $url ?>">Empresa de descrições de produtos e serviços</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a title="Preço de conteúdo para mídias sociais" href="<?= $url ?>">Preço de conteúdo para mídias sociais</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a title="Roteiros para vídeos e podcasts" href="<?= $url ?>">Roteiros para vídeos e podcasts</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a title="Home" href="<?= $url ?>">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a title="Quem somos" href="#sobre">Quem somos</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a title="Serviços" href="#solucoes">Serviços</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a title="FAQ" href="#faq">FAQ</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a title="Blog" href="<?= $url ?>blog">Blog</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a title="Mapa do site" href="<?= $url ?>mapa-site">Mapa do site</a></li>
                    </ul>
                </div>
            </article>
        </section>

        <br class="clear">
    </div>
    <!-- End #main -->
    <!-- ======= Footer ======= -->

    <? include('assets/components/footer.php') ?>
    <!-- End Footer -->

</body>

</html>