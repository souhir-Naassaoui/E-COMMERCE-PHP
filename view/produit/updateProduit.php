<?php
    $code = $_GET['code'];
    require_once("../model/conn.php");
    $pdo=dbConnexion();
    $ps = $pdo->prepare("SELECT * FROM produit WHERE REFERENCE=?");
    $params = array($code);
    $ps->execute($params);
    $client = $ps->fetch();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ajout Client</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../inc/bootstrap.min.css">
</head>
<body>
<?php require_once("enteteUser.php") ?>
<div class="col-md-6 col-md-offset-3">
    <form action="../controller/routerP.php?action=updateProduit&code=<?php echo $code?>" method="post">
        <div class="form-group">
            <label for="pseudo">Refenrece <?php echo($client['REFERENCE'])?></label>
            <input type="hidden" name="reference" value="<?php echo($client['REFERENCE'])?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="nom">Designation</label>
            <input type="text" name="designation" value="<?php echo($client['DESIGNATION'])?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="prenom">Prix</label>
            <input type="text" name="prix" value="<?php echo($client['PRIX'])?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Qtestock</label>
            <input type="text" name="qtestock" value="<?php echo($client['QTESTOCK'])?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="pseudo">TVA</label>
            <input type="password" name="tva" class="form-control">
        </div>
        <div class="form-group">
            <label for="telephone">CodeCat</label>
            <input type="text" name="codecat" value="<?php echo($client['CODECAT'])?>" class="form-control">
        </div>

        <input type="submit" value="Save">
    </form>
</div>
</body>
</html>
