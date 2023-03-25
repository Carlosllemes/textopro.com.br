<aside class="col-lg-3 bg-dark text-light">

    <nav class="nav flex-column">
        <a class="nav-link principal text-center " href="<? $url ?>blog">Blog</a>
        <ul class="list-group">
            <?php
            $current_url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

            foreach ($linksBlog as $produto) {
                $link = $url . $produto['url'];
                $active = ($current_url == $link) ? "active" : "";
            ?>
                <li>
                    <a class="nav-link <?= $active ?>" href="<?= $link ?>" title="<?= $produto['alt'] ?>"><?= $produto['nome'] ?></a>
                </li>
            <?php
            }
            ?>
        </ul>
    </nav>

</aside>
<script type="json">
    {
  "@context": "https://schema.org",
  "@type": "SiteNavigationElement",
  "name": "Menu de navegação",
  "url": "http://www.textopro.com.br/",
  "potentialAction": [
    {
      "@type": "SearchAction",
      "target": "http://www.textopro.com.br/busca?q={search_term_string}",
      "query-input": "required name=search_term_string"
    }
  ],
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Blog",
      "url": "http://www.textopro.com.br/blog"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Comprar blogs e conteúdo",
      "url": "http://www.textopro.com.br/comprar-blogs-conteudo"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Preço de conteúdo para mídias sociais",
      "url": "http://www.textopro.com.br/preco-conteudo-midias-sociais"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Empresa de descrições de produtos e serviços",
      "url": "http://www.textopro.com.br/empresa-descricoes-produtos-servicos"
    },
    {
      "@type": "ListItem",
      "position": 5,
      "name": "Comprar e-mails e newsletters",
      "url": "http://www.textopro.com.br/comprar-emails-newsletters"
    },
    {
      "@type": "ListItem",
      "position": 6,
      "name": "Roteiros para vídeos e podcasts preço",
      "url": "http://www.textopro.com.br/roteiros-videos-podcasts-preco"
    },
    {
      "@type": "ListItem",
      "position": 7,
      "name": "Agência de textos publicitários",
      "url": "http://www.textopro.com.br/agencia-textos-publicitarios"
    },
    {
      "@type": "ListItem",
      "position": 8,
      "name": "Manuais e guias para comprar",
      "url": "http://www.textopro.com.br/manuais-guias-comprar"
    },
    {
      "@type": "ListItem",
      "position": 9,
      "name": "Revisão de textos para empresas",
      "url": "http://www.textopro.com.br/revisao-textos-empresas"
    },
    {
      "@type": "ListItem",
      "position": 10,
      "name": "Serviço de redação de artigos para blogs",
      "url": "http://www.textopro.com.br/servico-redacao-artigos-blogs"
    },
    {
      "@type": "ListItem",
      "position": 11,
      "name": "Conteúdo para Instagram preço",
      "url": "http://www.textopro.com.br/conteudo-instagram-preco"
    },
    {
      "@type": "ListItem",
      "position": 12,
      "name": "Textos para descrição de produtos online",
      "url": "http://www.textopro.com.br/textos-descricao-produtos-online"
    }
  ]
}
</script>