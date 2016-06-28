<!DOCTYPE html>
<html lang="en">
<head>
    <img src="../imagenes/headerOtherPages.jpg" class="headerOtherPages" style="border-radius: 6px,6px;">
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/code.js"></script>
	<title> Inicio de Sesión</title>
  <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css" href="../css/tamanioImagenes.css">
</head>
<body style="padding-top:0;">

    <!-- Barra de Navegacion -->
<nav class="navbar navbar-light bg-faded" style="background-color: #54c3b0;">
  <a class="navbar-brand" href="home.php" style="color:white;"></a>
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
      <a class="nav-link" href="inicioSesion.php" style="color:white;" ><span class="glyphicon glyphicon-lock"></span> Inicia Sesión</a>
    </li>
  </ul>
</nav>
<!-- BreadCrumb -->
<ol class="breadcrumb">
<li><a href="home.php">Home</a></li>
  <li class="active">Inicio Sesión</li>
</ol>
</div>

  <div class="container">
  	 <div class="form-signin">
          <h2 class="form-signin-heading" ><span class="glyphicon glyphicon-lock"></span>  Ingrese Datos</h2>
          <label for="lblUsername" class="sr-only">Username</label>
          <input type="text" id="txtUsername" class="form-control" placeholder="Username" required autofocus>
          <label for="lblPassword" class="sr-only">Password</label>
          <input type="password" id="txtPassword" class="form-control" placeholder="Password" required>
          <button class="btn btn-lg btn-primary btn-block" id="btnIngreso"type="button">Ingresar</button>

      </div>
    </div>
     <div class="container" id="resultado"><div>
</body>
</html></hml>