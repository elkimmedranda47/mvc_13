<?php

require_once '../MVC_13/Config/database.php';
class VentaModel {
    private $db;

    public function __construct() {
        $database = new DatabaseConnection();
        $this->db = $database->getConnection();
    }

    public function consultarProducto($idProducto) {
        $query = "SELECT * FROM producto WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $idProducto);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function realizarVenta($idProducto, $cantidad) {
        $producto = $this->consultarProducto($idProducto);

        if (!$producto) {
            return "El producto no existe en la base de datos.";
        }

        $stockActual = $producto['stock'];

        if ($stockActual < $cantidad) {
            return "No es posible realizar la venta. Stock insuficiente.";
        }

        $nuevoStock = $stockActual - $cantidad;

        $query = "UPDATE producto SET stock = :nuevoStock WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nuevoStock', $nuevoStock);
        $stmt->bindParam(':id', $idProducto);

        if ($stmt->execute()) {
            return "Venta realizada con éxito. Stock actualizado.";
        } else {
            return "Error al realizar la venta.";
        }
    }
}
?>
