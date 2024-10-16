<?php

require_once 'templates/header.php';
include('includes/conn.php');

$sqlCount = "SELECT count(*) FROM usuarios;";
$stmtCount = $conn->prepare($sqlCount);
$stmtCount->execute();
$resultCount = $stmtCount->fetch(PDO::FETCH_ASSOC);
?>

<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="bi bi-speedometer"></i> SIRACBIT</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
      <li class="breadcrumb-item"><a href="#">Inicio</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
          
        <div id="dashboard">
          <div class="row">
            <div class="col-md-12 col-lg-3">
              <div class="widget-small primary coloured-icon"><i class="icon bi bi-people fs-1"></i>

                <div class="info">

                  <h4>Usuarios</h4>

                  <p><b><?php echo $resultCount['count(*)'];?></b></p>


                </div>

              </div>

            </div>

          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="tile">
                <h3 class="tile-title">Recaudos </h3>
                <div class="ratio ratio-16x9">
                  <div id="salesChart"></div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="tile">
                <h3 class="tile-title">Support Requests</h3>
                <div class="ratio ratio-16x9">
                  <div id="supportRequestChart"></div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div id="msjInsert">
          
        </div>

         <div id="formsRecaudos">
            
          </div>
        
      </div>
    </div>
  </div>
</main>

<?php

require_once 'templates/footer.php';

?>