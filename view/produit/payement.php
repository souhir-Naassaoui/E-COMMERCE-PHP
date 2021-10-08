<?php session_start();
require('../../include/inc_refresh.php');
require_once('../../model/conn.php');
require('../../scripts/session_panier.php');
$pdo=dbConnexion();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../../css/style.css"/>
    <link rel="stylesheet" href="../../js/bootstrap.min.js"/>
    <style>
        body {
            font-family: Arial;
            font-size: 17px;
            padding: 8px;
        }

        * {
            box-sizing: border-box;
        }

        .row {
            display: -ms-flexbox; /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-25 {
            -ms-flex: 25%; /* IE10 */
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%; /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%; /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        .cont {
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 3px;
        }


        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 100%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        a {
            color: #2196F3;
        }

        hr {
            border: 1px solid lightgrey;
        }

        span.price {
            float: right;
            color: grey;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
            .row {
                flex-direction: column-reverse;
            }
            .col-25 {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
<div class="navbar navbar-light navbar-fixed-top" style="background-color:  #f4511e;">
    <ul class="nav navbar-nav">
        <li><a href="produits.php">Produits</a> </li>
        <li><a href="../../LogOut.php">LogOut[<?php echo ((isset($_SESSION['profil']))?($_SESSION['pseudo']):"") ?>]</a></li>
    </ul>
</div>


<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-md-8">
            <div class="cont">
                <form method="post" action="facture.php">

                    <div class="row">
                        <div class="col-50">
                            <h3>Adresse de facturation</h3>
                            <label for="fname"><i class="fa fa-user"></i>Nom Complet</label>
                            <input type="text" id="fname" name="firstname" placeholder="Nom Prenom">
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" placeholder="nom@example.com">
                            <label for="adr"><i class="fa fa-address-card-o"></i> Addresse</label>
                            <input type="text" id="adr" name="address" placeholder="adresse...">
                            <label for="city"><i class="fa fa-institution"></i> Ville</label>
                            <input type="text" id="city" name="city" placeholder="Manouba">

                            <div class="row">

                                <div class="col-50">
                                    <label for="zip">Zip</label>
                                    <input type="text" id="zip" name="zip" placeholder="2021">
                                </div>
                            </div>
                        </div>

                        <div class="col-50">
                            <h3>Payment</h3>
                            <label for="fname">Accepted Cards</label>
                            <div class="icon-container">
                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>
                            <label for="cname">Nom sur la carte</label>
                            <input type="text" id="cname" name="cardname" placeholder="Souhir Naassaoui">
                            <label for="ccnum">Numéro de Carte</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                            <label for="expmonth">Date Exp</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="September">
                            <div class="row">
                                <div class="col-50">
                                    <label for="expyear">Année Exp</label>
                                    <input type="text" id="expyear" name="expyear" placeholder="2018">
                                </div>
                                <div class="col-50">
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="352">
                                </div>
                            </div>
                        </div>

                    </div>

                    <input type="submit" value="Continue to checkout" class="btn" style="background-color: #f4511e;">
                </form>
            </div>

        </div>
        <div class="col-md-4">
            <div class="cont">
                <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>
                            <?php
                            $nb_article = count($_SESSION ['panier']);
                            echo $nb_article;
                            ?>

                        </b></span></h4>
                <?php
                $grand_total = 0; //initialisation de $grand_total
                foreach ($_SESSION ['panier'] as $key => $qte) //lecture du panier
                {
                    $rep = $pdo->prepare('SELECT * FROM produit WHERE REFERENCE= ?');
                    $rep->execute(array($key));
                    $donnees = $rep->fetch();
                    $nom = $donnees ['DESIGNATION'];
                    $prix = $donnees ['PRIX'];
                    $prix_total = $prix * $qte; //calculs prix total et total à payer TTC
                    $grand_total += $prix_total;
                    ?>
                    <p style="color: #f4511e;"><?php echo $nom?> <span class="price"><?php echo $prix_total.' dt'?></span></p>
                <?php
                }
                ?>

                <hr>
                <p>Total <span class="price" style="color:black"><b><?php echo $grand_total.' dt'?></b></span></p>
            </div>
        </div>
    </div>
</div>

</body>
</html>

