<?php
require_once 'Config/database.php';
require_once 'Config/PobladorBd.php';

/*require_once "config/config.php";
require_once "libs/controlador.php";
require_once "libs/database.php";
require_once "libs/vista.php";
require_once "libs/modelo.php";
require_once "libs/app.php";

$p = new App();
$p->inicio();
*/
require_once "libs/app.php";
$p = new App();
require_once('Controller/ProductoController.php');


$controlador = new ProductoController();
$controlador->listarProductos();
?>
