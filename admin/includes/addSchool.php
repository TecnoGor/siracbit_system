<?php

    if (empty($_POST['nombre']) || empty($_POST['codeDEA']) || empty($_POST['direccion']) || empty($_POST['modalidad']) || empty($_POST['estatus'])) {
        echo    '<div class="alert alert-danger d-flex align-items-center" role="alert">
                    <i class="bi bi-exclamation-triangle-fill p-1"></i>
                    <div>
                          Es necesario Rellenar todos los campos.
                    </div>
                </div>';
    }else {
        include('conn.php');


        $plantel = $_POST['nombre'];
        $codeDEA = $_POST['codeDEA'];
        $direccion = $_POST['direccion'];
        $datosNivel = $_POST['modalidad'];
        // preg_replace funciona para reemplazar ciertos valores en una cadena pero de manera mas especifica que str_replace

        $nuevo_string = preg_replace('/[\[\]\'\"]/i', '', str_replace(",", " - ", $datosNivel));
        $estatus = $_POST['estatus'];

        $sql = "SELECT * FROM escuelas WHERE plantel = '$plantel' && dea = '$codeDEA';";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);


        if ($result > 0) {
            echo    '<div class="alert alert-danger d-flex align-items-center" role="alert">
                        <i class="bi bi-exclamation-triangle-fill p-1">  </i>
                        <div>
                              La escuela ya fue creada anteriormente.
                        </div>
                    </div>';
        } else {
            $sqlInsert = "INSERT INTO escuelas(plantel, dea, direccion, nivel, estatus) 
                VALUES ('$plantel', '$codeDEA', '$direccion', '$nuevo_string', '$estatus')";
            $stmtInsert = $conn->prepare($sqlInsert);
            $resultInsert = $stmtInsert->execute();
            if ($resultInsert) {
                echo    '<div class="alert alert-success d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                <div>
                                    La escuela fue agregada correctamente.
                                </div>
                            </div>';
            } else {
                echo    '<div class="alert alert-danger d-flex align-items-center" role="alert">
                                <i class="bi bi-exclamation-triangle-fill p-1"></i>
                                <div>
                                    Error al crear la escuela.
                                </div>
                            </div>';
            }
        }
        
        
        
    }


?>