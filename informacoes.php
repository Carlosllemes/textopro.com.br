<?php
include('inc/vetKey.php');
$h1 = 'Informações';
$title = $h1;
$var = 'Informação';
$desc = 'Informações - ';
include('inc/head.php');
?>
</head>
<body>
  <? include('inc/topo.php');?>
  <main>
    <div class="content" itemscope itemtype="https://schema.org/Products">
      <section>
        <?=$caminho?>
        <div class="container">
          <div class="wrapper">
            <h2>Conheça todas as Informações da <?=$nomeSite?>:</h2>
            <div class="grid grid-col-4">
              <?php
              foreach ($vetKey as $key => $vetor) {
                $strInfo = "
                <div class=\"card card--mpi\">";
                $strInfo .= "
                <a class=\"card__link\" rel=\"nofollow\" href=\"".$url.$vetor['url']."\" title=\"".$vetor['key']."\">
                <img class=\"card__image\" src=\"".$url."inc/scripts/thumbs.php?w=235&amp;h=240&amp;imagem=".$url."imagens/informacoes/".$vetor['url']."-01.jpg\" alt=\"".$vetor['key']."\" title=\"".$vetor['key']."\"/>
                <h2 class=\"card__title\" itemprop=\"name\">".$vetor['key']."</h2>
                </a>";
                $strInfo .= "
                </div>";
                echo $strInfo;
              }?>
            </div>
            <? include('inc/social-media.php');?>
          </div> <!-- end wrapper -->
        </div> <!-- end container -->
      </section>
    </div> <!-- end content -->
  </main>
  <? include('inc/footer.php');?>
</body>
</html>