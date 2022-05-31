<?php
//1. Recibir variables que se estan enviando
//2. Verificar las variables recibidas
//3 Uniformar la informacion recibida
//4 Conectar a la base de datos
require_once ("../conexion.php");
//5 Prepara la consulta
$consulta = "SELECT * FROM alumno";
//echo $consulta;

//6 Ejecutar la consulta
$resultado = mysqli_query($conexion, $consulta);

// while($fila = mysqli_fetch_array($resultado)){
//     echo $fila['id_alumno'];
//     echo $fila['nombres'];
//     echo $fila['paterno'];
//     echo $fila['materno'];
//     echo "<br>";
// }

?>


<?php
$titulo = 'Listar Alumnos';
require_once '../cabecerahtml.php';
?>

<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombres</th>
      <th scope="col">Paterno</th>
      <th scope="col">Materno</th>
      <th scope="col">Fecha Nac.</th>
      <th scope="col">CI</th>
      <th scope="col">Sexo</th>
      <th scope="col">Dirrecion</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $contador = 0;
    while($fila = mysqli_fetch_array($resultado)){
        $contador++;
    ?>
        <tr>
            <td><?= $contador ?></td>
            <td><?= $fila['nombres'] ?></td>
            <td><?= $fila['paterno'] ?></td>
            <td><?= $fila['materno'] ?></td>
            <td><?= $fila['fecha_nacimiento'] ?></td>
            <td><?= $fila['carnet'] ?></td>
            <td><?= $fila['sexo']=='f'?'Femenino':'Masculino'; ?></td>
            <td><?= $fila['direccion'] ?></td>
        </tr>
    <?php
    }
    ?>
  </tbody>
</table>

<?php
require_once '../piehtml.php';
?>  