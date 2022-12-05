<?php

include('db.php');

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];
 
$consulta= "SELECT * FROM personal WHERE usuario = '$USUARIO' AND password ='$PASSWORD'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");
}else{
    include("index.html");
    ?>
    <!--<h1>Error de autentificación: Usuario o contraseña incorrecto/s</h1>-->
    <?php

}

mysqli_free_result($resultado);
mysqli_close($conexion); 

?>