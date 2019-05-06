<?php
include("../connexion.php");
error_reporting(0);
if ($_FILES["userfile"]["tmp_name"]) {
    $fp = fopen($_FILES["userfile"]["tmp_name"], "r");
    $i = 0;
    ?>
    <p>Importation réussie</p>
    <?php
    while (!feof($fp)) {

        $ligne = fgets($fp, 4096);
        $ligne = explode(";", $ligne);
        $nom_enseignant = $ligne[0];
        $prenom_enseignant = $ligne[1];
        $promo = $ligne[2];
        $nom_eleve = $ligne[3];
        $prenom_eleve = $ligne[4];
        $societe = $ligne[5];
        $lieu = $ligne[6];
        $annee = $ligne[7];
        $fid_grp = $ligne[8];
        $sesame = $ligne[9];
        $import = $ligne[10];
        $visite = $ligne[11];
        $code = $ligne[12];
        $type_f = $ligne[13];
        $fid_pers = $ligne[14];
        $fid_ligne = $ligne[15];
        if ($i != 0) {
            $connexion->exec("INSERT INTO donnees VALUES(0,'" . $nom_enseignant . "','" . $prenom_enseignant . "','" . $promo . "','" . $nom_eleve . "','" . $prenom_eleve . "','" . $societe . "','" . $lieu . "','" . $annee . "','" . $fid_grp . "','" . $sesame . "','" . $import . "','" . $visite . "','" . $code . "','" . $type_f . "','" . $fid_pers . "','" . $fid_ligne . "');");
        }
        $i++;
    }
}
?>
<form action="import.php" method="post" enctype="multipart/form-data">
    <br/>   
    Choisir le fichier ".csv" à importer :
    <br/>
    <table border="0" cellspacing="0" cellpadding="3">
        <tr>
            <td>Fichier :</td> 
            <td>
                <input type="file" name="userfile" />
            </td> 
        </tr>
        <tr>
            <td></td>  
            <td> <input type="submit" value="Importer" name="valideImport" > </td> 
        </tr>
    </table> 
</form>
<a href="../index.php">Retour menu</a>
