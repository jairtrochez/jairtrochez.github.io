<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Pedido</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    .form-container {
      max-width: 500px;
      margin: 40px auto;
      padding: 20px;
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-label {
      font-weight: bold;
      margin-bottom: 10px;
    }
    .form-control {
      margin-bottom: 20px;
    }
    .carrito {
      position: absolute;
      top: 10px;
      right: 10px;
    }
  </style>
</head>
<body style="background-color: #ADD8E6;">
  <div class="form-container">
    <h2>Agregar Pedido</h2>
    <form action="carritoagg.php" method="post">
      <div class="form-group">
        <label for="nombres" class="form-label">Nombres:</label>
        <input type="text" id="nombres" name="nombres" class="form-control" placeholder="Ingrese sus nombres">
      </div>
      <div class="form-group">
        <label for="nombres" class="form-label">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="Ingrese sus apellidos">
      </div>
      <div class="form-group">
        <label for="telefono" class="form-label">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Ingrese su teléfono">
      </div>
      <div class="form-group">
        <label for="producto" class="form-label">Producto:</label>
        <select id="producto" name="producto" class="form-control">
          <option value="">Seleccione un producto</option>
          <option value="Pantalones">Pantalones</option>
          <option value="Camisas">Camisas</option>
          <option value="Zapatos">Zapatos</option>
        </select>
        <div class="form-group">
        <label for="cantidad" class="form-label">Cantidad:</label>
        <input type="text" id="cantidad" name="cantidad" class="form-control" placeholder="Ingrese la cantidad">
      </div>
      </div>
      <div class="form-group">
        <label for="preciounitario" class="form-label">Precio Unitario:</label>
        <input type="number" id="preciounitario" name="preciounitario" class="form-control" placeholder="Ingrese el precio unitario">
      </div>
      <td><CENTER><input type="submit" value="Comprar"></CENTER></td>
    </form>
  </div>
</body>
</html>