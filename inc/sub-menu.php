<?php
include_once('inc/vetKey.php');
foreach ($vetKey as $key => $vetor): ?>
  <li>
    <a data-mpi href="<?=$url.$vetor['url']?>" title="<?=$vetor['key']?>"><?=$vetor['key']?></a>
  </li>
<? endforeach; ?>
