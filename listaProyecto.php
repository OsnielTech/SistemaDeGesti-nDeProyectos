<?php

include 'estructura\header.php';

?>

<div class="container">
  <div class="titulos">
  <img src="img/buscar-archivo.png" class="img-fluid imagenIcono"  alt="Sistema de proyecto de grado">
  <h3> Listado de proyectos de grados</h3>
  </div>

<form class="row g-3">
  
    <h4>Buscar por:</h4>
  <div class="col-md-6">
    <label for="" class="form-label">Autor</label>
    <input type="text" class="form-control" id="">
  </div>
  
  <div class="col-md-6">
    <label for="inputState" class="form-label">Año lectivo</label>
    <select id="inputState" class="form-select">
      <option selected> 2020</option>
      <option selected> 2021</option>
      <option selected> 2022</option>
      <option selected> 2023</option>
      <option selected> 2024</option>
      <option selected> 2025</option>
      
    </select>
  </div>

  <div class="col-md-4">
    <label for="inputState" class="form-label">Especialidad</label>
    <select id="inputState" class="form-select">
      <option selected> Técnico</option>
      <option selected> Ciencias</option>
      
    </select>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Buscar</button>
    </div>
  </div>

  <div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo del proyecto</th>
      <th scope="col">Autor</th>
      <th scope="col">Especialidad</th>
      <th scope="col">Archivo</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Sistema de gestión de proyectos</td>
      <td>Naidelyn Macias</td>
      <td>Técnico</td>
      <td>archivo.pdf</td>
    </tr>
    
  </tbody>
  <tr>
      <th scope="row">2</th>
      <td>Sistema de inventario</td>
      <td>Raúl Holguin</td>
      <td>Técnico</td>
      <td>archivo.pdf</td>
    </tr>
</table>
  </div>

</form>



<?php
include 'estructura\footer.php';
?>