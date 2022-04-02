<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/entrada.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HitoGrupal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="entrada.php"><b>Entradas publicadas</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="contenedor">
    <h2>Entradas</h2>
    <table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Título</th>
            <th scope="col">Contenido</th>
            <th scope="col">Imagen</th>
            <th scope="col">Fecha</th>
            <th scope="col">Acceder </th>
        </tr>
    </thead>
    <tbody>
    <?php
        require_once("conexion.php");
        $resultado=$conexion1->query("select * from entradas");
        //$conexion1->execute();
        //var_dump($resultado);
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr><td>".$fila['id']."</td><td>" . $fila['titulo'] ."</td><td>" . $fila['contenidotexto'] ."</td><td><a href='entradaunica.php?GetID=".$fila['id']."'><img width=150px height=100px src='".$fila['imagen']."'></a></td><td>" . $fila['fechapublicacion'] ."</td></tr> ";
        }

  
    ?>
    </tbody>
    </table>
    </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>



