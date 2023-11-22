<aside class="aside">
    <?php
    if(isset($paginaFacebook) && !empty($paginaFacebook)) {
        echo "
        <div class=\"fb-page\" data-href=\"https://www.facebook.com/$paginaFacebook\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"false\" data-show-posts=\"false\"><div class=\"fb-xfbml-parse-ignore\"><blockquote cite=\"https://www.facebook.com/$paginaFacebook\"><a href=\"https://www.facebook.com/$paginaFacebook\">$nomeSite</a></blockquote></div></div>
        ";
    } ?>
    <a href="<?=$url?>contato" class="aside__btn btn-orc" title="Solicite um orçamento">Solicite um orçamento</a>
    <div class="aside__menu">
        <h2><a href="<?=$url?>segmentos" title="Segmentos">Segmentos</a></h2>
        <nav class="aside__nav">
            <ul>
                <? include('inc/sub-menu-segmentos.php');?>
            </ul>
        </nav>
    </div>
    <div class="aside__contato">
        <h2>Entre em contato</h2>  
        <?php foreach ($fone as $key => $value): ?>
           <?php if ($value[2] != 'fab fa-whatsapp'): ?>
               <a rel="nofollow" title="Clique e ligue" href="tel:<?=$value[0].$value[1]?>">
                   <i class="<?=$value[2]?>"></i> (<?=$value[0]?>) <?=$value[1]?>
               </a>
           <?php else: ?>
               <a rel="nofollow" href="<?=$wppLink?>" target="_blank" title="Whatsapp <?= $nomeSite ?>">
                   <i class="<?=$value[2]?>"></i> (<?=$value[0]?>) <?=$value[1]?>
               </a>
           <?php endif; ?>
           <?php if($key >= 2) break; ?>
       <?php endforeach; ?>
    </div>
</aside>
<div class="clear"></div>