<?php
// VERIFICO SE FOI FEITA A POSTAGEM DO CAPTCHA
if ((isset($post['g-recaptcha-response']) && !empty($post['g-recaptcha-response'])) || $envioTeste):

  // VARIAVEIS GLOBAIS DO SITE
  include ('inc/geral.php');

// VALIDO SE A AÇÃO DO USUÁRIO FOI CORRETA JUNTO AO GOOGLE PASSANDO O SITE KEY E A RESPOSTA DO CAPTCHA 
$answer = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $post['g-recaptcha-response']));

// SE A AÇÃO DO USUÁRIO FOI CORRETA EXECUTO O RESTANTE DO MEU FORMULÁRIO
if (($answer->success) || $envioTeste):

  // ATENTICADOR DO E-MAIL COM SSL
  require_once('inc/contato/mail.send.php');

  // ARMAZENA SE HOUVER UM ARQUIVO NA VARIAVEL
  $file = ($post['anexo']['tmp_name'] ? $post['anexo'] : null);

  // DEPOIS DE SETAR OS ARQUIVOS, REMOVE DO SCOPO DE VERIFICAÇÃO E LIBERA A MEMORIA
  unset($post['g-recaptcha-response'], $post['anexo']); 

  // INFORMAÇÕES QUE SERÃO GRAVADAS NO ISERELEADS
  $recebenome = isset($post["nome"]) ? $post["nome"] : 'Não informado';
  $recebemail = isset($post["email"]) ? $post["email"] : 'Não informado';
  $recebetelefone = isset($post["telefone"]) ? $post["telefone"] : 'Não informado';
  $recebecomo_conheceu = isset($post["como_nos_conheceu"]) ? $post["como_nos_conheceu"] : 'Não informado';
  $recebemensagem = isset($post["mensagem"]) ? strip_tags(trim($post["mensagem"])) : 'Não informado';

  // MENSAGEM
  $corpo = null;
  $corpo .= "
  <table style='border-collapse:collapse;border-spacing:0;border-color:#761919'>
  <tr>
  <th style='font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;border-top-width:1px;border-bottom-width:1px;vertical-align:top;text-align: center;' colspan='2'><a href='{$url}' title='{$nomeSite}'><img src='{$url}/imagens/logo.png' width='300' title='{$nomeSite}' alt='{$nomeSite}'></a></th>
  </tr>

  <tr>
  <th style='font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;border-top-width:1px;border-bottom-width:1px;vertical-align:top;text-align: center;' colspan='2'>Mensagem recebida de {$recebenome}, via formulário do site.</th>
  </tr>
  <tr>";
  foreach ($post as $key => $value):
    $corpo .= "
    <tr>
    <td style='font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;background-color:#f9f9f9;border-top-width:1px;border-bottom-width:1px;vertical-align:top;border-right:1px solid #ccc;'><b>" . strtoupper(str_replace(array('_', '-'), ' ', $key)) . ": </b></td>
    <td style='font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f9f9f9;border-top-width:1px;border-bottom-width:1px;vertical-align:top'>{$value}</td>
    </tr>";
  endforeach;
  $corpo .= "
  </tr>
  <tr>
  <td style='text-align:center;font-family:Arial, sans-serif;font-size:9px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;border-top-width:1px;border-bottom-width:1px;text-align:center;vertical-align:top' colspan='2'>Mensagem automática enviada por - {$nomeSite} em " . date('d/m/Y H:i:s') . "</td>
  </tr>
  <tr>
  <td style='text-align:center;font-family:Arial, sans-serif;font-size:9px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;border-top-width:1px;border-bottom-width:1px;text-align:center;vertical-align:top' colspan='2'><a href='{$url}' title='{$nomeSite}'>{$url}</a></td>
  </tr>
  </table>";

  
  if($showContactInfo): // SE O CLIENTE FOR DESATIVADO NÃO RECEBERÁ OS LEADS EM SEU E-MAIL
    // ENVIO EMPRESA
    $mail->From = $EMAIL; // REMETENTE
    $mail->FromName = $post['nome']; // REMETENTE NOME
    $mail->Sender = $EMAIL; // SEU E-MAIL
    $mail->AddAddress($envioTeste ? $emailTeste : $emailContato, $EMPRESA); // DESTINATÁRIO PRINCIPAL
   
    // CÓPIA 
    //$mail->AddCC('adm@site.com.br', 'Teste'); // COPIA
    //$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // CÓPIA OCULTA
    
    // SE HOUVER ANEXO
    if (isset($file) && !empty($file)):
      $mail->AddAttachment($file['tmp_name'], $file['name']); // ANEXO
    endif;
   
    $mail->AddReplyTo($post['email'], $post['nome']); // REPLY-TO
    $mail->Subject = $EMPRESA . ': Contato pelo site'; // ASSUNTO DA MENSAGEM
    $mail->Body = $corpo; // CORPO DA MENSAGEM
    $mail->Send(); // ENVIANDO O E-MAIL
    $mail->ClearAllRecipients(); // LIMPANDO OS DESTINATÁRIOS
    $mail->ClearAttachments(); // LIMPANDO ANEXOS

    // ENVIO USUÁRIO
    $mail->From = $recebemail; // REMETENTE
    $mail->FromName = $EMPRESA; // REMETENTE NOME
    $mail->Sender = $EMAIL; // SEU E-MAIL
    $mail->AddAddress($post['email'], $post['nome']); // DESTINATÁRIO PRINCIPAL
   
    // SE HOUVER ANEXO
    if (isset($file) && !empty($file)):
      $mail->AddAttachment($file['tmp_name'], $file['name']); // ANEXO
    endif;
    $mail->Subject = $EMPRESA . ': Recebemos sua mensagem'; // ASSUNTO DA MENSAGEM
    $mail->Body = $corpo; // CORPO DA MENSAGEM
    $mail->Send(); // ENVIANDO O E-MAIL
    $mail->ClearAllRecipients(); // LIMPANDO OS DESTINATÁRIOS
    $mail->ClearAttachments(); // LIMPANDO ANEXOS
 endif;

// INSERE LEADS
include ('inc/insercaoDeLeads.php');
if (insereLeadNoSistema($idCliente, $recebenome, $recebemail, $recebetelefone, $recebemensagem, $recebecomo_conheceu, $corpo) || $envioTeste): ?>
  <script>
    $(function () {
      swal({
        title: "Tudo certo!",
        text: "Obrigado por entrar em contato, sua mensagem foi enviada com sucesso",
        type: "success",
        showCancelButton: false,
        confirmButtonClass: "btn-success",
        confirmButtonText: "Ok",
        closeOnConfirm: true
      }, function () {
        location.href = "<?=$url?>";
      });
    });
  </script>
<?php else: ?>
  <script>
    $(function () {
      swal("Opsss!", "Desculpe, mas houve um erro ao enviar a mensagem, por favor tente novamente.", "error");
    });
  </script>
<?php endif; ?>
<!-- // END INSERE LEADS -->
<?php else: ?>
  <script>
    $(function () {
      swal("Opsss!", "Desculpe, mas não foi possível verificar o reCaptcha, tente novamente.", "error");
    });
  </script>
<?php endif; ?>
<!-- // END SE A AÇÃO DO USUÁRIO FOI CORRETA EXECUTO O RESTANTE DO MEU FORMULÁRIO -->
<?php else: ?>
  <script>
    $(function () {
      swal("Opsss!", "Confirme que não é um robô e marque o reCaptcha.", "error");
    });
  </script>
<?php endif; ?>
<!-- // END VERIFICO SE FOI FEITA A POSTAGEM DO CAPTCHA -->