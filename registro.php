<?php 
include "conexion.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id ="";
    $nombres =$_POST["nombres"];
    $apellidos =$_POST["apellidos"];
    $telefono =$_POST["telefono"];
	$correo =$_POST["correo"];
	$paquete =$_POST["paquete"];
	$metodo=$_POST["metodo"];
    $usuario =$_POST["usuario"];
    $contrasena =$_POST["contrasena"];

$ins=$con->prepare("INSERT INTO registro VALUES(?,?,?,?,?,?,?,?,?)");
$ins->bind_param("issssssss",$id,$nombres,$apellidos,$telefono,$correo,$paquete,$metodo,$usuario,$contrasena);
if($ins->execute()){
    header("Location: alerta.php?tipo=exito&operacion=Registro Exitoso&destino=ingreso.html");
}
else{
    header("Location: alerta.php?tipo=fracaso&operacion=Registro fallido&destino=registro.html");
}
$ins->close();
$con->close();
}
?>