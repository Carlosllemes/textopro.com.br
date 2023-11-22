<?
$h1         = 'Serviços';
$title      = 'Serviços';
$desc       = 'Serviços - ';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Serviços';
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
                        <div class="servicos">
                            <div class="servicos__thumbnails grid-col-4 grid-gap-20">
                                <?php include_once('inc/vetServicos.php'); 
                                    foreach($vetServicos as $key => $item): ?>
                                        <a class="servicos__item" href="<?=$url.$item['url']?>" title="<?=$item['title']?>">
                                            <h2 class="servicos__item-title"><?=$item['title']?></h2>
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