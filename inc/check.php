<?php

    if (strpos(strtolower($desc), 'lorem') !== false) {
        $erro .= '$desc --> Altere o valor da variavel $autoDesc na head.php \n';
    }

    if ($nomeSite == 'Doutores da Web') {
        $erro .= '$nomeSite --> Insira o nome do site \n';
    }

    if ($slogan == 'Marketing Digital') {
        $erro .= '$slogan --> Insira o slogan \n';
    }

    $emailvalid = strpos($emailContato, 'doutoresdaweb');
    if ($emailvalid !== false or empty($emailContato)) {
        $erro .= '$emailContato --> Insira o e-mail \n';
    }

    if ($rua == 'Rua Pequetita, 179') {
        $erro .= '$rua --> Insira o endereço \n';
    }

    if ($cep == 'CEP: 04552-060') {
        $erro .= '$cep --> Insira o CEP \n';
    }

    if ($latitude == '-22.546052') {
        $erro .= '$latitude: --> Insira a latitude \n';
    }

    if ($longitude == '-48.635514') {
        $erro .= '$longitude: -->  Insira a longitude \n';
    }

    if ($idCliente == 'ID_do_cliente_no_mpi_sistema') {
        $erro .= '$idCliente: -->  Insira o ID do cliente \n' ;
    }

    if ($mapa == '[IFRAME_MAPA]') {
        $erro .= '$mapa: --> Insira o iframe do google maps \n';
    }

    if ($erro != '') {
        echo "<script> alert('Favor alterar as seguintes variáveis:\\n$erro');
        </script>";
    }

    include 'inc/check-description.php';
?>