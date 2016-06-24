$(document).ready(ini);

function ini(){
	$("#btnIngresarEmpresa").click(enviaFormEmpresa);
}


function enviaFormEmpresa{
	document.location.href="../insertarEmpresa.php";
}