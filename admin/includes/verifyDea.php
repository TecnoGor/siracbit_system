<?php

    if (empty($_POST['dea'])){
        echo "vacio";
    } else {
        
        include('conn.php');

        $dea = $_POST['dea'];

        $sqlReq = "SELECT * FROM escuelas WHERE dea = '$dea' AND estatus <> 0;";
        $stmtReq = $conn->prepare($sqlReq);
        $stmtReq->execute();
        $resultReq = $stmtReq->fetch(PDO::FETCH_ASSOC);

        if($resultReq > 0){
            echo 'ok';
        } else {
            echo 'error';
        }
    }

?>