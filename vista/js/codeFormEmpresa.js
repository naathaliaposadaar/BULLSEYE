$(document).ready(ini);

function ini(){
	$("#btnIngresarEmpresa").click(enviarDatos);
}

function enviaFormEmpresa(){
	document.location.href="../insertarEmpresa.php";
}

function enviarDatos(){
	var nombre_empresa = $("#txtNombreEmpresa").val();
	var rut_empresa = $("#txtRutEmpresa").val();
	var email_empresa = $("txtEmail").val();
        var direccion_empresa = $("txtDireccionEmpresa").val();
        var tipo_empresa = $("ddlTipoEmpresa").val();
        var razon_social = $("txtRazonSocial").val();
        var descripcion_empresa = $("txtDescripcionEmpresa").val();
        var categoria_empresa=$("ddlCategoriaEmpresa").val();
        var region_desc= $("ddlRegionEmpresa").val();      
	//console.log(usuario);

	$.ajax({
		url:"insertar.php",
		success: function(result){
			//alert(result);
			if(result =="true"){
				$("#resultado").html("se ha registrado el empresa correctamente c:");
			}else{
				$("#resultado").html("no se ha podido registrar la empresa correctamente :c");
			}
		},
		data:{
			nombre_empresa:nombre_empresa,
			rut_empresa:rut_empresa,
                        email_empresa:email_empresa,
                        direccion_empresa:direccion_empresa,
                        tipo_empresa:tipo_empresa,
                        razon_social:razon_social,
                        descripcion_empresa:descripcion_empresa,
                        categoria_empresa:categoria_empresa,
                        region_desc:region_desc
                        
		},
		type:"GET"
	});
}

