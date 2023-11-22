<?
$h1         = 'Intra - auricular';
$title      = 'Intra - auricular';
$desc       = 'Intra - auricular - ';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Intra - auricular';
include('inc/head.php');
include('inc/fancy.php');
?>
<!--STARTSCRIPTSHEADER-->
<!--ENDSCRIPTSHEADER-->
</head>
<body>
    <? include('inc/topo.php');?>
    <main>
        <div class="content">
            <section>
                <?=$caminhoProdutos?>
                <article class="full">
                    <!--STARTCOMPONENTS-->
                    <div class="container">
	<div class="wrapper">
		<h2>Intra - auricular (Costumisados):</h2>
        <p>
            São aparelhos personalizados por meio de uma pré moldagem do ouvido do paciente com isso o
encaixe é perfeito, são aparelhos discretos e que amplificam perdas maiores de leve a severa.
        </p>
        <div class="grid grid-col-2">
             <?php

    $imagens = glob("imagens/produtos/".$urlPagina."-{,[0-9]}[0-9].jpg", GLOB_BRACE);
    foreach ($imagens as $key => $imagem) {
    ?>

        <a href="<?=$url.$imagem?>" data-fancybox="group1" class="lightbox" title="<?=$h1?>" data-caption="<?=$h1?>">
          <img src="<?=$url.$imagem?>" alt="<?=$h1?>" title="<?=$h1?>" class="img-medium"/>
        </a>

    <?php
    }

  ?>
        </div>
	</div>
	<div class="clear"></div>
</div>
<!--ENDCOMPONENTS-->
                </article>
                <? include('inc/coluna-lateral-produtos.php'); ?>
            </section>
        </div> <!-- end content -->
    </main>
    <? include('inc/footer.php');?>
    <!--STARTSCRIPTSFOOTER-->
    <!--ENDSCRIPTSFOOTER-->
</body>
</html>