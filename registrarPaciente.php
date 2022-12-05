<?php include("db.php") ?>
<?php include("headerPacientes.php") ?>

<h1>Registro de usuario</h1>
        <div class="row justify-content-center">
            <div class="col-4">
                <form action="guardar.php" method="post" >
                    <div class="mb-3">
                        <label for="nombreRegistroPaciente" class="form-label">Nombre</label>
                        <input name="nombreRegistroPaciente" class="form-control" type="texto" id="nombreRegistroPaciente">
                      </div>
                      <div class="mb-3">
                        <label for="apellidoRegistroPaciente" class="form-label">Apellido</label>
                        <input name="apellidoRegistroPaciente" class="form-control" type="text" id="apellidoRegistroPaciente">
                      </div>
                      <div class="mb-3">
                        <label for="os" class="form-label">Obra Social</label>
                        <input class="form-control" type="text" id="os" name="os">
                      </div>
                      <div class="mb-3">
                        <label for="diagnostico" class="form-label">Diagnóstico</label>
                        <input class="form-control form-control-sm" id="diagnostico" type="text" name="diagnostico">
                      </div>
                      <div>
                        <label for="peso" class="form-label">Peso</label>
                        <input name="peso" class="form-control form-control-lg" id="peso" type="numer" step="any">
                      </div>
                      <div>
                        <label for="altura" class="form-label">Altura</label>
                        <input name="altura" class="form-control form-control-lg" id="Altura" type="numer" step="any">
                      </div>
                      <div>
                        <button type="submit" class="btn btn-primary">Guardar</button>                  
                    </div>
                </form>
            </div>
        </div>

<?php include("footherPacientes.php") ?>