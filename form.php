<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pontos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php
    session_start();
    if (isset($_SESSION['errors'])) {
        echo '<ul>';

        foreach ($_SESSION['errors'] as $error) {
            echo '<li>' . htmlspecialchars($error) . '</li>';
        }

        echo '</ul>';

        $data = isset($_SESSION['data']) ? $_SESSION['data'] : '';
        $inicio = isset($_SESSION['inicio']) ? $_SESSION['inicio'] : '';
        $termino = isset($_SESSION['termino']) ? $_SESSION['termino'] : '';


        unset($_SESSION['errors'], $_SESSION['data'], $_SESSION['inicio'], $_SESSION['termino']);

    } else {
        $data = '';
        $inicio = '';
        $termino = '';
    }

    ?>
    <div class="container-sm">
        <form action="CadastrarPonto.php" method="post">
            <label for="Data" class="form-label">Data</label>
            <input type="text"  name="data" class="form-control" placeholder="YYYY-MM-DD">
            
            <label for="HoraInicio" class="form-label">Hora de início</label>
            <input type="time"  name="inicio" class="form-control" placeholder="HH:MM">
            
            <label for="HoraTermino" class="form-label">Hora de término</label>
            <input type="time" name="termino" class="form-control" placeholder="HH:MM">
            
            <button style="margin-top: 10px;" type="submit" class="btn btn-primary mb-3">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>