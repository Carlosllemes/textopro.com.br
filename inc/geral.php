<?
$dir = $_SERVER['SCRIPT_NAME'];
$dir = pathinfo($dir);
$host = $_SERVER['HTTP_HOST'];
$http = $_SERVER['REQUEST_SCHEME'];
if ($dir["dirname"] == "/") {
$url = $http."://".$host."/";
}else {
$url = $http."://".$host.$dir["dirname"]."/";
}

$nomeSite			= 'Sonora';
$slogan				= 'Soluções Auditivas';
$fone[0]            = array('81', '3038-9676', 'fas fa-phone');
$whatsapp           = '81' . '996624757';
$emailContato		= 'atendimento@sonorasolucoesauditivas.com.br';
$rua				= 'Avenida Lins Petit, 159 - Apto - 01, Bloco B';
$bairro				= 'Boa Vista';
$cidade				= 'Recife';
$UF					= 'PE';
$cep				= '50070-235';
$latitude           = '-8.0412';
$longitude          = '-34.877407';
$mapa               = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7901.178752540379!2d-34.877407!3d-8.0412!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18890b03217b%3A0x90d1b666e7d19d6f!2sR.%20Sonora%20-%20Santo%20Amaro%2C%20Recife%20-%20PE%2C%2050110-405!5e0!3m2!1spt-BR!2sbr!4v1659364965072!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
$idCliente			= '105261';
$idAnalytics		= 'G-71V9X67WT2';
$senhaEmailEnvia	= '102030'; // colocar senha do e-mail mkt@dominiodocliente.com.br
$explode			= explode("/", $_SERVER['REQUEST_URI']);
$urlPagina 			= end($explode);
$urlPagina	 		= str_replace('.php','',$urlPagina);
$urlPagina 			== "index"? $urlPagina= "" : "";
$urlAnalytics = str_replace("http://www.", '', $url);
$urlAnalytics = str_replace("/", '', $urlAnalytics);
//
// RECAPTCHA DO GOOGLE
$siteKey = '6LdBWJAiAAAAAAbHkCbKCamivPXd-OlcIT-U19Sd';
$secretKey = '6LdBWJAiAAAAAEKWJR58bjz-FCb23yqRrUNopWdG';
//
// ********************COM SIG APAGAR********************
// GERAR HTACCESS AUTOMÁTICO
$urlhtaccess = $url;
$schemaReplace = strpos($urlhtaccess, 'http://www.') === false ? 'http://' : 'http://www.';
$urlhtaccess = str_replace($schemaReplace, '', $urlhtaccess);
$urlhtaccess = rtrim($urlhtaccess,'/');
define('RAIZ', $url);
define('HTACCESS', $urlhtaccess);
include('inc/gerador-htaccess.php');
// ********************FIM COM SIG APAGAR********************
//
$sigMenuPosition = false;
// EX: $sigmenuposition = 3;
$sigMenuIcons = [];
// EX: $sigMenuIcons = ['cogs', 'user', ...]
//
// MENU
$menu[0] = array('','Home', false, NULL);
$menu[1] = array('quem-somos','Quem somos', false, NULL);
$menu[2] = array('produtos','Produtos', 'sub-menu-produtos', NULL);
$menu[3] = array('blog','Blog', false, NULL);
$menu[4] = array('informacoes','Informações', 'sub-menu', NULL);
$menu[5] = array('contato','Contato', false, NULL);
//
// VARIÁVEIS DE TESTE PARA ENVIO DE E-MAIL
//
// 1 - Altere para ** TRUE ** para realizar o teste de envio dos formulários do site e volte para ** FALSE ** após finalizá-lo
$envioTeste = false;
//
// 2 - Insira seu email para fazer o teste de envio dos formulários do site
$emailTeste = 'seuemail@doutoresdaweb.com.br';
//
// PASTA DE IMAGENS, GALERIA, URL FACEBOOK, ETC.
$pasta  = 'imagens/informacoes/';
$author = ''; // Link do perfil da empresa no g+ ou deixar em branco
//
// REDES SOCIAIS
$paginaFacebook         = 'SonoraAuditivas';
$urlInstagram           = 'https://www.instagram.com/sonora_aparelhos_auditivos/';
// $urlYouTube          = 'URL_COMPLETA_YOUTUBE';
// $urlLinkedIn         = 'URL_COMPLETA_LINKEDIN';
// $urlTwitter          = 'URL_COMPLETA_TWITTER';
//
// BREADCRUMB
$caminho = '
<div class="bread">
    <div class="wrapper">
        <div class="bread__row">
            <div id="breadcrumb">
                <div class="bread__column" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a rel="home" itemprop="url" href="'.$url.'" title="Home">
                        <span itemprop="title"><i class="fas fa-home" aria-hidden="true"></i> Home ❱</span>
                    </a>
                </div>
                <div class="bread__column" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <span itemprop="title">'.$h1.'</span>
                </div>
            </div>
            <h1 class="bread__title">'.$h1.'</h1>
        </div>
    </div>
    <div class="clear"></div>
</div>';

// EXEMPLO BREADCRUMB 2 NÍVEIS
$caminhoProdutos = '
<div class="bread">
    <div class="wrapper">
        <div class="bread__row">
            <div id="breadcrumb">
                <div class="bread__column" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a rel="home" itemprop="url" href="'.$url.'" title="Home">
                        <span itemprop="title"><i class="fas fa-home" aria-hidden="true"></i> Home ❱</span>
                    </a>
                </div>
                <div class="bread__column" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a rel="home" itemprop="url" href="'.$url.'produtos" title="Produtos">
                        <span itemprop="title"> Produtos ❱</span>
                    </a>
                </div>
                <div class="bread__column" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <span itemprop="title">'.$h1.'</span>
                </div>
            </div>
            <h1 class="bread__title">'.$h1.'</h1>
        </div>
    </div>
    <div class="clear"></div>
</div>';
//
// MPI BREADCRUMB
$caminho2 = '
<div class="bread bread--mpi">
    <div class="wrapper">
        <div class="bread__row">
            <div id="breadcrumb">
                <div class="bread__column" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a rel="home" itemprop="url" href="'.$url.'" title="Home">
                        <span itemprop="title"><i class="fa fa-home" aria-hidden="true"></i> Home ❱</span>
                    </a>
                </div>
                <div class="bread__column" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a itemprop="url" href="'.$url.'informacoes" title="Informações">
                        <span itemprop="title">Informações ❱</span>
                    </a>
                </div>
                <div class="bread__column" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <span itemprop="title">'.$h1.'</span>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>';
//
//
$prepos = array(' a ',' á ',' à ',' ante ',' até ',' após ',' de ',' desde ',' em ',' entre ',' com ',' para ',' por ',' perante ',' sem ',' sob ',' sobre ',' na ',' no ',' e ',' do ',' da ',' ','(',')','\'','"','.','/',':',' | ', ',, ');
$creditos           = 'Doutores da Web - Marketing Digital';
$siteCreditos       = 'www.doutoresdaweb.com.br';
//
//
$isMobile =  preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackberry|iemobile|bolt|boost|cricket|docomo|fone|hiptop|mini|opera mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
?>
