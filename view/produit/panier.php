<?php 

session_start(); 
require('../../include/inc_refresh.php');
require_once('../../model/conn.php');
require('../../scripts/session_panier.php');
$pdo=dbConnexion();
?>	

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8"/>
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
<div id="wrapper" style="margin-top: 60px;">

<?php require_once('../../include/inc_header.php') ?>

<h1 class="titre_panier">Votre Panier</h1>

<?php
if (isset ($message)) //affichage message erreur
{
?>
<p class="erreur">
<?php echo $message;
exit; ?></p> <!-- on stoppe le script ici car pas la peine d'affichage un tableau vide !-->
<?php
}

if (isset ($_SESSION ['stock_error']))
{
?>
<p class="erreur"><?php echo $_SESSION ['stock_error'];?></p>
<?php
unset ($_SESSION ['stock_error']);
}
?>

<section>

    <p class="lien_retour"><a href="pcpo.php">Continuez vos achats</a></p>

    <table>
        <thead>
        <tr>
        <th>Article</th>
        <th>Quantité</th>
        <th>Prix unitaire TTC</th>
        <th>Prix total TTC</th>
        <th>Supprimer</th>
        </tr>
        </thead>
        <tbody>

        <?php

        $grand_total = 0; //initialisation de $grand_total

        foreach ($_SESSION ['panier'] as $key => $qte) //lecture du panier
        {
        $rep = $pdo -> prepare ('SELECT * FROM produit WHERE REFERENCE= ?');
        $rep -> execute (array($key));

        $donnees = $rep -> fetch();

        $nom = $donnees ['DESIGNATION'];
        $prix = $donnees ['PRIX'];
        $prix_total = $prix*$qte; //calculs prix total et total à payer TTC

        $grand_total += $prix_total;

        ?>

        <tr>
        <td><?php echo $nom; ?></td>
        <td><a class="choix_quantite" href="../../scripts/less.php?id=<?php echo $key; ?>">-</a><span><?php echo $qte;?></span><a class="choix_quantite" href="../../scripts/add.php?id=<?php echo $key;?>">+</a></td>
        <td><?php echo $prix.'dt'; ?></td>
        <td><?php echo $prix_total.'dt'; ?></td>
        <td><a class="supprimer_article" href="../../scripts/del.php?id=<?php echo $key; ?>">x</a></td>
        </tr>

        <?php
        }

        ?>
        </tbody>

        <tfoot>
        <tr>
            <td class="no_border"></td>
            <td class="no_border"></td>
            <td class="table_bold">TOTAL</td>
            <td class="bold"><?php echo $grand_total.'dt'; ?> </td>
        </tr>
        <tr>
            <td class="no_border"></td>
            <td class="no_border"></td>
            <td class="table_small">dont TVA 20%</td>
            <td class="small"><?php echo round ($tva = $grand_total -($grand_total*0.8),2).'dt' ;?></td>
        </tr>
        </tfoot>
    </table>

    <form action="payement.php">
        <input id="valider_panier" type="submit" name="valider" value="Valider le panier" />
    </form>
</section>



</div>
</body>
</html>