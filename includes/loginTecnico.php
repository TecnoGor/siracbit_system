<?php

session_start();

if (!empty($_POST)) {
	if (empty($_POST['loginTecnico']) || empty($_POST['passTecnico'])) {
		echo    '<div class="alert alert-danger d-flex align-items-center" role="alert">
					<i class="bi bi-exclamation-triangle-fill p-1"></i>
					<div>
						Todos los campos son necesarios.
					</div>
				</div>';
	} else {
		require_once 'conn.php';
		$login = $_POST['loginTecnico'];
		$pass = $_POST['passTecnico'];

		$sql = "SELECT * FROM usuarios AS u INNER JOIN rol AS r ON u.rol = r.rol_id WHERE usuario = ? AND u.rol=3";
		$query = $conn->prepare($sql);
		$query->execute(array($login));

		$result = $query->fetch(PDO::FETCH_ASSOC);

		if ($query->rowCount() > 0) {
			if (password_verify($pass, $result['clave'])) {
				$_SESSION['activeTec'] = true;
				$_SESSION['id_usuario'] = $result['usuario_id'];
				$_SESSION['nombreUsuario'] = $result['nombre'];
				$_SESSION['nombre'] = $result['usuario'];
				$_SESSION['rol'] = $result['rol_id'];
				$_SESSION['nombre_rol'] = $result['nombre_rol'];

				echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"></button>Redirigiendo</div>';
			} else {
				echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"></button>Usuario o contraseña incorrectos</div>';
			}
		} else {
			echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"></button>Usuario o contraseña incorrectos</div>';
		}

	}
}

?>