<?php if(count($_POST)): ?>
	<link rel="stylesheet" href="<?=$url?>js/sweetalert/css/sweetalert.css">
	<script src="<?=$url?>js/sweetalert/js/sweetalert.min.js"></script>
<?php endif; ?>
<script defer src="<?=$url?>js/maskinput.js"></script>
<script defer src='https://www.google.com/recaptcha/api.js'></script>
<script>
	$(document).ready(function(){
		$('input[name="telefone"]').mask('(00) 90000-0000');
		$('input[name="cep"]').mask('00000-000');
		$('input[name="cpf"]').mask('000.000.000-00');
		$('input[name="cnpj"]').mask('00.000.000/0000-00');
		
		// LAZY RECAPTCHA
		// let recaptcha = false;
		// $('form input').on('focus', function(){
		// 	if(!recaptcha) {
		// 		$("head").append("<script src='https://www.google.com/recaptcha/api.js'><\/script>");
		// 		recaptcha = true;
		// 	}
		// });
	});
</script>