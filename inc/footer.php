<div class="clear"></div>
<footer>
    <div class="wrapper">
        <div class="row">
            <div class="col-4">
                <div class="footer__empresa">
                    <img src="<?=$url?>imagens/logo.png" alt="<?=$nomeSite." ".$Slogan?>" title="<?=$nomeSite." ".$Slogan?>" width="167" height="90">
                    <? include('inc/canais.php');?>
                </div>
            </div>
            <div class="col-4">
                <div class="footer__menu">
                    <nav>
                        <ul>
                            <?php
                            foreach ($menu as $key => $value){
                                if($sigMenuPosition !== false && $key == $sigMenuPosition) include('inc/menu-footer-sig.php');
                                echo '
                                <li>
                                <a rel="nofollow" href="'.(strpos($value[0], 'http') !== false ? $value[0] : $url.$value[0]).'" title="'.($value[1] == 'Home' ? 'Página inicial' : $value[1]).'" '.(strpos($value[0], 'http') !== false ? 'target="_blank"' : "").'>'.$value[1].'</a>
                                </li>
                                ';
                            } ?>
                            <li><a href="<?=$url?>mapa-site" title="Mapa do site <?=$nomeSite?>">Mapa do site</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-4">
                <address class="address">
                    <strong><?=$nomeSite?></strong>
                    <span><i class="fas fa-map-marker-alt" aria-hidden="true"></i> <?=$rua." - ".$bairro?> <?=$cidade."/".$UF." - ".$cep?></span>
                    <?php foreach ($fone as $key => $value): ?>
                     <?php if ($value[2] != 'fab fa-whatsapp'): ?>
                         <a rel="nofollow" title="Clique e ligue" href="tel:<?=$value[0].$value[1]?>">
                             <i class="<?=$value[2]?>"></i> (<?=$value[0]?>) <?=$value[1]?>
                         </a>
                     <?php else: ?>
                         <a rel="nofollow" href="https://<?=(!$isMobile) ? 'web' : 'api'?>.whatsapp.com/send?phone=55<?=$value[0].str_replace('-', '', $value[1]);?>&text=<?=rawurlencode("Olá! Gostaria de mais informações sobre as ofertas da ".$nomeSite." - ".$slogan)?>" target="_blank" title="Whatsapp <?=$nomeSite?>">
                             <i class="<?=$value[2]?>"></i> (<?=$value[0]?>) <?=$value[1]?>
                         </a>
                     <?php endif; ?>
                     <?php if($key >= 2) break; ?>
                 <?php endforeach; ?>
                 <a rel="nofollow" title="Envie um e-mail" href="mailto:<?=$emailContato?>"><i class="fas fa-envelope"></i> <?=$emailContato?></a>
             </address>
         </div>
     </div>
 </div>
 <div class="clear"></div>
</footer>
<div class="copyright-footer">
    <div class="wrapper">
        Copyright © <?=$nomeSite?>. (Lei 9610 de 19/02/1998)
        <div class="selos">
            <a rel="nofollow" href="https://validator.w3.org/check?uri=<?=$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" target="_blank" title="HTML5 W3C"><i class="fab fa-html5" aria-hidden="true"></i> <strong>W3C</strong></a>
            <a rel="nofollow" href="https://jigsaw.w3.org/css-validator/validator?uri=<?=$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=pt-BR" target="_blank" title="CSS W3C"><i class="fab fa-css3-alt" aria-hidden="true"></i> <strong>W3C</strong></a>
            <img src="<?=$url?>imagens/selo.png" alt="Selo" title="Selo" width="140" height="15">
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php if(isset($whatsapp) && !empty($whatsapp)){ include 'whatsapp-button.php';} ?>
<?include('inc/LAB.php');?>
<?include('inc/check.php');?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">