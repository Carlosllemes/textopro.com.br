<header id="scrollheader">
        <div class="topo hide-mobile">
            <div class="wrapper">
                <div class="d-flex align-items-center justify-content-between">
                    <span><i class="fas fa-map-marker-alt" aria-hidden="true"></i> <?=$rua." - ".$cidade." - ".$UF?></span>
                    <div class="d-flex align-items-center justify-content-between gap-10">
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
                        <a rel="nofollow" title="Envie um e-mail" href="mailto:<?=$emailContato?>"><i class="fas fa-paper-plane"></i> <?=$emailContato?></a>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="topo show-mobile">
            <div class="wrapper">
                <div class="flex-top-icons">
                    <a rel="nofollow" href="tel:<?=$fone[0][0].$fone[0][1]?>" title="Clique e ligue"><i class="fas fa-phone"></i></a>
                    <a rel="nofollow" href="mailto:<?=$emailContato?>" target="_blank" title="Envie um E-mail"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="wrapper">
            <div class="d-flex flex-sm-column flex-align-items-center justify-content-between justify-content-md-center gap-20">
                <div class="logo">
                    <a rel="nofollow" href="<?=$url?>" title="Voltar a página inicial">
                        <img src="<?=$url?>imagens/logo.png" alt="<?=$nomeSite?>" title="<?=$nomeSite?>" width="200" height="83" >
                    </a>
                </div>
                <nav id="menu">
                    <ul>
                        <? include('inc/menu-top.php');?>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="clear"></div>
    </header>
    <div id="header-block"></div>