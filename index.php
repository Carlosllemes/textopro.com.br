<?
$h1         = 'Home';
$title      = 'Home';
$desc       = 'Home - ';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Home';
include('inc/head.php');
include('inc/form-scripts.php');
?>
<!--STARTSCRIPTSHEADER-->
<style>
	<?php
	include('slick/slick.css');
	if (!$isMobile) :
		include('slick/slick-banner.css');
	endif;
	?>
</style>
<!--ENDSCRIPTSHEADER-->
</head>

<body>
	<? include('inc/topo.php'); ?>
	<?php include('inc/form-post.php'); ?>
	<main>
		<?php if (!$isMobile) : ?>
			<div class="slick-banner">
				<a href="<?= $url ?>aparelhos-auditivos" title="Aparelhos auditivos">
					<img data-lazy="<?= $url ?>imagens/slider/aparelhos-auditivos.webp" src="#" alt="Aparelhos auditivos" title="Aparelhos auditivos">
				</a>
				<a href="<?= $url ?>contato" title="Experimente grátis">
					<img data-lazy="<?= $url ?>imagens/slider/consulta.webp" src="#" alt="Experimente grátis" title="Experimente grátis">
				</a>
				<a href="<?= $url ?>produtos" title="Aparelhos">
					<img data-lazy="<?= $url ?>imagens/slider/aparelhos.webp" src="#" alt="Aparelhos" title="Aparelhos">
				</a>
				<a href="<?= $url ?>acessorios-aparelhos-auditivos" title="Acessórios para aparelhos auditivos">
					<img data-lazy="<?= $url ?>imagens/slider/acessorios-aparelhos-auditivos.webp" src="#" alt="Acessórios para aparelhos auditivos" title="Acessórios para aparelhos auditivos">
				</a>
			</div>
		<?php endif; ?>
		<div class="content">
			<section>
				<!--STARTCOMPONENTS-->
				<div class="main">
					<div class="container">
						<div class="wrapper">
							<div class="row">
								<div class="main__cover col-6">
									<img src="<?= $url ?>imagens/empresa/empresa-1.webp" width="100" height="740" alt="<?= $nomeSite . " " . $slogan ?>" title="<?= $nomeSite . " " . $slogan ?>">
								</div>
								<div class="main__desc col-6">
									<h1><?= $nomeSite . " " . $slogan ?></h1>
									<p class="fs-18">A Sonora Soluções Auditivas é uma clínica de reabilitação auditiva, que oferece soluções tecnológicas de maneira completa. Foi inaugurada no ano de 2017, na cidade do Recife - PE, com objetivo de proporcionar um atendimento de excelência com produtos de alta qualidade para nossos clientes. Contamos com uma equipe de fonoaudiólogas especialistas em audição e com atendimento totalmente humanizado. Nossos pacientes têm acesso à procedimentos exclusivos e acompanhamento vitalício que visam a plena satisfação na reabilitação auditiva.</p>
									<a class="main__btn" href="<?= $url ?>quem-somos" title="Saiba mais"><span>Saiba mais</span></a>
								</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="container bg-light">
					<div class="wrapper">
						<h2 class="text-center">Sinais de perda auditiva</h2>
						<ul class="list list-arrow">
							<li>Assistir TV muito alta</li>
							<li>Dificuldades ao falar no telefone</li>
							<li>Dificuldade em entender o que as pessoas falam principalmente em ambientes ruidosos</li>
							<li>Pedir constantemente para as pessoas repetirem o que falam</li>
							<li>Problemas como zumbido nos ouvidos</li>
						</ul>
						<div class="d-flex flex-column align-items-center">
							<h3 class="text-center w-75">Se você tem um ou mais desses sinais de Perda Auditiva entre em contato com a Sonora será um prazer lhe atender.</h3>
							<a href="<?= $url ?>contato" class="btn">Experimente grátis.</a>
						</div>

					</div>
				</div>
				<div class="container bg-primary">
					<div class="wrapper">
						<h2 class="light text-center">
							EXPERIMENTE GRATIS (PREENCHE OS DADOS)EXPERIMENTE GRATIS (PREENCHE OS DADOS)
						</h2>
						<div class="contact-box">
							<p class="text-center">
								Na Sonora te auxiliamos a encontrar a melhor solução auditiva para seu problema auditivo. Entre em contato com a gente.
							</p>
							<form enctype="multipart/form-data" method="post" class="form">
								<div class="row col-p-15 col-pv-5">
									<div class="col-6">
										<label for="nome">Nome: *</label>
										<input placeholder="Digite seu nome" type="text" name="nome" id="nome" required>
									</div>
									<div class="col-6">
										<label for="email">E-mail *</label>
										<input placeholder="exemplo@exemplo.com" type="email" name="email" id="email" required>
									</div>
									<div class="col-12">
										<label for="telefone">Telefone *</label>
										<input placeholder="(00) 000000-0000" type="tel" name="telefone" id="telefone" required>
									</div>
									<div class="col-12">
										<label for="como_nos_conheceu">Como nos conheceu *</label>
										<select name="como_nos_conheceu" id="como_nos_conheceu" required>
											<option value="">-- Selecione --</option>
											<option value="Busca do Google">Busca do Google</option>
											<option value="Outros Buscadores">Outros Buscadores</option>
											<option value="Links patrocinados">Links patrocinados</option>
											<option value="Outros Anúncios">Outros Anúncios</option>
											<option value="Facebook">Facebook</option>
											<option value="Twitter">Twitter</option>
											<option value="Google+">Google+</option>
											<option value="Indicação">Indicação</option>
											<option value="Outros">Outros</option>
										</select>
									</div>
									<div class="col-12">
										<label for="mensagem">Mensagem *</label>
										<textarea placeholder="Deixe sua mensagem" name="mensagem" id="mensagem" rows="5" required></textarea>
									</div>
								</div>

								<span class="form__obrigatory">Os campos com * são obrigatórios</span>
								<div class="g-recaptcha" data-size="<?= (!$isMobile) ? 'normal' : 'compact' ?>" data-sitekey="<?= $siteKey; ?>"></div>
								<input type="submit" name="EnviaContato" value="Enviar" class="ir">
							</form>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="wrapper">
						<h2 class="text-center">
							Na Sonora você encontra um atendimento completo
						</h2>
						<div class="grid grid-col-4">
							<div class="box">
								<div class="box__title">
									Aparelhos Auditivos e Acessorios
								</div>
							</div>
							<div class="box">
								<div class="box__title">
									Assistência Técnica e Seguro para Aparelhos Auditivos
								</div>
							</div>
							<div class="box">
								<div class="box__title">
									Atendimento presencial, Domiciliar e Remoto via App
								</div>
							</div>
							<div class="box">
								<div class="box__title">
									Zumbido
								</div>
							</div>
							<div class="box">
								<div class="box__title">
									Audiometria Tonal e Vocal, Teste da Orelhinha e Mapeamento de Fala
								</div>
							</div>
							<div class="box">
								<div class="box__title">
									Exame e terapia do PAC (Processamento Auditivo Central)
								</div>
							</div>
							<div class="box">
								<div class="box__title">
									Treinamento Auditivo: Para pessoas com e sem perdas auditivas
								</div>
							</div>
							<div class="box">
								<div class="box__title">
									Sistema de Estimulação Neuro Auditiva (SENA)
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- CARD GROUP -->
				<div class="container">
					<div class="wrapper">
						<h2 class="text-center">Informações em Destaque</h2>
						<div class="grid grid-col-4">
							<?php
							$randomMode = NULL; //DEFINA UMA QUANTIDADE PARA ATIVAR O MODO ALEATÓRIO EX: randomMode = 4;
							if ($randomMode != NULL && $randomMode <= count($vetKey)) { //MODO ALEATÓRIO
								$destaquesMPI = [];
								$randomKeyList = [];
								while (count($destaquesMPI) < $randomMode) { //REPETE ATÉ TER A QUANTIDADE CORRETA DE MPIS
									$randMPI = array_rand($vetKey);
									if (!in_array($randMPI, $randomKeyList)) {
										array_push($randomKeyList, $randMPI);
										array_push($destaquesMPI, array('mpiNum' => $randMPI, 'image' => '01'));
									}
								}
							} else { //ESCOLHA SUAS MPIS
								$destaquesMPI = [
									array('mpiNum' => '0', 'image' => '01'),
									//NOME DA MPI, PARA FACILITAR A IDENTIFICAÇÃO

									array('mpiNum' => '28', 'image' => '01'),
									//NOME DA MPI, PARA FACILITAR A IDENTIFICAÇÃO

									array('mpiNum' => '67', 'image' => '01'),
									//NOME DA MPI, PARA FACILITAR A IDENTIFICAÇÃO

									array('mpiNum' => '60', 'image' => '01'),
									//NOME DA MPI, PARA FACILITAR A IDENTIFICAÇÃO
								];
							}
							foreach ($destaquesMPI as $key => $item) {
								$mpi = $vetKey[$item['mpiNum']];
								$mpiTitle = $mpi['key'];
								$mpiUrl = $mpi['url'];
								$mpiImage = $item['image']; ?>
								<div class="card card--mpi">
									<a class="card__link" href="<?= $url . $mpiUrl ?>" title="<?= $mpiTitle ?>">
										<img class="card__image" src="<?= $url ?>imagens/informacoes/<?= $mpiUrl . "-" . $mpiImage ?>.jpg" alt="<?= $mpiTitle ?>" title="<?= $mpiTitle ?>" loading="lazy">
										<h2 class="card__title"><?= $mpiTitle ?></h2>
									</a>
								</div>
							<? } ?>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<!-- END CARD GROUP -->
				<!--ENDCOMPONENTS-->
			</section>
		</div> <!-- end content -->
	</main>
	<? include('inc/footer.php'); ?>
	<!--STARTSCRIPTSFOOTER-->
	<script>
		<? include('slick/slick.min.js'); ?>
		$(document).ready(function() {
			<?php if (!$isMobile) : ?>
				$('.slick-banner').slick({
					fade: true,
					cssEase: 'linear',
					autoplay: true,
					infinite: true,
					swipeToSlide: true,
					dots: true,
					arrows: true,
				});
			<?php endif; ?>
		});
	</script>
	<!--ENDSCRIPTSFOOTER-->
</body>

</html>