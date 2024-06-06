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

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <img src="img/imagenPrincipal2.png" class="img-fluid imagenMenu" alt="...">
    <a class="navbar-brand" href="home.php">Sistema de Tesis</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Inicio</a>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Estudiantes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="registroEstudiante.php">Registrar Estudiante</a></li>
            <li><a class="dropdown-item" href="listadoEstudiantes.php">Lista de estudiante</a></li>
            <li><a class="dropdown-item" href="especialidad.php">Especialidad</a></li>
           
          </ul>
        </li>
    

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Proyectos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="registroProyecto.php">Registrar Proyecto</a></li>
            <li><a class="dropdown-item" href="listaProyecto.php">Mostrar Proyecto</a></li>
           
          </ul>
        </li>
      
              
        <li class="nav-item">
          <a class="nav-link" href="index.php">Cerrar sesión</a>
        
        </li>
        

      </ul>
      <form action="listaProyecto.php " class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success botonMenu" type="submit">Buscar</button>
      </form>
      
    </div>
  </div>
</nav>
    
