<?php
foreach ($menu as $key => $value) {
    if($sigMenuPosition !== false && $key == $sigMenuPosition) include 'inc/menu-top-inc.php';
    if($value[2]){ echo '<li class="hamburger-dropdown">'; }
    else { echo '<li>'; }
    echo '
    <a href="'.(strpos($value[0], 'http') !== false ? $value[0] : $url.$value[0]).'" title="'.($value[1] == 'Home' ? 'Página inicial' : $value[1]).'" '.(strpos($value[0], 'http') !== false ? 'target="_blank" rel="nofollow"' : "").'>';
    if($value[3] != NULL){ echo '<i class="fas fa-'.$value[3].'"></i> <span>'.$value[1].'</span>'; }
    else { echo $value[1];}
    echo '
    </a>';
    if($value[2]){
        echo $value[0] == 'informacoes' ? '<ul class="sub-menu-info droppable">' : '<ul class="sub-menu droppable">';
        include('inc/'.$value[2].'.php');
        echo '</ul>';
    } echo '</li>';
} ?>