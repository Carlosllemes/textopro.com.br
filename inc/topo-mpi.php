<div class="topo-contato">
    <div class="wrapper">
        <div class="row">
            <div class="col-6 d-flex align-items-center justify-content-start justify-content-sm-center">
                <span>Entre em contato com um de nossos especialistas!</span>
            </div>
            <div class="col-6 row justify-content-center gap-10">
                <div class="py-0 <?=(isset($whatsapp) ? 'col-5 col-sm-12 col-md-12' : 'col-12'); ?>">
                    <a href="javascript:;" title="Faça seu orçamento agora mesmo" class="btn btn-white lightbox" data-src="#modal-form-contato">Faça seu orçamento agora mesmo</a>
                </div>
                <?if(isset($whatsapp)):?>
                <div class="py-0 col-5 col-sm-12 col-md-12">
                    <a href="https://web.whatsapp.com/send?phone=55<?=$whatsapp?>&text=<?=rawurlencode("Olá! Gostaria de mais informações sobre as ofertas da ".$nomeSite." - ".$slogan)?>" target="_blank" rel="nofollow" title="Faça seu orçamento por Whatsapp" class="btn btn-whatsapp">Faça seu orçamento por Whatsapp</a>
                </div>
                <?endif?>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<header>
<div class="wrapper">
            <div class="d-flex flex-sm-column flex-align-items-center justify-content-between justify-content-md-center gap-20">
                <div class="logo">
                    <a rel="nofollow" href="<?=$url?>" title="Voltar a página inicial">
                        <img src="<?=$url?>imagens/logo.png" alt="<?=$nomeSite?>" title="<?=$nomeSite?>" width="200" >
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
<?include('inc/form-scripts.php');?>
<?include('inc/form-post.php');?>
<div style="display: none;" id="modal-form-contato">
    <h2>Entre em contato</h2>
    <hr>
    <form enctype="multipart/form-data" method="post" class="form orcamento-topo">
        <label>Nome: <span>*</span> </label>
        <input onKeyUp="UcWords(this)" type="text" name="nome" value="<?php if (isset($post['nome'])): echo $post['nome']; endif; ?>" required>
        <label>E-mail: <span>*</span> </label>
        <input onKeyUp="minusculas(this)" type="text" name="email" value="<?php if (isset($post['email'])): echo $post['email']; endif; ?>" required>
        <label>Telefone: <span>*</span> </label>
        <input type="text" name="telefone" value="<?php if (isset($post['telefone'])): echo $post['telefone']; endif; ?>" required>
        <label>Mensagem: <span>*</span> </label>
        <textarea name="mensagem" rows="5" required><?php if (isset($post['mensagem'])): echo $post['mensagem']; endif; ?></textarea>
        <div class="g-recaptcha" data-size="<?=(!$isMobile) ? 'normal' : 'compact'?>" data-sitekey="<?= $siteKey; ?>"></div>
        <input type="submit" name="EnviaContato" value="Enviar" class="ir" >
    </form>
</div>