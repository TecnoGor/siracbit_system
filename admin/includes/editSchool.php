<?php

    include('conn.php');

    $idPlantel = $_POST['id'];
    $plantel = $_POST['nombre'];
    $dea = $_POST['codeDEA'];
    $direccion = $_POST['direccion'];
    $nivel = $_POST['modalidad'];
    $nivelModificado = preg_replace('/[\[\]\'\"]/i', '', str_replace(",", " - ", $nivel));
    $estatus = $_POST['estatus'];

    if ($nivelModificado == '' || empty($nivelModificado)) {
        $sqlUpdate1 = "UPDATE escuelas SET plantel = '$plantel', dea = '$dea', direccion = '$direccion', estatus = '$estatus' WHERE id = $idPlantel";
        $stmt1 = $conn->prepare($sqlUpdate1);
        $result1 = $stmt1->execute();
        if ($result1) {
            echo    '<div class="alert alert-success d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            <div>
                                La escuela fue actualizada correctamente.
                            </div>
                        </div>';
        }else {
            echo    '<div class="alert alert-danger d-flex align-items-center" role="alert">
                            <i class="bi bi-exclamation-triangle-fill p-1"></i>
                            <div>
                                Error al actualizar la escuela.
                            </div>
                        </div>';
        }
    } else {
        

        $sqlUpdate2 = "UPDATE escuelas SET plantel = '$plantel', dea = '$dea', direccion = '$direccion', nivel = '$nivelModificado', estatus = '$estatus' WHERE id = '$idPlantel'";
        $stmt2 = $conn->prepare($sqlUpdate2);
        $result2 = $stmt2->execute();
        if ($result2) {
            echo    '<div class="alert alert-success d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            <div>
                                La escuela fue actualizada correctamente con.
                            </div>
                        </div>';
        }else {
            echo    '<div class="alert alert-danger d-flex align-items-center" role="alert">
                            <i class="bi bi-exclamation-triangle-fill p-1"></i>
                            <div>
                                Error al actualizar la escuela.
                            </div>
                        </div>';
        }
    }


?>