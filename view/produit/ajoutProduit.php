<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="../../css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/style.css"/>
</head>
<body style="background-color: #eadede">

<div class="navbar navbar-light navbar-fixed-top" style="background-color:  #f4511e;">
    <ul class="nav navbar-nav">

        <li><a href="clients.php"><span style="color: #a53535">Clients</span></a> </li>
        <li><a href="../produit/produits.php"><span style="color: #a53535">Produits</span></a> </li>
        <li><a href="../client/SaisieClientAdmin.php"><span style="color: #a53535">ajoutClient</span></a> </li>
        <li><a href="../produit/ajoutProduit.php"><span style="color: #a53535">ajoutProduit</span></a> </li>
        <li><a href="../../LogOut.php"><span style="color: #a53535">LogOut[<?php echo ((isset($_SESSION['profil']))?($_SESSION['pseudo']):"") ?>]</span></a></li>
    </ul>
</div>

<div class="container">
    <div class="row" style="margin-top: 100px;">
        <div class="col-md-5">
            <img src="../../login.jpg" alt="" height="700px" width="472px" style="border-top-left-radius: 30px 50%">
        </div>
        <div class="col-md-6" style="background-color: whitesmoke;height: 700px;border-top-right-radius: 30px 50%">
            <h2><img src="../produit/ffpdf/logo1.png" alt="" height="50px" width="50px">  ENIS Shopping</h2>
            <h3>Ajout produit </h3>
                <form action="../../controller/routerP.php?action=addProduit" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="pseudo">Reference</label>
                        <input type="text" name="reference" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nom">Designation</label>
                        <input type="text" name="designation" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prix</label>
                        <input type="text" name="prix" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nom">Qte </label>
                        <input type="text" name="qtestock" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">TVA</label>
                        <input type="text" name="tva" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pseudo">Code Categorie</label>
                        <input type="text" name="codecat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Photo :</label>
                        <input type="file" name="photo" class="form-control"/>
                    </div>
                    <input type="submit" class="btn" style="background-color: #f4511e;" value="Save">
                </form>

        </div>

    </div>
</div>
</body>
</html>



<?php  ?>
<!DOCTYPE html>
<html>
<head>
    <title>Ajout Produit</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../inc/style.css">
</head>
<body>

<div class="col-md-6 col-md-offset-3 spacer">

</div>
</body>
</html>
