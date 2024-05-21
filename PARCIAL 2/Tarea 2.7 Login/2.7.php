<?php
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "sistema";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $password = sha1($_POST["password"]); 
    
    $sql = "SELECT * FROM usuarios WHERE login='$login' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Bienvenido, $login";
    } else {
        echo "Login o contraseña incorrectos.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Ingrese sus credenciales</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="login">Login:</label><br>
    <input type="text" id="login" name="login"><br>
    <label for="password">Contraseña:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Iniciar sesión">
</form>

</body>
</html>
