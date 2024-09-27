<?php

require_once '../templates/header.php';

?>


<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="table-responsive">
          <table class="table table-hover table-bordered" id="sampleTable">

            <thead>

              <tr>
                <th>N°</th>
                <th>Tipo Recaudo</th>
                <th>Fecha de realizacion</th>
                <th>Acciones</th>
              </tr>

            </thead>

            <tbody>

              <?php
                include('includes/conn.php');

                $sql = "SELECT caracterizacion.id, caracterizacion.fecha_realizacion, act_formativas.id, act_formativas.fecha_realizacion, r_educativos.id, r_educativos.fecha_realizacion, eformativo.id, eformativo.fecha_realizacion, rfotografico.id, rfotografico.fecha_realizacion FROM caracterizacion, act_formativas, r_educativos, eformativo, rfotografico;";
                $stmt = $conn->query($sql);
                $lista = $stmt->fetchAll(PDO::FETCH_OBJ);

                foreach ($lista as $recaudos) {

              ?>

              <tr>
                <td>1</td>
                <td> <?php echo $recaudos->caracterizacion.id; ?> </td>
                <td> <?php echo $recaudos->caracterizacion.fecha_realizacion; ?> </td>
              </tr>

            <?php

                }
            
            ?>

              <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
              </tr>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<?php

require_once '../templates/header.php';

?>
