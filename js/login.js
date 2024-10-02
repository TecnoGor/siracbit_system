$(document).ready(function(){
	$('#loginAdmin').on('click', function(){
		loginAdmin();
	});

	$('#loginEscuela').on('click', function(){
		loginEscuela();
	});

})

function loginAdmin() {
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
	var loginProfesor = $('#userProfesor').val();
	var passProfesor = $('#passwordProfesor').val();

	$.ajax({
		url: './includes/loginEscuela.php',
		method: 'POST',
		data: {
			loginProfesor:loginProfesor,
			passProfesor:passProfesor
		},
		success: function(data) {
			$('#msjProfesor').html(data);

			if (data.indexOf('Redirigiendo') >= 0) {
				window.location = 'escuela/';
			}
		}
	})
}