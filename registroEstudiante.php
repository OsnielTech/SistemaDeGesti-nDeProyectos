<?php

include 'estructura\header.php';

?>

<h1> Página de registro de Estudiantes </h1>
<div class="container">
  <div class="titulos">
  <img src="img/agregar-usuario.png" class="img-fluid imagenIcono"  alt="Sistema de proyecto de grado">
  <h3> Registro de Estudiantes </h3>
  </div>

  <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombres</label>
    <input type="text" class="form-control" id="inputEmail4" name="nombreEstudinte">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Proyecto</label>
    <input type="text" class="form-control" id="inputEmail4" name="nombreProyect">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Tutor</label>
    <input type="text" class="form-control" id="inputEmail4" name="tutor">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Año lectivo</label>
    <select id="inputState" class="form-select" name="añoLectivo">
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
    <select id="inputState" class="form-select" name="epecialidad">
      <option selected> Técnico</option>
      <option selected> Ciencias</option>
      
    </select>
  </div>
  <div class="mb-3">
  <label for="formFile" class="form-label">Documento</label>
  <input class="form-control" type="file" id="formFile" name="documento">
</div>
<div class="col-12">
    <button class="btn btn-primary" type="submit">Guardar Estudiante</button>
  </div>
</form>

</div>


<?php
include 'estructura\footer.php';
?>