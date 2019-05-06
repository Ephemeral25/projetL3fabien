<?php
include("../connexion.php");
?>
<h1>Ajouter des données</h1>
<form action="ajout_envoi.php" method="post">
    <input name="type_ajout" type="hidden" value="tutorat"/>
    Nom de l'enseignant :
    <input type="text" name="nom_enseignant"/>
    <br>
    Prénom de l'enseignant :
    <input type="text" name="prenom_enseignant"/>
    <br>
    Promo :
    <input type="text" name="promo"/>
    <br>
    Nom de l'élève :
    <input type="text" name="nom_eleve"/>
    <br>
    Prénom de l'enseignant :
    <input type="text" name="prenom_eleve"/>
    <br>
    Société :
    <input type="text" name="societe"/>
    <br>
    Lieu :
    <input type="text" name="lieu"/>
    <br>
    Année :
    <input type="text" name="annee"/>
    <br>
    "fid_grp" :
    <input type="text" name="fid_grp"/>
    <br>
    "sesame" :
    <input type="text" name="sesame"/>
    <br>
    "import_done" :
    <select name="import">
        <option value="oui" disabled>Oui</option>
        <option value="non" selected="selected">Non</option>
    </select>
    <br>
    Visite :
    <input type="text" name="visite"/>
    <br>
    Code :
    <input type="text" name="code"/>
    <br>
    "type_f" :
    <input type="text" name="type_f"/>
    <br>
    "fid_pers" :
    <input type="text" name="fid_pers"/>
    <br>
    "fid_ligne" :
    <input type="text" name="fid_ligne"/>
    <br>
    <input type="submit" value="Ajouter">
</form>
<a href="../index.php">Retour menu</a>

