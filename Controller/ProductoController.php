<?php
require_once '../MVC_13/Model/ProductoModel.php';

class ProductoController {
    private $modelo;

    public function __construct() {
        $this->modelo = new ProductoModel();
    }

    public function listarProductos() {
        $productos = $this->modelo->getAllProductos();
        include __DIR__ . '/../../MVC_13/View/producto/HomeView.php';
    }

    public function verProducto($id) {
        $producto = $this->modelo->getProductoById($id);
       // include __DIR__ . '/../../MVC_13/View/producto/VerProducto.php'; // Asegúrate de tener una vista adecuada para mostrar un producto
    }

    public function crearProducto($data) {

       // var_dump($data);
        
       
      // include __DIR__ . '/../../MVC_13/View/producto/CrearProducto.php';
        $resultado = $this->modelo->insertarProducto($data);
        if ($resultado) {
         echo "producto crerado";
        } else {
            
        }
        
    }

    public function editarProducto($id, $data) {
       
        echo $id;
        echo "<br>";
        var_dump($data); 

        $resultado = $this->modelo->updateProducto($id, $data);
        if ($resultado) {
   
        } else {
            
        }
    }

    public function eliminarProducto($id) {
        
       // var_dump($id);
         $id_producdo=$id[0];
         $numeroEntero = intval( $id_producdo);
  
   
        $resultado = $this->modelo->deleteProducto($numeroEntero);
        if ($resultado) {
           
          

        } else {
            // Fallo en la eliminación, muestra un mensaje de error
        }
        
    }

    public function retornarProducto($id) {
        
        $id_producdo=$id[0];
        $numeroEntero = intval( $id_producdo);
          
      
          $producto = $this->modelo->getProductoById( $numeroEntero);
         // print_r( $producto);
          include __DIR__ . '/../../MVC_13/View/producto/EditarProducto.php';
     
       
         
     }


}



// Crear una instancia del controlador
$controlador = new ProductoController();

// Lógica para determinar qué acción se debe realizar según la solicitud
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['listar'])) {
    $controlador->listarProductos();


} elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['ver']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $controlador->verProducto($id);

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['crear_producto'])) {
   
    $data = [
        'nombre' => $_POST['nombre'],
        'referencia' => $_POST['referencia'],
        'precio' => $_POST['precio'],
        'peso' => $_POST['peso'],
        'categoria' => $_POST['categoria'],
        'stock' => $_POST['stock'],
        'fecha_creacion' => $_POST['fecha_creacion']
    ];
    
  

    $controlador->crearProducto($data);


} elseif (isset($_GET['crear'])) {

    include __DIR__ . '/../../MVC_13/View/producto/CrearProducto.php';


} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['editar_producto'])) {
    
    $id = $_POST['id']; 
    $data = [
        'nombre' => $_POST['nombre'],
        'referencia' => $_POST['referencia'],
        'precio' => $_POST['precio'],
        'peso' => $_POST['peso'],
        'categoria' => $_POST['categoria'],
        'stock' => $_POST['stock']
    ];
    $controlador->editarProducto($id, $data);
   

} elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['eliminar']) && isset($_GET['id'])) {
    // Lógica para cargar el formulario de confirmación de eliminación (puedes implementar esto)
} elseif ( isset($_POST['eliminar_producto'])) {
  
  echo  $id = $_POST['id'];

    $id = $_POST['id']; // ID del producto a eliminar
    $controlador->eliminarProducto($id);
}
?>
