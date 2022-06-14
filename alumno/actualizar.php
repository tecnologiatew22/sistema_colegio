<?php
//1 Recibir las variables de tipo POST
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$fecha_nac = $_POST['fecha_nacimiento'];
$carnet = $_POST['carnet'];
$sexo = $_POST['sexo'];
$direccion = $_POST['direccion'];

// 2 Verificar las variables recibidas

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

//3 Uniformar la informacion recibida
$nombre = strtolower($nombre);
$paterno = strtolower($paterno);
$materno = strtolower($materno);
$direccion = strtolower($direccion);
//4 Conectar a la base de datos
require_once("../conexion.php");

//5 Prepara la consulta de Insercion
$consulta = "UPDATE alumno 
            SET nombres='$nombre',
            paterno='$paterno',
            materno='$materno',
            fecha_nacimiento='$fecha_nac',
            carnet='$carnet',
            sexo='$sexo',
            direccion='$direccion'
            WHERE id_alumno='$id'";
//echo $consulta;            

//6 Ejecutar la consulta
$resultado = mysqli_query($conexion, $consulta);

//7 Verificar la respuesta del servidor de BD
if ($resultado) {
    $mensaje = "Se Actualizo correctamente";
} else {
    $mensaje = "Error al actualizar, intente de nuevo";
}
?>

<?php
$titulo = 'Actulizar Alumno';
$ruta = '../';
require_once '../cabecerahtml.php';
?>

<div class="alert alert-primary" role="alert">
    <?php echo $mensaje; ?>
</div>

<?php
require_once '../piehtml.php';
?>