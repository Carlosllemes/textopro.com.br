<div class="mpi-related">
  <h2 class="fs-28 text-center">Publicações Relacionadas</h2>
  <div class="row">
    <?
    $limit = 3;
    include('inc/vetKey.php');
    include('inc/classes/strFuncoes.class.php');
    $str = new strFuncoes();
    shuffle($vetKey);
    $strPalavra = implode(" ", $str->RetiraPreposicao($h1));
    $vetKey_PR = $str->buscaVetorAprox($strPalavra, $vetKey, $limit, $h1);
    for($i = 0; $i < sizeof($vetKey_PR); $i++):
      $imagens = glob("imagens/informacoes/".$vetKey[$vetKey_PR[$i]]["url"]."-{,[0-9]}[0-9].jpg", GLOB_BRACE);
      if(!empty($imagens)): ?>
        <div class="p-2 col-4">
          <a rel="nofollow" href="<?=$url.$vetKey[$vetKey_PR[$i]]['url']?>" title="<?=$vetKey[$vetKey_PR[$i]]['key']?>">
            <img class="mpi-related__cover" src="<?=$url.$imagens[0]?>" title="<?=$vetKey[$vetKey_PR[$i]]["key"]?>" alt="<?=$vetKey[$vetKey_PR[$i]]["key"]?>">
            <h2 class="mpi-related__title"><?=$vetKey[$vetKey_PR[$i]]["key"]?></h2>
          </a>
        </div>
      <?php endif; ?>
    <? endfor; ?>
  </div>
</div>
