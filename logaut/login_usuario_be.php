<?php
// Habilita la visualización de errores para desarrollo
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'conexion_be.php';

// Inicia la sesión
session_start();

// Verifica que las claves existen en $_POST
if (!isset($_POST['correo']) || !isset($_POST['contraseña'])) {
    die("Error: Datos del formulario no recibidos correctamente.");
}

// Recoge y sanear las entradas del usuario
$correo = mysqli_real_escape_string($conexion, $_POST['correo']);
$contraseña = mysqli_real_escape_string($conexion, $_POST['contraseña']);

// Consulta SQL para verificar si el correo existe
$query = "SELECT * FROM usuario WHERE correo='$correo'";
$resultado = mysqli_query($conexion, $query);

if (mysqli_num_rows($resultado) > 0) {
    // Obtén los datos del usuario
    $usuario = mysqli_fetch_assoc($resultado);

    // Compara la contraseña ingresada con la almacenada en la base de datos
    if (password_verify($contraseña, $usuario['contraseña'])) {
        // Contraseña correcta: Inicia sesión y redirige
        $_SESSION['usuario'] = $correo;
        header("Location: ../indexcuenta.php");
        exit;
    } else {
        // Contraseña incorrecta
        echo '
        <script>
        alert("Contraseña incorrecta, por favor intenta de nuevo");
        window.location = "../index.php";
        </script>
        ';
    }
} else {
    // Correo no encontrado
    echo '
    <script>
    alert("No se encontró un usuario con ese correo, por favor regístrate");
    window.location = "../index.php";
    </script>
    ';
}

// Cierra la conexión a la base de datos
mysqli_close($conexion);
?>
