<?php
$tituloPagina = "404";
$title = "Textopro - Ops!! Página não encontrada ";
$subpage = "Blog";
$h1 = "Página não encontrada 404";
$subpageLink = "blog";
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
                <p>Desculpe, a página que você procura não pode ser encontrada. Parece que você chegou a uma página que não existe ou foi removida. Por favor, verifique se o endereço está correto ou retorne à página inicial para tentar encontrar o que você procura. Obrigado pela compreensão!</p>
                <a href="<?= $url ?>" class="btn btn-primary    ">Voltar para home</a>
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