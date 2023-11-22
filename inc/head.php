<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt-br">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<? include('inc/geral.php'); ?>
	<? include('inc/jquery.php'); ?>


	<script>
    <?
        include 'js/vendor/modernizr-2.6.2.min.js';
        include 'js/jquery.slicknav.js';
		include 'js/auto-breadcrumb.js';
    ?>
  </script>
  <style>
    <?
        include 'css/normalize.css';
        include 'css/style.css';
        include 'css/font-awesome.css';
        include 'css/font-awesome-local.css';

    ?>
  </style>

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'> -->
	<title><?= $title . " - " . $nomeSite ?></title>
	<base href="<?= $url ?>">
	<?php
	$auto_desc = $h1 . ' - A OCS Remoção de Entulho foi fundada em 1998 na cidade de São Paulo por Orlando Correia da Silva, sendo nossa principal missão ajudar o meio';
	if (strlen($desc) < 140) {
		$desc = $auto_desc;
	}
	$desc = strip_tags($desc);
	$desc = str_replace('  ', ' ', $desc);
	$desc = str_replace(' ,', ',', $desc);
	$desc = str_replace(' .', '.', $desc);
	$desc = str_replace(' ?', '?', $desc);
	if (mb_strlen($desc, "UTF-8") > 160) {
		$desc = mb_substr($desc, 0, 159);
		$finalSpace = strrpos($desc, " ");
		$desc = substr($desc, 0, $finalSpace);
		$desc .= ".";
	} else if (mb_strlen($desc, "UTF-8") < 140 && mb_strlen($desc, "UTF-8") > 130) {
		$desc .= "... Saiba mais.";
	}
	?>
	<meta name="description" content="<?= ucfirst($desc) ?>">
	<meta name="keywords" content="<?= str_replace($prepos, ', ', $h1) . ', ' . $nomeSite ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="geo.position" content="<?= $latitude . ";" . $longitude ?>">
	<meta name="geo.placename" content="<?= $cidade . "-" . $UF ?>">
	<meta name="geo.region" content="<?= $UF ?>-BR">
	<meta name="ICBM" content="<?= $latitude . ";" . $longitude ?>">
	<meta name="robots" content="index,follow">
	<meta name="rating" content="General">
	<meta name="revisit-after" content="7 days">
	<link rel="canonical" href="<?= $url . $urlPagina ?>">
	<?php
	if ($author == '') {
		echo '<meta name="author" content="' . $nomeSite . '">';
	} else {
		echo '<link rel="author" href="' . $author . '">';
	}
	?>

	<link rel="shortcut icon" href="<?= $url ?>imagens/favicon.png">

	<meta property="og:region" content="Brasil">
	<meta property="og:title" content="<?= $title . " - " . $nomeSite ?>">
	<meta property="og:type" content="article">
	<?php
	if (file_exists($url . $pasta . $urlPagina . "-01.jpg")) {
	?>
		<meta property="og:image" content="<?= $url . $pasta . $urlPagina ?>-01.jpg">
	<?php
	}
	?>
	<meta property="og:url" content="<?= $url . $urlPagina ?>">
	<meta property="og:description" content="<?= $desc ?>">
	<meta property="og:site_name" content="<?= $nomeSite ?>">
	<?php
	if ($idFacebook <> '') {
		echo '<meta property="fb:admins" content="' . $idFacebook . '">';
	}
	?>
	<!-- Desenvolvido por <?= $creditos . " - " . $siteCreditos ?> -->
	<script>
		$(document).ready(function() {
			var altura = document.getElementById('scrollheader');
			var headerHeight = $('header').outerHeight(true);
			var scrollOffset = 50;
			console.log(headerHeight);
			var toggleHeader = false;
			// if($(window).scrollTop() > headerHeight) toggleHeader = true;
			if (altura !== null) {
				altura = altura.offsetHeight;
				if ($(window).width() > 765) window.onscroll = function() {
					Scroll()
				};

				function Scroll() {
					if (document.body.scrollTop > headerHeight + scrollOffset || document.documentElement.scrollTop > headerHeight + scrollOffset) {
						if (!toggleHeader) {
							$('header').hide();
							$('header').fadeIn('fast');
							toggleHeader = true;
						}
						$('#menu .fa').removeClass('fa-4x');
						$('#menu .fa').addClass('fa-2x');
						document.getElementById("scrollheader").className = "topofixo";
						document.getElementById("header-block").style.display = "block";
						document.getElementById("header-block").style.height = altura + "px";
					} else {
						$('#menu .fa').removeClass('fa-2x');
						$('#menu .fa').addClass('fa-4x');
						$('header').show();
						toggleHeader = false;
						document.getElementById("scrollheader").className = "";
						document.getElementById("header-block").style.display = "none";
					}
				}
			}
		});
	</script>