<?php


class modelClient
{
    private $pseudo=null;
    private $nom=null;
    private $prenom=null;
    private $email=null;
    private $telephone=null;
    private $adresse=null;
    private $nomPhoto=null;
    private $mp=null;
    private $photo;


    function __construct(){
        if(isset($_POST['pseudo'])&& isset($_POST['nom'])&&isset($_POST['prenom'])&& isset($_POST['email'])&&isset($_POST['adresse'])&&isset($_POST['password'])){
            $this->pseudo=$_POST['pseudo'];
            $this->nom=$_POST['nom'];
            $this->prenom=$_POST['prenom'];
            $this->email=$_POST['email'];
            $this->telephone=$_POST['telephone'];
            $this->adresse=$_POST['adresse'];
            //$this->genre=$genre;
            $this->mp=$_POST['password'];
            //$this->photo=$photo;
        //}

        $nomPhoto=$_FILES['photo']['name'];
        $this->photo=$nomPhoto;

    }}
        public function addClient($pdo){
            try{
                $nomPhoto=$_FILES['photo']['name'];
                $fichierTempo=$_FILES['photo']['tmp_name'];
                move_uploaded_file($fichierTempo,'.././view/client/images/'.$nomPhoto);
                $req=$pdo->prepare("INSERT INTO client(PSEUDO,NOM,PRENOM,EMAIL,TELEPHONE,ADRESSE,MP,PHOTO) values(?,?,?,?,?,?,?,?)");
                $params=array($this->pseudo,$this->nom,$this->prenom,$this->email,$this->telephone,$this->adresse,$this->mp,$this->photo);
                $req->execute($params);
                return $req;
            }catch(PDOException $e ){
                return $message=$e->getMessage();
                return false;
            }
        }
    public function updateClient($pdo,$code){
        try{
            $nomPhoto=$_FILES['photo']['name'];
            if($nomPhoto==""){
                $ps=$pdo->prepare("UPDATE client SET NOM=?,PRENOM=?,EMAIL=?,TELEPHONE=?,ADRESSE=? WHERE PSEUDO=?");
                $params=array($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['telephone'],$_POST['adresse'],$code);
                $ps->execute($params);
                return true;
            }else{
                $fichierTempo=$_FILES['photo']['tmp_name'];
                move_uploaded_file($fichierTempo,'.././view/client/images/'.$nomPhoto);
                $ps=$pdo->prepare("UPDATE etudiants SET NOM=?,PRENOM=?,EMAIL=?,TELEPHONE=?,ADRESSE=?,PHOTO=? WHERE PSEUDO=?");
                $params=array($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['telephone'],$_POST['adresse'],$nomPhoto,$code);
                $ps->execute($params);
            }


        }catch(PDOException $e ){
            return $message=$e->getMessage();
            return false;
        }
    }

    public function deleteClient($pdo,$code){
        try{
            $req=$pdo->prepare("DELETE FROM client WHERE PSEUDO=?");
            $params=array($code);
            $req->execute($params);
            return true;
        }catch(PDOException $e ){
            return $message=$e->getMessage();
            return false;
        }
    }


}