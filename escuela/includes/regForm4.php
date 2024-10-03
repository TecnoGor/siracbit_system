<?php


if(!empty($_POST)) {
	if(empty($_POST['user']) || empty($_POST['tRecurso']) || empty($_POST['lElaboracion']) || empty($_POST['fElaboracion']) || empty($_POST['version']) || empty($_POST['tipoRecurso']) || empty($_POST['idioma']) || empty($_POST['tNavegacion']) || empty($_POST['tGenerador']) || empty($_POST['nEducacion']) || empty($_POST['age']) || empty($_POST['tConexos']) || empty($_POST['oAreas'])) {

		echo '<div class="alert alert-danger" id="alerta"><button type="button" class="btn-close" aria-label="Close" for="alerta"></button>Todos los campos son necesarios</div>';

	} else {
		require_once('conn.php');
		$user = $_POST['user'];
		$nRecaudo = "Planificacion del Encuentro Formativo";
		$tRecurso = $_POST['tRecurso'];
		$lElaboracion = $_POST['lElaboracion'];
		$fElaboracion = $_POST['fElaboracion'];
		$version = $_POST['version'];
		$tipoRecurso = $_POST['tipoRecurso'];
		$idioma = $_POST['idioma'];
		$tNavegacion = $_POST['tNavegacion'];
		$tGenerador = $_POST['tGenerador'];
		$nEducacion = $_POST['nEducacion'];
		$age = $_POST['age'];
		$tConexos = $_POST['tConexos'];
		$oAreas = $_POST['oAreas'];

		$sql = "INSERT INTO eformativo(usuario, nRecaudo, nEncuentro, tEncuentro, responsable, participantes, duracion, modalidad, fInicio, fCierre, dirigido, objetivos, ejeTematico, aAprendizaje) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
		$stmt = $conn->prepare($sql);
		$stmt->execute([$user, $nRecaudo, $tRecurso, $lElaboracion, $fElaboracion, $version, $tipoRecurso, $idioma, $tNavegacion, $tGenerador, $nEducacion, $age, $tConexos, $oAreas]);

		echo '<div class="alert alert-success"><button type="button" class="btn-close" data-dismiss="alert"></button>El registro se completo exitosamente</div>';


	}
}

?>