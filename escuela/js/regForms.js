function regForm1(){
	var user = $('#usuario').val();
	var tRecurso = $('#input1-1').val();
	var lElaboracion = $('#input2-1').val();
	var fElaboracion = $('#input3-1').val();
	var version = $('#input4-1').val();
	var tipoRecurso = $('#input5-1').val();
	var idioma = $('#input6-1').val();
	var tNavegacion = $('#input7-1').val();
	var tGenerador = $('#input1-2').val();
	var nEducacion = $('#input2-2').val();
	var age = $('#input3-2').val();
	var tConexos = $('#input4-2').val();
	var oAreas = $('#input5-2').val();
	var fEducativa = $('#input6-2').val();
	var tArchivo = $('#input1-3').val();
	var tRequerido = $('#input2-3').val();
	var vProcesador = $('#input3-3').val();
	var cMinima = $('#input4-3').val();
	var sizeRecurso = $('#input5-3').val();
	var dPerifericos = $('#input6-3').val();
	var aInternet = $('#input7-3').val();
	var sRequerido = $('#input8-3').val();
	var tHerramienta = $('#input9-3').val();
	var Archivo = $('#input10-3').val();
	var Fuente = $('#input11-3').val();
	var Autor = $('#input1-4').val();
	var Institucion = $('#input2-4').val();
	var nApellidos = $('#input1-5').val();
	var iPertenece = $('#input2-5').val();

	$.ajax({
		url: './includes/regForm1.php',
		method: 'POST',
		data: {
			user:user,
			tRecurso:tRecurso,
			lElaboracion:lElaboracion,
			fElaboracion:fElaboracion,
			version:version,
			tipoRecurso:tipoRecurso,
			idioma:idioma,
			tNavegacion:tNavegacion,
			tGenerador:tGenerador,
			nEducacion:nEducacion,
			age:age,
			tConexos:tConexos,
			oAreas:oAreas,
			fEducativa:fEducativa,
			tArchivo:tArchivo,
			tRequerido:tRequerido,
			vProcesador:vProcesador,
			cMinima:cMinima,
			sizeRecurso:sizeRecurso,
			dPerifericos:dPerifericos,
			aInternet:aInternet,
			sRequerido:sRequerido,
			tHerramienta:tHerramienta,
			Archivo:Archivo,
			Fuente:Fuente,
			Autor:Autor,
			Institucion:Institucion,
			nApellidos:nApellidos,
			iPertenece:iPertenece
		},
		success: function(data){
			$('#msjInsert').html(data);
		}
	})


}

function regForm2(){

	var tRecurso = $('#input1-1').val();
	var lElaboracion = $('#input2-1').val();
	var fElaboracion = $('#input3-1').val();
	var version = $('#input1-2').val();
	var tipoRecurso = $('#input2-2').val();
	var idioma = $('#input3-2').val();
	var tNavegacion = $('#input1-3').val();
	var tGenerador = $('#input2-3').val();
	var nEducacion = $('#input3-3').val();
	var age = $('#input4-3').val();
	var tConexos = $('#input1-4').val();
	var oAreas = $('#input2-4').val();
	var fEducativa = $('#input1-1-4').val();
	var tArchivo = $('#input1-2-4').val();
	var tRequerido = $('#input1-3-4').val();
	var vProcesador = $('#input1-4-4').val();
	var cMinima = $('#input1-5-4').val();
	var sizeRecurso = $('#input1-6-4').val();
	var dPerifericos = $('#input2-1-4').val();
	var aInternet = $('#input2-2-4').val();
	var sRequerido = $('#input2-3-4').val();
	var tHerramienta = $('#input2-4-4').val();
	var Archivo = $('#input2-5-4').val();
	var Fuente = $('#input3-4').val();

	$.ajax({
		url: './includes/regForm2.php',
		method: 'POST',
		data: {
			tRecurso:tRecurso,
			lElaboracion:lElaboracion,
			fElaboracion:fElaboracion,
			version:version,
			tipoRecurso:tipoRecurso,
			idioma:idioma,
			tNavegacion:tNavegacion,
			tGenerador:tGenerador,
			nEducacion:nEducacion,
			age:age,
			tConexos:tConexos,
			oAreas:oAreas,
			fEducativa:fEducativa,
			tArchivo:tArchivo,
			tRequerido:tRequerido,
			vProcesador:vProcesador,
			cMinima:cMinima,
			sizeRecurso:sizeRecurso,
			dPerifericos:dPerifericos,
			aInternet:aInternet,
			sRequerido:sRequerido,
			tHerramienta:tHerramienta,
			Archivo:Archivo,
			Fuente:Fuente
		},
		success: function(data){
			$('#msjInsert').html(data);
		}
	})


}


