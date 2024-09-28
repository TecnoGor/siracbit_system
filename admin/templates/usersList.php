<?php 
    require_once('modals/modalAddUser.php');
    require_once('modals/modalEditUser.php');    
?>

<div class="col-md-12">

    <div class="tile">
        <div class="tile-title-w-btn">
            <h3 class="title">Lista de Usuarios</h3>
            <p><a class="btn btn-primary icon-btn" onclick="modalAddUser()"><i class="bi bi-plus-square"></i>Añadir Usuario</a></p>
        </div>

        <table id="tableUsers" class="table">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nombre y Apellido</th>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 

                    include('../includes/conn.php');

                    $sql = "SELECT * FROM usuarios as u INNER JOIN rol as r ON u.rol = r.rol_id";

                    $stmt = $conn->query($sql);
                    $usuarios = $stmt->fetchAll(PDO::FETCH_OBJ);
                    $i=1;
                    foreach ($usuarios as $usuario) { 
                        echo "<tr>";
                        echo "<td>".$i."</td>";
                        echo '<input type="hidden"'.' value="'.$usuario->usuario_id.'">';
                        echo "<td>".$usuario->nombre."</td>";
                        echo "<td>".$usuario->usuario."</td>";
                        echo "<td>".$usuario->nombre_rol."</td>";
                        echo "<td>". '<div class="btn-group"><a class="btn btn-primary" onclick="modalEditUser('. $usuario->usuario_id .')"><i class="bi bi-pencil-square fs-5"></i></a><a class="btn btn-primary" href="#"><i class="bi bi-trash fs-5"></i></a></div>' ."</td>";
                        $i++;
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
