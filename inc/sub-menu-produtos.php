<?php
//Links, Títulos e Imagens para thumbnails da página serviços estão definidos no arquivo vetProdutos.php
include_once('vetProdutos.php');
foreach ($vetProdutos as $key => $item) { ?>
    <li><a href="<?= $url . $item['url'] ?>" title="<?= $item['title'] ?>"><?= $item['title'] ?></a></li>
<? } ?>