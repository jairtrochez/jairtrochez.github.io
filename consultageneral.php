<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL
$sql = "SELECT id, nombres, apellidos, telefono, producto, cantidad, preciounitario FROM Tabla1";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Consulta de Compradores</title>
</head>
<body style="background-color: #ADD8E6;">
    <center><h1>Lista de Compradores</h1></center>
    <center><table border="1"></center>
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Telefono</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>preciounitario</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Mostrar datos de cada fila
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nombres"]. "</td><td>" . $row["apellidos"]. "</td><td>" . $row["telefono"]. "</td><td>" . $row["producto"]. "</td><td>" . $row["cantidad"]. "</td><td>" . $row["preciounitario"]. "</td>";
            }
        } else {
            echo "<tr><td colspan='3'>No hay registros</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>