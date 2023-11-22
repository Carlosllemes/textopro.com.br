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
        <?= $autoBreadcrumb ?>
        <div class="container">
          <div class="wrapper">
            <h2>Fale conosco</h2>
            <div class="grid grid-col-2 grid-gap-50">
              <form enctype="multipart/form-data" method="post" class="form">
               <label for="nome">Nome: *</label>
               <input placeholder="Digite seu nome" type="text" name="nome" id="nome" value="<?=RecoverForm('nome')?>" required>
               <label for="email">Email: </label>
               <input placeholder="exemplo@exemplo.com" type="email" name="email" id="email" value="<?=RecoverForm('email')?>" required>
               <label for="telefone">Telefone *</label>
               <input placeholder="(00) 000000-0000" type="tel" name="telefone" id="telefone" value="<?=RecoverForm('telefone')?>" required>
                <!-- <label for="cpf">CPF *</label>
                  <input placeholder="000.000.000-00" type="text" name="cpf" id="cpf" value="<?=RecoverForm('cpf')?>" required> -->
                <!-- <label for="cnpj">CNPJ *</label>
                  <input placeholder="00.000.000/0000-00" type="text" name="cnpj" id="cnpj" value="<?=RecoverForm('cnpj')?>" required> -->
                <!-- <label for="endereco">Endereço *</label>
                  <input placeholder="Ex: Av. São João, 123" type="text" name="endereco" id="endereco" value="<?=RecoverForm('endereco')?>" required> -->
                <!-- <label for="cidade">Cidade *</label>
                  <input placeholder="Ex: São Paulo" type="text" name="cidade" id="cidade" value="<?=RecoverForm('cidade')?>" required> -->
                <!-- <label for="uf">Estado *</label>
                  <input placeholder="Ex: SP" type="text" name="estado" id="uf" value="<?=RecoverForm('estado')?>" required> -->
                <!-- <label for="cep">CEP *</label>
                  <input placeholder="Ex: 00000-000" type="text" name="cep" id="cep" value="<?=RecoverForm('cep')?>" required> -->
                <!-- <label for="anexo">Anexo: *</label>
                  <input type="file" name="anexo" id="anexo" required> -->
                  <label for="como_nos_conheceu">Como nos conheceu *</label>
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
                  <label for="mensagem">Mensagem *</label>
                  <textarea placeholder="Deixe sua mensagem" name="mensagem" id="mensagem" rows="5" required><?=RecoverForm('mensagem')?></textarea>
                  <span class="form__obrigatory">Os campos com * são obrigatórios</span>
                  <div class="g-recaptcha" data-size="<?= (!$isMobile) ? 'normal' : 'compact' ?>" data-sitekey="<?= $siteKey; ?>"></div>
                  <input type="submit" name="EnviaContato" value="Enviar" class="ir">
                </form>
                <div>
                  <address class="address">
                    <strong class="d-block primary-color mb-3 fs-16"><?= $nomeSite . " - " . $slogan ?></strong>
                    <span><i class="fas fa-map-marker-alt" aria-hidden='true'></i> <?= $rua . " - " . $bairro . " - " . $cidade . " - " . $UF . " - " . $cep ?></span>
                    <?php foreach ($fone as $key => $value): ?>
                      <?php if ($value[2] != 'fab fa-whatsapp'): ?>
                        <a rel="nofollow" title="Clique e ligue" href="tel:<?=$value[0].$value[1]?>">
                          <i class="<?=$value[2]?>" aria-hidden='true'></i> (<?=$value[0]?>) <?=$value[1]?>
                        </a>
                      <?php else: ?>
                        <a rel="nofollow" href="<?=$wppLink?>" target="_blank" title="Whatsapp <?= $nomeSite ?>">
                          <i class="<?=$value[2]?>" aria-hidden='true'></i> (<?=$value[0]?>) <?=$value[1]?>
                        </a>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </address>
                  <iframe class="address-map" src="<?=$mapa?>"></iframe>
                </div>
              </div>
            </div> <!-- end wrapper -->
            <div class="clear"></div>
          </div> <!-- container -->
        </section>
      </div> <!-- end content -->
    </main>
    <?php include('inc/footer.php');?>
  </body>
  </html>