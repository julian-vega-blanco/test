<?php
if (!empty($_POST["registrar"])){
  if (!empty($_POST["username"]) and !empty($_POST["password"]) and !empty($_POST["nombres"]) and !empty($_POST["apellidos"])){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $nombres=$_POST["nombres"];
    $apellidos=$_POST["apellidos"];
   
    $sql=$conexion->query(" insert into user(nombres, apellidos, username, password)values('$username','$password','$nombres','$apellidos') ");

    if($sql==1){
        echo '<div class="alert alert-success">Persona registrada correctamente</div>';
    }
    else{
        echo '<div class="alert alet-danger">Alguno de los datos esta incorrecto</div>';
    }
  }
  else{
    echo "Los campos aun no se han llenado correctamente";
  }

    
}

if (!empty($_POST["btnregistrar"])){
  if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["cedula"]) and !empty($_POST["fecha"])){
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $cedula=$_POST["cedula"];
    $fecha=$_POST["fecha"];

    $sql=$conexion->query(" insert into data(nombre, apellido, cedula, fecha)values('$nombre','$apellido','$cedula','$fecha') ");

    if($sql==1){
        echo '<div class="alert alert-success">Persona registrada correctamente</div>';
    }
    else{
        echo '<div class="alert alet-danger">Alguno de los datos esta incorrecto</div>';
    }
  }
  else{
    echo "Los campos aun no se han llenado correctamente";
  }

    
}



























?>