<?
$h1         = 'Aparelhos Recarregáveis';
$title      = 'Aparelhos Recarregáveis';
$desc       = 'Aparelhos Recarregáveis - ';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Aparelhos Recarregáveis';
include('inc/head.php');
include('inc/fancy.php');
?>
<!--STARTSCRIPTSHEADER-->
<!--ENDSCRIPTSHEADER-->
</head>

<body>
    <? include('inc/topo.php'); ?>
    <main>
        <div class="content">
            <section>
                <?= $caminhoProdutos ?>
                <article class="full">
                    <!--STARTCOMPONENTS-->
                    <div class="container">
                        <div class="wrapper">
                            <h2>APARELHOS AUDITIVOS RECARREGÁVEIS</h2>

                            <p>
                                Livres de baterias descartáveis, os aparelhos com baterias de ÍON-LÍTIO possuem carregamento rápido e eficiente. Três horas de carga já são suficientes para 24h de uso!
                            </p>

                            <p>
                                Uma das principais vantagens do aparelho auditivo recarregável é o custo-benefício. Isso porque as baterias recarregáveis duram duas a quatro vezes mais em comparação com as pilhas comuns. E não é só isso. Em alguns modelos o carregador pode funcionar como um desumidificador eletrônico. O dispositivo retira toda umidade do aparelho auditivo.
                            </p>

                            <div class="grid grid-col-5">
                                <?php

                                $imagens = glob("imagens/produtos/" . $urlPagina . "-{,[0-9]}[0-9].jpg", GLOB_BRACE);
                                foreach ($imagens as $key => $imagem) {
                                ?>

                                    <a href="<?= $url . $imagem ?>" data-fancybox="group1" class="lightbox" title="<?= $h1 ?>" data-caption="<?= $h1 ?>">
                                        <img src="<?= $url . $imagem ?>" alt="<?= $h1 ?>" title="<?= $h1 ?>" class="img-medium" />
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
    <? include('inc/footer.php'); ?>
    <!--STARTSCRIPTSFOOTER-->
    <!--ENDSCRIPTSFOOTER-->
</body>

</html>