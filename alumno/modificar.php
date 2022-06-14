<?php
    //1 Recibir las variables de tipo GET?
    $id = $_GET['id'];
    //2 Verificar las variables recibidas
    //echo $id;
    //3 Uniformar la informacion recibida
    //4 Conectar a la base de datos
    require_once("../conexion.php");
    //5 Prepara la consulta
    $consulta = "SELECT * FROM alumno WHERE id_alumno = $id";
    //echo $consulta;
    //6 Ejecutar la consulta
    $respuesta = mysqli_query($conexion, $consulta);
    //7 Mostrar la informacion recibida
    $fila = mysqli_fetch_array($respuesta);
    // echo "<pre>";
    // print_r($fila);
    // echo "</pre>";
    // echo $fila['nombres'];
    // echo $fila['paterno'];
    // echo $fila['materno'];
?>

<?php
    $titulo = 'Modificar Datos de Alumno';
    $ruta = '../';
    require_once '../cabecerahtml.php';
?>

<form action="actualizar.php" method="POST">
    <input type="hidden" name="id" value="<?= $fila['id_alumno'] ?>">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" required value="<?= $fila['nombres'];?>">
  </div>
  <div class="form-group">
    <label for="apellido_paterno">Apellido Paterno</label>
    <input type="text" class="form-control" id="apellido_paterno" name="paterno" required value="<?= $fila['paterno'];?>">
  </div>
  <div class="form-group">
    <label for="apellido_materno">Apellido Materno</label>
    <input type="text" class="form-control" id="apellido_materno" name="materno" required value="<?= $fila['materno'];?>">
  </div>
  <div class="form-group">
    <label for="fecha_nacimiento">Fecha Nacimiento</label>
    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required value="<?= $fila['fecha_nacimiento'];?>">
  </div>
  <div class="form-group">
    <label for="carnet">Carnet</label>
    <input type="number" class="form-control" id="carnet" name="carnet" required value="<?= $fila['carnet'];?>">
  </div>
  <div class="form-group">
    <label for="carnet">Sexo</label>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="sexo" id="m" value="m" <?= $fila['sexo'] == 'm' ? 'checked' : ''?>>
      <label class="form-check-label" for="m">Masculino</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="sexo" id="f" value="f" <?= $fila['sexo'] == 'f' ? 'checked' : ''?>>
      <label class="form-check-label" for="f">Femenino</label>
    </div>
  </div>
  <div class="form-group">
    <label for="direccion">Direccion</label>
    <input type="text" class="form-control" id="direccion" name="direccion" required value="<?= $fila['direccion'];?>">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

<?php    
    require_once '../piehtml.php';
?>