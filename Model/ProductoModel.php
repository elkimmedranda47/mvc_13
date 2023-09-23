<?php
require_once '../MVC_13/Config/database.php';

class ProductoModel {
    private $db;

    public function __construct() {
        $database = new DatabaseConnection();
        $this->db = $database->getConnection();
    }

    public function getAllProductos() {
        $query = "SELECT * FROM producto";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
    

    public function deleteProducto($id) {
        $query = "DELETE FROM producto WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            return true; 
        } else {
            return false; 
        }
    }


    
    public function insertarProducto($data) {
        $query = "INSERT INTO producto (nombre_producto, referencia, precio, peso, categoria, stock, fecha_creacion) 
                  VALUES (:nombre, :referencia, :precio, :peso, :categoria, :stock, NOW())";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nombre', $data['nombre']);
        $stmt->bindParam(':referencia', $data['referencia']);
        $stmt->bindParam(':precio', $data['precio']);
        $stmt->bindParam(':peso', $data['peso']);
        $stmt->bindParam(':categoria', $data['categoria']);
        $stmt->bindParam(':stock', $data['stock']);
    
        if ($stmt->execute()) {
            return true; 
        } else {
            return false; 
        }
    }
    




    public function getProductoById($id) {
        $query = "SELECT * FROM producto WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }




    public function updateProducto($id, $data) {
        $query = "UPDATE producto SET nombre_producto = :nombre, referencia = :referencia, precio = :precio, peso = :peso, categoria = :categoria, stock = :stock WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nombre', $data['nombre']);
        $stmt->bindParam(':referencia', $data['referencia']);
        $stmt->bindParam(':precio', $data['precio']);
        $stmt->bindParam(':peso', $data['peso']);
        $stmt->bindParam(':categoria', $data['categoria']);
        $stmt->bindParam(':stock', $data['stock']);
        $stmt->bindParam(':id', $id);
    
        if ($stmt->execute()) {
            return true; 
        } else {
            return false; 
        }
    }


}
?>