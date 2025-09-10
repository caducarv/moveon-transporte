<?php 
header("Content-Type: application/json");
$method = $_SERVER['REQUEST_METHOD'];

switch($method){
    case 'GET':
    echo json_encode(["message" => "Recebi um GET"]);
        break;
    case 'POST':
    echo json_encode(["message" => "Recebi um POST"]);
        break;
    case 'PUT':
    echo json_encode(["message" => "Recebi um PUT"]);
        break;
    case 'DELETE':
    echo json_encode(["message" => "Recebi um GET"]);
        break;
    default:
        echo json_encode(["message" => "Método não suportado"]);
}
?>