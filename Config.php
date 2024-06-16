<?php
    $db_name = "horario_db";
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "root";
    
    $pdo = new PDO("mysql:dbname={$db_name};host={$db_host}", "{$db_user}", "{$db_password}");
