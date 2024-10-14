<?php 
    require_once('modals/modalAddSchool.php');
    require_once('modals/modalEditSchool.php');    
?>

<div class="col-md-12">

    <div class="tile">
        <div class="tile-title-w-btn">
            <h3 class="title">Lista de Usuarios</h3>
            <p><a onclick="listEscuelas()" class="btn btn-primary icon-btn"><i class="bi bi-arrow-clockwise"></i>Actualizar</a>   <a class="btn btn-primary icon-btn" onclick="modalAddSchool()"><i class="bi bi-plus-square"></i>Añadir Escuela</a></p>
        </div>

        <table id="tableUsers" class="table">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Plantel</th>
                    <th>Codigo DEA</th>
                    <th>Nivel / Modalidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 

                    include('../includes/conn.php');

                    $sql = "SELECT * FROM escuelas;";

                    $stmt = $conn->query($sql);
                    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
                    $i=1;
                    foreach ($result as $escuela) { 
                        echo "<tr>";
                        echo "<td>".$i."</td>";
                        echo '<input type="hidden"'.' value="'.$escuela->id.'">';
                        echo "<td>".$escuela->plantel."</td>";
                        echo "<td>".$escuela->dea."</td>";
                        echo "<td>".$escuela->nivel."</td>";
                        echo "<td>". '<div class="btn-group"><a class="btn btn-primary" onclick="modalEditSchool('. $escuela->id .')"><i class="bi bi-pencil-square fs-5"></i></a></div>' ."</td>";
                        $i++;
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
