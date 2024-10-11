<?php
// Habilita la visualización de errores para desarrollo
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'conexion_be.php';

// Verifica que las claves existen en $_POST
if (!isset($_POST['nombre_completo']) || !isset($_POST['correo']) || !isset($_POST['usuario']) || !isset($_POST['contraseña'])) {
    die("Error: Datos del formulario no recibidos correctamente.");
}

// Recoge y sanear las entradas del usuario
$nombre_completo = mysqli_real_escape_string($conexion, $_POST['nombre_completo']);
$correo = mysqli_real_escape_string($conexion, $_POST['correo']);
$usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
$contraseña = mysqli_real_escape_string($conexion, $_POST['contraseña']);

// Verifica si el correo ya está registrado
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo='$correo'");

if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
    <script>
    alert("Este correo ya está registrado, intenta con otro diferente");
    window.location = "../index.php";
    </script>
    ';
    exit();
}

// Verifica si el nombre ya está registrado
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario='$usuario'");

if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
    <script>
    alert("Este usuario ya está registrado, intenta con otro diferente");
    window.location = "../index.php";
    </script>
    ';
    exit();
}

// Hashea la contraseña antes de almacenarla
$contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

// Construye la consulta SQL
$query = "INSERT INTO usuario (nombre_completo, correo, usuario, contraseña) 
          VALUES ('$nombre_completo', '$correo', '$usuario', '$contraseña_hash')";

// Muestra la consulta SQL para depuración
echo "Consulta SQL: $query<br>";

// Ejecuta la consulta
$ejecutar = mysqli_query($conexion, $query);

// Verifica si la consulta fue exitosa
if ($ejecutar) {
    echo '
    <script>
    alert("Usuario almacenado exitosamente");
    window.location = "../index.php";
    </script>
    ';
} else {
    echo '
    <script>
    alert("Inténtalo de nuevo, usuario no almacenado: ' . mysqli_error($conexion) . '");
    window.location = "../index.php";
    </script>
    ';
}

// Cierra la conexión a la base de datos
mysqli_close($conexion);
