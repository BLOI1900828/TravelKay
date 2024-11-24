
<?php
    require './Core/Database.php';
    require './Models/BaseModel.php';
    require './Controllers/BaseController.php';
    session_start();

    $controllerName = ucfirst((strtolower($_REQUEST['controller'])) . 'Controller');
    $actionName     = strtolower($_REQUEST['action'] ?? 'index');

    require "./Controllers/${controllerName}.php";

    $controllerOject = new $controllerName;

    $controllerOject->$actionName();  
?>

