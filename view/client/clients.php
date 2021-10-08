<?php require_once("../../Securite.php") ?>
<?php
    require_once("../../model/conn.php");//inclure s'il n'est pas inclu auparavant
$mc="";
$size=3;
if(isset($_GET['page'])){
    $page=$_GET['page'];
}else{
    $page=0;
}
$offset=$size*$page;
if(isset($_GET['motCle'])){
        $mc=$_GET['motCle'];
        $req="SELECT * FROM client WHERE NOM LIKE '%$mc%' LIMIT $size OFFSET $offset";
    }else {
        //preparer la requete
        $req = "SELECT * FROM client LIMIT $size OFFSET $offset";
    }

    //executer la requete
$pdo=dbConnexion();
    $ps=$pdo->prepare($req);
    $ps->execute();
    //2eme requete pour connaitre le nombre de pages
    if(isset($_GET['motCle']))
        $ps2=$pdo->prepare("SELECT COUNT(*) AS NB_ET FROM client WHERE NOM LIKE '%$mc%'");
    else
        $ps2=$pdo->prepare("SELECT COUNT(*) AS NB_ET FROM client ");
    $ps2->execute();
    $ligne=$ps2->fetch(PDO::FETCH_ASSOC);//recupérer la ligne sous forme d'un tableau associatif
    $NBE=$ligne['NB_ET'];
    if(($NBE % $size )== 0) {
        $NbPages = floor($NBE / $size);
    }else{
        $NbPages = floor($NBE / $size)+1;
    }
?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css"/>

</head>
<body>

<div class="navbar navbar-light navbar-fixed-top" style="background-color:  #f4511e;">
    <ul class="nav navbar-nav">
        <li><a href="clients.php"><span style="color: #a53535">Clients</span></a> </li>
        <li><a href="../produit/produits.php"><span style="color: #a53535">Produits</span></a> </li>
        <li><a href="SaisieClientAdmin.php"><span style="color: #a53535">ajoutClient</span></a> </li>
        <li><a href="../produit/ajoutProduit.php"><span style="color: #a53535">ajoutProduit</span></a> </li>
        <li><a href="../../LogOut.php"><span style="color: #a53535">LogOut[<?php echo ((isset($_SESSION['profil']))?($_SESSION['pseudo']):"") ?>]</span></a></li>
    </ul>
</div>

<div class="col-md-12 col-xs-12" style="margin-top: 80px">
    <div class="panel panel-default">
        <div class="panel panel-heading">
            Liste des clients
        </div>
        <div class="panel panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>PSEUDO</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>EMAIL</th>
                    <th>ADRESSE</th>
                    <th>TELEPHONE</th>
                    <th>PHOTO</th>
                </tr>
                </thead>
                <tbody>
                <?php while($et=$ps->fetch()) { //$ps->fetch recupere chaque ligne de ps et la stocke dans et donc et correspond à un etudiant?>
                    <tr>
                        <td><?php echo($et['PSEUDO'])?></td>
                        <td><?php echo($et['NOM'])?></td>
                        <td><?php echo($et['PRENOM'])?></td>
                        <td><?php echo($et['EMAIL'])?></td>
                        <td><?php echo($et['ADRESSE'])?></td>
                        <td><?php echo($et['TELEPHONE'])?></td>
                        <td><img src="images/<?php echo($et['PHOTO'])?>" width="100"/></td>
                        <td><a href='updateClient.php?code=<?php echo $et['PSEUDO']?>'>Update </a></td>
                        <td><a href='../../controller/router.php?action=deleteClient&&code=<?php echo $et['PSEUDO']?>'> supprimer </a></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <div>
            <ul class="nav nav-pills">
                <?php for($i=0;$i<$NbPages;$i++) {?>
                    <li class="<?php echo(($i==$page)?'warning':''); ?>">
                        <a href="clients.php?page=<?php echo($i) ?>&motCle=<?php echo($mc) ?>">Page <?php echo($i) ?></a>
                    </li>

                <?php } ?>
            </ul>
        </div>
    </div>

</div>
</body>
</html>
