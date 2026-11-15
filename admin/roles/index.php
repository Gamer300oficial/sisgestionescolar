<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');
include ('../../app/controllers/roles/listado_de_roles.php');
?>

  <div class="content-wrapper">
    <br>
    <div class="content">
      <div class="container">
        <div class="row">
          <h1>Listado de roles</h1>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Roles registrados</h3>

                <div class="card-tools">
                  <a href="create.php" class="btn btn-primary"><i class="fas fa-plus-square"></i> Crear nuevo rol</a>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-striped table-bordered table-hover table-sm">
            <thead>
              <tr>
                <th><center>Nro</center></th>
                <th><center>Nombre del rol</center></th>
                <th><center>Acciones</center></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $contador_rol = 0;
              foreach ($roles as $role) {
                $id_rol = $role['id_rol'];
                $contador_rol = $contador_rol + 1;?>
                <tr>
                  <td style="text-align: center;"><?php echo $contador_rol; ?></td>
                  <td><?php echo $role['nombre_rol']; ?></td>
                  <td style="text-align: center;">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button type="button" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></button>
                      <button type="button" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></button>
                      <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </div>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
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