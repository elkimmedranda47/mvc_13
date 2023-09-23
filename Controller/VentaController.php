<?php
require_once '../MVC_13/Model/VentaModel.php';

class VentaController {

    private $modelo;

    public function __construct() {
        $this->modelo = new VentaModel();
    }


    public function registrarVenta($idProducto, $cantidad) {
       
        $resultado = $this->modelo->realizarVenta($idProducto, $cantidad);

        if ($resultado === "Venta realizada con éxito. Stock actualizado.") {
            
            echo "Venta realizada con éxito. Stock actualizado.";
        } else {
          
            echo "Error al realizar la venta: " . $resultado;
        }
    }

    public function procesorVenta() {
        
        $controlador = new VentaController();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['registrar_venta'])) {
    $idProducto = $_POST['id_producto'];
    $cantidad = $_POST['cantidad'];
    
    $resultado = $controlador->registrarVenta($idProducto, $cantidad);

   

}
       
    
    }

   
}


?>
