<?php $pageFootersWithoutMap = array(
    "",
    "contato"
);

if(in_array($urlPagina, $pageFootersWithoutMap)) {
    $noMapFooter = true;
}

?>

<div class="clear"></div>
<footer>
    <div class="wrapper">
        <div class="footer-container">
            <div class="footer-empresa">
                <img class="footer-empresa__image" src="<?=$url?>imagens/logo-white.webp" alt="<?=$nomeSite?>" title="<?=$nomeSite?>" loading="lazy" width="250" height="145">
                <p class="footer-empresa__text">A Auto Bunkers foi desenvolvida para trabalhar com precisão e excelência no mercado de blindagem e veículos premium, oferecendo a melhor experiência com uma estrutura completa atendendo às necessidades de seus clientes com qualidade, seurança e agilidade.</p>
            </div>

            <div class="footer-menu">
                <h2 class="footer-title">Links Rápidos</h2>
                <nav>
                    <ul class="footer-menu__list <?= $noMapFooter == true ? 'grid-col-2 grid-gap-0' : '' ?>">
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
                        <li><a href="<?=$url?>politica-privacidade" title="Política de Privacidade <?=$nomeSite?>">Política de Privacidade</a></li>
                    </ul>
                </nav>
            </div>

            <div class="footer-contact">
                <h2 class="footer-title">Informações</h2>
                <address class="address">
                    <span class="notranslate"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Endereço: <?=$rua." - ".$cidade." - ".$UF?></span>
                    <span><i class="fa-solid fa-helicopter" aria-hidden="true"></i> Heliponto: <?=$heliporto?></span>
                    <?php foreach ($fone as $key => $value): ?>
                        <?php if ($value[2] != 'fab fa-whatsapp'): ?>
                            <a rel="nofollow" title="Clique e ligue" href="tel:<?=$value[0].$value[1]?>">
                                <i class="<?=$value[2]?>"></i> Telefone: (<?=$value[0]?>) <?=$value[1]?>
                            </a>
                        <?php else: ?>
                            <a rel="nofollow" href="<?=$wppLink?>" target="_blank" title="Whatsapp <?= $nomeSite ?>">
                                <i class="<?=$value[2]?>"></i> (<?=$value[0]?>) <?=$value[1]?>
                            </a>
                        <?php endif; ?>
                        <?php if($key >= 2) break; ?>
                    <?php endforeach; ?>
                    <span><i class="fa-solid fa-clock"></i> Funcionamento:<br> Segunda à Sexta 9:00 às 18:00,<br>Sábados 9:00 às 13:00</span>
                </address>
                <? include('inc/canais.php'); ?>
            </div>

            <?php if($noMapFooter == false): ?>
                <div class="footer-location">
                    <h2 class="footer-title">Localização</h2>
                    <iframe class="footer-location__map" src="<?=$mapa?>"></iframe>
                </div>
            <?php endif; ?>            
        </div>
    </div>
</footer>
<div class="copyright-footer">
    <div class="wrapper">
        Copyright © <?=$nomeSite?>. (Lei 9610 de 19/02/1998)
        <div class="selos">
            <a rel="nofollow" href="https://validator.w3.org/check?uri=<?=$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" target="_blank" title="HTML5 W3C"><i class="fab fa-html5" aria-hidden="true"></i> <strong>W3C</strong></a>
            <a rel="nofollow" href="https://jigsaw.w3.org/css-validator/validator?uri=<?=$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>&amp;profile=css3svg&amp;usermedium=all&amp;warning=1&amp;vextwarning=&amp;lang=pt-BR" target="_blank" title="CSS W3C"><i class="fab fa-css3-alt" aria-hidden="true"></i> <strong>W3C</strong></a>
            <img class="object-fit-contain" src="<?=$url?>imagens/selo.webp" alt="Desenvolvido com MPI Technology®" title="Desenvolvido com MPI Technology®" width="50" height="41" loading="lazy">
        </div>
    </div>
    <div class="clear"></div>
</div>


<?include('inc/LAB.php');?>

<!-- end footer -->

<script>
    function googleTranslateElementInit2() {
        new google.translate.TranslateElement({
            pageLanguage: 'pt',
            autoDisplay: false
        }, 'google_translate_element2');
    }     

    <? include('js/gtranslate.js'); ?> 
</script>
<script async src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>