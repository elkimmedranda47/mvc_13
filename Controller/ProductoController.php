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
        include __DIR__ . '/../../MVC_13/View/producto/VerProducto.php'; // Asegúrate de tener una vista adecuada para mostrar un producto
    }

    public function crearProducto($data) {

        var_dump($data);
       
        $resultado = $this->modelo->insertarProducto($data);
        if ($resultado) {
            // Creación exitosa, redirige a la lista de productos o muestra un mensaje de éxito
        } else {
            // Fallo en la creación, muestra un mensaje de error
        }
    }

    public function editarProducto($id, $data) {
        // Validar los datos del formulario antes de actualizarlos en la base de datos
        // Puedes agregar lógica de validación aquí

        // Luego, llama al modelo para actualizar el producto
        $resultado = $this->modelo->updateProducto($id, $data);
        if ($resultado) {
            // Actualización exitosa, redirige a la lista de productos o muestra un mensaje de éxito
        } else {
            // Fallo en la actualización, muestra un mensaje de error
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
    // Obtener los datos del formulario de creación
    $data = [
        'nombre' => $_POST['nombre'],
        'descripcion' => $_POST['descripcion'],
        'precio' => $_POST['precio'],
    ];
    $controlador->crearProducto($data);
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['editar']) && isset($_GET['id'])) {
    // Lógica para cargar el formulario de edición (puedes implementar esto)
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['editar_producto'])) {
    // Obtener los datos del formulario de edición
    $id = $_POST['id']; // ID del producto a editar
    $data = [
        'nombre' => $_POST['nombre'],
        'descripcion' => $_POST['descripcion'],
        'precio' => $_POST['precio'],
    ];
    $controlador->editarProducto($id, $data);
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['eliminar']) && isset($_GET['id'])) {
    // Lógica para cargar el formulario de confirmación de eliminación (puedes implementar esto)
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['eliminar_producto'])) {
    // Obtener el ID del producto a eliminar y llamar al método correspondiente
    $id = $_POST['id']; // ID del producto a eliminar
    $controlador->eliminarProducto($id);
}
?>
