<aside class="mt-5 col-lg-3 col-sm-3 col-12 bg-dark text-light">

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