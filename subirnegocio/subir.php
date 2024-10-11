<?php
// Habilitar la visualización de errores para depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Configuración de la base de datos
$host = 'localhost';
$usuario = 'root';
$contraseña = '';
$base_de_datos = 'login_register_db';

// Crear el directorio para las imágenes si no existe
if (!is_dir('imagenes')) {
    mkdir('imagenes', 0777, true);
}

// Conectar a la base de datos
$conexion = new mysqli($host, $usuario, $contraseña, $base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener los datos del formulario con sanitización
$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$descripcion = filter_input(INPUT_POST, 'descripcion', FILTER_SANITIZE_STRING);
$ubicacion = filter_input(INPUT_POST, 'ubicacion', FILTER_SANITIZE_STRING);
$servicios = filter_input(INPUT_POST, 'servicios', FILTER_SANITIZE_STRING);

// Manejar la carga de la imagen
$imagen_nombre = $_FILES['imagen']['name'];
$imagen_temporal = $_FILES['imagen']['tmp_name'];
$imagen_tipo = $_FILES['imagen']['type'];
$imagen_size = $_FILES['imagen']['size'];
$allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

if (!in_array($imagen_tipo, $allowedTypes)) {
    die("Tipo de archivo no permitido.");
}

if ($imagen_size > 5000000) { // 5MB límite de tamaño
    die("El archivo es demasiado grande.");
}

$imagen_nombre = uniqid() . '-' . basename($imagen_nombre);
$imagen_ruta = 'imagenes/' . basename($imagen_nombre);

if (move_uploaded_file($imagen_temporal, $imagen_ruta)) {
    echo "Imagen cargada exitosamente.<br>";
} else {
    die("Error al cargar la imagen.<br>");
}

// Preparar y ejecutar la consulta
$stmt = $conexion->prepare("INSERT INTO productos (titulo, descripcion, ubicacion, servicios, imagen) VALUES (?, ?, ?, ?, ?)");
if (!$stmt) {
    die("Error al preparar la consulta: " . $conexion->error);
}
$stmt->bind_param('sssss', $titulo, $descripcion, $ubicacion, $servicios, $imagen_ruta);

if ($stmt->execute()) {
    echo "Producto agregado exitosamente.";
} else {
    die("Error: " . $stmt->error . " - Código: " . $stmt->errno);
}

$stmt->close();
$conexion->close();
?>
