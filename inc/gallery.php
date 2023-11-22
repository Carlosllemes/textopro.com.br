<ul class="gallery">
  <? $imagens = glob("imagens/informacoes/".$urlPagina."-{,[0-9]}[0-9].jpg", GLOB_BRACE);
  foreach ($imagens as $key => $imagem): ?>
    <li>
      <a href="<?=$url.$imagem?>" data-fancybox="group1" class="lightbox" title="<?=$h1?>" data-caption="<?=$h1?>">
        <img src="<?=$url.$imagem?>" alt="<?=$h1?>" title="<?=$h1?>">
      </a>
    </li>
  <? endforeach; ?>
</ul>