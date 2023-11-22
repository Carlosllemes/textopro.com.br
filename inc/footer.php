<div class="clear"></div>
<footer>
	<div class="wrapper">
		<div class="contact-footer">
			<address>
				<span><?=$nomeSite." - ".$slogan?></span>
				<?=$rua." - ".$bairro?> <br>
				<?=$cidade." - ".$UF." - ".$cep?>
			</address>
			<?php
                foreach ($fone as $key => $value) {
                    echo "<a title=\"Clique e ligue\" href=\"tel:$value[0]$value[1]\"><i class=\"fa fa-$value[2]\" aria-hidden=\"true\"></i> $value[0] <strong>$value[1]</strong></a><br>";
                }
            ?>
			<br>
		</div>
		<div class="menu-footer">
			<nav>
				<ul>
					<?php

						foreach ($menu as $key => $value) {
							if($sigMenuPosition !== false && $key == $sigMenuPosition) include('inc/menu-footer-sig.php');
							echo '
								<li>
									<a rel="nofollow" href="'.$url.$value[0].'" title="'.($value[1] == 'Home' ? 'Página inicial' : $value[1]).'">'.$value[1].'</a>
								</li>
								';
						}

					?>
					<li><a href="<?=$url?>mapa-site" title="Mapa do site <?=$nomeSite?>">Mapa do site</a></li>
				</ul>
			</nav>
		</div>
		<? include('inc/canais.php');?>
		<br class="clear">
	</div>
</footer>
<div class="copyright-footer">
	<div class="wrapper">
		Copyright © <?=$nomeSite?>. (Lei 9610 de 19/02/1998)
		<div class="selos">
			<a rel="nofollow" href="https://validator.w3.org/check?uri=<?=$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" target="_blank" title="HTML5 W3C"><i class="fa fa-html5"></i> <strong>W3C</strong></a>
			<a rel="nofollow" href="https://jigsaw.w3.org/css-validator/validator?uri=<?=$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=pt-BR" target="_blank" title="CSS W3C" ><i class="fa fa-css3"></i> <strong>W3C</strong></a>
			<img src="<?=$url?>imagens/selo.png" alt="Selo" title="Selo"/>
		</div>
	</div>
</div>
<?php if(isset($whatsapp) && !empty($whatsapp)) { include 'botao-whatsapp.php';} ?>

<?include('inc/LAB.php');?>