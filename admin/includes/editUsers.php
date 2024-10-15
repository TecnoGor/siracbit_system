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
                echo    'ok';
            }else {
                echo    'error';
            }

    }else {
        $sqlUpdate = "UPDATE usuarios SET nombre = '$nombre', usuario = '$usuario', clave = '$password', rol = '$rol', estado = '$estado', escuelaId = '$escuela' WHERE usuario_id = '$idusuario'";
        $stmtUpdate = $conn->prepare($sqlUpdate);
        $resultUpdate = $stmtUpdate->execute();
            if ($resultUpdate) {
                echo    'ok';
            }else {
                echo    'error';
            }
    }

?>