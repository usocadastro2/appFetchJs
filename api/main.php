<?php
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type');

    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $banco = [
            ["nome" => "Ostra", "email" => "ostra@outlook.com"],
            ["nome" => "Ana", "email" => "dark@yahoo.com"],
            ["nome" => "Pirata", "email" => "altomar@terra.com.br"]
        ];

        $dados = json_decode(file_get_contents('php://input'), true);
        

        if(in_array('sucesso', $dados)){
            echo json_encode($banco);
        }else{
            echo json_encode("Nada feito");
        };
    }else{
        http_response_code(405);
        echo json_encode(["error" => "Méthodo não permitido"]);

    };

?>