$(document).ready(ini);


function ini(){
	$("#btnRegistrar").click(enviarDatos);
	$("#btnIngreso").click(validar);
	$("#btnIngresarEmpresa").click(enviaFormEmpresa);
}

function enviarDatos(){
	var nombre_empresa = $("#txtNombreEmpresa").val();
	var rut_empresa = $("#txtRutEmpresa").val();
	var email_empresa = $("txtNombreEmpresa").val();

	//console.log(usuario);

	$.ajax({
		url:"insertar.php",
		success: function(result){
			//alert(result);
			if(result =="true\r\n\r\n\r\n\r\n"){
				$("#resultado").html("se ha registrado el usuario correctamente c:");
			}else{
				$("#resultado").html("no se ha podido registrar el usuario correctamente :c");
			}
		},
		data:{
			username:username,
			password:password
		},
		type:"GET"
	});
}

function validar(){
	var username = $("#txtUsername").val();
	var password = $("#txtPassword").val();

	//console.log(usuario);

	$.ajax({
		url:"validar.php",
		success: function(result){
			//alert(result);
			if(result =="true"){
				$("#resultado").html("<div class='alert alert-success' role='alert'><b>Acceso Correcto </b><div>");
				document.location.href="admin.php";
			}else{
				$("#resultado").html("<div class='alert alert-danger' role='alert'><b>Acceso Incorrecto, </b> no se pudo comprobar usuario<div>");
			}
		},
		data:{
			username:username,
			password:password
		},
		type:"POST"
	});
}

//function enviaFormEmpresa{
//	document.location.href="../insertarEmpresa.php";
//}
