<?php

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM data WHERE id = $id";
    if ($conexion->query($sql) === TRUE) {
        echo '<div>Persona eliminada correctamente</div>';
    } else {
        echo '<div>Error al eliminar persona: ' . $conexion->error . '</div>';
    }
}
?>