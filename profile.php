<?php
    include("conexion.php");
    include("controlador.php");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center p-3" >Hola trainer</h1>
    <?php
    include("conexion.php");
    include ("eliminar.php");
    ?>
    <div class="container-fluid row">
        <form class="text-center col-4" action="" method="POST">
            <h3>Registro de empleado</h3>
            <?php
            include("conexion.php");
             include("registro.php");           
            ?>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Nombre de la persona</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Apellido de la persona</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Cedula de la persona</label>
                <input type="text" class="form-control" name="cedula">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Fecha</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <input type="submit" value="Registro" class="btn btn-primary" name="btnregistrar">
        </form>
        <div class="col-7 p-4">
        <table class="table">
  <thead >
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Cedula</th>
      <th scope="col">Fecha</th>
      <th scope="col">Actualizar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>
  <?php


    $sql=$conexion->query(" select * from data");
    while($datos = $sql->fetch_object()) { ?>
   <tr>
      <td><?= $datos->id ?></td>
      <td><?= $datos->nombre ?></td>
      <td><?= $datos->apellido ?></td>
      <td><?= $datos->cedula ?></td>
      <td><?= $datos->fecha ?></td>
      <td><?php echo "<a href='editar.php?id=".filas["id"]."'>EDITAR</a>?></td>
      <td><a href="profile.php?id=<?= $datos->id ?>" class="btn btn--small btn-danger">Eliminar</a></td>
     
    </tr>

    <?php }
    ?>
    
   
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>