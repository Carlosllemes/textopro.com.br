<?
$h1         = 'Home';
$title      = 'Home';
$desc       = 'Home - A OCS Remoção de Entulho foi fundada em 1998 na cidade de São Paulo por Orlando Correia da Silva, sendo nossa principal missão ajudar o meio';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Home';
include('inc/head.php');
?>
</head>
<body>
<? include('inc/topo.php'); ?>

<div class="banner">
	<a href="<?=$url?>empresa" title="empresa" ><video src="<?=$url?>imagens/empresa.mp4" autoplay loop muted></video></a>
</div>
<main> 
	<div class="content">
		<section>
			<div class="wrapper">
				<h1><?=$nomeSite." - ".$slogan?></h1>
				<ul class="thumbnails">
					<li>
						<a href="<?=$url?>empresa" title="A empresa">
							<img src="<?=$url?>imagens/empresa.jpg" title="A empresa" alt="A empresa">
							<h2>A empresa</h2>
						</a>
					</li>
					<li>
						<a href="<?=$url?>duvidas" title="Dúvidas">
							<img src="<?=$url?>imagens/duvidas.jpg" title="Dúvidas" alt="Dúvidas">
							<h2>Dúvidas</h2>
						</a>
					</li>
				<li>
						<a href="<?=$url?>galeria-fotos" title="Galerias">
							<img src="<?=$url?>imagens/galeria.jpg" title="Galerias" alt="Galerias">
							<h2>Galerias</h2>
						</a>
					</li>
				</ul>
				
			</div>
			<div class="conteudo-index">
				<div class="wrapper">
					<h2 class="text-center">Construíndo um futuro junto a você de um planeta mais limpo.</h2>
					
				</div>
			</div>
			<div class="wrapper">
				<h2>Produtos em Destaque</h2>
				
				<ul class="thumbnails-mod1 d-flex justify-content-center flex-wrap">
					<li>
						<a rel="nofollow" href="<?=$url;?>cacamba-4m3" title="Caçamba 4m3"><img src="<?=$url;?>imagens/informacoes/cacamba-4m3-01.jpg" alt="Caçamba 4m3" title="Caçamba 4m3"/></a>
						<h2><a href="<?=$url;?>cacamba-4m3" title="Caçamba 4m3">Caçamba 4m3</a></h2>
					</li>
					<li>
						<a rel="nofollow" href="<?=$url;?>empresa-cacamba" title="Empresa de caçamba"><img src="<?=$url;?>imagens/informacoes/empresa-cacamba-01.jpg" alt="Empresa de caçamba" title="Empresa de caçamba"/></a>
						<h2><a href="<?=$url;?>empresa-cacamba" title="Empresa de caçamba">Empresa de caçamba</a></h2>
					</li>
					<li>
						<a rel="nofollow" href="<?=$url;?>locadora-cacamba" title="Locadora de caçamba"><img src="<?=$url;?>imagens/informacoes/locadora-cacamba-01.jpg" alt="Locadora de caçamba" title="Locadora de caçamba"/></a>
						<h2><a href="<?=$url;?>locadora-cacamba" title="Locadora de caçamba">Locadora de caçamba</a></h2>
					</li>
					<li>
						<a rel="nofollow" href="<?=$url;?>servico-cacamba-sp" title="Serviço de caçamba sp"><img src="<?=$url;?>imagens/informacoes/servico-cacamba-sp-01.jpg" alt="Serviço de caçamba sp" title="Serviço de caçamba sp"/></a>
						<h2><a href="<?=$url;?>servico-cacamba-sp" title="Serviço de caçamba sp">Serviço de caçamba sp</a></h2>
					</li>
				</ul>
				
				<br class="clear">
			</div>
		</section>
	</div>
</main>
<? include('inc/footer.php'); ?>
<link rel="stylesheet" href="<?=$url?>nivo/nivo-slider.css" type="text/css" media="screen">
<script  src="<?=$url?>nivo/jquery.nivo.slider.js"></script>
<script>
$(window).load(function() {
$('#slider').nivoSlider({
	effect: 'fade',
	pauseTime: 3000,
	directionNav: true,
	controlNav: false
});
});
</script>
</body>
</html>