<p class="txtcenter"><a href="<?=$url?>contato" class="btn btn-orc" title="Solicite um orçamento" rel="nofollow">Solicite um orçamento</a></p>
<aside>
    <?php
    if(isset($paginaFacebook) && !empty($paginaFacebook) ){
    echo "
    <div class=\"fb-page\" data-href=\"http://www.facebook.com/$paginaFacebook\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"false\" data-show-posts=\"false\"><div class=\"fb-xfbml-parse-ignore\"><blockquote cite=\"http://www.facebook.com/$paginaFacebook\"><a href=\"http://www.facebook.com/$paginaFacebook\">$nomeSite</a></blockquote></div></div>
    ";
    }
    ?>
    <h2><a href="<?=$url?>informacoes" title="Informações <?=$nomeSite?>">Informações</a></h2>
    <nav>
        <ul>
            <? include('inc/sub-menu.php');?>
        </ul>
    </nav>
    <?php
    if(count($fone) > 1){
    echo "<h3>Entre em contato pelos telefones</h3>";
    } else {
    echo "<h3>Entre em contato pelo telefone</h3>";
    }
    ?>
   
    <?php
        foreach ($fone as $key => $value) {
        echo "<a class=\"d-block my-1\" href=\"tel:$value[0]$value[1]\" title=\"Clique e Ligue\"><i class=\"fa fa-$value[2]\"></i> $value[0] <strong>$value[1]</strong></a>";
        }
    ?>
</aside>

<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "ImageObject",
        "contentUrl": "<?= $url ?>imagens/informacoes/<?= $urlPagina ?>-01.jpg",
        "license": "",
        "acquireLicensePage": "",
        "creditText": "Image <?= $nomeSite ?>",
        "creator": {
            "@type": "Person",
            "name": "<?= $nomeSite ?>"
        },
        "copyrightNotice": "<?= $nomeSite ?>"
    }
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "Organization",
        "url": "<?= $url ?>",
        "logo": "<?= $url ?>imagens/logo.png"
    }
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "LocalBusiness",
        "image": [
            "<?= $url ?>imagens/logo.png"
        ],
        "name": "<?= $nomeSite ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "<?= $rua ?>",
            "addressLocality": "<?= $cidade ?>", 
            "addressRegion": "<?= $UF ?>",
            "postalCode": "<?= $cep ?>",
            "addressCountry": "BR"
        },
        "author": {
            "@type": "Person",
            "name": "<?= $nomeSite ?>"
        },
        "url": "<?= $mapaUrl ?>",
        
        "telephone": "<?= $fone[0][0].' '.$fone[0][1]?>",
        "servesCuisine": "Brasil"
    }
</script>


<script  type="application/ld+json">
    {
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?= $url ?>article"
  },
  "headline": "<?= $h1 ?>",
  "image": [
    "<?= $url ?>imagens/informacoes/<?= $urlPagina ?>-01.jpg"
  ],

  "author": {
    "@type": "Person",
    "name": "<?= $nomeSite ?>"
  },
  "publisher": {
    "@type": "Organization",
    "name": "<?= $nomeSite ?>",
    "logo": {
      "@type": "ImageObject",
      "url": "<?= $url ?>imagens/logo.png",
      "width": 600,
      "height": 60
    }
  },
  "description": "<?= $desc ?>"
}

</script>