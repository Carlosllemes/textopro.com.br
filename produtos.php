<?
$h1         = 'Produtos';
$title      = 'Produtos';
$desc       = 'Produtos - ';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Produtos';
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
            <?=$caminho?>
            <!--STARTCOMPONENTS-->
            <div class="container">
                <div class="wrapper">
                    <h2>Nossos produtos</h2>
                    <div class="grid grid-col-4">
                            <?php
                            include_once('inc/vetProdutos.php');
                            foreach ($vetProdutos as $key => $item) { ?>
                            
                                <div class="card-base">
                                    <a class="card-base__link" href="<?=$url.$item['url']?>" title="<?=$item['title']?>">
                                    <img class="card-base__image" src="<?=$url?>imagens/produtos/<?=$item['image']?>" alt="<?=$item['title']?>" title="<?=$item['title']?>">
                                    <h2 class="card-base__title"><?=$item['title']?></h2>
                                    </a>
                                </div>
                            
                            <? } ?>
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