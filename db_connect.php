<?php
$dsn = "mysql:host=localhost;dbname=test_neuropsy;charset=UTF8";
$user = "root";
$pass = "root";
try
{
    $base = new PDO($dsn,$user,$pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    //echo 'Connexion à la base de données réussi';
}
catch(Exception $ex)
{
    die('Impossible de se connecter à la base de donnée' . $ex->getMessage());
}

?>