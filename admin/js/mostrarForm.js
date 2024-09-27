// Funciones para la creacion de recaudos

function showForm1(){

	$.get('./forms/form1.php', function(mensaje,estado){

		document.getElementById('formsRecaudos').innerHTML=mensaje;

	})
}

function showForm2(){

	$.get('./forms/form2.php', function(mensaje,estado){

		document.getElementById('formsRecaudos').innerHTML=mensaje;

	})
}

function showForm3(){

	$.get('./forms/form3.php', function(mensaje,estado){

		document.getElementById('formsRecaudos').innerHTML=mensaje;

	})
}

function showForm4(){

	$.get('./forms/form4.php', function(mensaje,estado){

		document.getElementById('formsRecaudos').innerHTML=mensaje;

	})
}

function showForm5(){

	$.get('./forms/form5.php', function(mensaje,estado){

		document.getElementById('formsRecaudos').innerHTML=mensaje;

	})
}

function showForm6(){

	$.get('./forms/form6.php', function(mensaje,estado){

		document.getElementById('formsRecaudos').innerHTML=mensaje;

	})
}

// Funciones para la creacion de Usuarios
function listUsers(){
	$.get('./templates/usersList.php', function(mensaje, estado){
		document.getElementById('formsRecaudos').innerHTML=mensaje;
	})
}

function modalAddUser(){
	$('#modalAddUser').modal('show');
}

function verifyPassword(){
	var password = document.getElementById('password').value;
	var confirmPassword = document.getElementById('confirmPassword').value;
	var text = document.getElementById('textConfirm');

	if (password != confirmPassword) {
		text.textContent="Las contraseñas no son iguales.";
	}
	if (password == confirmPassword){
		text.textContent = "";
	}
}

function addUser(){
	var listado = document.getElementById('tableUsers');
	var nombre = document.getElementById('nameUser').value;
	var user = document.getElementById('user').value;
	var password = document.getElementById('password').value;
	var rol = document.getElementById('rol').value;
	var estado = document.getElementById('estado').value;

	$.ajax({
		url: './includes/addUser.php',
		method: 'POST',
		data: {
			nombre: nombre,
			user: user,
			password: password,
			rol: rol,
			estado: estado
		},
		success: function(data){
			$('#alertStatus').html(data);
			listUsers.reload();
		}

	})
}