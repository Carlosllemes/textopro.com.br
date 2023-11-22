<?
$h1         = 'Quem somos';
$title      = 'Quem somos';
$desc       = 'Quem somos - ';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Quem somos';
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
                        <img class="quem-somos__img" src="<?= $url ?>imagens/empresa/empresa.jpg" alt="<?= $h1 ?>" title="<?= $h1 ?>">
                        <h2>Sobre a <?= $nomeSite . " " . $slogan ?></h2>
                        <p>A Sonora Soluções Auditivas nasceu no ano de 2017, com objetivo de proporcionar um atendimento diferenciado com produtos de excelência aos nossos clientes, visando a reabilitação auditiva de forma completa.</p>
                        <p>
                            Nossa missão é o compromisso com a satisfação e adaptação de nossos pacientes. Oferecendo nossos produtos e serviços com muita atenção e respeito aos nossos clientes, ouvindo sempre seus pontos de vista, estando atento às suas necessidades auditivas para que a escolha dos seus aparelhos e serviços sejam conscientes e atenda plenamente seus desejos e necessidades.
                        </p>
                        <p>
                            Nossa visão é sermos reconhecidos como a melhor empresa em soluções auditivas, construindo um novo conceito em qualidade de vida para os usuários de aparelhos auditivos.</p>
                        <p>
                            Nossos valores estão em atendimento humanizado, oferecendo produtos de qualidade com honestidade, integridade e sinceridade para com o cliente. Comprometimento com a saúde auditiva e a qualidade de vida dos nossos pacientes.</p>
                        <hr>

                        <div class="row my-5 justify-content-center align-items-center bg-custom p-5">
                            <div class="col-3 d-flex flex-column align-items-center">
                                <img class="nossa-equipe__img object-fit-cover rounded w-75" src="<?= $url ?>imagens/empresa/empresa-1.webp" alt="<?= $h1 ?>" title="<?= $h1 ?>">
                            </div>

                            <div class="col-9">
                                <h3 class="fs-26 white">Nossa equipe</h3>
                                <p class="white">Contamos com uma equipe de fonoaudiólogas especializados em reabilitação auditiva e com atendimento totalmente personalizado, coordenada pela fonoaudióloga Fabrícia Gusmão CRFa 4 9697, com graduação Plena em Fonoaudiologia pela Universidade Católica de Pernambuco, fonoaudióloga licenciada Sena desde 2019.</p>
                            </div>
                        </div>
                    </div>
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