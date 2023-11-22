<aside class="mpi-aside aside--auto">
    <h2>FAÇA UM ORÇAMENTO</h2>    
    <form enctype="multipart/form-data" method="post" class="mpi-form mpi-form--aside">
        <label>Digite seu nome</label>
        <input placeholder="Ex: JOÃO SILVA" type="text" name="nome" onKeyUp="maiusculas(this)" value="<?php if (isset($post['nome'])): echo $post['nome']; endif; ?>" required>

        <label>Digite seu email</label>
        <input type="text" placeholder="email@exemplo.com.br" onKeyUp="minusculas(this)" name="email" value="<?php if (isset($post['email'])): echo $post['email']; endif; ?>" required>
        
        <label>Digite seu telefone</label>
        <input type="text" placeholder="(11) 1234-5678" name="telefone" value="<?php if (isset($post['telefone'])): echo $post['telefone']; endif; ?>" required>
        
        <label>Mensagem</label>
        <textarea rows="5" name="mensagem" placeholder="Gostaria de saber mais sobre <?=$h1?>" required><?php if (isset($post['mensagem'])): echo $post['mensagem']; endif; ?></textarea>
        <div class="g-recaptcha" data-size="<?=(!$isMobile) ? 'normal' : 'compact'?>" data-sitekey="<?= $siteKey; ?>"></div>
        
        <input type="submit" name="EnviaContato" value="Enviar" class="ir">
    </form>
    <hr>
    <div class="aside-social">
        <?if(isset($whatsapp)):?>
        <a href="<?=$wppLink?>" target="_blank" rel="nofollow" class="btn btn--green my-1" title="Orçamento por Whatsapp">Orçamento por Whatsapp</a>
        <?endif?>
        <a href="tel:<?=$fone[0][1]?>" class="btn my-1" title="Orçamento pelo Telefone">Orçamento pelo Telefone</a>
        <? include('inc/social-media.php'); ?>
    </div>
    <hr>
    <h2 class="collapse-aside">Páginas Relacionadas <i class="fas fa-caret-down"></i></h2>
    <nav style="display: none;">
        <ul>
            <!-- LINKS DO MENU INSERIDOS VIA SCRIPT -->
        </ul>
    </nav>
</aside>
<script>
    $(document).ready(function(){

        $('.expand-content span').on('click', function(){
            $('.mpi-content').slideToggle(function(){
                if($('.mpi-content').css('display') == 'block'){
                    $('.expand-content span').html(`<i class="fas fa-chevron-up"></i>`);
                }
                else {
                    $('.expand-content span').html(`Leia mais`);
                }
            });
        });

        $('.tabs-btn [data-tab]').on('click', function(){
            let currentTab = $(this).attr('data-tab');
            if(!$(this).hasClass('active-tab')){
                $('.tabs-btn [data-tab]').removeClass('active-tab');
                $(this).addClass('active-tab');
            }

            if($('.tabs-content .active-tab').attr('data-tab') != currentTab){
                $('.tabs-content .active-tab').fadeOut(function(){
                    $(this).removeClass('active-tab');
                    $(`.tabs-content [data-tab='${currentTab}']`).addClass('active-tab');
                    $(`.tabs-content [data-tab='${currentTab}']`).fadeIn();
                });
            }
        });

        $('aside .collapse-aside').on('click', function(){
            $(this).next().slideToggle();
            $(this).find("i").toggleClass('collapse-aside-active');
        });
    });
</script>