<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cbtis217";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$login = $_POST['login'];
$correo = $_POST['correo'];
$password = $_POST['password'];

$sql = "INSERT INTO Usuarios (Nombre, Login, Correo, Password) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $nombre, $login, $correo, $password);

if ($stmt->execute()) {
    header("Location: cbtis217.html");
    exit();
} else {
    echo "Error al registrar el usuario: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
