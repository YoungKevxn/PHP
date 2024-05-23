<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: index.html");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cbtis217";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['insert'])) {
        $matricula = $_POST['Matricula'];
        $apellidos = $_POST['Apellidos'];
        $nombre = $_POST['idNombre'];
        $fecha_nacimiento = $_POST['Fecha_Nacimiento'];
        $direccion = $_POST['Direccion'];
        $telefono = $_POST['Telefono'];
        $correo = $_POST['idCorreo'];
        $padre_tutor = $_POST['Padre_tutor'];
        $sql = "INSERT INTO Alumnos (Matricula, Apellidos, idNombre, Fecha_Nacimiento, Direccion, Telefono, idCorreo, Padre_tutor) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssss", $matricula, $apellidos, $nombre, $fecha_nacimiento, $direccion, $telefono, $correo, $padre_tutor);
        $stmt->execute();
    } elseif (isset($_POST['update'])) {
        $matricula = $_POST['Matricula'];
        $apellidos = $_POST['Apellidos'];
        $nombre = $_POST['idNombre'];
        $fecha_nacimiento = $_POST['Fecha_Nacimiento'];
        $direccion = $_POST['Direccion'];
        $telefono = $_POST['Telefono'];
        $correo = $_POST['idCorreo'];
        $padre_tutor = $_POST['Padre_tutor'];
        $sql = "UPDATE Alumnos SET Apellidos = ?, idNombre = ?, Fecha_Nacimiento = ?, Direccion = ?, Telefono = ?, idCorreo = ?, Padre_tutor = ? WHERE Matricula = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssss", $apellidos, $nombre, $fecha_nacimiento, $direccion, $telefono, $correo, $padre_tutor, $matricula);
        $stmt->execute();
    } elseif (isset($_POST['delete'])) {
        $matricula = $_POST['Matricula'];
        $sql = "DELETE FROM Alumnos WHERE Matricula = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $matricula);
        $stmt->execute();
    }
}

$sql = "SELECT * FROM Alumnos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administración de Alumnos</title>
</head>
<center>
<body>
    <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['login']); ?>!</h1>
    <h2>Gestión de Alumnos</h2>

    <table border="1">
        <tr>
            <th>Matrícula</th>
            <th>Apellidos</th>
            <th>Nombre</th>
            <th>Fecha de Nacimiento</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Padre/Tutor</th>
            <th>Acción</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['Matricula']; ?></td>
            <td><?php echo $row['Apellidos']; ?></td>
            <td><?php echo $row['idNombre']; ?></td>
            <td><?php echo $row['Fecha_Nacimiento']; ?></td>
            <td><?php echo $row['Direccion']; ?></td>
            <td><?php echo $row['Telefono']; ?></td>
            <td><?php echo $row['idCorreo']; ?></td>
            <td><?php echo $row['Padre_tutor']; ?></td>
            <td>
                <form action="admin.php" method="POST" style="display:inline;">
                    <input type="hidden" name="Matricula" value="<?php echo $row['Matricula']; ?>">
                    <button type="submit" name="delete">Eliminar</button>
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <h3>Insertar nuevo alumno</h3>
    <form action="admin.php" method="POST">
        <label for="Matricula">Matrícula:</label>
        <input type="text" id="Matricula" name="Matricula" required>
        <br>
        <label for="Apellidos">Apellidos:</label>
        <input type="text" id="Apellidos" name="Apellidos" required>
        <br>
        <label for="idNombre">Nombre:</label>
        <input type="text" id="idNombre" name="idNombre" required>
        <br>
        <label for="Fecha_Nacimiento">Fecha de Nacimiento:</label>
        <input type="text" id="Fecha_Nacimiento" name="Fecha_Nacimiento" required>
        <br>
        <label for="Direccion">Dirección:</label>
        <input type="text" id="Direccion" name="Direccion" required>
        <br>
        <label for="Telefono">Teléfono:</label>
        <input type="text" id="Telefono" name="Telefono" required>
        <br>
        <label for="idCorreo">Correo:</label>
        <input type="text" id="idCorreo" name="idCorreo" required>
        <br>
        <label for="Padre_tutor">Padre/Tutor:</label>
        <input type="text" id="Padre_tutor" name="Padre_tutor" required>
        <br>
        <button type="submit" name="insert">Insertar</button>
    </form>
        <hr>
    <h3>Actualizar alumno</h3>
    <form action="admin.php" method="POST">
        <label for="Matricula">Matrícula:</label>
        <input type="text" id="Matricula" name="Matricula" required>
        <br>
        <label for="Apellidos">Apellidos:</label>
        <input type="text" id="Apellidos" name="Apellidos" required>
        <br>
        <label for="idNombre">Nombre:</label>
        <input type="text" id="idNombre" name="idNombre" required>
        <br>
        <label for="Fecha_Nacimiento">Fecha de Nacimiento:</label>
        <input type="text" id="Fecha_Nacimiento" name="Fecha_Nacimiento" required>
        <br>
        <label for="Direccion">Dirección:</label>
        <input type="text" id="Direccion" name="Direccion" required>
        <br>
        <label for="Telefono">Teléfono:</label>
        <input type="text" id="Telefono" name="Telefono" required>
        <br>
        <label for="idCorreo">Correo:</label>
        <input type="text" id="idCorreo" name="idCorreo" required>
        <br>
        <label for="Padre_tutor">Padre/Tutor:</label>
        <input type="text" id="Padre_tutor" name="Padre_tutor" required>
        <br>
        <button type="submit" name="update">Actualizar</button>
    </form>
    <hr>
    <a href="logout.php">Cerrar sesión</a>
</body>
</center>
</html>

<?php
$conn->close();
?>
