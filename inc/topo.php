<?php if($pageLoadingAnimation) include('inc/page-loading-animation.php'); ?>

<header class="header-mobile" id="scrollheader">
    <div class="wrapper">
        <div class="header__logo">
            <a rel="nofollow" href="<?=$url?>" title="Voltar a página inicial">                    
                <img src="<?=$url?>imagens/logo.webp" alt="<?=$nomeSite?>" title="<?=$nomeSite?>" width="250" height="125">
            </a>
        </div>
        <div class="header__contact">
            <address>
                <span class="notranslate"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> <?=$rua."<br>".$bairro." - ".$cidade."/".$UF?></span>
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
            </address>
        </div>
        <div class="header__translate">
          <div id="google_translate_element2"></div>
          <div class="translate-container">
            <a href="#" onclick="doGTranslate('pt|pt');return false;" title="Portuguese">
              <img src="<?=$url?>imagens/icones/br-flag.webp" alt="Portuguese" title="Portuguese" width="30" height="22">
            </a>
            <a href="#" onclick="doGTranslate('pt|en');return false;" title="English">
              <img src="<?=$url?>imagens/icones/us-flag.webp" alt="English" title="English" width="30" height="22">
            </a>            
            <a href="#" onclick="doGTranslate('pt|es');return false;" title="Spanish">
              <img src="<?=$url?>imagens/icones/es-flag.webp" alt="Spanish" title="Spanish" width="30" height="22">
            </a>
          </div>
        </div>
        <div class="header__navigation">
            <!--navbar-->
            <nav id="menu-hamburger">
                <!-- Collapse button -->
                <button class="menu__collapse" aria-label="Menu">
                    <strong class="menu-label">Menu</strong>
                    <span class="collapse__icon">
                        <span class="collapse__icon--1"></span>
                        <span class="collapse__icon--2"></span>
                        <span class="collapse__icon--3"></span>
                    </span>
                </button>
                <!-- collapsible content -->
                <div class="menu__collapsible">
                    <div class="wrapper">
                        <!-- links -->
                        <ul class="menu__items droppable">
                            <? include('inc/menu-top-hamburger.php');?>
                        </ul>
                        <!-- links -->
                    </div>
                    <div class="clear"></div>
                </div>
                <!-- collapsible content -->
            </nav>
            <!--/navbar-->
        </div>
    </div>
</header>
<div id="header-block"></div>