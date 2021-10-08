<?php
    $code = $_GET['code'];
    require_once("../../model/conn.php");
    $pdo=dbConnexion();
    $ps = $pdo->prepare("SELECT * FROM client WHERE PSEUDO=?");
    $params = array($code);
    $ps->execute($params);
    $client = $ps->fetch();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ajout Client</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>

<div class="col-md-6 col-md-offset-3">
    <form action="../../controller/router.php?action=updateClient&code=<?php echo $code?>" method="post">
        <div class="form-group">
            <label for="pseudo">Pseudo <?php echo($client['PSEUDO'])?></label>
            <input type="hidden" name="pseudo" value="<?php echo($client['PSEUDO'])?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" value="<?php echo($client['NOM'])?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" value="<?php echo($client['PRENOM'])?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="<?php echo($client['EMAIL'])?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="pseudo">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="telephone">Telephone</label>
            <input type="text" name="telephone" value="<?php echo($client['TELEPHONE'])?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" value="<?php echo($client['ADRESSE'])?>" class="form-control">
        </div>
        <div class="form-group">
            <label class="control-label">Photo :</label>
            <input type="file" name="photo" class="form-control"/>
            <img src="images/<?php echo($client['PHOTO']) ?>" width="100" height="100"/>
        </div>
        <input type="submit" value="Save">
    </form>
</div>
</body>
</html>
