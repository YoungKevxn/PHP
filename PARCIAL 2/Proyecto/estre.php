<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cbtis217";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$login = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM Usuarios WHERE Login = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $login, $pass);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_SESSION['login'] = $login;
    header("Location: admin.php");
} else {
    echo "Usuario o contraseña incorrectos.";
}

$stmt->close();
$conn->close();
?>
