<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "NewsArticle",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?=$url.$urlPagina?>"
      },
      "headline": "<?=$h1?>",
      "image": [
        "<?=$url.'imagens/informacoes/'.$urlPagina.'-01.jpg'?>"
      ],
      "author": {
        "@type": "Organization",
        "name": "<?=$nomeSite?>",
        "url": "<?=$url?>"
      },
      "publisher": {
        "@type": "Organization",
        "name": "<?=$nomeSite?>",
        "logo": {
          "@type": "ImageObject",
          "url": "<?=$url.'imagens/logo.png'?>"
        }
      }
    }
</script>

