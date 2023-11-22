<?php
include('inc/vetKey.php');
$h1 = "TITULO";
$title = $h1;
$desc = "TITULO - DESC";
$key = "comprar,terra,peneirada,zinco";
$legendaImagem = "Foto ilustrativa de TITULO";
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
    <div class="content" itemscope itemtype="https://schema.org/Product">
        <div class="wrapper">
            <section>
                <?=$caminho2?>
                <h1><?=$h1?></h1>
                
                <article class="full">
                    <p class="content-call">Se você procura por <?=$h1?>, você encontra no website da <?=$nomeSite?>, cote produtos com nossos profissionais e conheça a melhor referência em qualidade do mercado.</p>
                    <div class="mpi-content">
                        <h2>Saiba mais sobre a Producao</h2>
                        <p>Aqui voce trabalha e aprende em tempo real ! Somos uma equipe dedicada e sintonizada com a melhoria da empresa , sempre testando novas tecnologicas e fazendo nosso dia dia o mais agradavel possivel . </p>
                    </div>
                    
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
                                    <li>ola mundo</li>
                                    <li>ola mundo</li>
                                    <li>ola mundo</li>
                                    <li>ola mundo</li>
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