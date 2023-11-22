<?
$h1         = 'Blog';
$title      = 'Blog';
$desc       = 'Blog - ';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Blog';
include('inc/head.php');
?>
<!--STARTSCRIPTSHEADER-->
<!--ENDSCRIPTSHEADER-->
</head>

<body>
    <? include('inc/topo.php'); ?>
    <main>
        <div class="content">
            <section>
                <?= $caminho ?>
                <!--STARTCOMPONENTS-->
                <div class="container">
                    <div class="wrapper">
                        <div class="content__blog">
                        <div class="blog__card">
                                <div class="card__meta">
                                    <div class="card__cover"
                                        style="--background: url(<?=$url?>imagens/blog/mapeamento-fala-01.jpg)">
                                    </div>
                                    <ul class="card__details">
                                        <li class="details__author"><i class="fa fa-user" aria-hidden="true"></i> Sonora
                                        </li>
                                        <li class="details__date"><i class="fa fa-calendar" aria-hidden="true"></i>
                                            07/11/2023</li>
                                        <li class="details__tags"><i class="fa fa-tag" aria-hidden="true"></i>
                                            <ul>
                                                <li><a href="#" title="TAGS">PAC</a></li>
                                                <li><a href="#" title="TAGS">Aparelhos</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card__description">
                                    <h3 class="blog__title">Mapeamento de Fala em Recife, PE: Uma Visão Geral da Tecnologia Revolucionária</h3>
                                    <p class="blog__text">Recife, a encantadora capital de Pernambuco, tem sido palco de avanços tecnológicos significativos nas últimas décadas. Um desses avanços que está ganhando destaque é o mapeamento de fala. Neste artigo, exploraremos o mapeamento de fala e como essa tecnologia inovadora está transformando a maneira como interagimos com a tecnologia em Recife, Pernambuco.</p>
                                    <p class="float-right"><a href="<?=$url?>mapeamento-de-fala-visao-geral-da-tecnologia-revolucionaria.php"
                                            title="Leia Mais" class="card__btn">Leia Mais</a></p>
                                </div>
                            </div>

                        <div class="blog__card">
                                <div class="card__meta">
                                    <div class="card__cover"
                                        style="--background: url(<?=$url?>imagens/blog/pecas-acessorios-aparelhos-auditivos-01.jpg)">
                                    </div>
                                    <ul class="card__details">
                                        <li class="details__author"><i class="fa fa-user" aria-hidden="true"></i> Sonora
                                        </li>
                                        <li class="details__date"><i class="fa fa-calendar" aria-hidden="true"></i>
                                            30/10/2023</li>
                                        <li class="details__tags"><i class="fa fa-tag" aria-hidden="true"></i>
                                            <ul>
                                                <li><a href="#" title="TAGS">Manutenção</a></li>
                                                <li><a href="#" title="TAGS">Aparelhos</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card__description">
                                    <h3 class="blog__title">Cuidados com Aparelhos Auditivos: Manutenção e Limpeza para Garantir um Desempenho Duradouro</h3>
                                    <p class="blog__text">Os aparelhos auditivos desempenham um papel vital na melhoria da qualidade de vida de pessoas com perda auditiva. No entanto, para garantir que esses dispositivos funcionem de maneira eficaz a longo prazo, é essencial adotar práticas de manutenção e limpeza adequadas.</p>
                                    <p class="float-right"><a href="<?=$url?>cuidados-com-aparelhos-auditivos"
                                            title="Leia Mais" class="card__btn">Leia Mais</a></p>
                                </div>
                            </div>
                            <div class="blog__card">
                                <div class="card__meta">
                                    <div class="card__cover"
                                        style="--background: url(<?=$url?>imagens/blog/entendendo-a-perda-de-audicao.jpg)">
                                    </div>
                                    <ul class="card__details">
                                        <li class="details__author"><i class="fa fa-user" aria-hidden="true"></i> Sonora
                                        </li>
                                        <li class="details__date"><i class="fa fa-calendar" aria-hidden="true"></i>
                                            25/10/2023</li>
                                        <li class="details__tags"><i class="fa fa-tag" aria-hidden="true"></i>
                                            <ul>
                                                <li><a href="#" title="TAGS">Audição</a></li>
                                                <li><a href="#" title="TAGS">Aparelhos</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card__description">
                                    <h3 class="blog__title">Entendendo a Perda de Audição: Quando é Hora de Considerar
                                        um Aparelho Auditivo?</h3>
                                    <p class="blog__text">A audição desempenha um papel fundamental em nossa vida
                                        diária, permitindo-nos comunicar, interagir e apreciar os sons do mundo ao nosso
                                        redor. No entanto, a perda de audição é uma realidade para muitas pessoas, e
                                        compreender quando é o momento certo para considerar um aparelho auditivo é
                                        crucial para melhorar a qualidade de vida. Neste artigo, abordaremos a perda de
                                        audição, seus sinais, sintomas e os momentos em que você deve ponderar a opção
                                        de um aparelho auditivo para recuperar uma audição saudável.</p>
                                    <p class="float-right"><a href="<?=$url?>entendendo-a-perda-de-audicao"
                                            title="Leia Mais" class="card__btn">Leia Mais</a></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="clear"></div>
        </div>
        <!--ENDCOMPONENTS-->
        </section>
        </div> <!-- end content -->
    </main>
    <? include('inc/footer.php'); ?>
    <!--STARTSCRIPTSFOOTER-->
    <!--ENDSCRIPTSFOOTER-->
</body>

</html>