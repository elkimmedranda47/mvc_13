<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Editar Producto</h1>
        <form method="POST" action="">
            <input type="hidden" name="id" value="<?php echo isset($producto['id']) ? $producto['id'] : ''; ?>">
            <div class="form-group">
                <label for="nombre">Nombre del Producto</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo isset($producto['nombre_producto']) ? $producto['nombre_producto'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="referencia">Referencia</label>
                <input type="text" class="form-control" id="referencia" name="referencia" value="<?php echo isset($producto['referencia']) ? $producto['referencia'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" value="<?php echo isset($producto['precio']) ? $producto['precio'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="peso">Peso</label>
                <input type="number" class="form-control" id="peso" name="peso" value="<?php echo isset($producto['peso']) ? $producto['peso'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoría</label>
                <input type="text" class="form-control" id="categoria" name="categoria" value="<?php echo isset($producto['categoria']) ? $producto['categoria'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" value="<?php echo isset($producto['stock']) ? $producto['stock'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="fecha_creacion">Fecha de Creación</label>
                <input type="date" class="form-control" id="fecha_creacion" name="fecha_creacion" value="<?php echo isset($producto['fecha_creacion']) ? $producto['fecha_creacion'] : ''; ?>" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="<?php echo isset($producto['id']) ? 'editar_producto' : 'crear_producto'; ?>"><?php echo isset($producto['id']) ? 'Editar Producto' : 'Crear Producto'; ?></button>
        </form>
        <br>
     
    </div>

    <!-- Enlace a los archivos JavaScript de Bootstrap (jQuery y Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



