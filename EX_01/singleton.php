<?php
 
function connect_to_database(){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $databasename = "base-site-rooting";
    try{
        $pdo = new PDO ("mysql:host=$servername; dbname=$databasename", $username, $password);
        echo "Vous êtes connectés";
        return $pdo;
    }catch(PDOException $e) {
        echo "Vous n'avez pas pu vous connecter $e";
        return $e;
    }
}
?>
