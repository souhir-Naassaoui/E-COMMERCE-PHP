<?php
$login=$_POST['username'];
$pass=$_POST['password'];

require_once("model/conn.php");
$pdo=dbConnexion();
$ps=$pdo->prepare("SELECT * FROM client WHERE PSEUDO=? AND MP=?");
$params=array($login,$pass);
$ps->execute($params);
if ($user=$ps->fetch()){
    session_start();
    $_SESSION['profil']=$user;
    $_SESSION['pseudo']=$login;
    if($login=='admin'){
        header("location:view/client/clients.php");
    }else{
        header("location:view/produit/produits.php");
    }

}else{
    header("location:Login.php");
}
?>