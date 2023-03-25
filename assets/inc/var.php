<?php
$dir = $_SERVER['SCRIPT_NAME'];
$dir = pathinfo($dir);
$host = $_SERVER['HTTP_HOST'];
$http = $_SERVER['REQUEST_SCHEME'];
if ($dir["dirname"] == "/") {
    $url = $http . "://" . $host . "/";
} else {
    $url = $http . "://" . $host . $dir["dirname"] . "/";
}
$siteName        = 'TextoPro';
$slogan           = 'Palavras que conectam e transformam.';
$ddd           = '11';
$phone[0]          = array($ddd, '95104-8219', 'phone');
$whatsapp          = $ddd . '95104-8219';
$email     = 'contato@textopro.com.br';
$rua           = 'Rua Expedito de Oliveira Santos 451';
$bairro           = 'Characara Santana';
$cidade           = 'São Paulo';
$UF               = 'SP';
$cep           = 'CEP: 05121050';
$latitude         = '-23.0991131';
$longitude        = '-47.1870412';
$a = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$caminho = explode('/', $a)[4];
$mapa          = '<iframe style="width:100%; height:400px;"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.2321974286583!2d-46.7512158!3d-23.6676529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce522ba6af16c3%3A0xb8be12e882206907!2sR.%20Expedito%20de%20Oliveira%20Santos%2C%20451%20-%20Parque%20Santo%20Ant%C3%B4nio%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2005821-050!5e0!3m2!1spt-BR!2sbr!4v1678477294385!5m2!1spt-BR!2sbr" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
// GERAR HTACCESS AUTOMÁTICO
$urlhtaccess = $url;
$schemaReplace = strpos($urlhtaccess, 'http://www.') === false ? 'http://' : 'http://www.';
$urlhtaccess = str_replace($schemaReplace, '', $urlhtaccess);
$urlhtaccess = rtrim($urlhtaccess, '/');
define('RAIZ', $url);
define('HTACCESS', $urlhtaccess);
include('assets/inc/gerador-htaccess.php');
// ********************FIM COM SIG APAGAR********************
$explode            = explode("/", $_SERVER['REQUEST_URI']);
$urlPagina             = end($explode);
$urlPagina             = str_replace('.php', '', $urlPagina);
$urlPagina             == "index" ? $urlPagina = "" : "";
