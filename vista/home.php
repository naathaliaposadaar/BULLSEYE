<!DOCTYPE>

<html lan="en">
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/codeFormEmpresa.js"></script>
  <script type="text/javascript" src="js/codeEmpresa.js"></script>
	<title> Registro Empresa</title>
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <link rel="stylesheet" type="text/css" href="../css/tamanioImagenes.css">
<head style="background-color: #138295;">
<div class="row">
<div class="container">
<img src="../imagenes/headerHomeCorregido.jpg" class="mediana" style="border-radius: 6px,6px;">
</div>
</head>
<body style="background-color: #138295;" >
<div class="container">
<nav class="navbar navbar-light bg-faded" style="background-color: #54c3b0;">
  <a class="navbar-brand" href="#" style="color:white;"></a>
  <ul class="nav navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#" style="color:white;"><span class="glyphicon glyphicon-home"></span> Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="listadoProductos.php" style="color:white;">Productos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="listadoEmpresas.php" style="color:white;">Empresas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="inicioSesion.php" style="color:white;"><span class="glyphicon glyphicon-lock"></span> Inicia Sesión</a>
    </li>
  </ul>
</nav>
<ol class="breadcrumb">
  <li class="active">Home</li>
</ol>
</div>
<div class="container">
<div class="row">
  <div class="col-md-8">
  <input type="text" id="txtBuscaProducto" style="width:500px;" placeholder="Búsque su producto aquí..." /><button type="button" id="btnBuscar" class="btn btn-primary " value="Buscar" style="width: 250px;"><span class="glyphicon glyphicon-search"><span id="spanBuscar">   Buscar</span> </span></button>  
  </div>
  <div class="col-md-4">
  <button type="button" id="btnIngresarEmpresa" class="btn btn-warning "  style="width: 250px;"><span class="glyphicon glyphicon-hand-down"><span id="spanBuscar">   Inscribe tu Empresa Aquí</span> </span></button> 
  </div>
  <div>
    
  </div>
</div>
</div>
</body>
</hml>