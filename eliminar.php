<?php 

    include("db.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM paciente WHERE ID = $id";
        $result = mysqli_query($conexion, $query);
        
        if(!$result){
            die("Falla al eliminar");
            
        }
        $_SESSION['message'] = "Paciente eliminado correctamente";
        $_SESSION['message_type'] = 'danger';

        header("Location: editarPacientes.php");
    }

?>