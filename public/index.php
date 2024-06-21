<?php
  require './includes/Config.php';
?>

<!DOCTYPE html>
<html style="padding: 0; margin:0;" lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ponto</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  
  <div class="container-xxl-fluid">
<ul class="nav bg-primary">
  <li class="nav-item">
    <a class="nav-link active text-light" aria-current="page" href="./Form.html">Bater o Ponto</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-light" href="#">Histórico de Pontos</a>
  </li>
</ul>

  <table class="table table-dark table-hover">
      <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Data</th>
        <th scope="col">Horário de Inicio</th>
        <th scope="col">Horário de Término</th>
      </tr>
    </thead>
    <tbody>
    <?php
  
  $query = "SELECT * FROM horarios";
  $database = $pdo->prepare($query);
  $database->execute();
  
  $resultado = $database->fetchAll();
  foreach ($resultado as $x) {
    $novaHI = substr($x[2],0,-3);
    $novaHF = substr($x[3],0,-3);
    $novoX = str_replace("-","/",$x[1]);
    
        echo "<tr>";
        echo "<th scope="."row".">{$x[0]}</th>"; 
        echo "<td>{$novoX}</td>";
        echo "<td>{$novaHI}</td>";
        echo "<td>{$novaHF}</td>";
        echo "</tr>";
      }
    ?>
  
    </tbody>
  </table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>