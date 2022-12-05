<?php

include('db.php');

$USUARIOREGISTRO=$_POST['nombreRegistro'];
$PASSWORDREGISTRO=$_POST['passwordRegistro'];
 
$consulta= "INSERT INTO personal (usuario, password) 
VALUES ('$USUARIOREGISTRO','$PASSWORDREGISTRO')";
$resultado = mysqli_query($conexion, $consulta) or die("Error de registro");

mysqli_close($conexion); 

$_SESSION['message'] = 'Guardado exitosamente';
$_SESSION['message_type'] = 'success';

header("location:home.php");
?>