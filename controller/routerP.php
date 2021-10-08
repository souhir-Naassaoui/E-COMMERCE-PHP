<?php
require "controllerProduit.php";
if (isset($_GET["action"]) && !empty($_GET["action"])){
    $action = $_GET['action'];
}else{
    $action="getAllProducts";
}
controllerProduit::$action();
