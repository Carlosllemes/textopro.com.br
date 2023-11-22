<?
$h1         = 'Segmentos';
$title      = 'Segmentos';
$desc       = 'Segmentos - ';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Segmentos';
include('inc/head.php');
?>
<!--STARTSCRIPTSHEADER-->
<!--ENDSCRIPTSHEADER-->
</head>
<body>
    <? include('inc/topo.php');?>
    <main>
        <div class="content">
            <section>
                <?= $autoBreadcrumb ?>
                <!--STARTCOMPONENTS-->
                <div class="container">
                    <div class="wrapper">
                        <div class="segmentos">
                            <h2 class="segmentos__title">Lorem Ipsum</h2>
                            <div class="segmentos__thumbnails grid-col-4 grid-gap-20">
                                <?php include_once('inc/vetSegmentos.php'); 
                                    foreach($vetSegmentos as $key => $item): ?>
                                        <a class="segmentos__item" href="<?=$url.$item['url']?>" title="<?=$item['title']?>">
                                            <div class="segmentos__cover">
                                                <img class="segmentos__image" src="<?=$url?>imagens/segmentos/<?=$item['image']?>" alt="<?=$item['title']?>" title="<?=$item['title']?>">
                                            </div>
                                            <h2 class="segmentos__title"><?=$item['title']?></h2>
                                        </a>
                                <?php endforeach; ?>
                            </div>                                
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <!--ENDCOMPONENTS-->
            </section>
        </div> <!-- end content -->
    </main>
    <? include('inc/footer.php');?>
    <!--STARTSCRIPTSFOOTER-->
    <!--ENDSCRIPTSFOOTER-->
</body>
</html>