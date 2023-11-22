<div class="whatsbutton-container whatsapp" onclick="WhatsButtonPopup('open')">
	<span id="whatsButton" class="whatsbutton-icon"></span>
	<div class="whatsbutton-text">
		<span class="wb-small">chamar no</span>
		<span class="wb-big">WhatsApp</span>
	</div>
</div>

<div class="whatsbutton-popup">
	<div class="whatsbutton-form">
		<div class="wb-head">
			<div class="wb-icon">
				<img src="<?=$url?>imagens/icones/whatsapp-button.svg" alt="chamar no WhatsApp" title="chamar no WhatsApp">
			</div>
			<div class="wb-info">
				<span class="wb-title">
					Comercial <?=$nomeSite?>
				</span>
				<span class="wb-text">
					<?=$_SERVER['HTTP_HOST']?>
				</span>
				<span class="wb-statusOn">Online</span>
			</div>
		</div>
		<div class="wb-body">

			<div class="formMessageContent">

				<span class="wb-label">Fale com a gente pelo WhatsApp</span>

				<form class="whatsbutton-form-input" enctype="multipart/form-data" method="post" id="whatsButtonForm">

					<div class="box-input">

						<input type="text" id="wb_phone" class="wb-input" name="phone" placeholder="DDD + Celular *" tabindex="1" value="" maxlength="15">
						<span class="icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="18" height="18" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M6.623 10.793a15.068 15.068 0 0 0 6.589 6.585l2.2-2.203c.275-.275.67-.356 1.016-.245 1.124.367 2.325.568 3.572.568a1 1 0 0 1 1 1v3.5a1 1 0 0 1-1 1c-9.39 0-17.001-7.611-17.001-17a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.247.2 2.448.568 3.572a1 1 0 0 1-.244 1.015l-2.2 2.208z" fill="#57b846"></path></svg></span>
					</div>

					<div class="box-input">
						<input type="text" id="wb_nome" class="wb-input" name="nome" placeholder="Nome completo *" tabindex="2" value="" maxlength="15">
						<span class="icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M12 4a4 4 0 1 1 0 8 4 4 0 0 1 0-8zm0 10c4.418 0 8 1.79 8 4v2H4v-2c0-2.21 3.582-4 8-4z" fill="#57b846"></path></svg></span>
					</div>


					<div class="box-input">
						<button type="submit" tabindex="4" class="wb-sendMessage" name="EnviaWhatsApp" title="Enviar">Enviar &nbsp;<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M2 21l21-9L2 3v7l15 2l-15 2v7z" fill="#fff"></path></svg><span></span></button>
					</div>

				</form>

			</div>

			<div class="messageAlert-success">
				
				<div class="loader"></div>
				<div id="messageAlertContent"></div>

				<button tabindex="3" class="wb-sendMessage" title="Voltar" onclick="WhatsButtonBack()">Voltar<span></span></button>

			</div>

		</div>
	</div>
	<div class="whatsbutton-layer" onclick="WhatsButtonPopup('close')">
		<span class="wb-buttonClose">&times;</span>
	</div>
</div>

<script>
	$('#whatsButtonForm').submit( (e) => {
		e.preventDefault();
		WhatsButtonSend()
	} )
</script>
<script>
	<? include 'js/maskinput.js'; ?>
	<? include 'js/whatsapp-button.js'; ?>
</script>