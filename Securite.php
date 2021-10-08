<?php
session_start();
if(!(isset($_SESSION['profil']))){
    header("location:Login.php");
}
?>
