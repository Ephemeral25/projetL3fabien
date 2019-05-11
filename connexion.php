<?php
$user = "oracle";
$password = "oracle";

try {
    $connexion = new PDO("oci:dbname=//10.0.2.2:1522/pmuser", '$user', '$password');
    $connexion->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage() . '<br />';
    echo 'NÂ° : ' . $e->getCode();
    exit();
    
}

