<?php

require_once 'templates/header.php';

?>


<main class="app-content">

  <div class="app-title">
        <div>
          <h1><i class="bi bi-table"></i> Recaudos</h1>
          <!-- <p></p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
          <li class="breadcrumb-item">Entrega Recaudos</li>
          <li class="breadcrumb-item active"><a href="#">Lista de Recaudos</a></li>
        </ul>
      </div>
  
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">

              <thead>

                <tr>
                  <th>N°</th>
                  <th>Recaudo</th>
                  <th>Fecha de Recaudo</th>
                  <th>Acciones</th>
                </tr>

              </thead>

              <tbody>

                <?php
                include('includes/conn.php');

                $sql = "SELECT caracterizacion.id as cid, caracterizacion.fecha_realizacion as cfr, act_formativas.id as acid, act_formativas.fecha_realizacion as acfr, r_educativos.id as rid, r_educativos.fecha_realizacion as rfr, eformativo.id as eid, eformativo.fecha_realizacion as efr, rfotografico.id as rfid, rfotografico.fecha_realizacion as rffr FROM caracterizacion, act_formativas, r_educativos, eformativo, rfotografico;";
                $stmt = $conn->query($sql);
                $lista = $stmt->fetchAll(PDO::FETCH_OBJ);

                foreach ($lista as $recaudos) {

                  $i=1;

              ?>

              <tr>
                <td> <?php echo $i; $i++;?> </td>
                <td>Caracterizacion</td>
                <!-- <td> <?php echo $recaudos->cid; ?> </td> -->
                <td> <?php echo $recaudos->cfr; ?> </td>
                <td>
                  <a class="text-success" href=""><i class="bi bi-pencil-square"></i></a>
                  <a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href=""><i class="bi bi-trash"></i></a>
                </td>
              </tr>

              <tr>
                <td> <?php echo $i; $i++;?> </td>
                <td>Actividades Formativas</td>
                <!-- <td> <?php echo $recaudos->acid; ?> </td> -->
                <td> <?php echo $recaudos->acfr; ?> </td>
                <td>
                  <a class="text-success" href=""><i class="bi bi-pencil-square"></i></a>
                  <a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href=""><i class="bi bi-trash"></i></a>
                </td>
              </tr>

              <tr>
                <td> <?php echo $i; $i++;?> </td>
                <td>Recursos Educativos</td>
                <!-- <td> <?php echo $recaudos->rid; ?> </td> -->
                <td> <?php echo $recaudos->rfr; ?> </td>
                <td>
                  <a class="text-success" href=""><i class="bi bi-pencil-square"></i></a>
                  <a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href=""><i class="bi bi-trash"></i></a>
                </td>
              </tr>

              <tr>
                <td> <?php echo $i; $i++;?> </td>
                <td>Planificacion del encuentro formativo</td>
                <!-- <td> <?php echo $recaudos->eid; ?> </td> -->
                <td> <?php echo $recaudos->efr; ?> </td>
                <td>
                  <a class="text-success" href=""><i class="bi bi-pencil-square"></i></a>
                  <a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href=""><i class="bi bi-trash"></i></a>
                </td>
              </tr>

              <tr>
                <td> <?php echo $i; $i++;?> </td>
                <td>Registro Fotografico</td>
                <!-- <td> <?php echo $recaudos->rfid; ?> </td> -->
                <td> <?php echo $recaudos->rffr; ?> </td>
                <td>
                  <a class="text-success" href=""><i class="bi bi-pencil-square"></i></a>
                  <a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href=""><i class="bi bi-trash"></i></a>
                </td>
              </tr>

            <?php
                  
                }
            
            ?>
<!-- 
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td>2011/04/25</td>
                </tr>
                 -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>


<?php

require_once 'templates/footer.php';

?>
