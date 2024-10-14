<div class="modal" id="modalEditSchool" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registrar Escuela</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="col-md-12">
          <div class="tile">
            <div id="alertStatusEdit">

            </div>

            <h3 class="tile-title">Datos de la Nueva Escuela</h3>
            <div class="tile-body">
              <form method="POST" action="">
              <input type="hidden" name="idOculto" id="idOculto" value="">
                <div class="mb-3">
                  <label class="form-label">Nombre del Plantel / Institucion</label>
                  <input class="form-control" require type="text" name="plantelEdit" id="plantelEdit" placeholder="Introduce el Nombre del Plantel">
                </div>
                <div class="mb-3">
                  <label class="form-label">Código DEA</label>
                  <input class="form-control" require type="text" name="codeDEAEdit" id="codeDEAEdit" placeholder="Introduce el código">
                </div>
                <div class="mb-3">
                    <label class="form-label">Dirección</label>
                    <textarea name="directionSchool" id="directionSchoolEdit"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nivel / Modalidad</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="modalidadEdit" type="checkbox" id="nivel1" value="Inicial">
                    <label class="form-check-label" for="nivel">Inicial</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="modalidadEdit" type="checkbox" id="nivel2" value="Primaria">
                    <label class="form-check-label" for="nivel">Primaria</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="modalidadEdit" type="checkbox" id="nivel3" value="Media">
                    <label class="form-check-label" for="nivel">Media</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="modalidadEdit" type="checkbox" id="nivel4" value="Media Tecnica">
                    <label class="form-check-label" for="nivel">Media Tecnica</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="modalidadEdit" type="checkbox" id="nivel5" value="Educacion Especial">
                    <label class="form-check-label" for="nivel">Educación Especial</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="modalidadEdit" type="checkbox" id="nivel6" value="Educacion Adultos">
                    <label class="form-check-label" for="nivel">Educación Adultos</label>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="estatus">Estado Actual</label>
                    <select class="form-control" name="estatusEdit" id="estatusEdit">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>
              </form>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" onclick="editSchool()" type="button"><i class="bi bi-check-circle-fill me-3"></i>Registrar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="bi bi-x-circle-fill me-3"></i>Cancelar</a>
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
