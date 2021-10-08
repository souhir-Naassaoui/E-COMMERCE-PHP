<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body style="background-color: #eadede">

<div class="navbar navbar-light navbar-fixed-top" style="background-color: #f4511e;">
    <ul class="nav navbar-nav">
        <li><a href="index.php">HOME</a> </li>
    </ul>
</div>
<div class="container">
    <div class="row" style="margin-top: 100px;">
        <div class="col-md-4 col-md-offset-1">
            <img src="login.jpg" alt="" height="500px" width="380px" style="border-top-left-radius: 30px 50%">
        </div>
        <div class="col-md-6" style="background-color: whitesmoke;height: 500px;border-top-right-radius: 30px 50%">
                    <h2><img src="view/produit/ffpdf/logo1.png" alt="" height="50px" width="50px">  ENIS Shopping</h2>
                    <h3>Se connecter </h3>
                    <form method="post" action="Authentifier.php">
                        <div class="form-group">
                            <label class="control-label">Pseudo :</label>
                            <input type="text" name="username" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Pass :</label>
                            <input type="password" name="password" class="form-control"/>
                        </div>

                        <div>
                            <button type="submit" class="btn" style="background-color: #f4511e;">Login</button>
                        </div>
                    </form>
                    <h4>Vous n'avez pas de compte ? <a href="view/client/SaisieClient.php">S'inscrire</a></h4>
        </div>

    </div>
</div>
</body>
</html>
