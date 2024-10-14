<?php

    include_once('conn.php');

    $idusuario = $_POST['usuario_id'];
    $nombre = $_POST['nombre'];
    $usuario = $_POST['user'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $rol = $_POST['rol'];
    $escuela = $_POST['escuela'];
    $estado = $_POST['estado'];

    if(empty($password)) {
        $sqlUpdate = "UPDATE usuarios SET nombre = '$nombre', usuario = '$usuario', rol = '$rol', estado = '$estado', escuelaId = '$escuela' WHERE usuario_id = '$idusuario'";
        $stmtUpdate = $conn->prepare($sqlUpdate);
        $resultUpdate = $stmtUpdate->execute();
            if ($resultUpdate) {
                echo    '<div class="alert alert-success d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            <div>
                                El usuario fue actualizado correctamente.
                            </div>
                        </div>';
            }else {
                echo    '<div class="alert alert-danger d-flex align-items-center" role="alert">
                            <i class="bi bi-exclamation-triangle-fill p-1"></i>
                            <div>
                                Error al actualizar el usuario.
                            </div>
                        </div>';
            }

    }else {
        $sqlUpdate = "UPDATE usuarios SET nombre = '$nombre', usuario = '$usuario', clave = '$password', rol = '$rol', estado = '$estado', escuelaId = '$escuela' WHERE usuario_id = '$idusuario'";
        $stmtUpdate = $conn->prepare($sqlUpdate);
        $resultUpdate = $stmtUpdate->execute();
            if ($resultUpdate) {
                echo    '<div class="alert alert-success d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            <div>
                                El usuario fue actualizado correctamente.
                            </div>
                        </div>';
            }else {
                echo    '<div class="alert alert-danger d-flex align-items-center" role="alert">
                            <i class="bi bi-exclamation-triangle-fill p-1"></i>
                            <div>
                                Error al actualizar el usuario.
                            </div>
                        </div>';
            }
    }

?>