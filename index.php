<?php
error_reporting(0);
$user = $_POST['username'];
$pass = $_POST['password'];

$userAdmin = "admin@gmail.com";
$passAdmin = "12345";

if ($user == $userAdmin && $pass == $passAdmin) {
    header("location:home.php");
}else{

    //echo "Ingresaste datos incorrectos";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Proyecto Sistema</title>
</head>
<body>
<div class="container principal">
<div class="titulos">
<h1>Sistema de gestión de proyecto de grados</h1>
<h3>Unidad educativa "Almirante H Nelson"</h3>
</div>

<div class="row g-0 text-center">
  <div class="col-sm-6 col-md-6">
  <form method="post" action="index.php">
        
        <div class="container">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Usuario</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" name="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name ="password">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Guardar datos</label>
      </div>
      <button type="submit" class="btn btn-primary">Iniciar sesion</button>
      </div>

  </div>
  <div class="col-6 col-md-6">
    
  <img src="img/imagenPrincipal.png" class="img-fluid" alt="...">
  </div>
</div>
     
</div>
</form>     
</html>


