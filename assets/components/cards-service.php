<?php
$icons = array(
    array("bx bxl-dribbble", "Artigos para blogs e sites", "Com nossos artigos, seu blog ou site terá conteúdo relevante e de qualidade para atrair mais visitantes e aumentar sua autoridade online. Imagine sua marca crescendo com a ajuda da TextoPro."),
    array("bx bx-file", "Conteúdo para mídias sociais", "Com nosso conteúdo para mídias sociais, você terá a presença online que sempre sonhou! Aumente sua popularidade e atraia mais seguidores e clientes. Seja a referência em seu nicho e sinta a adrenalina de ver suas redes bombando. "),
    array("bx bx-tachometer", "Descrições de produtos e serviços", "Seu produto é ótimo, mas como destacá-lo em um mar de opções? Com uma chamada irresistível, claro! Nós sabemos como escrever textos que vendem e fazem seu produto brilhar. Deixe-nos ajudar você a alcançar mais clientes e aumentar suas vendas!"),
    array("bx bx-world", "Redação para materiais institucionais", "Com a TextoPro, você economiza tempo e evita atrasos na criação de materiais institucionais. Deixe a redação conosco e relaxe."),
    array("bx bx-slideshow", "Revisão e edição de textos", "Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur"),
    array("bx bx-arch", "E-mails e newsletters", "Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur"),
);

?>
<div class="row">
    <?php foreach ($icons as $icon) : ?>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
                <div class="icon"><i class="<?php echo $icon[0]; ?>"></i></div>
                <h4><?php echo $icon[1]; ?></h4>
                <p><?php echo $icon[2]; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>