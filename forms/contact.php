<?php
ini_set('display_errors', 1);
require("../assets/vendor/PHPMailer/PHPMailerAutoload.php");

//Setando as configurações de envio de email, com autenticação do smtp Locaweb
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->From = 'contato@textopro.com.br';
$mail->FromName = 'TextoPro';
$mail->Host = 'smtp.titan.email';
$mail->Port = '465';
$mail->SMTPAuth = true;
$mail->Username = 'contato@textopro.com.br';
$mail->Password = 'Foda03109114@';
$mail->isHTML();
$mail->CharSet = 'utf-8';
$mail->SMTPSecure = 'ssl';
$mail->AltBody = 'Para ver este e-mail corretamente ative a visualização de HTML';
$mail->SMTPOptions = array(
  'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
  )
);

$user_name = $_POST['name'];

$user_msg = "
  <h2 style='text-align:center;font-family: Montserrat, sans-serif; font-size: 25px; color:#000;'>Aperte o cinto! <span style='display:block;'>Sua empresa está prestes a decolar 🚀</span></h2>
<p style='font-family: Montserrat, sans-serif; font-size: 16px; color:#000;'><b>Olá {$user_name}! 😊</b></p>
<p style='font-family: Montserrat, sans-serif; font-size: 14px; color:#000;'>Obrigado pelo seu interesse em nossos serviços e por preencher o formulário de solicitação de orçamento. Estamos empolgados em ajudá-lo a impulsionar a presença online do seu negócio e alcançar resultados incríveis!</p>
<p style='font-family: Montserrat, sans-serif; font-size: 14px; color:#000;'>🚀 Sabemos o quão importante é estar presente nos buscadores e conquistar visibilidade para o seu site. Com nossa expertise em criação de conteúdo especialmente direcionado à conversão para o seu segmento, podemos levar seu negócio para o próximo nível.</p>
<p style='font-family: Montserrat, sans-serif; font-size: 14px; color:#000;'>Aqui na <b>TextoPro</b>, estamos comprometidos em entregar resultados excepcionais para nossos clientes. Nosso objetivo é criar textos impactantes e envolventes, desenvolvidos especificamente para converter visitantes em clientes fiéis. 💪</p>
<p style='font-family: Montserrat, sans-serif; font-size: 14px; color:#000;'>Você está a apenas um passo de começar a colher os benefícios de uma estratégia de marketing de conteúdo eficiente. Nosso time de redatores talentosos e experientes está pronto para criar conteúdos personalizados e de alta qualidade para o seu site, com foco em gerar mais tráfego, engajamento e conversões.</p>
<p style='font-family: Montserrat, sans-serif; font-size: 14px; color:#000;'>Gostaríamos de agendar uma conversa para entender melhor suas necessidades e objetivos. Dessa forma, poderemos fornecer um orçamento personalizado e desenvolver uma estratégia sob medida para o seu negócio. Estamos ansiosos para colaborar com você e alcançar resultados excepcionais juntos!</p>
<p style='font-family: Montserrat, sans-serif; font-size: 14px; color:#000;'>Entre em contato conosco pelo telefone [número de telefone] ou pelo e-mail [endereço de e-mail]. Estamos disponíveis para responder a todas as suas perguntas e discutir os detalhes do seu projeto.</p>
<p style='font-family: Montserrat, sans-serif; font-size: 14px; color:#000;'>Agradecemos novamente pelo seu interesse e estamos ansiosos para fazer parte do seu sucesso online! 🌟</p>
<br>
<p style='font-family: Montserrat, sans-serif; font-size: 14px; color:#000;'><b>Atenciosamente, <span style='display: block;'>Equipe TextoPro</span></b></p>
  ";

$mail->setFrom('contato@textopro.com.br', 'Equipe TextoPro');
$mail->addAddress('contato@textopro.com.br'); // Substitua pelo email do destinatário
//$mail->addReplyTo($_POST['email'], $_POST['name']); // Substitua pelo email do destinatário
//$mail->isHTML(true);
$mail->Subject = 'Formulário do site: '.$_POST['subject'];
$mail->Body = $_POST['message'];

// $mail->Send(); // ENVIANDO O E-MAIL

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	$mail->addAddress($_POST['email'], $_POST['name']);
	$mail->Subject = 'Recebemos sua mensagem!';
	$mail->MsgHTML($user_msg);
	$mail->Send();
	header('Location: /index.php?status=success');
  echo "Message sent!";
}

?>
