<?php

    if(!$showContactInfo){
        foreach($fone as &$item){
            $item[1] = preg_replace('/[0-9]/', '*', $item[1]);
        }
        if(isset($whatsapp)){
            $whatsapp = preg_replace('/[0-9]/', '*', $whatsapp);
        }
        if(isset($emailContato)){
            $emailContato = preg_replace('/[^@.]/', '*', $emailContato);
        }
    ?>
    <?php
    }

?>