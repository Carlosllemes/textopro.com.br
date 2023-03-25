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