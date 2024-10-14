<?php

    if(empty($_POST['id'])){
        echo 'error';
    } else {

        include('conn.php');

        $idSchool = $_POST['id'];
        
        $sqlRequest = "SELECT * FROM usuarios WHERE escuelaId = $idSchool";
        $stmtRequest = $conn->prepare($sqlRequest);
        $stmtRequest->execute();

        $resultRequest = $stmtRequest->fetch(PDO::FETCH_ASSOC);

        if ($resultRequest > 0) {
                $school = $idSchool;
                $sqlDelUsers = "DELETE FROM usuarios WHERE escuelaId = $school";
                $stmtDelUser = $conn->prepare($sqlDelUsers);
                $resultDelUser = $stmtDelUser->execute();

                if ($resultDelUser) {
                    
                    $sqlDelSchool = "DELETE FROM escuelas WHERE id = $idSchool";
                    $stmtDelSchool = $conn->prepare($sqlDelSchool);
                    $resultDelSchool = $stmtDelSchool->execute();

                    if ($resultDelSchool) {
                        echo 'eliminado';
                    } else {
                        echo "error";
                    }

                }
        } else {
            $sqlDelSchool2 = "DELETE FROM escuelas WHERE id = $idSchool";
            $stmtDelSchool2 = $conn->prepare($sqlDelSchool2);
            $resultDelSchool2 = $stmtDelSchool2->execute();

            if ($resultDelSchool2) {
                echo 'eliminado';
            } else {
                echo "error";
            }
        }

    }

?>