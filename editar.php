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
 <?php
  if (isset($_POST["enviar"])){
  }
  else{
        
    
  
 ?>
    <h1>Editar</h1>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
        <label for="">Nombre</label>
        <input type="text" name="nombre" value=""><br>
        <label for="">Apellido</label>
        <input type="text" name="apellido" value=""><br>
        <label for="">Cedula</label>
        <input type="text" name="cedula" value=""><br>
        <label for="">Fecha</label>
        <input type="text" name="fecha" value=""><br>
        <input type="submit" name="enviar" value="actualizar">
        <a href="profile.php">Regresar</a>
    </form>
    <?php 
}
?>
</body>
</html>