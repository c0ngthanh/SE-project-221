<?php
require './Core/Database.php';
require './Controllers/BaseController.php';
require './Models/BaseModel.php';

$controllerName = ucfirst(strtolower($_REQUEST['controller'] ?? 'index') . 'Controller');
$actionName = strtolower($_REQUEST['action'] ?? 'index');
require "./Controllers/${controllerName}.php";
$controllerObject = new $controllerName;
$controllerObject->$actionName();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>