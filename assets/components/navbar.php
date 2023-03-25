<nav id="navbar" class="navbar order-last order-lg-0">
  <ul>
    <li><a class="nav-link scrollto active" href="<? $url ?>" title="Ir para a seção Home">Home</a></li>
    <li><a class="nav-link scrollto" href="<? $url ?>index#solucoes" title="Ir para a seção Soluções">Serviços</a></li>
    <li><a class="nav-link scrollto" href="<? $url ?>index#pricing-plans" title="Planos">Planos</a></li>
    <li><a class="nav-link scrollto" href="<? $url ?>index#sobre" title="Ir para a seção Sobre Nós">Quem somos</a></li>
    <li><a class="nav-link scrollto" href="<? $url ?>index#faq" title="Ir para a seção FAQ">FAQ</a></li>
    <li class="dropdown"><a href="#"><span>Blog</span> <i class="bi bi-chevron-down"></i></a>
      <?php include("assets/inc/blog-menu.php"); ?>
      <ul>
        <?php foreach ($linksBlog as $produto) : ?>
          <li><a href="<?= $url . $produto['url'] ?>" title="<?= $produto['alt'] ?>"><?= $produto['nome'] ?></a></li>
        <?php endforeach; ?>
      </ul>
    </li>
    <li><a class="nav-link scrollto" href="<? $url ?>#contact">Contato</a></li>
  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->