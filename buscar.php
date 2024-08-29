<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
</head>
<body style="background-color: #ADD8E6;">
<div>
        <form action="buscar.php" method="post">
        <center><input type="text" name="buscar" id=""></center>
        <center><input type="submit" value="Buscar"></center>
        </form>
    </div>
    <div>
        <center><table></center>
            <tr>
                <td>ID</td>
                <td>NOMBRES</td>
                <td>APELLIDOS</td>
                <td>TELEFONO</td>
                <td>PRODUCTO</td>
                <td>CANTIDAD</td>
                <td>PRECIO UNITARIO</td>
                <td>TOTAL</td>
            </tr>
            <?php
                $buscar = $_POST['buscar'];
                $cnx = mysqli_connect("localhost", "root", "", "tienda");
                $sql = "SELECT id, nombres, apellidos, telefono, producto, cantidad, preciounitario, (cantidad*preciounitario)  FROM tabla1 WHERE nombres like '$buscar' '%' order by id desc";
                $rta = mysqli_query($cnx, $sql);
                while ($mostrar = mysqli_fetch_row($rta)) {
                    ?>
                    <tr>
                        <td><?php echo $mostrar[0] ?></td>
                        <td><?php echo $mostrar[1] ?></td>
                        <td><?php echo $mostrar[2] ?></td>
                        <td><?php echo $mostrar[3] ?></td>
                        <td><?php echo $mostrar[4] ?></td>
                        <td><?php echo $mostrar[5] ?></td>
                        <td><?php echo $mostrar[6] ?></td>
                        <td><?php echo $mostrar[7] ?></td>
                    </tr>
                <?php
                }
                ?>
        </table>
    </div>
</body>
</html>