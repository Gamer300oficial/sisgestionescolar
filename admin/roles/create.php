<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');
?>

  <div class="content-wrapper">
    <br>
    <div class="content">
      <div class="container">
        <div class="row">
          <h1>Creacióm de un nuevo rol</h1>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Llene los datos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="<?=APP_URL;?>/app/controllers/roles/create.php" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nombre del rol</label>
                                <input type="text" name="nombre_rol" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <a href="<?=APP_URL;?>/admin/roles" class="btn btn-secondary">Cancelar</a>
                    </div>
                </div>
                </form>
                <hr>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </div>
  </div>

<?php 

include ('../../admin/layout/parte2.php');
include ('../../layout/mensajes.php');

?>