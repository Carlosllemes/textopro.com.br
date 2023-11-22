<?
$h1         = 'Intra - auriculares';
$title      = 'Intra - auriculares';
$desc       = 'Intra - auriculares - ';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Intra - auriculares';
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
        <p>
            São aparelhos auditivos inseridos completamente no canal auditivo, a categoria de aparelhos intra-
auriculares se divide em outros grupos, de acordo com o espaço que ocupam do conduto auditivo.

Todos os modelos dentro do ouvido dependem da anatomia de condutos mais calibrosos para que toda
a máquina dos aparelhos consiga ficar mais profunda possível. Quanto maior a perda auditiva, menor é
a chance destes modelos servirem, pois as peças que conferem a potencia adequada pra algumas
perdas, precisam ser grandes, o que inviabiliza a confecção e aumenta a chance de microfonia.
        </p>
        <h3>INTRA-AURICULAR (Adaptação Imediata):</h3>
        <p>
            IIC (Invisible In the canal), são aparelhos conhecidos como invisíveis, é o menor modelo personalizado
disponível. São aparelhos que encaixam profundamente dentro do canal auditivo e por ficarem
praticamente invisíveis para as pessoas ao redor, são a solução perfeita para quem ainda quer algo
discreto. Em geral se adequam para pacientes com perdas leves a moderadas
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