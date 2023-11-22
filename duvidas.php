<?
$h1         = 'Duvidas';
$title      = 'Duvidas';
$desc       = 'Duvidas - A OCS Remoção de Entulho foi fundada em 1998 na cidade de São Paulo por Orlando Correia da Silva, sendo nossa principal missão ajudar o meio';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Duvidas';
include('inc/head.php');
?>
<script src="<?=$url?>js/scriptbreaker-multiple-accordion-1.js"></script>
<script src="<?=$url?>js/drop-list.js"></script>
<link rel="stylesheet" href="<?=$url?>css/accordion.css">
</head>
<body>
<? include('inc/topo.php');?>
<div class="wrapper">
    <main>
        <div class="content">
            <section>
                <?=$autoBreadcrumb?>
                <h1><?=$h1?></h1>
                <article class="full">
                    <h2>Principais dúvidas</h2>
                    
                    <ul class="drop-list">
                        <li>
                            <a href="javascript:;" title="Accordion "><i class="fa fa-plus-square"></i> Quanto tempo a caçamba pode ficar no local?</a>
                            <ul>
                                <li>
                                    <div>
                                        
                                        <p>Para caçamba depositada na via pública na cidade de São Paulo, deverá respeitar o prazo de locação que é de 3 dias úteis de acordo com o decreto 57.662/2017</p>
                                        <p>Para caçambas depositadas “dentro da obra” ou em “recuos de garagens” fica acordado o prazo junto com a atendente ao contratar a caçamba.</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" title="Accordion "><i class="fa fa-plus-square"></i> Qual material posso colocar na caçamba?</a>
                            <ul>
                                <li>
                                    <div>
                                        <p>A caçamba é própria para matérias sólidos provenientes da construção civil, como alvenaria, concreto argamassa, terra, madeira, gesso, ferros, vidros, moveis velhos e etc.</p>
                                        <p>Resíduos de interesses ambientas como lã de vidro, amianto, materiais contaminados e etc., não pode ser colocado nas caçambas, consulte-nos antes de colocar.</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" title="Accordion "><i class="fa fa-plus-square"></i> A empresa possui funcionários próprios para encher a caçamba?</a>
                            <ul>
                                <li>
                                    <div>
                                        <p>Não, somente fornecemos a caçamba, não trabalhamos com mão de obra para encher.</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" title="Accordion "><i class="fa fa-plus-square"></i> Qual o calor da locação da caçamba?</a>
                            <ul>
                                <li>
                                    <div>
                                        <p>O valor varia de acordo com a distância do ponto de partida dos nossos caminhões. Consulte-nos.</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" title="Accordion "><i class="fa fa-plus-square"></i> Para onde vai o resídup gerado em minha obra?</a>
                            <ul>
                                <li>
                                    <div>
                                        <p>A caçamba é enviada para nossa própria ATT – Área de Transbordo e Triagem aonde é feito toda a triagem do material. Resíduos como plástico, papelão, ferro, madeira, concreto e até mesmo o gesso, é enviado para empresas que o reciclam e promovem a reutilização dos mesmos.</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
<li>
                            <a href="javascript:;" title="Accordion "><i class="fa fa-plus-square"></i> Fornecem o comprovante da destinação do resíduo?</a>
                            <ul>
                                <li>
                                    <div>
                                        <p>Trabalhamos no município de São Paulo com a CTR Eletrônica, aonde você acompanha no seu e-mail para onde foi destinado todo o resíduo gerado em sua obra.</p>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    
                    <br class="clear">
                </article>
            </section>
        </div>
    </main>
</div>
<? include('inc/footer.php');?>
</body>
</html>