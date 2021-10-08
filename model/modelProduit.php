<?php
class modelProduit{
    private $refernece=null;
    private $designation=null;
    private $qtestock=null;
    private $prix=null;
    private $photo=null;
    private $promo=null;
    private $tva=null;
    private $codecat;


    function __construct(){
       // if(isset($_POST['reference'])&& isset($_POST['designation'])&&isset($_POST['qtestock'])&& isset($_POST['prix'])&&isset($_POST['tva'])&&isset($_POST['codecat'])){
            $this->refernece=$_POST['reference'];
            $this->designation=$_POST['designation'];
            $this->qtestock=$_POST['qtestock'];
            $this->prix=$_POST['prix'];
            $this->tva=$_POST['tva'];
            $this->codecat=$_POST['codecat'];
            $nomPhoto=$_FILES['photo']['name'];
            $this->photo=$nomPhoto;
       // }


    }

    public function addProduit($pdo){
        try{
            $nomPhoto=$_FILES['photo']['name'];
            $fichierTempo=$_FILES['photo']['tmp_name'];
            move_uploaded_file($fichierTempo,'.././view/produit/images/'.$nomPhoto);
            $req=$pdo->prepare("INSERT INTO produit(REFERENCE,DESIGNATION,QTESTOCK,PRIX,TVA,CODECAT,PHOTO) values(?,?,?,?,?,?,?)");
            $params=array($this->refernece,$this->designation,$this->qtestock,$this->prix,$this->tva,$this->codecat,$this->photo);
            $req->execute($params);
            return $req;
        }catch(PDOException $e ){
            return $message=$e->getMessage();
            return false;
        }
    }




}


