<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt-br"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <? include('inc/geral.php'); ?>
    <? include('inc/jquery.php'); ?>
    <script>
        <?php
        include($_SERVER['RAIZ'] . "js/default-passive-events.js");
        // include ($_SERVER['RAIZ']."js/vendor/modernizr-2.6.2.min.js");
        // include ($_SERVER['RAIZ']."js/jquery.slicknav.js");
        include($_SERVER['RAIZ'] . "js/header-scroll.js");
        include($_SERVER['RAIZ'] . "js/fontawesome.js");
        if ($urlPagina != "") :
            include($_SERVER['RAIZ'] . "js/auto-breadcrumb.js");
            include($_SERVER['RAIZ'] . "js/auto-aside.js");
        endif;
        include($_SERVER['RAIZ'] . "js/menu-hamburger.js");
        ?>
    </script>

    <style>
        <?php
        include($_SERVER['RAIZ'] . "css/normalize.css");
        include($_SERVER['RAIZ'] . "css/style-base.css");
        include($_SERVER['RAIZ'] . "css/style.css");
        include($_SERVER['RAIZ'] . "css/menu-hamburger.css");
        ?>
    </style>


    <!-- Google Fonts Call CSS Generator -->
    <?= GoogleFontsStyleGenerator($fontFamily); ?>

    <title><?= $title . " - " . $nomeSite ?></title>
    <base href="<?= $url ?>">
    <?php
    // auto description
    $auto_desc = $h1 . ' - A Auto Bunkers foi desenvolvida para trabalhar com precisão e excelência no mercado de blindagem e veículos premium, oferecendo a melhor experiência com uma estrutura completa atendendo às necessidades de seus clientes com qualidade, segurança e agilidade.';
    if (strlen($desc) < 140) {
        $desc = $auto_desc;
    }

    // clean description 
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
    <meta name="geo.position" content="<?= GetCoordinates($mapa); ?>">
    <meta name="geo.placename" content="<?= $cidade . "-" . $UF ?>">
    <meta name="geo.region" content="<?= $UF ?>-BR">
    <meta name="ICBM" content="<?= GetCoordinates($mapa); ?>">
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
    <!-- Desenvolvido com MPI Technology® -->

    <!-- Google Fonts Tag Generator -->
    <?= GoogleFontsTagGenerator($fontFamily, $weights, $italicWeights); ?>