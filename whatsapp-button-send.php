<?php

date_default_timezone_set('America/Sao_Paulo');
$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$json = [];

if (isset($post)):

  include 'inc/geral.php';

  // recebe var
  $insereLeads = $post['insereLeads'];
  $recebeNome = $post['nome'];
  $recebeTelefone = $post['phone'];

  $simbolos = array('-','+','(',')','.',);
  $ddd = str_replace($simbolos, '', $ddd);
  $whatsapp = str_replace($simbolos, '', $whatsapp);

  $message = 'Olá! Me chamo ' . $recebeNome . ', gostaria de mais informações sobre as ofertas da ' . $nomeSite . ' - ' . $slogan .'';

  $href = 'send?phone=55' . $whatsapp .'&amp;text=' . rawurlencode($message) . '.';

  // limpa variavel $post
  unset($post['insereLeads']);

  require_once('inc/contato/mail.send.php');

  if (in_array('', $post)):

    $json['status'] = 'empty';

  else:

    include ('inc/insercaoDeLeads.php');

    if ( insereLeadNoSistema($idCliente, $recebeNome, $emailContato, $recebeTelefone, 'WhatsApp: '.$message, 'Não informado', 'Nulo') || $insereLeads ):

      $json['status'] = 'success';
      $json['insercaoDeLeads'] = $insereLeads;
      $json['html'] = '<p><strong>Agradecemos seu contato! <br> Continue seu atendimento na aba ao lado</strong>'
      . '<br >em ' . date('d/m/Y'). ' às '. date('h:s') . '</p>'
      . '<p>Em alguns instantes responderemos sua mensagem.</p>';

      $json['href'] = $href;

    else:

      $json['status'] = 'Not sent';
      $json['insercaoDeLeads'] = false;

    endif;


  endif;

endif;

// retorna pra api
echo json_encode($json, true);