function regForm3(){

	var tRecurso = $('#input1-1').val();
	var lElaboracion = $('#input2-1').val();
	var fElaboracion = $('#input3-1').val();
	var version = $('#input4-1').val();
	var tipoRecurso = $('#input1-2').val();
	var idioma = $('#input1-1-4').val();
	var tNavegacion = $('#input1-2-4').val();
	var tGenerador = $('#input1-3-4').val();
	var nEducacion = $('#input1-4-4').val();
	var age = $('#input1-5-4').val();
	var tConexos = $('#input1-6-4').val();
	var oAreas = $('#input2-1-4').val();
	var fEducativa = $('#input2-2-4').val();
	var tArchivo = $('#input2-3-4').val();
	var tRequerido = $('#input2-4-4').val();
	var vProcesador = $('#input2-5-4').val();
	var cMinima = $('#inlineCheckbox1').val();
	var sizeRecurso = $('#inlineCheckbox2').val();
	var dPerifericos = $('#inlineCheckbox3').val();
	var aInternet = $('#inlineCheckbox4').val();
	var sRequerido = $('#inlineCheckbox5').val();
	var tHerramienta = $('#inlineCheckbox6').val();
	var Archivo = $('#inlineCheckbox7').val();
	var Fuente = $('#inlineCheckbox8').val();
	var Autor = $('#inlineCheckbox9').val();
	var Institucion = $('#inlineCheckbox10').val();
	var nApellidos = $('#inlineCheckbox11').val();
	var iPertenece = $('#input3-4').val();

	$.ajax({
		url: './includes/regForm3.php',
		method: 'POST',
		data: {
			tRecurso:tRecurso,
			lElaboracion:lElaboracion,
			fElaboracion:fElaboracion,
			version:version,
			tipoRecurso:tipoRecurso,
			idioma:idioma,
			tNavegacion:tNavegacion,
			tGenerador:tGenerador,
			nEducacion:nEducacion,
			age:age,
			tConexos:tConexos,
			oAreas:oAreas,
			fEducativa:fEducativa,
			tArchivo:tArchivo,
			tRequerido:tRequerido,
			vProcesador:vProcesador,
			cMinima:cMinima,
			sizeRecurso:sizeRecurso,
			dPerifericos:dPerifericos,
			aInternet:aInternet,
			sRequerido:sRequerido,
			tHerramienta:tHerramienta,
			Archivo:Archivo,
			Fuente:Fuente,
			Autor:Autor,
			Institucion:Institucion,
			nApellidos:nApellidos,
			iPertenece:iPertenece
		},
		success: function(data){
			$('#msjInsert').html(data);
		}
	})


}


function regForm4(){

	var tRecurso = $('#input1-1').val();
	var lElaboracion = $('#input2-1').val();
	var fElaboracion = $('#input3-1').val();
	var version = $('#input4-1').val();
	var tipoRecurso = $('#input5-1').val();
	var idioma = $('#input3-1').val();
	var tNavegacion = $('#input4-1').val();
	var tGenerador = $('#input5-1').val();
	var nEducacion = $('#input9-1').val();
	var age = $('#input10-1').val();
	var tConexos = $('#input11-1').val();
	var oAreas = $('#input1-1').val();

	$.ajax({
		url: './includes/regForm4.php',
		method: 'POST',
		data: {
			tRecurso:tRecurso,
			lElaboracion:lElaboracion,
			fElaboracion:fElaboracion,
			version:version,
			tipoRecurso:tipoRecurso,
			idioma:idioma,
			tNavegacion:tNavegacion,
			tGenerador:tGenerador,
			nEducacion:nEducacion,
			age:age,
			tConexos:tConexos,
			oAreas:oAreas
		},
		success: function(data){
			$('#msjInsert').html(data);
		}
	})


}


function regForm5(){

	var tRecurso = $('#input1-1').val();
	var lElaboracion = $('#input2-1').val();
	var fElaboracion = $('#input3-1').val();
	var version = $('#input4-1').val();
	var tipoRecurso = $('#input5-1').val();
	var idioma = $('#input1-2').val();
	var tNavegacion = $('#input2-2').val();
	var tGenerador = $('#input3-2').val();
	var nEducacion = $('#input1-3').val();
	var age = $('#input2-3').val();
	var tConexos = $('#input3-3').val();
	var oAreas = $('#input1-4').val();
	var fEducativa = $('#input2-4').val();
	var tArchivo = $('#input3-4').val();

	$.ajax({
		url: './includes/regForm5.php',
		method: 'POST',
		data: {
			tRecurso:tRecurso,
			lElaboracion:lElaboracion,
			fElaboracion:fElaboracion,
			version:version,
			tipoRecurso:tipoRecurso,
			idioma:idioma,
			tNavegacion:tNavegacion,
			tGenerador:tGenerador,
			nEducacion:nEducacion,
			age:age,
			tConexos:tConexos,
			oAreas:oAreas,
			fEducativa:fEducativa,
			tArchivo:tArchivo
		},
		success: function(data){
			$('#msjInsert').html(data);
		}
	})


}
