<?php
// Incluir archivo de conexión a la base de datos si no lo has hecho ya
include("conexion.php"); // Asegúrate de tener este archivo creado con la conexión a la base de datos

// Recoger datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Limpiar y escapar los datos para evitar inyecciones SQL
$nombre = mysqli_real_escape_string($conn, $nombre);
$email = mysqli_real_escape_string($conn, $email);
$telefono = mysqli_real_escape_string($conn, $telefono);
$mensaje = mysqli_real_escape_string($conn, $mensaje);

// Preparar consulta SQL para insertar datos
$sql = "INSERT INTO items (name, email, phone, mensaj) VALUES ('$nombre', '$email', '$telefono', '$mensaje')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Datos insertados correctamente'); window.location.href='index.php';</script>";
} else {
    echo "<script>alert('Error: " . mysqli_error($conn) . "'); window.location.href='http://localhost/hotel/contact.php';</script>";
}

// Cerrar conexión
mysqli_close($conn);
?>
