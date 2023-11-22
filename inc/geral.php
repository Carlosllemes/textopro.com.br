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

$nomeSite           = 'Auto Bunkers';
$slogan             = 'Referência em veículos blindados';
// $url             = 'http://localhost/site_base_full_beta/';23.6083756
// $url             = 'http://mpitemporario.com.br/projetos/site_base_full_beta/';
  
$ddd                = '11';
$fone[0]            = array($ddd,'2373-7221','fas fa-phone');

$whatsapp           = $ddd.'2373-7221';

$emailContato       = 'vendas@autobunkers.com.br';
$emailAnuncios      = 'anuncios@autobunkers.com.br';

$rua                = 'Rua Joaquim Floriano, 1052';
$bairro             = 'Itaim Bibi';
$cidade             = 'São Paulo';
$UF                 = 'SP';
$cep                = 'CEP: 04534-004';   

$heliporto          = "23° 35' 08\" S / 046° 40' 49\" W";

$mapa               = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7313.0234970365755!2d-46.68015!3d-23.585973000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce575ccd5a6be1%3A0x6362ac593f05cb6f!2sCondom%C3%ADnio%20Edif%C3%ADcio%20Bertolucci!5e0!3m2!1spt-BR!2sbr!4v1690402356192!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
// MAP CLEANUP
preg_match('/(?<=src=").*?(?=[\"])/', $mapa, $out);
$mapa = $out[0];
  
$idCliente          = '103265';
$idAnalytics        = 'G-DHQX15D39G';
$senhaEmailEnvia    = '102030'; // COLOCAR SENHA DO E-MAIL MKT@DOMINIODOCLIENTE.COM.BR 

$explode            = explode("/", $_SERVER['REQUEST_URI']);
$urlPagina          = end($explode);
$urlPagina          = str_replace('.php','',$urlPagina);
$urlPagina          == "index"? $urlPagina= "" : "";
$urlAnalytics = str_replace("http://www.", '', $url);
$urlAnalytics = str_replace("/", '', $urlAnalytics);

// RECAPTCHA DO GOOGLE
$siteKey = '6LeyHaoiAAAAAKotxiXbp6uRoGA-QB3MuUS7gRHu';
$secretKey = '6LeyHaoiAAAAAJtRMFLuZaERBWI2auxoznqYqcT1';

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

// ******************** MENU ********************
$sigMenuPosition = false; // EX: $sigmenuposition = 3;
$sigMenuIcons = []; // EX: $sigMenuIcons = ['cogs', 'user', ...]

$menu[0] = array('','Home', false, NULL);
$menu[1] = array('https://blindados.autobunkers.com.br/','Veículos', false, NULL);
$menu[2] = array('blindagem','Blindagem', false, NULL);
$menu[3] = array('garantia','Garantia', false, NULL);
$menu[4] = array('consignado','Consignado', false, NULL);
$menu[5] = array('assistencia-tecnica','Assistência Técnica', false, NULL);
$menu[6] = array('https://blog.autobunkers.com.br/','Blog', false, NULL);
$menu[7] = array('informacoes','Informações', 'sub-menu', NULL);
$menu[8] = array('contato','Contato', 'sub-menu-contato', NULL);

// ******************** PASTA DE IMAGENS, GALERIA, URL FACEBOOK, ETC. ********************
$pasta  = 'imagens/informacoes/';
$author = ''; // Link do perfil da empresa no g+ ou deixar em branco

// ******************** REDES SOCIAIS ********************
$paginaFacebook      = 'autobunkers';
$urlInstagram        = 'https://www.instagram.com/autobunkers/';
$urlYouTube          = 'https://m.youtube.com/channel/UCTnVe826N972S-pIztkkrOw';
// $urlLinkedIn         = 'URL_COMPLETA_LINKEDIN';
// $urlTwitter          = 'URL_COMPLETA_TWITTER';

// ******************** BREADCRUMB ********************

/* BREADCRUMB AUTOMÁTICA GERADA COM BASE NA ESTRUTURA DO MENU DO SITE */
$autoBreadcrumb = '
<div class="bread bread--default bread--auto">
    <div class="wrapper">
        <div class="bread__row">
            <nav aria-label="breadcrumb">
                <ul id="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li class="bread__column" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="' . $url . '" itemprop="item" title="Home">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>                    
                </ul>
            </nav>
            <h1 class="bread__title">'.$h1.'</h1>
        </div>
    </div>
</div>
';

