<?
$h1         = 'Galeria de Fotos';
$title      = 'Galeria de Fotos';
$desc       = 'Galeria de Fotos - A OCS Remoção de Entulho foi fundada em 1998 na cidade de São Paulo por Orlando Correia da Silva, sendo nossa principal missão ajudar o meio';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Galeria de Fotos';
include('inc/head.php');
include("inc/fancy.php");
?>
</head>
<body>
<? include('inc/topo.php');?>
<div class="wrapper">
    <main>
        <div class="content">
            <section>
                <?=$autoBreadcrumb?>
                <h1><?=$h1?></h1>
                <article class="full">
                    <h2>Conheça nossa empresa</h2>
                    <div class="galeria">
                        <? for ($i=1; $i < 10; $i++) { ?>
                        
                        <a href="<?=$url?>imagens/galeria/galeria-<?=$i?>.jpg"  data-fancybox="group1" class="lightbox" title="<?=$h1?>" data-caption="<?=$h1?>"><img src="<?=$url?>imagens/galeria/galeria-<?=$i?>.jpg" title="<?=$h1?>" alt="<?=$h1?>"></a>
                        
                        <?}?>
                    </div>
                </article>
                <br class="clear">
            </section>
        </div>
    </main>
</div>
<? include('inc/footer.php');?>
</body>
</html>