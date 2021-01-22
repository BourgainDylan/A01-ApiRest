<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    
    $table = [ 
        
        [ 'user' =>1, 'name'=>'roger', 'age'=>40],
        [ 'user' =>2, 'name'=>'Hugo', 'age'=>22],
        [ 'user' =>3, 'name'=>'Leonie', 'age'=>27]
    
        ];

        echo json_encode($table, JSON_PRETTY_PRINT);
    } else{

        echo'mauvais format';
    }
?>