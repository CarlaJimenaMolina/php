<?php 

    include("db.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM paciente WHERE ID = $id";
        $result = mysqli_query($conexion, $query);
        
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
            $os = $row['os'];
            $diagnostico = $row['diagnostico'];
            $peso = $row['peso'];
            $altura = $row['altura'];
            
        }
    }

    if(isset($_POST['update'])){
        $id=$_GET['id'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $os=$_POST['os'];
        $diagnostico=$_POST['diagnostico'];
        $peso=$_POST['peso'];
        $altura=$_POST['altura'];

        $query="UPDATE personal SET nombre='$nombre', apellido='$apellido', os='$os', diagnostico='$diagnostico', peso='$peso', altura='$altura' WHERE id=$id ";
        $result = mysqli_query($conexion,$query);
        
        $_SESSION['message'] = "Paciente modificado correctamente";
        $_SESSION['message_type'] = 'warning';
        header("Location:editarPacientes.php");}   

    
        

?>

<?php
include("headerPacientes.php");
?>
<div class="container p-4"
    <div class="row">
        <div class="col-md-4 mx-auto">
            <card class="card-body">
                <form action="editar.php?id<?php echo $_GET['id'];?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="Modificar nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" name="apellido" value="<?php echo $apellido; ?>" class="form-control" placeholder="Modificar apellido">
                    </div>
                    <div class="form-group">
                        <input type="text" name="os" value="<?php echo $os; ?>" class="form-control" placeholder="Modificar Obra Social">
                    </div>
                    <div class="form-group">
                        <input type="text" name="diagnostico" value="<?php echo $diagnostico; ?>" class="form-control" placeholder="Modificar diagnostico">
                    </div>
                    <div class="form-group">
                        <input type="number" step="any" name="peso" value="<?php echo $peso; ?>" class="form-control" placeholder="Modificar peso">
                    </div>
                    <div class="form-group">
                        <input type="number" step="any" name="altura" value="<?php echo $altura; ?>" class="form-control" placeholder="Modificar altura">
                    </div>
                    <button class="btn btn-success" name="update">
                        Modificar
                    </button>
                </form>
            </card>
        </div>
    </div>
</div>
?>