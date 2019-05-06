<?php
include("../connexion.php");
$req = $connexion->query("UPDATE donnees "
        . "SET nom_enseignant = '".$_POST["nom_enseignant"]."',"
        . "prenom_enseignant = '".$_POST["prenom_enseignant"]."',"
        . "promo = '".$_POST["promo"]."',"
        . "nom_eleve = '".$_POST["nom_eleve"]."',"
        . "prenom_eleve = '".$_POST["prenom_eleve"]."',"
        . "societe = '".$_POST["societe"]."',"
        . "lieu = '".$_POST["lieu"]."',"
        . "annee = '".$_POST["annee"]."',"
        . "fid_grp = '".$_POST["fid_grp"]."',"
        . "sesame = '".$_POST["sesame"]."',"
        . "import_done = '".$_POST["import"]."',"
        . "visite = '".$_POST["visite"]."',"
        . "code = '".$_POST["code"]."',"
        . "type_f = '".$_POST["type_f"]."',"
        . "fid_pers = '".$_POST["fid_pers"]."',"
        . "fid_ligne = '".$_POST["fid_ligne"]."' "
        . "WHERE id = ".$_POST["id"]);
?>
<html>
    <body>
        Votre requête a bien été exécutée !<br>
        <a href="modif.php">Retour Modification</a>
        <a href="../index.php">Retour Menu</a>
    </body>
</html>


