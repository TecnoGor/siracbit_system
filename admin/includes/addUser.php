<?php

    if(empty($_POST['nombre']) || empty($_POST['user']) || empty($_POST['password']) || empty($_POST['rol']) || empty($_POST['dea'])){
        echo    '<div class="alert alert-danger d-flex align-items-center" role="alert">
                    <i class="bi bi-exclamation-triangle-fill p-1"></i>
                    <div>
                          Es necesario Rellenar todos los campos.
                    </div>
                </div>';
    } else {
        include('conn.php');

        $nombre = $_POST['nombre'];
        $usuario = $_POST['user'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $rol = $_POST['rol'];
        $estado = $_POST['estado'];
        $dea = $_POST['dea'];


        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if($result > 0){
            echo    '<div class="alert alert-danger d-flex align-items-center" role="alert">
                        <i class="bi bi-exclamation-triangle-fill p-1">  </i>
                        <div>
                              El Usuario ya existe.
                        </div>
                    </div>';
        } else {

            $sqlReq = "SELECT * FROM escuelas WHERE dea = '$dea';";
            $stmtReq = $conn->prepare($sqlReq);
            $stmtReq->execute();
            $resultReq = $stmtReq->fetchAll(PDO::FETCH_ASSOC);
            if($resultReq > 0){
                foreach($resultReq as $idSchool){
                    $deaId = $idSchool['id'];
                    $sqlInsert = "INSERT INTO usuarios(nombre, usuario, clave, rol, estado, escuelaId) VALUES ('$nombre', '$usuario', '$password', '$rol', '$estado', '$deaId')";
                    $stmtInsert = $conn->prepare($sqlInsert);
                    $resultInsert = $stmtInsert->execute();

                    if($resultInsert){
                        echo    '<div class="alert alert-success d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                    <div>
                                        El usuario fue agregado correctamente.
                                    </div>
                                </div>';
                    }else {
                        echo    '<div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <i class="bi bi-exclamation-triangle-fill p-1"></i>
                                    <div>
                                        Error al crear el usuario.
                                    </div>
                                </div>';
                    }

                }

                
            }
              
        }


    }

?>