<?php
class Dados 
{

    public static function iniciativa()
    {
        echo json_encode(array('human_init' => rand(1,20), 'orc_init' => rand(1,20)));
    }
}

if(isset($_REQUEST)){
    $data =  explode('/',$_REQUEST['action']);
    if($data[0] == 'init'){
        Dados::iniciativa();
    }
    
    
}