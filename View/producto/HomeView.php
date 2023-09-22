<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
    <div class="container mt-5">
    <?php

if (isset($_GET['id'])) {
    $producto = $tuControlador->getProductoById($_GET['id']); 
} else {
    $producto = array(
        'nombre' => '',
        'referencia' => '',
        'precio' => '',
        'peso' => '',
        'categoria' => '',
        'stock' => ''
    );
}
?>




       

        <h1 class="mb-3">Lista de Productos</h1>
        <!-- Lista de productos en una tabla más ancha -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Referencia</th>
                    <th>Precio</th>
                    <th>Peso</th>
                    <th>Categoría</th>
                    <th>Stock</th>
                    <th>Fecha de Creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
              

                foreach ($productos as $producto) { ?>
                    <tr>
                        <td><?php echo $producto['id']; ?></td>
                        <td><?php echo $producto['nombre_producto']; ?></td>
                        <td><?php echo $producto['referencia']; ?></td>
                        <td><?php echo $producto['precio']; ?></td>
                        <td><?php echo $producto['peso']; ?></td>
                        <td><?php echo $producto['categoria']; ?></td>
                        <td><?php echo $producto['stock']; ?></td>
                        <td><?php echo $producto['fecha_creacion']; ?></td>
                        <td>
                        
                            <a href="/mvc_13/ProductoController/retornarProducto/<?php echo $producto['id']; ?>" class="btn btn-primary btn-sm">editar</a>
                            <a href="/mvc_13/ProductoController?crear" class="btn btn-success">Crear</a>
                            <a href="/mvc_13/ProductoController" class="btn btn-danger btn-sm">Eliminar</a>

                            
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <h1 class="mb-3">Registrar Venta</h1>
      
        <form action="VentaController" method="POST" class="mb-3">
            <div class="form-group">
                <label for="id_producto">ID del Producto:</label>
                <input type="number" name="id_producto" id="id_producto" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" id="cantidad" class="form-control" required>
            </div>
            
            <button type="submit" name="registrar_venta" class="btn btn-success">Registrar Venta</button>
        </form>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
