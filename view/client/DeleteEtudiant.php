<?php require_once("Securite.php");
require_once("RoleScolarite.php");?>
<?php
$code=$_GET['code'];
require_once("conn.php");
$ps=$pdo->prepare("DELETE FROM etudiants WHERE CODE=?");
$params=array($code);
$ps->execute($params);
header("location:clients.php");
?>
