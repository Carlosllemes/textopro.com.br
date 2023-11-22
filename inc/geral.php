<?
$nomeSite			= 'OCS';
$slogan				= 'Remoção de Entulho';
$dir = $_SERVER['SCRIPT_NAME']; 
$dir = pathinfo($dir);
$host = $_SERVER['HTTP_HOST'];
$http = $_SERVER['REQUEST_SCHEME'];
if ($dir["dirname"] == "/") {
	$url = $http."://".$host."/"; 
}else {
	$url = $http."://".$host.$dir["dirname"]."/"; 
}
// $url				= 'http://localhost/new_site_base_brasmodulos/';
// $url				= 'http://mpitemporario.com.br/projetos/new_site_base_brasmodulos/';
$ddd				= '11';
// $ddd2			= '19';
$fone[0] 			= array($ddd,'5674-0588','phone');
$fone[1] 			= array($ddd,'5674-2685','phone');
$fone[2] 			= array($ddd,'98111-4643','phone');
// $fone[3]	 		= array($ddd,'4444-4444','phone');
// $fone[4] 		= array($ddd,'4444-4444','phone');
$whatsapp 			= $ddd.'98111-4643';
$emailContato		= 'contato@ocscacambas.com.br';
$rua				= 'Av. Lino de Almeida Pires 803, sala 2';
$bairro				= 'Vila Guarani';
$cidade				= 'São Paulo';
$UF					= 'SP';
$cep				= 'CEP:  04317-180';
$latitude			= '-23.6437254';
$longitude			= '-46.6367665';
$mapa				= '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.9007437466125!2d-46.6367665!3d-23.643725400000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5ae752c193dd%3A0x93fbe8ff74d68877!2sAv.%20Lino%20de%20Almeida%20Pires%2C%20803%20-%202%20-%20Vila%20Guarani%20(Zona%20Sul)%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2004317-180!5e0!3m2!1spt-BR!2sbr!4v1579899626379!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>';
$mapaUrl			= 'https://www.google.com/maps/place/Av.+Lino+de+Almeida+Pires,+803+-+Vila+Guarani+(Zona+Sul),+São+Paulo+-+SP,+04317-180/@-23.643725,-46.636766,16z/data=!4m6!3m5!1s0x94ce5ae752c193dd:0x608b1c5bccee331c!8m2!3d-23.6437254!4d-46.6367665!16s%2Fg%2F11bw3zsb8c?hl=pt-BR';
$idCliente			= '103636';
$idAnalytics		= 'G-T1G2R9HLB9';
$senhaEmailEnvia	= '102030'; // colocar senha do e-mail mkt@dominiodocliente.com.br
$explode			= explode("/", $_SERVER['PHP_SELF']);
$urlPagina 			= end($explode);
$urlPagina	 		= str_replace('.php','',$urlPagina);
$urlPagina 			== "index"? $urlPagina= "" : "";
$urlAnalytics = str_replace("http://www.", '', $url);
$urlAnalytics = str_replace("/", '', $urlAnalytics);
//reCaptcha do Google
$siteKey = '6LcYkNcUAAAAAP7X96bX7o6uVw-DioSp88r6zjEg';
$secretKey = '6LcYkNcUAAAAABDc-_v1VtXd8MyJR9rNn2IWBJqt';
//********************COM SIG APAGAR********************
//Gerar htaccess automático
$urlhtaccess = $url;
$schemaReplace = strpos($urlhtaccess, 'http://www.') === false ? 'http://' : 'http://www.';
$urlhtaccess = str_replace($schemaReplace, '', $urlhtaccess);
$urlhtaccess = rtrim($urlhtaccess,'/');
define('RAIZ', $url);
define('HTACCESS', $urlhtaccess);
include('inc/gerador-htaccess.php');
//********************FIM SIG APAGAR********************

// MENU

// Menu items (link, text, hasSubmenu, NULL [FontAwesome - ex: building])

$sigMenuPosition = false; //INSIRA A POSIÇÃO DO MENU DO SIG EM RELAÇÃO AOS DEMAIS ITENS (EX.: $sigMenuPosition = 3;)
$menu[0] = array('','Home', false, 'home');
$menu[1] = array('empresa','Empresa', false, 'briefcase');
$menu[2] = array('duvidas','Dúvidas', false, 'cube');
$menu[3] = array('galeria-fotos','Galeria de Fotos', false, 'cubes');
$menu[4] = array('informacoes','Informações', 'sub-menu', 'newspaper-o');
$menu[5] = array('contato','Contato', false, 'comments-o');

// END MENU

//Pasta de imagens, Galeria, url Facebook, etc.
$pasta 				= 'imagens/informacoes/';
$author = ''; // Link do perfil da empresa no g+ ou deixar em branco

//Redes sociais
// $paginaFacebook		= 'PAGINA_DO_FACEBOOK_DO_CLIENTE';
// $urlInstagram		= 'URL_COMPLETA_INTAGRAM';
// $urlYouTube			= 'URL_COMPLETA_YOUTUBE';
// $urlLinkedIn			= 'URL_COMPLETA_LINKEDIN';
// $urlTwitter			= 'URL_COMPLETA_TWITTER';

//Breadcrumbs
$autoBreadcrumb = '
<div class="bread bread--default bread--auto">
    <div class="wrapper">
        <div class="bread__row">
            <nav aria-label="breadcrumb">
                <ul id="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li class="bread__column" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="' . $url . '" itemprop="item" title="Home">
                            <span itemprop="name"><i class="fa fa-home" aria-hidden="true"></i> Home ❱</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>                    
                </ul>
            </nav>           
        </div>
    </div>
</div>
';
$caminho2	= '
<div class="bread--mpi">
    <div class="wrapper">
        <div class="bread__row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="' . $url . '" itemprop="item" title="Home">
                            <span itemprop="name"><i class="fa fa-home" aria-hidden="true"></i> Home ❱</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="' . $url . 'informacoes" itemprop="item" title="Informações">
                            <span itemprop="name">Informações ❱</span>
                        </a>
                        <meta itemprop="position" content="2" />
                    </li>
                    <li class="breadcrumb-item active" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <span itemprop="name">' . $h1 . '</span>
                        <meta itemprop="position" content="3" />
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
';


$prepos = array(' a ',' á ',' à ',' ante ',' até ',' após ',' de ',' desde ',' em ',' entre ',' com ',' para ',' por ',' perante ',' sem ',' sob ',' sobre ',' na ',' no ',' e ',' do ',' da ',' ','(',')','\'','"','.','/',':',' | ', ',, ');
$creditos			= 'Doutores da Web - Marketing Digital';
$siteCreditos		= 'www.doutoresdaweb.com.br';

?>
