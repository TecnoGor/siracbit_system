$(document).ready(function(){
	$('#loginAdmin').on('click', function(){
		
		loginAdmin();
	});

	$('#loginEscuela').on('click', function(){
		loginEscuela();
	});

	$('#loginTecnico').on('click', function(){
		loginTecnico();
	})

	$('#loginProfesor').on('click', function(){
		loginProfesor();
	})


})

function loginAdmin() {
	console.log("Funciona");
	var login = $('#user').val();
	var pass = $('#password').val();

	$.ajax({
		url: './includes/loginAdmin.php',
		method: 'POST',
		data: {
			login:login,
			pass:pass
		},
		success: function(data) {
			$('#msjAdmin').html(data);

			if (data.indexOf('Redirigiendo') >= 0) {
				window.location = 'admin/';
			}
		}
	})
}

function loginEscuela() {
	var loginEscuela = $('#userEscuela').val();
	var passEscuela = $('#passwordEscuela').val();

	$.ajax({
		url: './includes/loginEscuela.php',
		method: 'POST',
		data: {
			loginEscuela:loginEscuela,
			passEscuela:passEscuela
		},
		success: function(data) {
			$('#msjProfesor').html(data);

			if (data.indexOf('Redirigiendo') >= 0) {
				window.location = 'escuela/';
			}
		}
	})
}

function loginProfesor() {
	var loginProfesor = $('#userProfesor').val();
	var passProfesor = $('#passwordProfesor').val();

	$.ajax({
		url: './includes/loginProfesor.php',
		method: 'POST',
		data: {
			loginProfesor:loginProfesor,
			passProfesor:passProfesor
		},
		success: function(data) {
			$('#msjProfesor').html(data);

			if (data.indexOf('Redirigiendo') >= 0) {
				window.location = 'profesor/';
			}
		}
	})
}

function loginTecnico() {
	var loginTecnico = $('#userTecnico').val();
	var passTecnico = $('#passwordTecnico').val();

	$.ajax({
		url: './includes/loginTecnico.php',
		method: 'POST',
		data: {
			loginTecnico:loginTecnico,
			passTecnico:passTecnico
		},
		success: function(data) {
			$('#msjProfesor').html(data);

			if (data.indexOf('Redirigiendo') >= 0) {
				window.location = 'tecnico/';
			}
		}
	})
}