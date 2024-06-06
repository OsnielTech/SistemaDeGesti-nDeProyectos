<?php

include 'estructura\header.php';

?>

<div class="container">
  <div class="titulos">
  <img src="img/lista-estudiante.png" class="img-fluid imagenIcono"  alt="Sistema de proyecto de grado">
  <h3> Lista de Estudiantes</h3>
  </div>

  <form class="row g-3">
  
  <h4>Buscar por:</h4>
<div class="col-md-6">
  <label for="" class="form-label">Estudiante</label>
  <input type="text" class="form-control" id="">
</div>


<div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo del proyecto</th>
      <th scope="col">Autor</th>
      <th scope="col">Especialidad</th>
      <th scope="col">Año lectivo</th>
      <th scope="col">Archivo</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Sistema de gestión de proyectos</td>
      <td>Naidelyn Macias</td>
      <td>Técnico</td>
      <td>2023</td>
      <td>archivo.pdf</td>
    </tr>
    
  </tbody>
  <tr>
      <th scope="row">2</th>
      <td>Sistema de inventario</td>
      <td>Raúl Holguin</td>
      <td>Técnico</td>
      <td>2023</td>
      <td>archivo.pdf</td>
    </tr>
</table>
  </div>

</form>






<?php
include 'estructura\footer.php';
?>