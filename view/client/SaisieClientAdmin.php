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
        <li><a href="SaisieClientAdmin.php"><span style="color: #a53535">ajoutClient</span></a> </li>
        <li><a href="../produit/ajoutProduit.php"><span style="color: #a53535">ajoutProduit</span></a> </li>
        <li><a href="../../LogOut.php"><span style="color: #a53535">LogOut[<?php echo ((isset($_SESSION['profil']))?($_SESSION['pseudo']):"") ?>]</span></a></li>
    </ul>
</div>

<div class="container">
    <div class="row" style="margin-top: 100px;">
        <div class="col-md-5">
            <img src="../../login.jpg" alt="" height="750px" width="472px" style="border-top-left-radius: 30px 50%">
        </div>
        <div class="col-md-6" style="background-color: whitesmoke;height: 750px;border-top-right-radius: 30px 50%">
            <h2><img src="../produit/ffpdf/logo1.png" alt="" height="50px" width="50px">  ENIS Shopping</h2>
            <h3>S'inscrire' </h3>
            <form method="post" action="../../controller/router.php?action=addClient" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    <input type="text" name="pseudo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pseudo">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="telephone">Telephone</label>
                    <input type="text" name="telephone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" name="adresse" class="form-control">
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
