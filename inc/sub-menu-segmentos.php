<?php include_once('inc/vetSegmentos.php');
    foreach ($vetSegmentos as $key => $item):
        if($item['sub-menu'] === null): ?>
        	<li><a href="<?=$url.$item['url']?>" title="<?=$item['title']?>"><?=$item['title']?></a></li>            
    	<?php else: ?>
            <li class="dropdown"><a href="<?=$url.$item['url']?>" title="<?=$item['title']?>"><?=$item['title']?></a>
                <ul class="sub-menu">
                    <? include("inc/".$item['sub-menu'].".php"); ?>                
                </ul>
            </li>
		<?php endif;
	endforeach;
?>