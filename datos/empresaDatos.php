<?php 
include "../entidades/empresa.php";
include "conexion.php";

class empresaDatos{
	function insertarEmpresa($nombre_empresa,$rut_empresa,$email_empresa,$direccion_empresa,$tipo_empresa,$id_region,$razon_social){
		$cnn = new conexion();
		$con = $cnn->conectar();

		$empresa = new empresa();
		$empresa->nombre_empresa=$nombre_empresa;
		$empresa->rut_empresa=$rut_empresa;
		$empresa->email_empresa=$email_empresa;
		$empresa->direccion_empresa = $direccion_empresa;
		$empresa->tipo_empresa =$tipo_empresa;
		$empresa->id_region=$id_region;
		$empresa->razon_social=$razon_social;
		mysqli_select_db($con,"solostock");// nombre de database
		$sql = "INSERT INTO empresa(nombre_empresa,rut_empresa,email_empresa,direccion_empresa,tipo_empresa,id_region,razon_social) VALUES('".$empresa->nombre_empresa."', '".$empresa->rut_empresa."','".$empresa->email_empresa."','".$empresa->direccion_empresa."','".$empresa->tipo_empresa."','".$empresa->id_region."','".$empresa->razon_social."')";
			
		if(mysqli_query($con,$sql)){
			return true;
		}else{
			return false;
		}

		mysqli_close($con);		
	}

	function validar($nombre_empresa,$rut_empresa){
		$cnn = new conexion();
		$con = $cnn->conectar();

		$empresa = new empresa();
		$empresa->nombre_empresa=$nombre_empresa;
		$empresa->rut_empresa=$rut_empresa;
		mysqli_select_db($con,"solostock");// nombre de database
		$sql = " SELECT * FROM EMPRESA WHERE nombre_empresa='".$empresa->nombre_empresa."' AND rut_empresa='".$empresa->rut_empresa."'";

		$consulta = mysqli_query($con,$sql);
		$fila = mysqli_fetch_array($consulta);
		if($fila>0){
			if($fila["nombre_empresa"] == $empresa->nombre_empresa && $fila["rut_empresa"] == $empresa->rut_empresa){
				return true;
			}			
		}else{
			return false;
		}

	}


	function eliminarEmpresa($nombre_empresa,$rut_empresa){
		$cnn = new conexion();
		$con = $cnn->conectar();

		$empresa = new empresa();
		$empresa->nombre_empresa=$nombre_empresa;
		$empresa->password=$rut_empresa;
		mysqli_select_db($con,"solostock");// nombre de database
		$sql = " DELETE FROM EMPRESA WHERE nombre_empresa='".$empresa->nombre_empresa."' AND rut_empresa='".$empresa->rut_empresa."'";
			
		if(mysqli_query($con,$sql)){
			return true;
		}else{
			return false;
		}

		mysqli_close($con);		
	}



	function actualizaEmpresa($nombre_empresa,$rut_empresa){
		$cnn = new conexion();
		$con = $cnn->conectar();

		$empresa = new empresa();
		$empresa->nombre_empresa=$nombre_empresa;
		$empresa->rut_empresa=$rut_empresa;
		mysqli_select_db($con,"solostock");// nombre de database
		$sql = " UPDATE  EMPRESA SET nombre_empresa='".$empresa->nombre_empresa."' WHERE rut_empresa='".$empresa->rut_empresa."'";
			
		if(mysqli_query($con,$sql)){
			return true;
		}else{
			return false;
		}

		mysqli_close($con);		
	}
}

//declaramos nuevo objeto

$obj = new empresaDatos();
if($obj->insertarEmpresa("Falabella","77.261.280-K")){
	echo "se insertó empresa :D";
}else{
	echo "no pasó nah :/";
}





?>