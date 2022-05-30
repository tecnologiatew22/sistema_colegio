<?php
//1 Recibir las variables de tipo POST
$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$fecha_nac = $_POST['fecha_nacimiento'];
$carnet = $_POST['carnet'];
$sexo = $_POST['sexo'];
$direccion = $_POST['direccion'];

//2 Verificar las variables recibidas
// echo $nombre;
// echo $paterno;
// echo $materno;
// echo $fecha_nac;
// echo $carnet;
// echo $sexo;
// echo $direccion;
//print_r($_POST);
//3 Uniformar la informacion recibida
$nombre = strtolower($nombre);
$paterno = strtolower($paterno);
$materno = strtolower($materno);
$direccion = strtolower($direccion);

//4 Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "colegio");
if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//5 Prepara la consulta de Insercion
$consulta = "INSERT INTO alumno(nombres,paterno,materno,fecha_nacimiento,carnet,sexo,direccion) VALUES
            ('$nombre', '$paterno', '$materno', '$fecha_nac','$carnet','$sexo','$direccion')";
//echo $consulta;            

//6 Ejecutar la consulta
$resultado = mysqli_query($conexion, $consulta);

//7 Verificar la respuesta del servidor de BD
if ($resultado) {
    $mensaje = "Se guardo correctamente";
} else {
    $mensaje = "No se guardo correctamente";
}
?>

<?php
$titulo = 'Nuevo Alumno';
require_once '../cabecerahtml.php';
?>

<div class="alert alert-primary" role="alert">
    <?php echo $mensaje; ?>
</div>

<?php
require_once '../piehtml.php';
?>