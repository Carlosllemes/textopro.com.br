<?
$h1         = 'Retroauriculares';
$title      = 'Retroauriculares';
$desc       = 'Retroauriculares - ';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Retroauriculares';
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
                        <h2>Saiba mais sobre <?=$h1?>:</h2>
                        <p>
                            Por ser o mais versátil no que se refere a recursos e frequências, o aparelho auditivo Retroauricular é o mais utilizado de todos. Posicionado atrás da orelha, ele transmite um som que chega próximo ao tímpano. Pode ser utilizado em praticamente todos os tipos de perda da audição.
                        </p>
                        <h3>Retroauricular (BTE):</h3>
                        <p>
                            Aparelhos retro auriculares, conhecido como BTE (Behind the Ear) podem ser adaptados em qualquer
                            tipo de perda, inclusive perdas severas ou profundas, isso porque eles podem acomodar um
                            amplificador e uma bateria maior se tornando mais potentes. Podem ter botões para ajuste de volume e
                            programa, o que ajuda bastante as pessoas com problemas de visão ou de destreza manual. São os
                            mais indicados também nas adaptações pediátricas.
                        </p>
                        <p>
                            Podem ser adaptados com tubo fino (Open Fit) para perdas leves a moderadas ou com moldes para
                            perdas moderadas a profundas.
                        </p>
                        <div class="grid grid-col-2">
                            <div>
                                <h3>TUBO FINO (OPEN FIT)</h3>
                                <a href="<?=$url?>imagens/produtos/retroauriculares-2.jpg" data-fancybox="group1" class="lightbox" title="<?=$h1?>" data-caption="<?=$h1?>">
                                    <img src="<?=$url?>imagens/produtos/retroauriculares-2.jpg" alt="<?=$h1?>" title="<?=$h1?>" class="img-medium">
                                </a>
                            </div>
                            <div>
                                <h3>MOLDE</h3>
                                <a href="<?=$url?>imagens/produtos/retroauriculares-4.jpg" data-fancybox="group1" class="lightbox" title="<?=$h1?>" data-caption="<?=$h1?>">
                                    <img src="<?=$url?>imagens/produtos/retroauriculares-4.jpg" alt="<?=$h1?>" title="<?=$h1?>" class="img-medium">
                                </a>
                            </div>
                        </div>
                        
                        <h3>Retroauricular (RIC):</h3>
                        <p>
                            Neste modelo, uma das peças que ficaria dentro da caixa do aparelho é retirada, o receptor, e inserida
                            no conduto, ligadas através de uma fiação. São os aparelhos atualmente mais utilizados, pois
                            conseguimos atender à necessidades auditivas diversas, possuem melhor acoplamento no ouvido e
                            menor risco de chiados ou apitos causados pela microfonia, os famosos e indesejáveis apitos.
                            Amplificam perdas auditivas de leve a severa e dependendo da tecnologia amplifica perdas profundas.
                        </p>
                        <p>
                            A principal vantagem deste aparelho auditivo é o tamanho. Por ser em miniatura, o ouvido não fica
                            completamente coberto e o som é escutado mais naturalmente.
                        </p>
                        <div class="grid grid-col-2">
                            <a href="<?=$url?>imagens/produtos/retroauriculares-3.jpg" data-fancybox="group1" class="lightbox" title="<?=$h1?>" data-caption="<?=$h1?>">
                                <img src="<?=$url?>imagens/produtos/retroauriculares-3.jpg" alt="<?=$h1?>" title="<?=$h1?>" class="img-medium">
                            </a>
                            <a href="<?=$url?>imagens/produtos/retroauriculares-1.jpg" data-fancybox="group1" class="lightbox" title="<?=$h1?>" data-caption="<?=$h1?>">
                                <img src="<?=$url?>imagens/produtos/retroauriculares-1.jpg" alt="<?=$h1?>" title="<?=$h1?>" class="img-medium">
                            </a>
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