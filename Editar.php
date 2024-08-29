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
        <table border="1">
            <tr>
                <td>Id</td>
                <td>Nombres</td>
                <td>Apellidos</td>
                <td>Telefono</td>
                <td>Producto</td>
                <td>Cantidad</td>
                <td>Precio Unitario</td>
                <td>Total</td>
                <td>ESTADO</td>
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
                                    echo "En proceso";
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