<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #ADD8E6;">
<center>
<br>
    <div>
        <form action="menubuscar.php" method="post">
            <input type="text" name="buscar" id="">
            <input type="submit" value="Buscar"> 
        </form>
    </div>
    <br>
    <div>
        <table border="1">
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
                $cnx = mysqli_connect("localhost", "root", "", "tienda");
                $sql = "SELECT id, nombres, apellidos, telefono, producto, cantidad, preciounitario, ROUND((cantidad*preciounitario), 1) as p
                        FROM tabla1
                        
                        order by p desc";
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
                        <td>
                            <?php 
                                if ($mostrar[7] >= 1) {
                                    echo "Comprado";
                                }
                                else {
                                    echo "En Proceso";
                                }
                            ?>
                        
                        </td>
                        <td>
                        <a href="formeditar.php?
                            id=<?php echo $mostrar[0] ?> &
                            nombres=<?php echo $mostrar[1] ?> &
                            apellidos=<?php echo $mostrar[2] ?> &
                            telefono=<?php echo $mostrar[3] ?> &
                            producto=<?php echo $mostrar[4] ?> &
                            cantidad=<?php echo $mostrar[5] ?> &
                            preciounitario=<?php echo $mostrar[6] ?>
                            ">Editar</a>
                            <a href="speleminar.php? id=<?php echo $mostrar[0] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
        </table>
    </div>
    </center>
</body>
</html>