<?php

    include_once('conn.php');

    $idSchool = $_POST['id'];

    $sql = "SELECT * FROM escuelas WHERE id = $idSchool";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if(empty($result)){
        $response = array('status' => false, 'msg' => 'datos no encontrados');
    } else {
        $response = array('status' => true, 'data' => $result);
    }

    echo json_encode($response,JSON_UNESCAPED_UNICODE);


?>