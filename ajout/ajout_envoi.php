<?php
include("../connexion.php");

switch($_POST['type_ajout']) {
    case 'enseignant':
        $date = date("Y-m-d H:i:s");
        $req=$connexion->query("INSERT INTO enseignants VALUES('" . $_POST['id_pers'] . "','$date','$date','" . $_POST["nom"] . "','" . $_POST["prenom"] . "','" . $_POST["cnu"] . "','" . $_POST["fid_stat"] . "','" . $_POST["telephone"] . "','" . $_POST["email"] . "','" . $_POST["miage"] . "','" . $_POST["lib_pers"] . "','" . $_POST["last_years"] . "','" . $_POST["fid_cmp"] . "','" . $_POST["fid_cod_apo"] ."');");
        break;
    case 'tutorat':
        $req=$connexion->query("INSERT INTO donnees VALUES(0,'" . $_POST['nom_enseignant'] . "','" . $_POST["prenom_enseignant"] . "','" . $_POST["promo"] . "','" . $_POST["nom_eleve"] . "','" . $_POST["prenom_eleve"] . "','" . $_POST["societe"] . "','" . $_POST["lieu"] . "','" . $_POST["annee"] . "','" . $_POST["fid_grp"] . "','" . $_POST["sesame"] . "','" . $_POST["import"] . "','" . $_POST["visite"] . "','" . $_POST["code"] . "','" . $_POST["type_f"] . "','" . $_POST["fid_pers"] . "','" . $_POST["fid_ligne"] . "');");
        break; 
    case 'etudiant':
        break;
}
?>
<html>
    <body>
        Votre <?php echo$_POST['type_ajout'];?> a bien été ajouté !<br>
        <a href="ajout.php">Retour Ajout</a>
        <a href="../index.php">Retour Menu</a>
    </body>
</html>

