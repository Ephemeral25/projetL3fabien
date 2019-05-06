<?php
//paramétrage et connexion à la base de données
function connexion() {
    $dbdbname = '10.0.2.2:1522/PDB1';
    $dbuser = 'pmuser';
    $dbpassword = 'oracle';
    $dbcharset = 'utf8';
    if (!isset($connexion)) {
        try {
            $conn = oci_connect($dbuser, $dbpassword, $dbdbname, $dbcharset);
        } 
        catch (Exception $ex) {
                print_r(htmlentities($ex['message'], ENT_QUOTES));
                trigger_error(htmlentities($ex['message'], ENT_QUOTES), E_USER_ERROR);
        }
    }
    $_SESSION['conn'] = $connexion;
    return $connexion;
}

$connexion = connexion($connexion);