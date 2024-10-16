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
      <div class="tile" id="dashboard">
        <div class="tile-body">
          <div class="table-responsive">
          <?php 
            $nombre = $_SESSION['nombre'];
            echo '<input type="hidden" id="nombre" value="'.$nombre.'">';
          ?>
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
                $stmt = $conn->query($sql);
                $lista = $stmt->fetchAll(PDO::FETCH_OBJ);

                foreach ($lista as $recaudos) {

                  $i=1;

              ?>

              <tr>
                <td> <?php echo $i; $i++;?> </td>
                <td><?php echo $recaudos->cuser; ?></td>
                <td>Caracterizacion</td>
                <!-- <td> <?php echo $recaudos->cid; ?> </td> -->
                <td> <?php echo $recaudos->cfr; ?> </td>
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

    <div id="formsRecaudos">
            
  </div>

  </div>

  
</main>

<?php

require_once 'templates/footer.php';

?>