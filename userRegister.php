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

    <form class="text-center col-4" action="" method="post">
            <h3>Registro de cuenta</h3>

            <?php
            include("conexion.php");
            include("registro.php");
            ?>  


            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Nombres</label>
                <input type="text" class="form-control" name="nombres">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <input type="submit" value="Registro" class="btn btn-primary" name="registrar">
            <a href="login.php" class="btn bg-primary">Regresar al login</a>
    </form>


</body>
</html>