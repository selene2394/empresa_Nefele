<?php
include "conexion.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['usuario'];
    $password = $_POST['contrasena'];
    $sel = $con->prepare("SELECT *from registro where usuario=? and contrasena=?");
    $parametro = 50;
    $sel->bind_param('ss', $user, $password);
    $sel->execute();
    $res = $sel->get_result();
    $row = mysqli_num_rows($res);
    if ($row != 0) {
       header("Location:tablas.php");
    } else {
        echo "NOMBRE O CONTRASEÑA INCORRECTO";
    }
}

?>