/* BREADCRUMBS MANUAIS */
$caminho = '
<div class="bread bread--default">
    <div class="wrapper">
        <div class="bread__row">
            <nav aria-label="breadcrumb">
                <ul id="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li class="bread__column" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="' . $url . '" itemprop="item" title="Home">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="bread__column active" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <span itemprop="name">'.$h1.'</span>
                        <meta itemprop="position" content="2">
                    </li>
                </ul>
            </nav>
            <h1 class="bread__title">'.$h1.'</h1>
        </div>
    </div>
</div>
';

// ******************** EXEMPLO BREADCRUMB 2 NÍVEIS ********************
$caminhoSegmentos = '
<div class="bread bread--default">
    <div class="wrapper">
        <div class="bread__row">
            <nav aria-label="breadcrumb">
                <ul id="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li class="bread__column" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="' . $url . '" itemprop="item" title="Home">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="bread__column" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a  href="' . $url . 'segmentos" itemprop="item" title="Segmentos">
                            <span itemprop="name">Segmentos</span>
                        </a>
                        <meta itemprop="position" content="2">
                    </li>
                    <li class="bread__column active" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <span itemprop="name">'.$h1.'</span>
                        <meta itemprop="position" content="3">
                    </li>
                </ul>
            </nav>
            <h1 class="bread__title">'.$h1.'</h1>
        </div>
    </div>
</div>
';

// ******************** MPI BREADCRUMB ********************
$caminho2 = '
<div class="bread bread--mpi">
    <div class="wrapper">
        <div class="bread__row">
            <nav aria-label="breadcrumb">
                <ul id="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li class="bread__column" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="' . $url . '" itemprop="item" title="Home">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="bread__column" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a  href="' . $url . 'informacoes" itemprop="item" title="Informações">
                            <span itemprop="name">Informações</span>
                        </a>
                        <meta itemprop="position" content="2">
                    </li>
                    <li class="bread__column active" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <span itemprop="name">'.$h1.'</span>
                        <meta itemprop="position" content="3">
                    </li>
                </ul>
            </nav>
            <h1 class="bread__title">'.$h1.'</h1>
        </div>
    </div>
</div>
';

// ******************** PAGE LOADING ANIMATION ********************
$pageLoadingAnimation = false; //Habilita animações de carregamento
$pageLoadingAllPages = true; //Animação em todas as páginas ou apenas na index/home (false = index, true = todas) 
$pageLoadingTimeout = 200; //Adiciona tempo extra na animação, a contagem é iniciada após o carregamento da página. Valor em milisegundos (1 segundo = 1000 milisegundos).

$pageLoadingLogo = true; //Animação com logo
$pageLoadingSpinner = true; //Animação com spinner
//OBS: É possível usar as duas animações simultaneamente

// ******************** VARIÁVEIS DE TESTE PARA ENVIO DE E-MAIL ********************
// 1 - Altere para ** TRUE ** para realizar o teste de envio dos formulários do site e volte para ** FALSE ** após finalizá-lo
$envioTeste = false;
// 2 - Insira seu email para fazer o teste de envio dos formulários do site
$emailTeste = 'teste@doutoresdaweb.com.br';

// ******************** MOBILE DETECT ********************
$isMobile =  preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackberry|iemobile|bolt|boost|cricket|docomo|fone|hiptop|mini|opera mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);

// ******************** WHATSAPP LINK CONFIG ********************
$wppDefaultMessage  = 'Olá! Gostaria de mais informações sobre as ofertas da '.$nomeSite;
$wppVerifyDevice    = (!$isMobile) ? 'https://web.whatsapp.com/' : 'whatsapp://';
$wppClearStr        = array(' ', '-', '(', ')');
$wppLink            = $wppVerifyDevice.'send?phone=55'.str_replace($wppClearStr, '', $whatsapp).'&amp;text='.rawurlencode($wppDefaultMessage);

// ******************** CLIENT PAYMENT ********************
$showContactInfo = true;
include('inc/validate-client-payment.php');

// ******************** STR UTILITIES *****************
include('inc/str-utilities.php');

// ******************** ARR PREPOSIÇÕES *****************
$prepos = array(' a ',' á ',' à ',' ante ',' até ',' após ',' de ',' desde ',' em ',' entre ',' com ',' para ',' por ',' perante ',' sem ',' sob ',' sobre ',' na ',' no ',' e ',' do ',' da ',' ','(',')','\'','"','.','/',':',' | ', ',, ');

// ******************** GET COORDINATES ********************
if(!function_exists('GetCoordinates')) {
    function GetCoordinates($map){
        preg_match_all('/!2d([0-9|.|-]+)\!3d([0-9|.|-]+)/', $map, $coordinates, PREG_SET_ORDER, 0);
        return $coordinates[0][2].';'.$coordinates[0][1];
    }
}

// ******************** GOOGLE FONTS TAG AND CALL CSS GENERATOR ********************
include('inc/gf-fonts.php');
?>
