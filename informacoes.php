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
    <div class="content">
      <section>  
        <?= $autoBreadcrumb ?>
        <div class="container">    
          <div class="wrapper">
            <h2>Conheça todas as Informações da <?=$nomeSite?>:</h2>
            <div class="card-group">
              <?php
              foreach($vetKey as $key => $vetor):
                $mpiUrl   = $vetor['url'];
                $mpiTitle = $vetor['key'];   
                $mpiDesc  = $vetor['desc'];
                $mpiCover = glob('imagens/informacoes/'.$mpiUrl.'-{,[0-9]}[0-9].jpg', GLOB_BRACE); // Default Cover
                $mpiAltCover = 'imagens/informacoes/'.$mpiUrl.'-'.$vetor['cover'].'.jpg';  // Alternative cover
                ?>
                <div class="card card--mpi">
                  <a class="card__link" rel="nofollow" href="<?=$url.$mpiUrl?>" title="<?=$mpiTitle?>">
                    <img class="card__image" src="<?=$url.(($vetor['cover'] && $vetor['cover'] != ' ') ? $mpiAltCover : $mpiCover[0])?>" alt="<?=$mpiTitle?>" title="<?=$mpiTitle?>" >
                    <h3 class="card__title"><?=$mpiTitle?></h3>
                  </a>
                </div>
                <?php 
              endforeach; ?>
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