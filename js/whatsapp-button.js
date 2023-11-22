$(document).ready(() => { $('input[name="phone"]').mask('(00) 90000-0000') })

let lastScrollTop = 0,
wbContainer = $('.whatsbutton-container');

	// ações de UX
	let windowAction = {
		isOpen: false,
		isClose: true
	}

	let buttons = [
	$('.whatsbutton-container'),
		// $('.whatsbutton-layer')
		]

		const toggleDisabled = (add) => {
			for (let item of buttons) {
				if (add == undefined && windowIsOpen()) {
					item.toggle('disabledbutton');
				} else {
					item.show().removeClass('disabledbutton');
				}
			}
		}

		const windowIsOpen = () => {
			return windowAction.isOpen && !windowAction.isClose
		}
		const windowIsClose = () => {
			return !windowAction.isOpen && windowAction.isClose
		}

		$(window).on('scroll', () => {

			let st = $(this).scrollTop();

			if (st > lastScrollTop){
				if (!windowIsOpen()) {
					toggleDisabled(true)
				}
				wbContainer.removeClass('wb-hidded');
			} else {
				wbContainer.addClass('wb-hidded');
			}

			lastScrollTop = st;
		});

		$(document).on('keyup', (e) => {
			if (e.key == "Escape" && windowIsOpen()) {
				WhatsButtonPopup('close')
			}
		})

		const CheckBrowserIsMobile = (href) => {
			if ($(window).width() > 767) {
				href = "https://web.whatsapp.com/" + href;
				window.open(href);
			} else {
				href = "https://api.whatsapp.com/" + href;
				window.location.replace(href);
			}
		}

		const WhatsButtonPopup = (action) => {

			let wbPopup = $('.whatsbutton-popup');
			let wbPopupContainer = $('.whatsbutton-form');

		// define abertura da janela
		windowAction.isOpen = true
		windowAction.isClose = false

		switch (action) {

			case 'close':

			if (windowIsOpen()) {

				wbPopupContainer.animate({
					marginLeft: '+=25%',
					opacity: 0
				}, 500, () => {
					wbPopup.animate({
						opacity: 0,
					}, 1000, () => {
						wbPopup.css('display', 'none');
						wbPopupContainer.css({
							'opacity': 1,
							'margin-left' : 0
						})
						console.log('WhatsButton is Closed.')

						windowAction.isOpen = false
						windowAction.isClose = true

						toggleDisabled()

					});
				})

			} 

			break;

			case 'open':
			default:

			if (!windowIsClose()) {

				wbPopup.css('display', 'flex')
				wbPopup.animate({
					opacity: 1
				}, 1000, () => {
					console.log('WhatsButton is Oppened.')
					toggleDisabled()
				});
			}

			break;
		}

	}

	console.log('window', windowAction)

	const WhatsButtonBack = () => {
		$('.formMessageContent').toggle();
		$('.messageAlert-success').toggle();
	}

	const WhatsButtonSend = () => {

		const $post = {
        	insereLeads: true, // desliga insercaoDeLeads
        	nome: document.getElementById('wb_nome'),
        	phone: document.getElementById('wb_phone')
        }; 

        let spinner = document.querySelector('.messageAlert-success .loader') // spinner loader

		// recupera variáveis no DOM
		let msgAlert, wbIcon = document.querySelectorAll('.box-input .icon'), wbBody = document.querySelector('.wb-body'), wbLabel = document.querySelector('.wb-label'), formMessageContent = document.querySelector('.formMessageContent'), messageAlertSuccess = document.querySelector('.messageAlert-success'), form = $('#whatsButtonForm');

		const checkIsEmpty = () => {
			msgAlert = false;
			const box = document.querySelectorAll('.box-input')
			for (let item of box) {
				if (item.querySelector('input') != undefined ) {

					if (item.querySelector('input').value == '') {
						msgAlert = 'Por favor, informe seus dados corretamente.';
						item.querySelector('.icon').classList.add('visibleError');
					} else {
						item.querySelector('.icon').classList.remove('visibleError');
					}


				} 
			}
		}

		const validateStr = (string) => {
			let re = new RegExp('^[A-Z a-z]{1,20}$');
			return re.test(string);
		}

		const insercaoDeLeads = (data) => {

			return $.ajax({
				async: false,
				type: 'POST',
				url: '<?=$url?>whatsapp-button-send.php',
				data: data,
				error: () => {
					alert('Oops! Não foi possível concluir a requisição, tem novamente mais tarde.')
				}
			})
		}

		const validate = () => {

			checkIsEmpty(); // verifica se os campos estão vazios

			// valida campos específicos antes de enviar
			if (!msgAlert) {
				if (!validateStr($post.nome.value)) {
					msgAlert = 'Informe um nome válido.';
				}
			}
		}
		
		validate(); // verifica os campos

		if (!msgAlert) {

			wbBody.style.userSelect = 'none';

			insercaoDeLeads({ 
				nome: $post.nome.value, 
				phone: $post.phone.value,
				insereLeads: $post.insereLeads 
			}).then((response) => {

				response = JSON.parse(response);
				if (response.status == 'success') {

					wbBody.style.userSelect = 'inherit';
					msgAlert = 'Mensagem enviada com sucesso';

					messageAlertSuccess.querySelector('#messageAlertContent').innerHTML = response.html;

					if (response.insercaoDeLeads) {
						console.log('Inserido nos leads.');
					} else {
						console.log('Não inserido nos leads.');
					}

					checkIsEmpty();
					spinner.style.display = 'none';

					setTimeout(() => {
						CheckBrowserIsMobile(response.href)
        	        }, 500 ) // aguarda meio segundo

				} else {
					alert('Oops! Não foi possível enviar a mensagem, tem novamente mais tarde.')
				}

			})

		}

		if (msgAlert) {
			wbLabel.style.borderColor = '#f7b0b0';
			wbLabel.style.background = '#f5c5c5';
			wbLabel.innerText = msgAlert;
			formMessageContent.style.display = 'block';
			messageAlertSuccess.style.display = 'none';
			spinner.style.display = 'none';
		} else {
			formMessageContent.style.display = 'none';
			messageAlertSuccess.style.display = 'block';
			wbLabel.style.borderColor = '#faebcc';
			wbLabel.style.background = '#fcf8e3';
			wbLabel.innerText = 'Fale com a gente pelo WhatsApp';
		}

	}
