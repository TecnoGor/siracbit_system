<div class="modal" id="modalEditUser" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Usuarios</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="col-md-12">
          <div class="tile">
            <div id="alertStatusEdit">


            </div>

            <input type="hidden" name="idOculto" id="idOculto" value="">
            <div class="tile-body">
              <form method="POST" action="">
                <div class="mb-3">
                  <label class="form-label">Nombre y Apellido</label>
                  <input class="form-control" type="text" name="nameUserEdit" id="nameUserEdit" placeholder="Introduce tu Nombre y Apellido">
                </div>
                <div class="mb-3">
                  <label class="form-label">Usuario</label>
                  <input class="form-control" type="text" name="userEdit" id="userEdit" placeholder="Introduce el usuario">
                </div>
                <div class="mb-3">
                  <label class="form-label">Contraseña</label>
                  <input class="form-control" type="password" id="passwordEdit" placeholder="Ingresa una contraseña">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="rolEdit">Rol</label>
                    <select class="form-control" name="rolEdit" id="rolEdit">
                        <option value="2">Administrador escuela</option>
                        <option value="4">Profesor</option>
                        <option value="3">Técnico</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="escuelaEdit">Escuela</label>
                    <select class="form-control" name="escuelaEdit" id="escuelaEdit">
                        <option disabled selected>Seleccione ....</option>
                        <?php
                        
                        include('../includes/conn.php');

                        $sqlEscuelas = "SELECT * FROM escuelas WHERE estatus <> 0;";
                        $stmtEscuelas = $conn->prepare($sqlEscuelas);
                        $stmtEscuelas->execute();

                        $resultEscuelas = $stmtEscuelas->fetchAll(PDO::FETCH_ASSOC);

                        foreach($resultEscuelas as $escuelas){

                        ?>

                          <option value="<?php echo $escuelas['id'];?>"><?php echo $escuelas['plantel'];?></option>

                        <?php

                        }
                        
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="estadoEdit">Estado</label>
                    <select class="form-control" name="estadoEdit" id="estadoEdit">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>
              </form>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" onclick="editUser()" type="button"><i class="bi bi-check-circle-fill me-3"></i>Actualizar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="bi bi-x-circle-fill me-3"></i>Cancelar</a>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
