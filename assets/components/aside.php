<aside class="col-lg-3 bg-dark text-light">

    <nav class="nav flex-column">
        <a class="nav-link principal text-center " href="<? $url ?>blog">Blog</a>
        <?php
        $current_url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

        foreach ($linksBlog as $produto) {
            $link = $url . $produto['url'];
            $active = ($current_url == $link) ? "active" : "";
        ?>
            <a class="nav-link <?= $active ?>" href="<?= $link ?>" title="<?= $produto['alt'] ?>"><?= $produto['nome'] ?></a>
        <?php
        }
        ?>
    </nav>

</aside>