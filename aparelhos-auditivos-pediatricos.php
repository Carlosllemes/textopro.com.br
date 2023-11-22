<?
$h1         = 'Aparelhos Auditivos Pediatricos';
$title      = 'Aparelhos Auditivos Pediatricos';
$desc       = 'Aparelhos Auditivos Pediatricos - ';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Aparelhos Auditivos Pediatricos';
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
                            <h2>Saiba mais sobre <?= $h1 ?></h2>
                            <p>
                                Projetados para crianças, os diferenciais dos aparelhos pediátricos vão além da alta tecnologia e segurança, possuem compartimento de bateria com trava, luz de LED para indicar o funcionamento, hipoalergênico, bobina de indução e suporte para sistemas FM de sala de aula. Além disso, podemos contar com as 12 opções de cores, fazendo com que a criança aceita melhor o uso dos aparelhos e ficando estéticamente mais interessante. </p>
                            <p>
                                Os Aparelhos Pediátricos proporcionam à criança acesso ao mundo sonoro auxiliando na discriminação entre sons significativos e sons irrelevantes e perturbadores. Melhorando a compreensão da fala em ambientes ruidosos e promovendo o aprendizado, dando a seu filho acesso a várias fontes sonoras no ambiente.
                            </p>
                            <div class="grid grid-col-4">
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