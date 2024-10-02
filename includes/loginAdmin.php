<?php

session_start();

if (!empty($_POST)) {
	if (empty($_POST['login']) || empty($_POST['pass'])) {
		echo    '<div class="alert alert-danger d-flex align-items-center" role="alert">
                            <i class="bi bi-exclamation-triangle-fill p-1"></i>
                            <div>
                                Todos los campos son necesarios.
                            </div>
                        </div>';
	} else {
		require_once 'conn.php';
		$login = $_POST['login'];
		$pass = $_POST['pass'];

		$sql = "SELECT * FROM usuarios as u INNER JOIN rol as r ON u.rol = r.rol_id WHERE u.usuario = ? AND u.rol = 1";
		$query = $conn->prepare($sql);
		$query->execute(array($login));

		$result = $query->fetch(PDO::FETCH_ASSOC);

		if ($query->rowCount() > 0) {
			if($result['estado'] == 1){
				if (password_verify($pass, $result['clave'])) {
					$_SESSION['active'] = true;
					$_SESSION['id_usuario'] = $result['usuario_id'];
					$_SESSION['nombre'] = $result['usuario'];
					$_SESSION['rol'] = $result['rol_id'];
					$_SESSION['nombre_rol'] = $result['nombre_rol'];
	
					echo '<div class="alert alert-success"><button type="button" class="btn-close" data-dismiss="alert"></button>Redirigiendo</div>';

				}
			} else {
				echo '<div class="alert alert-danger"><button type="button" class="btn-close" data-dismiss="alert"></button>Usuario o contraseña incorrectos</div>';
			}
		} else {
			echo    '<div class="alert alert-danger d-flex align-items-center" role="alert">
                            <i class="bi bi-exclamation-triangle-fill p-1"></i>
                            <div>
                                Usuario o contraseña incorrectos.
                            </div>
                        </div>';
		}

	}
}

?>