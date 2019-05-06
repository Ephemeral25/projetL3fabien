<?php
include("../connexion.php");

switch($_POST['type_modif']) {
    case'enseignant':
        $date = date("Y-m-d H:i:s");
        $req = $connexion->query("UPDATE enseignants "
        . "SET nom = '".$_POST["nom"]."',"
        . "prenom = '".$_POST["prenom"]."',"
        . "id_pers = '".$_POST["id_pers"]."',"
        . "cnu = '".$_POST["cnu"]."',"
        . "fid_stat = '".$_POST["fid_stat"]."',"
        . "telephone = '".$_POST["telephone"]."',"
        . "email = '".$_POST["email"]."',"
        . "miage = '".$_POST["miage"]."',"
        . "lib_pers = '".$_POST["lib_pers"]."',"
        . "last_years = '".$_POST["last_years"]."',"
        . "fid_cmp = '".$_POST["fid_cmp"]."',"
        . "fid_cod_apo = '".$_POST["fid_cod_apo"]."',"
        . "d_modification = '$date',"
        . "WHERE id_pers = ".$_POST["id_pers"]);
        break;
    case'tutorat':
        $date = date("Y-m-d H:i:s");
        $req = $connexion->query("UPDATE donnees "
        . "SET nom = '".$_POST["nom"]."',"
        . "prenom = '".$_POST["prenom"]."',"
        . "id_pers = '".$_POST["id_pers"]."',"
        . "cnu = '".$_POST["cnu"]."',"
        . "fid_stat = '".$_POST["fid_stat"]."',"
        . "telephone = '".$_POST["telephone"]."',"
        . "email = '".$_POST["email"]."',"
        . "miage = '".$_POST["miage"]."',"
        . "lib_pers = '".$_POST["lib_pers"]."',"
        . "last_years = '".$_POST["last_years"]."',"
        . "fid_cmp = '".$_POST["fid_cmp"]."',"
        . "fid_cod_apo = '".$_POST["fid_cod_apo"]."',"
        . "d_modification = '$date',"
        . "WHERE id_pers = ".$_POST["id_pers"]);
        break;
}

?>
<html>
    <body>
        Votre requête a bien été exécutée !<br>
        <a href="modif.php">Retour Modification</a>
        <a href="../index.php">Retour Menu</a>
    </body>
</html>


