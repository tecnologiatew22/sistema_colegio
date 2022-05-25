<?php
    $titulo = 'Nuevo Alumno';    
    require_once "../cabecerahtml.php";    
?>

<form action="guardar.php" method="POST">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre">    
  </div>  
  <div class="form-group">
    <label for="apellido_paterno">Apellido Paterno</label>
    <input type="text" class="form-control" id="apellido_paterno" name="paterno">    
  </div>  
  <div class="form-group">
    <label for="apellido_materno">Apellido Materno</label>
    <input type="text" class="form-control" id="apellido_materno" name="materno">    
  </div>  
  <div class="form-group">
    <label for="fecha_nacimiento">Fecha Nacimiento</label>
    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">    
  </div>  
  <div class="form-group">
    <label for="carnet">Carnet</label>
    <input type="number" class="form-control" id="carnet" name="carnet">    
  </div>
  <div class="form-group">
    <label for="carnet">Sexo</label>
    <br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="sexo" id="m" value="m">
        <label class="form-check-label" for="m">Masculino</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="sexo" id="f" value="f">
        <label class="form-check-label" for="f">Femenino</label>
    </div>
  </div>
  <div class="form-group">
    <label for="direccion">Direccion</label>
    <input type="text" class="form-control" id="direccion" name="direccion">    
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

<?php    
    require_once "../piehtml.php";
?>