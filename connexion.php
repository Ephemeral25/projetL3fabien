<?php
// On définit les 4 variables nécessaires à la connexion MySQL :
$hostname = "localhost";
$port = 3306;
$user = "root";
$password = "";
$nom_base_donnees = "projetphp";

try {
    $connexion = new PDO('mysql:host=' . $hostname . ';port=' . $port . ';dbname=' . $nom_base_donnees, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $connexion->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage() . '<br />';
    echo 'N° : ' . $e->getCode();
    exit();
}
?>

