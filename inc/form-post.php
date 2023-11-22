<?php
// MAP CLEANUP
preg_match('/(?<=src=").*?(?=[\"])/', $mapa, $out);
$mapa = $out[0];
//
//
$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if (isset($post) && isset($post['EnviaContato'])):
//
// INCLUE O VERIFICADOR DE SPAMMERS DO FORMULÁRIO
	include('inc/searchSpammer.inc.php');
//
// ARMAZENA O RECAPCHA
$recapt = $post['g-recaptcha-response'];
//
// REMOVE O SUBMIT E O RECPATCHA PARA VALIDAÇÃO DE CAMPOS VAZIOS
unset($post['EnviaContato'], $post['g-recaptcha-response']);
//
// ARQUIVOS VÁLIDOS QUE PODEM SER ENVIADOS
$MimeTypes = array(
	'application/pdf',
	'application/msword',
	'application/vnd.ms-excel',
	'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
	'application/x-excel',
	'application/x-msexcel',
	'image/png',
	'image/pjpeg',
	'image/jpeg',
	'image/jpg',
	'image/pjpeg',
	'image/gif'
);
//
// VERIFICA SE OS CAMPOS OBRIGATÓRIOS FORAM TODOS PREENCHIDOS
if (in_array('', $post)):
	echo '<script>'
	. '$(function () {';
	echo 'swal("Aviso!", "Campos com * são obrigatórios.", "info");';
	echo '});'
	. '</script>';
//
// VERIFICA SE EXISTEM SPAMMERS NOS CAMPOS DO FORMULÁRIO
elseif (SearchSpammer($post)):
//
// INCLUI O EMAILFAKE, QUE FARÁ A NOTIFICAÇÃO AOS ADMS DO SITE
	include('inc/emailFake.inc.php');
//
// VERIFICA SE EXISTE ANEXO PARA ENVIO E SE O ANEXO ESTÁ NA LISTA DO MIMETYPES
elseif (isset($_FILES['anexo']) && !empty($_FILES['anexo']['tmp_name']) && !in_array($_FILES['anexo']['type'], $MimeTypes)):
	echo '<script>'
. '$(function () {';
echo 'swal("Aviso!", "Escolha um arquivo válido para enviar como anexo da mensagem", "info");';
echo '});'
. '</script>';
else:
//
// CASO AS CONDIÇÕES SEJAM ATENDIDAS, O RECAPTCHA VOLTA PARA O POST E O ANEXO É ADICIONADO AO POST
	$post['g-recaptcha-response'] = $recapt;
	$post['anexo'] = ($_FILES['anexo']['tmp_name'] ? $_FILES['anexo'] : null);
//
// ARQUIVO QUE FAZ A VERIFICAÇÃO DO RECAPTCHA E O ENVIO DOS E-MAILS
	include('contato-envia.php');
endif;
endif;
?>