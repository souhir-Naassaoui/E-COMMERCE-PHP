<?php
session_start();
require_once('../model/conn.php');
$pdo=dbConnexion();

$id= strip_tags($_GET['id']); //protection faille XSS

//ajout requete pour controler le stock et id

$rep = $pdo -> prepare ('SELECT QTESTOCK FROM produit WHERE REFERENCE = ?');

$rep -> execute (array($id));

$row = $rep -> fetch();

$stock = $row['QTESTOCK'];


if ((!empty ($stock)) AND ($_SESSION ['panier'][$id] < $stock))
{
$_SESSION ['panier'][$id] ++;
header('location:../view/produit/panier.php');
exit;
}
else
{
$_SESSION ['stock_error'] = 'Le stock est insuffisant.';
    header('location:../view/produit/panier.php');
exit;
}