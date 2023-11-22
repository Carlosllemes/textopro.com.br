<?php foreach ($menu as $key => $value): ?>
	<? if($sigMenuPosition !== false && $key == $sigMenuPosition) include 'inc/menu-top-inc.php'; ?>
	<li <?=($value[2] ? ' class="dropdown"' : '')?>>
		<a href="<?=(strpos($value[0], 'http') !== false ? $value[0] : $url.$value[0])?>" title="<?=($value[1] == 'Home' ? 'Página inicial' : $value[1])?>" <?=(strpos($value[0], 'http') !== false ? 'target="_blank" rel="nofollow"' : "")?>>
			<?php if($value[3] && ($value[0] !== 'informacoes')): ?>
				<i class="<?=$value[3]?>"></i>
				<span class="d-block"><?=$value[1]?></span>
			<?php else: ?>
				<i class="<?=$value[3]?> fa-xl"></i>
			<?php endif; ?>
			<?php if(!$value[3]): ?>
				<?=$value[1];?>
			<?php endif; ?>
		</a>
		<?php if($value[2]): echo $value[0] == 'informacoes' ? '<ul class="sub-menu-info">' : '<ul class="sub-menu">';
			include('inc/'.$value[2].'.php'); ?>
		</ul>
	<?php endif; ?>
</li>
<?php endforeach; ?>