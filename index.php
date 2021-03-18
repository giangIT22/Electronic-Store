<?php
session_start();
require './Core/UploadFile.php';
require './Core/Database.php';
require './Helper/Common.php';
require './Models/BaseModel.php';
require './Controllers/BaseController.php';
$controllerName = ucfirst((strtolower($_REQUEST['controller'] ?? 'home')) .'Controller');

$actionName = $_REQUEST['action'] ?? 'index';

$moduleName = !empty($_GET['module']) ? $_GET['module'] : null;

if($moduleName === "backend"){
    $controllerFile = "./Controllers/Backend/${controllerName}.php";
    echo $controllerFile;
    if(file_exists($controllerFile)){
        echo " đúng";
    }else{
        echo "sai";
    }
    die();
}else{
    $controllerFile = "./Controllers/${controllerName}.php";
}

if(file_exists($controllerFile)){
    require $controllerFile;
}else{
    echo "<h1>Không tìm thấy ${controllerName}</h1>";
    die();
}

$object1 = new $controllerName;

if(method_exists($object1, $actionName)){
    $object1->$actionName();
}
else{
    echo "<h2>Không tìm thấy method: ${actionName} ở trong ${controllerName}</h2>";
}

