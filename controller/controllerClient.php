<?php
require_once("../model/conn.php");
require "../model/modelClient.php";

class controllerClient
{
    public function addClient() {
        $pdo=dbConnexion();
        $p=new modelClient();
        $p->addClient($pdo);
        header("location:../Login.php");
    }

    public function updateClient() {
        $pdo=dbConnexion();
        $code=$_GET['code'];
        $p=new modelClient();
        $p->updateClient($pdo,$code);
        header("location:../view/client/clients.php");
    }

    public function deleteClient(){
        $pdo=dbConnexion();
        $code=$_GET['code'];
        $p=new modelClient();
        $p->deleteClient($pdo,$code);
        header("location:../view/client/clients.php");
    }

}