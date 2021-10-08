<?php
require_once("../model/conn.php");
require "../model/modelProduit.php";

class controllerProduit
{
    public function addProduit() {
        $pdo=dbConnexion();
        $p=new modelProduit();
        $p->addProduit($pdo);
        header("location:../view/produit/produits.php");
    }

    public function updateProduit() {
        $pdo=dbConnexion();
        $code=$_GET['code'];
        $p=new modelProduit();
        $p->updateProduit($pdo,$code);
        header("location:../view/produit/produits.php");
    }

    public function deleteProduit()
    {
        $pdo = dbConnexion();
        $code = $_GET['code'];
        $p = new modelProduit();
        $p->deleteProduit($pdo, $code);
        header("location:../view/produit/produits.php");
    }
}