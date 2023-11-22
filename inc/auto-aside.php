<aside class="aside-04 aside--auto">
    <div class="aside__menu">
        <h2 class="aside-title">MENU</h2>
        <nav>
            <ul>
                <!-- LINKS DO MENU INSERIDOS VIA SCRIPT -->
            </ul>
        </nav>
    </div>
    <div class="aside__contato">
        <div class="d-flex align-items-center justify-content-center">
            <?php foreach ($fone as $key => $value): ?>
            <?php if ($value[2] != "fab fa-whatsapp"): ?>
            <a rel="nofollow" title="Clique e ligue" href="tel:<?=$value[0].$value[1]?>">
                <i class="<?=$value[2]?>"></i>
            </a>
            <?php else: ?>
            <a rel="nofollow" href="https://<?=(!$isMobile) ? "web" : "api"?>.whatsapp.com/send?phone=55<?=$value[0].str_replace("-", "", $value[1]);?>&text=<?=rawurlencode("Olá! Gostaria de mais informações sobre as ofertas da ".$nomeSite." - ".$slogan)?>" target="_blank" title="Whatsapp <?=$nomeSite?>">
                <i class="<?=$value[2]?>"></i>
            </a>
            <?php endif; ?>
            <?php if($key >= 2) break; ?>
            <?php endforeach; ?>
        </div>
        <a href="<?=$url?>contato" class="aside__btn btn-orc" title="Orçamento">Orçamento</a>
    </div>
</aside>