<?php
require "./Config.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    
    
    $data = $_POST['data'];
    $inicio = $_POST['inicio'];
    $termino = $_POST['termino'];

    $dataErr = "";

    if (empty($data)) {
        $errors[] = "Data é necessária!";
        
    }

    if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $data)) {
        $dataErr = "Data inválida. Use o formato yyyy-mm-dd";
        $errors[] = $dataErr;
    }

    if (empty($inicio)) {
        $errors[] = "Requerido a hora de Inicio";
    }
    if (empty($termino)) {
        $errors[] = "Requerido a hora do termino";
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
