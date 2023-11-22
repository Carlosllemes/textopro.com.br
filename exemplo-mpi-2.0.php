<?php
include('inc/vetKey.php');
$h1 = "Exemplo MPI 2.0";
$title = $h1;
$desc = "Exemplo MPI 2.0 - Se você procura por Exemplo MPI 2.0, você encontra no website da Doutores da Web, cote produtos com nossos profissionais e conheça a melhor referência em qualidade do mercado.";
$key = "comprar,terra,peneirada,zinco";
$legendaImagem = "Foto ilustrativa de Exemplo MPI 2.0";
$pagInterna = "Informações";
$urlPagInterna = "informacoes";
include('inc/head.php');
include('inc/fancy.php');
?>
<style>
<? include('css/style-icm.css'); ?>
</style>
<script>
<? include('js/organictabs.jquery.js'); ?>
</script>
</head>
<body class="mpi-rules">
<? include('inc/topo-mpi.php'); ?>
<main>
    <div class="content">
        <div class="wrapper">
            <section>
                <?=$autoBreadcrumb?>                
                <article class="full">
                    <p>Se você procura por <?=$h1?>, você encontra no website da <?=$nomeSite?>, cote produtos com nossos profissionais e conheça a melhor referência em qualidade do mercado.</p>
                    <div class="mpi-content" style="display: none;">
                        <h2>Saiba mais sobre Exemplo MPI 2.0</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam natus, ab, eos odio accusantium voluptates, ratione unde veritatis quod magni error corporis harum! Quibusdam ad tempore numquam pariatur at quas?</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam natus, ab, eos odio accusantium voluptates, ratione unde veritatis quod magni error corporis harum! Quibusdam ad tempore numquam pariatur at quas?</p>
                        <ul class="list">
                            <li>Lorem Ipsum</li>
                            <li>Lorem Ipsum</li>
                            <li>Lorem Ipsum</li>
                            <li>Lorem Ipsum</li>
                            <li>Lorem Ipsum</li>
                        </ul>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam natus, ab, eos odio accusantium voluptates, ratione unde veritatis quod magni error corporis harum! Quibusdam ad tempore numquam pariatur at quas?</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam natus, ab, eos odio accusantium voluptates, ratione unde veritatis quod magni error corporis harum! Quibusdam ad tempore numquam pariatur at quas?</p>
                    </div>
                    <a class="expand-content">
                        <span>Leia mais</span>
                    </a>
                </article>
                <article>
                    <?include('inc/gallery.php'); ?>
                    <div class="tabs">
                        <div class="tabs-btn">
                            <h2 data-tab="tab-01" class="active-tab">Especificações</h2>
                        </div>
                        <div class="tabs-content">
                            <div data-tab="tab-01" class="active-tab">
                                <ul class="list">
                                    <li>Lorem Ipsum</li>
                                    <li>Lorem Ipsum</li>
                                    <li>Lorem Ipsum</li>
                                    <li>Lorem Ipsum</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
                <?include('inc/mpi-post-content.php');?>
            </section>
            </div><!-- .wrapper -->
        </div>
    </main>
    <?include('inc/footer.php'); ?>
</body>
</html>