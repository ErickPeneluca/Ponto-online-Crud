<?php
require "./Config.php";

$data = $_POST['data'];
$inicio = $_POST['inicio'];
$termino = $_POST['termino'];
    
    $query = "INSERT INTO horarios (Data,Hr_inicio,Hr_final) 
                 VALUES (:data,:inicio,:termino);";
    
    $database = $pdo->prepare($query);

    $database->bindParam(':data', $data);
    $database->bindParam(':inicio', $inicio);
    $database->bindParam(':termino', $termino);
 
    $database->execute();
    
    return http_response_code(200);

    header('Location: TabelaPontos.php');
    exit();