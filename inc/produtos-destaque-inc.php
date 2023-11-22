<div class="card-group">
	<?php
	// DEFINA UMA QUANTIDADE PARA ATIVAR O MODO ALEATÓRIO EX: randomMode = 4;
	$randomMode = NULL;
	if($randomMode != NULL) {
		$destaquesMPI = [];
		while(count($destaquesMPI) < $randomMode) {
			$randMPI = array_rand($vetKey);
			if(!in_array($randMPI, array_column($destaquesMPI, 'mpiNum'))) {
				array_push($destaquesMPI, array('mpiNum' => $randMPI, 'image' => '01'));
			}
		}
	// OU ESCOLHA AS MPIS PELO INDICE DO ARRAY VETKEY();
	} else {
		$destaquesMPI = [
			array('mpiNum' => '5', 'image' => '01'),
			array('mpiNum' => '23', 'image' => '01'),
			array('mpiNum' => '58', 'image' => '01'),
			array('mpiNum' => '8', 'image' => '01'),
		];
	}
	foreach($destaquesMPI as $key => $item) {
		$mpi = $vetKey[$item['mpiNum']];
		$mpiTitle = $mpi['key'];
		$mpiUrl = $mpi['url'];
		$mpiImage = $item['image']; ?>
		<div class="card card--mpi">
			<a class="card__link" href="<?=$url.$mpiUrl?>" title="<?=$mpiTitle?>">
				<img class="card__image" src="<?=$url?>imagens/informacoes/<?=$mpiUrl."-".$mpiImage?>.jpg" alt="<?=$mpiTitle?>" title="<?=$mpiTitle?>" loading="lazy" >
				<h2 class="card__title"><?=$mpiTitle?></h2>
			</a>
		</div>
		<?
	} ?>
</div>