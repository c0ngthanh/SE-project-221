<?php
session_start();
require '../Core/Database.php';
require './Controllers/BaseController.php';
require './Models/BaseModel.php';

$controllerName = ucfirst(strtolower($_REQUEST['controller'] ?? 'home') . 'Controller');
$actionName = strtolower($_REQUEST['action'] ?? 'index');
require "./Controllers/${controllerName}.php";
$controllerObject = new $controllerName; //ProductsController
$controllerObject->$actionName(); //index()
?>
