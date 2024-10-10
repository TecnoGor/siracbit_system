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
                  <th>Usuario Responsable</th>
                  <th>Recaudo</th>
                  <th>Fecha de Recaudo</th>
                  <th>Acciones</th>
                </tr>

              </thead>

              <tbody>

                <?php
                include('includes/conn.php');

                $sql = "SELECT caracterizacion.id as cid, caracterizacion.usuario as cuser, caracterizacion.fecha_realizacion as cfr FROM caracterizacion;";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $lista = $stmt->fetchAll(PDO::FETCH_OBJ);

                foreach ($lista as $recaudos) {

                  $i=1;

              ?>

              <tr>
                <td> <?php echo $i; $i++;?> </td>
                <td> <?php echo $recaudos->cuser; ?> </td>
                <td>Caracterización</td>
                <td> <?php echo $recaudos->cfr; ?> </td>
                <td>
                  <a class="text-success" href=""><i class="bi bi-pencil-square"></i></a>
                  <a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href=""><i class="bi bi-trash"></i></a>
                </td>
              </tr>


            <?php
                  
                }
            
            ?>

            <?php
                include('includes/conn.php');

                $sql2 = "SELECT act_formativas.id as afid, act_formativas.usuario as afuser, act_formativas.fecha_realizacion as affr FROM act_formativas;";
                $stmt2 = $conn->prepare($sql2);
                $stmt2->execute();
                $lista2 = $stmt2->fetchAll(PDO::FETCH_OBJ);

                foreach ($lista2 as $recaudos2) {

              ?>

              <tr>
                <td> <?php echo $i; $i++;?> </td>
                <td> <?php echo $recaudos2->afuser; ?> </td>
                <td>Actividades Formativas</td>
                <td> <?php echo $recaudos2->affr; ?> </td>
                <td>
                  <a class="text-success" href=""><i class="bi bi-pencil-square"></i></a>
                  <a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href=""><i class="bi bi-trash"></i></a>
                </td>
              </tr>


            <?php
                  
                }
            
            ?>

            <?php
                include('includes/conn.php');

                $sql3 = "SELECT r_educativos.id as rid, r_educativos.usuario as ruser, r_educativos.fecha_realizacion as rfr FROM r_educativos;";
                $stmt3 = $conn->prepare($sql3);
                $stmt3->execute();
                $lista3 = $stmt3->fetchAll(PDO::FETCH_OBJ);

                foreach ($lista3 as $recaudos3) {

              ?>

              <tr>
                <td> <?php echo $i; $i++;?> </td>
                <td> <?php echo $recaudos3->ruser; ?> </td>
                <td>Recursos Educativos</td>
                <td> <?php echo $recaudos3->rfr; ?> </td>
                <td>
                  <a class="text-success" href=""><i class="bi bi-pencil-square"></i></a>
                  <a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href=""><i class="bi bi-trash"></i></a>
                </td>
              </tr>


            <?php
                  
                }
            
            ?>

              <?php
                include('includes/conn.php');

                $sql4 = "SELECT eformativo.id as efid, eformativo.usuario as efuser, eformativo.fecha_realizacion as effr FROM eformativo;";
                $stmt4 = $conn->prepare($sql4);
                $stmt4->execute();
                $lista4 = $stmt4->fetchAll(PDO::FETCH_OBJ);

                foreach ($lista4 as $recaudos4) {

              ?>

              <tr>
                <td> <?php echo $i; $i++;?> </td>
                <td> <?php echo $recaudos4->efuser; ?> </td>
                <td>Planificación del encuentro formativo</td>
                <td> <?php echo $recaudos4->effr; ?> </td>
                <td>
                  <a class="text-success" href=""><i class="bi bi-pencil-square"></i></a>
                  <a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href=""><i class="bi bi-trash"></i></a>
                </td>
              </tr>


            <?php
                  
                }
            
            ?>
            <?php
                include('includes/conn.php');

                $sql5 = "SELECT rfotografico.id as rfid, rfotografico.usuario as rfuser, rfotografico.fecha_realizacion as rffr FROM rfotografico;";
                $stmt5 = $conn->prepare($sql5);
                $stmt5->execute();
                $lista5 = $stmt5->fetchAll(PDO::FETCH_OBJ);

                foreach ($lista5 as $recaudos5) {

              ?>

              <tr>
                <td> <?php echo $i; $i++;?> </td>
                <td> <?php echo $recaudos5->efuser; ?> </td>
                <td>Registro Fotográfico</td>
                <td> <?php echo $recaudos5->effr; ?> </td>
                <td>
                  <a class="text-success" href=""><i class="bi bi-pencil-square"></i></a>
                  <a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href=""><i class="bi bi-trash"></i></a>
                </td>
              </tr>


            <?php
                  
                }
            
            ?>

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
