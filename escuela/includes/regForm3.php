<?php

if(!empty($_POST)) {
	if(empty($_POST['user']) || empty($_POST['tRecurso']) || empty($_POST['lElaboracion']) || empty($_POST['fElaboracion']) || empty($_POST['version']) || empty($_POST['tipoRecurso']) || empty($_POST['idioma']) || empty($_POST['tNavegacion']) || empty($_POST['tGenerador']) || empty($_POST['nEducacion']) || empty($_POST['age']) || empty($_POST['tConexos']) || empty($_POST['oAreas']) || empty($_POST['fEducativa']) || empty($_POST['tArchivo']) || empty($_POST['tRequerido']) || empty($_POST['vProcesador']) || empty($_POST['iPertenece'])) {

		echo '<div class="alert alert-danger" id="alerta"><button type="button" class="btn-close" aria-label="Close" for="alerta"></button>Todos los campos son necesarios</div>';

	} else {
		require_once('conn.php');
		$user = $_POST['user'];
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
		$Autor = $_POST['Autor'];
		$Institucion = $_POST['Institucion'];
		$nApellidos = $_POST['nApellidos'];
		$iPertenece = $_POST['iPertenece'];



		$sql = "INSERT INTO r_educativos(usuario, estado, rEducativo, tRecurso, fElaboracion, inicial, pPrimero, pSegundo, pTercero, pCuarto, pQuinto, pSexto, tPrimero, tSegundo, tTercero, tCuarto, tQuinto, inlineCheckbox1, inlineCheckbox2, inlineCheckbox3, inlineCheckbox4, inlineCheckbox5, inlineCheckbox6, inlineCheckbox7, inlineCheckbox8, inlineCheckbox9, inlineCheckbox10, inlineCheckbox11, docente) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
		$stmt = $conn->prepare($sql);
		$stmt->execute([$user, $tRecurso, $lElaboracion, $fElaboracion, $version, $tipoRecurso, $idioma, $tNavegacion, $tGenerador, $nEducacion, $age, $tConexos, $oAreas, $fEducativa, $tArchivo, $tRequerido, $vProcesador, $cMinima, $sizeRecurso, $dPerifericos, $aInternet, $sRequerido, $tHerramienta, $Archivo, $Fuente, $Autor, $Institucion, $nApellidos, $iPertenece]);

		echo '<div class="alert alert-success"><button type="button" class="btn-close" data-dismiss="alert"></button>El registro se completo exitosamente</div>';


	}
}

?>