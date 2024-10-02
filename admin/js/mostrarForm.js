// Funciones para la creacion de recaudos

function showForm1(){

	$.get('./templates/forms/form1.php', function(mensaje,estado){

		document.getElementById('formsRecaudos').innerHTML=mensaje;
		document.getElementById('dashboard').style = "display: none";


	})
}

function showForm2(){

	$.get('./templates/forms/form2.php', function(mensaje,estado){

		document.getElementById('formsRecaudos').innerHTML=mensaje;
		document.getElementById('dashboard').style = "display: none";


	})
}

function showForm3(){

	$.get('./templates/forms/form3.php', function(mensaje,estado){

		document.getElementById('formsRecaudos').innerHTML=mensaje;
		document.getElementById('dashboard').style = "display: none";


	})
}

function showForm4(){

	$.get('./templates/forms/form4.php', function(mensaje,estado){

		document.getElementById('formsRecaudos').innerHTML=mensaje;
		document.getElementById('dashboard').style = "display: none";


	})
}

function showForm5(){

	$.get('./templates/forms/form5.php', function(mensaje,estado){

		document.getElementById('formsRecaudos').innerHTML=mensaje;
		document.getElementById('dashboard').style = "display: none";


	})
}

function showForm6(){

	$.get('./templates/forms/form6.php', function(mensaje,estado){

		document.getElementById('formsRecaudos').innerHTML=mensaje;
		document.getElementById('dashboard').style = "display: none";


	})
}

// Funciones para la creacion de Usuarios
function listUsers(){
	$.get('./templates/usersList.php', function(mensaje, estado){
		document.getElementById('formsRecaudos').innerHTML=mensaje;
		document.getElementById('dashboard').style = "display: none";

	})
}

function modalAddUser(){
	$('#modalAddUser').modal('show');
}

function modalEditUser(a){
	var id_usuario = a;

	$.ajax({
		url: './includes/requestUsers.php',
		method: 'POST',
		data: {
			id: id_usuario
		},
		success: function(data){
			
			var data = JSON.parse(data);

			if(data.status){
				document.querySelector('#idOculto').value = data.data.usuario_id;
				document.querySelector('#nameUserEdit').value = data.data.nombre;
				document.querySelector('#userEdit').value = data.data.usuario;
				document.querySelector('#rolEdit').value = data.data.rol;
				document.querySelector('#estadoEdit').value = data.data.estado;

				$('#modalEditUser').modal('show');

			}else {
				swal('Atencion',data.msg,'error');
			}
		}
	})
}

function editUser() {
	var idusuario = document.getElementById('idOculto').value;	
	var nombre = document.getElementById('nameUserEdit').value;
	var user = document.getElementById('userEdit').value;
	var password = document.getElementById('passwordEdit').value;
	var rol = document.getElementById('rolEdit').value;
	var estado = document.getElementById('estadoEdit').value;
	var tableUsuarios = document.getElementById('tableUsers');

	$.ajax({
		url: './includes/editUsers.php',
		method: 'POST',
		data: {
			usuario_id: idusuario,
			nombre: nombre,
			user: user,
			password: password,
			rol: rol,
			estado: estado
		},
		success: function(data){
			$('#alertStatusEdit').html(data);
		}
	})

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
		}

	})
}