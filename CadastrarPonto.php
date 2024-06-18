<?php
require "./Config.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    
    
    $data = $_POST['data'];
    $inicio = $_POST['inicio'];
    $termino = $_POST['termino'];

    if (empty($data)) {
        $errors[] = "Data é necessária!";
    }
    if (empty($inicio)) {
        $errors[] = "Requerido a data de Inicio";
    }
    if (empty($termino)) {
        $errors[] = "Requerido a data do termino";
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['data'] = $data;
        $_SESSION['inicio'] = $inicio;
        $_SESSION['termino'] = $termino;

        header("Location: form.php");
        exit;
    }
        
        $query = "INSERT INTO horarios (Data,Hr_inicio,Hr_final) 
                     VALUES (:data,:inicio,:termino);";
        
        $database = $pdo->prepare($query);
    
        $database->bindParam(':data', $data);
        $database->bindParam(':inicio', $inicio);
        $database->bindParam(':termino', $termino);
     
        $database->execute();
        
        header('Location: TabelaPontos.php');
        exit;    
}
