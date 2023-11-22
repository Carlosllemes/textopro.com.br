<?
$h1         = 'Home';
$title      = 'Home';
$desc       = 'Home - ';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Home';
include('inc/head.php');
?>
<!--STARTSCRIPTSHEADER-->
<!--ENDSCRIPTSHEADER-->
</head>
<body>
	<? include('inc/topo.php'); ?>
	<main>
		<div class="content">
			<section>
				<!--STARTCOMPONENTS-->
				<div class="d-flex flex-column-reverse">
					<div class="container">
						<div class="wrapper">
							<div class="sobre-home">
								<div class="grid-col-2 grid-gap-50 align-items-start">
									<div class="sobre-home__content">
										<h1 class="sobre-home__title">Segurança e conforto com os veículos <span>blindados da <?=$nomeSite?>!</span></h1>
										<p class="sobre-home__text">Veículos blindados 0KM ou Seminovos com garantia estendida!</p>									
									</div>

									<div class="sobre-home__cover">
										<img class="sobre-home__image" src="<?=$url?>imagens/blindagem-defense.webp" alt="Blindagem Defense" title="Blindagem Defense" width="565" height="426">
									</div>
								</div>							
							</div>						
						</div>
						<div class="clear"></div>
					</div>
          
					<div class="bg-dark">   
						<div class="container py-0">
							<div class="wrapper">
								<div class="banner-home">
									<div class="grid-col-2 grid-gap-40">
										<a class="banner-home__item" href="https://blindados.autobunkers.com.br/" target="_blank" rel="nofollow" title="Veículos">
											<img class="banner-home__image" src="<?=$url?>imagens/veiculos.jpg" alt="Veículos" title="Veículos" width="570" height="628">
										</a>

										<a class="banner-home__item" href="<?=$url?>blindagem" title="Blindagem">
											<img class="banner-home__image" src="<?=$url?>imagens/blindagem.jpg" alt="Blindagem" title="Blindagem" width="570" height="628">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>					

				<div class="bg-black">
					<div class="container">						
						<div class="features">
							<div class="wrapper">
								<div class="features__heading">
									<h2 class="features__title">Por que escolher a <?=$nomeSite?>?</h2>
									<p class="features__text">Mais de 20 mil veículos blindados comercializados!</p>
								</div>
							</div>							

							<div class="features__item">
								<div class="features__cover">
									<img class="features__image" src="<?=$url?>imagens/features/seguranca-compra.webp" alt="Segurança de compra" title="Segurança de compra" loading="lazy" width="280" height="172">
								</div>

								<div class="features__content">
									<h3 class="features__item-title">Segurança de compra</h3>
									<ul class="features__list">
										<li><span>Mecânica e Check-up de 160 itens;</span></li>
										<li><span>Revisão de blindagem em oficina especializada;</span></li>
										<li><span>Documentação e análise de procedência;</span></li>
										<li><span>Operações financeiras transparentes.</span></li>
									</ul>
								</div>
							</div>

							<div class="features__item">
								<div class="features__cover">
									<img class="features__image" src="<?=$url?>imagens/features/comodidade.webp" alt="Comodidade" title="Comodidade" loading="lazy" width="280" height="280">
								</div>

								<div class="features__content">
									<h3 class="features__item-title">Comodidade</h3>
									<ul class="features__list">
										<li><span>Entrega em domicílio;</span></li>
										<li><span>Documentação de blindagem;</span></li>
										<li><span>Transferência do veículo;</span></li>
										<li><span>Agendamento de revisões;</span></li>
										<li><span>Acessórios e boutique veicular.</span></li>
									</ul>
								</div>
							</div>

							<div class="features__item">
								<div class="features__cover">
									<img class="features__image" src="<?=$url?>imagens/features/consultores-especializados.webp" alt="Consultores Especializados" title="Consultores Especializados" loading="lazy" width="280" height="287">
								</div>

								<div class="features__content">
									<h3 class="features__item-title">Consultores Especializados</h3>
									<ul class="features__list">
										<li><span>Solução sob medida para sua compra;</span></li>
										<li><span>Conhecimento em segurança urbana;</span></li>
										<li><span>Experiência em elétricos e híbridos.</span></li>
									</ul>
								</div>
							</div>
						</div>						
					</div>
				</div>	

				<div class="banner">
                    <img class="banner__image" src="<?=$url?>imagens/banners/banner-expertise.webp" alt="Expertise em Elétricos e Híbridos" title="Expertise em Elétricos e Híbridos" width="1920" height="757" loading="lazy">
                </div>

				<div class="video-home">
					<div class="container">						
						<div class="video-home__content">
							<h2 class="video-home__title">Assista o vídeo abaixo e conheça um pouco mais sobre a <?=$nomeSite?></h2>
							<div class="video-home__video" data-video="https://www.youtube.com/watch?v=7Y_xmz_lqsg" data-video-cover="<?=$url?>imagens/video-cover.webp" data-play-on-load></div>
						</div>						
					</div>					
				</div>						

				<div class="container">
					<div class="wrapper">
						<div class="destaques-mpi">
							<h2 class="destaques-mpi__title">Serviços em destaque</h2>
							<? include('inc/produtos-destaque-inc.php'); ?>
						</div>	
					</div>
					<div class="clear"></div>
				</div>

				<iframe class="mapa-home" src="<?=$mapa?>"></iframe>
				
				<!--ENDCOMPONENTS-->
			</section>
		</div> <!-- end content -->
	</main>
	<? include('inc/footer.php'); ?>
	<!--STARTSCRIPTSFOOTER-->

	<? include('inc/ytvideo.php'); ?>
	<!--ENDSCRIPTSFOOTER-->
</body>
</html>