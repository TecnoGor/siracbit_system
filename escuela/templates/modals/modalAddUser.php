<div class="modal" id="modalAddUser" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registrar de Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="col-md-12">
          <div class="tile">
            <div id="alertStatus">

            </div>

            <h3 class="tile-title">Datos del Nuevo Usuario</h3>
            <div class="tile-body">
              <form method="POST" action="">
                <div class="mb-3">
                  <label class="form-label">Nombre y Apellido</label>
                  <input class="form-control" type="text" name="nameUser" id="nameUser" placeholder="Introduce tu Nombre y Apellido">
                </div>
                <div class="mb-3">
                  <label class="form-label">Usuario</label>
                  <input class="form-control" type="text" name="user" id="user" placeholder="Introduce el usuario">
                </div>
                <div class="mb-3">
                  <label class="form-label">Contraseña</label>
                  <input class="form-control" type="password" id="password" placeholder="Ingresa una contraseña">
                </div>
                <div class="mb-3">
                  <label class="form-label">Repite tu contraseña</label>
                  <input class="form-control" type="password" id="confirmPassword" onblur="verifyPassword()" placeholder="Repite tu contraseña">
                  <h8 class="text-danger" id="textConfirm"></h8>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="rol">Rol</label>
                    <select class="form-control" name="rol" id="rol">
                        <option value="1">Administrador</option>
                        <option value="2">Escuela</option>
                        <option value="4">Profesor</option>
                        <option value="3">Técnico</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="estado">Estado</label>
                    <select class="form-control" name="estado" id="estado">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>
              </form>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" onclick="addUser()" type="button"><i class="bi bi-check-circle-fill me-3"></i>Registrar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="bi bi-x-circle-fill me-3"></i>Cancelar</a>
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
