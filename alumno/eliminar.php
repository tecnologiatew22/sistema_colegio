<?php
//1. Recibir variables que se estan enviando
$id = $_GET['id'];
//2. Verificar las variables recibidas
//echo $id;
//3 Uniformar la informacion recibida
//4 Conectar a la base de datos
require_once("../conexion.php");
// //5 Prepara la consulta
$consulta = "DELETE FROM alumno WHERE id_alumno = $id";
//echo $consulta;

// //6 Ejecutar la consulta
$resultado = mysqli_query($conexion, $consulta);

//7 Verificar la respuesta del servidor de BD
if ($resultado) {
    $mensaje = "Se Elimino correctamente";
} else {
    $mensaje = "No se Elimino correctamente";
}
?>

<?php
$titulo = 'Eliminar Alumno';
$ruta = '../';
require_once '../cabecerahtml.php';
?>

<div class="alert alert-primary" role="alert">
    <?php echo $mensaje; ?>
</div>

<?php
require_once '../piehtml.php';
?>