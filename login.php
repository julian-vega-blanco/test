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
<form method="post" action="" >

    <div class="container1 ">
    <?php
    include("conexion.php");
    include("controlador.php");
    ?>

    <!-- nota para que le login te deje ingresar a la pagina deben tener el registro hecho en la base de datos ingresar tus datos en phpmyadmin donde dice insert en username y password  -->

        <div class="div">
            <h5 class="bg-light rounded-pill text-center border-0">username</h5>
            <input type="text" id="username" class="input rounded-pill border-0" name="username">
        </div>
        <div class="div">
            <h5 class="bg-light rounded-pill text-center border-0">contraseña</h5>
            <input type="password" id="input" class="input rounded-pill border-0" name="password">
        </div>
        <p class="text-center">Aun no te has registrado?</p>
        <a href="userRegister.php" class="btn bg-light ">Registrarse</a>
        <input type="submit" name="btningresar" class="btn bg-light"  type="submit" value="Iniciar sesion">

    </div> 
</form>  
</body>
</html>