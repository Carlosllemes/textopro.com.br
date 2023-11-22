<?
$h1         = 'Consignado';
$title      = 'Consignado';
$desc       = 'Consignado - ';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Consignado';
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
                       <div class="consignado">
                           <div class="grid-col-2">
                               <div class="consignado__cover">
                                   <img class="consignado__image" src="<?=$url?>imagens/consignado/experiencia-vip.webp" alt="Experiência VIP" title="Experiência VIP">
                               </div>

                               <div class="consignado__cover">
                                   <img class="consignado__image" src="<?=$url?>imagens/consignado/venda-bem-rapido.webp" alt="Venda bem Rápido" title="Venda bem Rápido">
                               </div>
                           </div>

                           <div class="consignado__content">
                                <h2 class="consignado__title">O que + fazemos por você</h2>
                                <ul class="consignado__list">
                                   <li><i class="fas fa-usd"></i> Executamos o processo de venda com muita segurança e competência desde o anúncio do veículo até a finalização da venda.</li>
                                   <li><i class="fas fa-file"></i> Emitimos contrato e nota fiscal de consignação.</li>
                                   <li><i class="fa-brands fa-expeditedssl"></i> Seu veículo tem cobertura integral em nossa apólice Porto Seguro para armazenamento e test drive.</li>
                                   <li><i class="fas fa-globe"></i> Destacamos seu veículo em nosso site a outras plataformas digitais que hoje contam com mais de 10 mil visitas mensais.</li>
                                   <li><i class="fas fa-globe"></i> Anunciamos seu veículo em nossas mídias sociais onde hoje temos mais de 100 mil seguidores.</li>
                                </ul>
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