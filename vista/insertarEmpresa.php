<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/codeFormEmpresa.js"></script>
	<title> Registro Empresa</title>
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <link rel="stylesheet" type="text/css" href="../css/formularioEmpresa.css">

</head>
<body  style="padding-top:0; background-color: #eee">
<img src="../imagenes/headerOtherPages.jpg" class="headerOtherPages" style="border-radius: 6px,6px;">
    <!-- Barra de Navegacion -->
<nav class="navbar navbar-light bg-faded" style="background-color: #54c3b0;">
  <a class="navbar-brand" href="#" style="color:white;"></a>
  <ul class="nav navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="home.php" style="color:white;"><span class="glyphicon glyphicon-home"></span> Home </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="listadoProductos.php" style="color:white;">Productos<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="listadoEmpresas.php" style="color:white;">Empresas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="inicioSesion.php" style="color:white;"><span class="glyphicon glyphicon-lock"></span> Inicia Sesión</a>
    </li>
  </ul>
</nav>
<!-- BreadCrumb -->
<ol class="breadcrumb">
<li><a href="home.php">Home</a></li>
  <li class="active">Ingreso Empresas</li>
</ol>
</div>

    <!-- Page Content -->
 
<!--   <form id="formEmpresa">-->
   <div class="container">
   <h3>Formulario Empresa <span class="glyphicon glyphicon-user"></span></h3>
  <fieldset class="form-group">
    <label for="txtEmail">Correo Electrónico</label>
    <input type="text" class="form-control" id="txtEmail" placeholder="Ingrese Email">
    <small class="text-muted" >No compartiremos nunca su correo electrónico con ninguna otra persona.</small>
  </fieldset>
  <fieldset class="form-group">
    <label for="txtNombreEmpresa">Nombre Empresa</label>
    <input type="text" class="form-control" id="txtNombreEmpresa" placeholder="Ingrese Nombre Empresa">
  </fieldset>
   <fieldset class="form-group">
    <label for="txtDireccionEmpresa">Dirección Empresa:</label>
    <input type="text" class="form-control" id="txtDireccionEmpresa" placeholder="Ingrese Direccion de Empresa">
  </fieldset>
    <fieldset class="form-group">
    <label for="txtRutEmpresa">Rut Empresa</label>
    <input type="text" class="form-control" id="txtRutEmpresa" placeholder="17.812.895-7">
  </fieldset>
   <fieldset class="form-group">
    <label for="txtRazonSocial">Razón Social</label>
    <input type="text" class="form-control" id="txtRazonSocial" placeholder="Sólo Stock">
  </fieldset>
  <fieldset class="form-group">
    <label for="">Tipo Empresa</label>
    <select class="form-control" id="ddlTipoEmpresa">
      <option value="Unipersonal">Unipersonal</option>
      <option value="Sociedad Colectiva">Sociedad Colectiva</option>
      <option value="Cooperativa">Cooperativa</option>
      <option value="Comanditarias">Comanditarias</option>
      <option value="Sociedad de Responsabilidad Limitada">Sociedad de Responsabilidad Limitada</option>
      <option value="Sociedad Anónima">Sociedad Anónima</option>
    </select>
  </fieldset>
   <fieldset class="form-group">
    <label for="">Categoría Empresa</label>
    <select class="form-control" id="ddlCategoriaEmpresa">
      <option value="AgroAlimentaria">AgroAlimentaria</option>
      <option value="Ocio">Ocio</option>
      <option value="Hogar">Hogar</option>
      <option value="Industria">Industria</option>
      <option value="Tecnología y equipamento">Tecnología y equipamento</option>
      <option value="Salud, moda y belleza">Salud, moda y belleza</option>
    </select>
  </fieldset>
   <fieldset class="form-group">
    <label for="">Region</label>
    <select class="form-control" id="ddlRegionEmpresa">
      <option value="1">I - Tarapacá</option>
      <option value="2">II - Antofagasta</option>
      <option value="3">III - Atacama</option>
      <option value="4">IV - Coquimbo</option>
      <option value="5">V - Valparaíso</option>
      <option value="6">VI - O'Higgins</option>
      <option value="7">VII - Maule</option>
      <option value="8">VIII - Biobío</option>
      <option value="9">IX - Araucanía</option>
      <option value="14">XIV Los Ríos</option>
      <option value="10">X Los Lagos</option>
      <option value="11">XI - Aysén</option>
      <option value="12">XII - Magallanes</option>
      <option value="13">RM - Metropolitana de Santiago</option>
    </select>
  </fieldset>
  <fieldset class="form-group">
    <label for="txtDescripcionEmpresa">Descripción de la Empresa</label>
    <textarea class="form-control" id="txtDescripcionEmpresa" rows="3"></textarea>
  </fieldset>
<!--  <fieldset class="form-group">
    <label for="imagenCorporativa">Imágen Corporativa</label>
    <input type="file" class="form-control-file" id="imagenCorporativa">
    <small class="text-muted">sube imágen del logo de tu empresa para poder indexarla a nuestro listado de empresas </small>
  </fieldset>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
      Utilizaré esta cuenta para vender productos.
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Utilizaré esta cuenta para comprar productos.
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" >
      Utilizaré esta cuenta para comprar y vender productos.
    </label>
  </div>-->
  <button type="button" class="btn btn-success" id="btnIngresarEmpresa">Agregar</button>
  </div>
<!--       <form id="contacto">
           <h1>Datos de Contacto</h1>
    <fieldset class="form-group">
    <label for="txtNombreContacto">Nombre</label>
    <input type="text" class="form-control" id="txtNombreContacto" placeholder="Ingrese Nombre Contacto">
  </fieldset>-->
          
<!--    </form>
       -->

     <div class="container" id="resultado"><div>
</body>
</html>