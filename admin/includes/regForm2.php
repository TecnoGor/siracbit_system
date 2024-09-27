<?php


if(!empty($_POST)) {
	if(empty($_POST['tRecurso']) || empty($_POST['lElaboracion']) || empty($_POST['fElaboracion']) || empty($_POST['version']) || empty($_POST['tipoRecurso']) || empty($_POST['idioma']) || empty($_POST['tNavegacion']) || empty($_POST['tGenerador']) || empty($_POST['nEducacion']) || empty($_POST['age']) || empty($_POST['tConexos']) || empty($_POST['oAreas']) || empty($_POST['fEducativa']) || empty($_POST['tArchivo']) || empty($_POST['tRequerido']) || empty($_POST['vProcesador']) || empty($_POST['cMinima']) || empty($_POST['sizeRecurso']) || empty($_POST['dPerifericos']) || empty($_POST['aInternet']) || empty($_POST['sRequerido']) || empty($_POST['tHerramienta']) || empty($_POST['Archivo']) || empty($_POST['Fuente'])) {

		echo '<div class="alert alert-danger" id="alerta"><button type="button" class="btn-close" aria-label="Close" for="alerta"></button>Todos los campos son necesarios</div>';

	} else {
		require_once('conn.php');

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
		$fEducativa = $_POST['fEducativa'];
		$tArchivo = $_POST['tArchivo'];
		$tRequerido = $_POST['tRequerido'];
		$vProcesador = $_POST['vProcesador'];
		$cMinima = $_POST['cMinima'];
		$sizeRecurso = $_POST['sizeRecurso'];
		$dPerifericos = $_POST['dPerifericos'];
		$aInternet = $_POST['aInternet'];
		$sRequerido = $_POST['sRequerido'];
		$tHerramienta = $_POST['tHerramienta'];
		$Archivo = $_POST['Archivo'];
		$Fuente = $_POST['Fuente'];

		$sql = "INSERT INTO act_formativas(estado, municipio, parroquia, cedula, nombres, apellidos, nActividad, tActividad, fInicio, fCierre, especial, inicial, pPrimero, pSegundo, pTercero, pCuarto, pQuinto, pSexto, tPrimero, tSegundo, tTercero, tCuarto, tQuinto, docente) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
		$stmt = $conn->prepare($sql);
		$stmt->execute([$tRecurso, $lElaboracion, $fElaboracion, $version, $tipoRecurso, $idioma, $tNavegacion, $tGenerador, $nEducacion, $age, $tConexos, $oAreas, $fEducativa, $tArchivo, $tRequerido, $vProcesador, $cMinima, $sizeRecurso, $dPerifericos, $aInternet, $sRequerido, $tHerramienta, $Archivo, $Fuente]);

		echo '<div class="alert alert-success"><button type="button" class="btn-close" data-dismiss="alert"></button>El registro se completo exitosamente</div>';


	}
}

?>