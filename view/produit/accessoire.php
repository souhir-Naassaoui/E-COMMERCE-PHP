<?php
session_start();

require '../../model/conn.php';
$pdo=dbConnexion();
$rep = $pdo -> query ('SELECT * FROM produit WHERE CODECAT=6');
$donnees = $rep -> fetchAll();


?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../../css/style.css"/>
    <link rel="stylesheet" href="../../js/bootstrap.min.js"/>
</head>
<body>

<div class="navbar navbar-light navbar-fixed-top" style="background-color:  #f4511e;">
    <ul class="nav navbar-nav">
        <li><a href="produits.php">Produits</a> </li>
        <li><a href="../../LogOut.php">LogOut[<?php echo ((isset($_SESSION['profil']))?($_SESSION['pseudo']):"") ?>]</a></li>
    </ul>
</div>

<div>
    <div class="col-md-3" style="margin-top: 60px;">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="pcpo.php">Ordinateurs portables</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="bureautique.php">Ordinateurs bureautiques</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tablette.php">tablette</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="peripherique.php">peripherique et accessoires</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="smartphone.php">smartphone</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="accessoire.php">accessoire telephoniques</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="imprimantes.php">imprimantes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="scanner.php">scanner</a>
            </li>

        </ul>
    </div>



    <div class="col-md-9 spacer" >
        <?php require_once('../../include/inc_header.php') ?>
        <div class="panel panel-warning">
            <div class="panel-heading">Ordinateurs portables</div>
            <div class="panel-body">
                <?php
                foreach ($donnees as $key => $value)
                {
                    $NameProduct=$value ['DESIGNATION'];
                    $PriceProduct = $value ['PRIX'];
                    $id = $value ['REFERENCE'];
                    $stock = $value ['QTESTOCK'];
                    ?>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="images/<?php echo($value['PHOTO'])?>">
                                <img src="images/<?php echo($value['PHOTO'])?>" class="img-responsive" height="300" width="100"/>
                                <div class="caption">
                                </div>
                            </a>
                            <p class="text-center"><strong>Reference:</strong> <?php echo $NameProduct?></p>
                            <p class="text-center"><strong>Prix:</strong> <?php echo $PriceProduct.'Dt'?></p>

                            <?php
                            if ($stock > 0) // si stock supérieur à 0
                            {
                                ?>

                                <form action="panier.php" method="post">
                                    <p><input type="submit" name="<?php echo $id; ?>" value="Ajouter au panier"/></p>
                                </form>


                                <?php
                            }
                            else // si produit hors stock
                            {
                                ?>
                                <p class="reappro">En cours de réapprovisionnement</p>
                                <?php
                            }
                            ?>
                        </div>

                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>
