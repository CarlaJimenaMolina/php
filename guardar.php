<?php

include('db.php');

$nombre=$_POST['nombreRegistroPaciente'];
$apellido=$_POST['apellidoRegistroPaciente'];
$os=$_POST['os'];
$diagnostico=$_POST['diagnostico'];
$peso=$_POST['peso'];
$altura=$_POST['altura'];
 
$consulta= "INSERT INTO paciente (nombre, apellido, os, diagnostico, peso, altura) 
VALUES ('$nombre','$apellido','$os','$diagnostico','$peso','$altura')";
$resultado = mysqli_query($conexion, $consulta) or die("Error de registro");

mysqli_close($conexion); 



header("location:home.php");
?>