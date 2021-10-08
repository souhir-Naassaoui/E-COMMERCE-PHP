
<?php
function dbConnexion()
{
    try {
        $strConnection = 'mysql:host=localhost;dbname=mon_boutique';
        $pdo = new PDO ($strConnection, 'root', '');
        return $pdo;
    } catch (PDOException $e) {
        $msg = 'ERREUR PDO dans ' . $e->getMessage();
        die($msg);
    }
}
?>