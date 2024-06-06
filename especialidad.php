<?php

include 'estructura\header.php';

?>

<h1> Registrar Especialidad </h1>
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombre</label>
    <input type="nombreEspecialidad" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Tipo</label>
    <input type="tipoEspecialidad" class="form-control" id="inputPassword4">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</form>

<?php
include 'estructura\footer.php';
?>