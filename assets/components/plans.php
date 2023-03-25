<section id="pricing-plans">
    <div class="section-title container">
        <h2>Planos</h2>
        <p>Nossos planos</p>
    </div>
    <div class="container">
        <div class="row text-left row-all align-self-center align-items-end">

            <?php

            // Array com as informações dos planos
            $planos = array(
                array(
                    'titulo' => 'Plano Pro                    ',
                    'preco' => 'R$390',
                    'descricao' => '',
                    // 'economia' => 'Economize R$720/ano com assinatura anual.',
                    'caracteristicas' => array(
                        '8 textos para blog com 1.000 palavras cada',
                        '6 posts para redes sociais (legenda)',
                        'Garantia de originalidade do texto produzido',
                        'Sugestão de pauta',
                        'Estudo de palavras-chave',
                        'Prazo de entrega de até 5 dias úteis',
                        'SEO - Análise e Auditoria de até 200 páginas do seu site'

                    )
                ),
                array(
                    'titulo' => 'Plano Gold',
                    'preco' => 'R$790',
                    'descricao' => '',
                    // 'economia' => 'Economize R$980/ano com assinatura anual.',
                    'caracteristicas' => array(
                        'Garantia de originalidade do texto produzido',
                        '16 textos para blog com 1.000 palavras cada',
                        '16 imagens de banco de imagens para os textos',
                        '12 posts para redes sociais (legenda)',
                        '4 Revisão de conteúdos externos E-E-A-T YMYL',
                        'Estudo de palavras-chave',
                        'Sugestão de pauta',
                        'SEO - Análise e Auditoria de até 400 páginas do seu site',
                        'Prazo de entrega de até 3 dias úteis'
                    )
                ),
                array(
                    'titulo' => 'Plano Ultimate',
                    'preco' => 'R$1.190',
                    'descricao' => '',
                    // 'economia' => 'Economize 50% com assinatura anual.',
                    'caracteristicas' => array(
                        'Garantia de originalidade do texto produzido',
                        '25 textos para blog com 1.500 palavras cada',
                        '30 imagens de banco de imagens para os textos',
                        '25 posts para redes sociais (legenda)',
                        '10 Revisão de conteúdos externos E-E-A-T YMYL',
                        'Estudo de palavras-chave',
                        'Sugestão de pauta',
                        'SEO - Análise e Auditoria de até 700 páginas do seu site',
                        'Prazo de entrega de até 2 dias úteis'
                    )
                )
            );

            // Loop para exibir os planos
            foreach ($planos as $plano) {
            ?>
                <div class="col-lg-4 col-all">
                    <?php if ($plano['titulo'] == 'Plano Ultimate') { ?>
                        <div class="vipBlack-plan all-plans">
                        <?php } else { ?>
                            <div class="standard-plan all-plans">
                            <?php } ?>
                            <div class="title-area mt-4 mb-4">
                                <h4><strong><?php echo $plano['titulo']; ?></strong></h4>
                                <p class="text-muted"><?php echo $plano['descricao']; ?></p>
                            </div>
                            <div class="pricing-area mt-5 mb-5">
                                <h3><?php echo $plano['preco']; ?><sub>/pacote + brinde</sub></h3>
                                <p class="text-muted"><?php echo $plano['economia']; ?></p>
                            </div>
                            <div class="features-area mt-4 mb-4">
                                <?php foreach ($plano['caracteristicas'] as $caracteristica) { ?>
                                    <p><i class="bx bx-check"></i> <?php echo $caracteristica; ?></p>
                                <?php } ?>
                            </div>
                            <div class="cta-area mt-4 mb-4">
                                <a target="_blank" href="#" class="tio-cta-orange" id="wp-btn">Compre Agora</a>
                            </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
        </div>
        <br><br>

</section>