<?php
$h1     = 'Contato';
$title  = 'Contato';
$desc   = 'Entre em contato e envie sua mensagem pelo formulário e logo entraremos em contato. Qualquer dúvida estamos a disposição pelo email ou telefone';
$key    = '';
$var    = 'Contato';
include('inc/head.php');
include('inc/form-scripts.php');
?>
</head>
<body>
  <?php include('inc/topo.php'); ?>
  <?php include('inc/form-post.php'); ?>
  <main>
    <div class="content">
      <section>
        <?=$caminho?>
<div class="contato">
          <div class="container">
            <div class="wrapper">
              <h2 class="text-center text-uppercase">Fale conosco</h2>
              <div class="row">
                <div class="col-6 p-5">
                  <div class="contato__item">
                    <div class="contato__icon"><i class="fas fa-map-marker-alt" aria-hidden="true"></i></div>
                    <div class="contato__info">
                      <strong>onde estamos</strong>
                      <span><?=$rua." - ".$bairro?> <br> <?=$cidade."/".$UF." - ".$cep?></span>
                    </div>
                  </div>
                  <br class="clear" >
                  <div class="contato__item">
                    <div class="contato__icon"><i class="fab fa-weixin" aria-hidden="true"></i></div>
                    <div class="contato__info">
                      <strong>contatos</strong>
                      <?php foreach ($fone as $key => $value): ?>
                        <?php if ($value[2] != 'fab fa-whatsapp'): ?>
                          <a rel="nofollow" title="Clique e ligue" href="tel:<?=$value[0].$value[1]?>"> (<?=$value[0]?>) <?=$value[1]?></a>
                        <?php else: ?>
                          <a rel="nofollow" href="https://<?=(!$isMobile) ? 'web' : 'api'?>.whatsapp.com/send?phone=55<?=$value[0].str_replace('-', '', $value[1]);?>&text=<?=rawurlencode("Olá! Gostaria de mais informações sobre as ofertas da ".$nomeSite." - ".$slogan)?>" target="_blank" title="Whatsapp <?=$nomeSite?>"> (<?=$value[0]?>) <?=$value[1]?></a>
                        <?php endif; ?>
                        <?php if($key >= 2) break; ?>
                      <?php endforeach; ?>
                      <span><?=$emailContato?></span>
                    </div>
                  </div>
                  <br class="clear" >
                  <div class="contato__item">
                    <div class="contato__icon"><i class="fas fa-user-plus" aria-hidden="true"></i></div>
                    <div class="contato__info">
                      <strong>Siga-nos!</strong>
                      <div class="contato__social">
                        <?php if(isset($urlTwitter)):?>
                          <a rel="nofollow" class="social__link" href="<?=$urlTwitter?>" target="_blank" title="Twitter">
                            <span class="roll"><i class="fab fa-twitter"></i></span>
                            <span class="roll"><i class="fab fa-twitter"></i></span>
                          </a>
                        <?php endif ?>
                        <?php if(isset($urlInstagram)):?>
                          <a rel="nofollow" class="social__link" href="<?=$urlInstagram?>" target="_blank" title="Instagram">
                            <span class="roll"><i class="fab fa-instagram"></i></span>
                            <span class="roll"><i class="fab fa-instagram"></i></span>
                          </a>
                        <?php endif ?>
                        <?php if(isset($urlLinkedIn)):?>
                          <a rel="nofollow" class="social__link" href="<?=$urlLinkedIn?>" target="_blank" title="Linked In">
                            <span class="roll"><i class="fab fa-linkedin-in"></i></span>
                            <span class="roll"><i class="fab fa-linkedin-in"></i></span>
                          </a>
                        <?php endif ?>
                        <?php if(isset($urlYouTube)):?>
                          <a rel="nofollow" class="social__link" href="<?=$urlYouTube?>" target="_blank" title="Youtube">
                            <span class="roll"><i class="fab fa-youtube"></i></span>
                            <span class="roll"><i class="fab fa-youtube"></i></span>
                          </a>
                        <?php endif ?>
                        <?php if(isset($paginaFacebook)):?>
                          <a rel="nofollow" class="social__link" href="https://www.facebook.com/<?=$paginaFacebook?>" target="_blank" title="Facebook">
                            <span class="roll"><i class="fab fa-facebook"></i></span>
                            <span class="roll"><i class="fab fa-facebook"></i></span>
                          </a>
                        <?php endif ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6 p-5">
                  <form enctype="multipart/form-data" method="post" class="contato__form">
                    <div class="row">
                      <div class="col-6 p-2">
                        <label for="nome">Nome Completo -</label>
                        <input placeholder="Digite seu nome" type="text" name="nome" id="nome" required>
                      </div>
                      <div class="col-6 p-2">
                        <label for="email">E-mail -</label>
                        <input placeholder="exemplo@exemplo.com" type="email" name="email" id="email" required>
                      </div>
                      <div class="col-6 p-2">
                        <label for="telefone">Telefone -</label>
                        <input placeholder="(00) 000000-0000" type="tel" name="telefone" id="telefone" required>
                      </div>
                      <div class="col-6 p-2">
                        <label for="como_nos_conheceu">Como nos conheceu -</label>
                        <select name="como_nos_conheceu" id="como_nos_conheceu" required>
                          <option value="">-- Selecione --</option>
                          <option value="Busca do Google">Busca do Google</option>
                          <option value="Outros Buscadores">Outros Buscadores</option>
                          <option value="Links patrocinados">Links patrocinados</option>
                          <option value="Outros Anúncios">Outros Anúncios</option>
                          <option value="Facebook">Facebook</option>
                          <option value="Twitter">Twitter</option>
                          <option value="Google+">Google+</option>
                          <option value="Indicação">Indicação</option>
                          <option value="Outros">Outros</option>
                        </select>
                      </div>
                      <div class="col-12 p-2">
                        <label for="mensagem">Mensagem -</label>
                        <textarea placeholder="Deixe sua mensagem" name="mensagem" id="mensagem" rows="5" required></textarea>
                        <div class="g-recaptcha" data-size="<?= (!$isMobile) ? 'normal' : 'compact' ?>" data-sitekey="<?= $siteKey; ?>"></div>
                        <span class="ir">
                          <label>Enviar</label>
                          <input type="submit" name="EnviaContato" value="">
                        </span>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <iframe class="address-map" src="<?=$mapa?>"></iframe>
          </div>
        </div>
      </section>
    </div> <!-- end content -->
  </main>
  <?php include('inc/footer.php');?>
</body>
</html>