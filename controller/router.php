<?php
require "controllerClient.php";
if (isset($_GET["action"]) && !empty($_GET["action"])){
    $action = $_GET['action'];
}else{
    $action="getAllClients";
}
if (isset($_GET["code"]) && !empty($_GET["code"])) {
    $code = $_GET['code'];
}
controllerClient::$action();