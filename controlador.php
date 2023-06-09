<?php

if(!empty($_POST["btningresar"])){
    if(empty($_POST["username"]) and empty($_POST["password"])){
        echo "<div>los campos estan vacios</div>";
    }

    else{
        $username=$_POST["username"];
        $password=$_POST["password"];
        $sql=$conexion->query(" select * from user where username='$username' and password='$password'");
        if($datos=$sql->fetch_object()){
            header("location:profile.php");
        }
        else{
            echo "<div>no puede entrar a la pagina</div>";
        }
    }
}















?>