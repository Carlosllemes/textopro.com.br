
<?php
include('inc/vetKey.php');
$h1       = "Informações";
$title    = $h1;
$desc     = "Informações - A OCS Remoção de Entulho foi fundada em 1998 na cidade de São Paulo por Orlando Correia da Silva, sendo nossa principal missão ajudar";
$var    = "Informação";
include('inc/head.php');
?>
</head>
<body>
<? include('inc/topo.php');?>
<div class="wrapper">
    <main>
        <div class="content">
            <section>
                <?=$autoBreadcrumb?>
                <h1><?=$h1?></h1>
                <article class="full">
                    <? include('inc/social-media.php');?>
                    <h2>Conheça todas as Informações da <?=$nomeSite?>:</h2>
                    <section>
                        <ul class="thumbnails">
                            <?php
                            foreach ($vetKey as $key => $vetor) {
                                $strInfo = "
                    <li>";
                                $strInfo .= "
                      <a rel=\"nofollow\" href=\"".$url.$vetor['url']."\" title=\"".$vetor['key']."\"><img src=\"".$url."inc/scripts/thumbs.php?w=300&amp;h=300&amp;imagem=".$url."imagens/informacoes/".$vetor['url']."-01.jpg\" alt=\"".$vetor['key']."\" title=\"".$vetor['key']."\"/></a>
                      <h2 itemprop=\"name\"><a href=\"".$url.$vetor['url']."\" title=\"".$vetor['key']."\">".$vetor['key']."</a></h2>";
                                $strInfo .= "
                    </li>";
                                echo $strInfo;
                            }
                            ?>
                        </ul>
                    </section>
                </article>
            </section>
        </div>
    </main>
</div><!-- .wrapper -->
<? include('inc/footer.php');?>
</body>
</html>
