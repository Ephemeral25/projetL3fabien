<?php
include("../connexion.php");
?>
<h1>Ajouter des donn&eacute;es</h1>
<form action="ajout_envoi.php" method="post">
    <input name="type_ajout" type="hidden" value="enseignant"/>
    Nom de l'enseignant :
    <input type="text" name="nom"/>
    <br>
    Prénom de l'enseignant :
    <input type="text" name="prenom"/>
    <br>
    Id :
    <input type="text" name="id_pers"/>
    <br>
    <!-- DATE DE CREATION Basée sur date actuelle -->
    <!--DATE DE MODIFICATION BASée sur date ACTUELLE -->
    Cnu :
    <input type="text" name="cnu"/>
    <br>
    Fid_stat :
    <input type="text" name="fid_stat"/>
    <br>
    T&eacute;l&eacute;phone:
    <input type="text" name="telephone"/>
    <br>
    Email :
    <input type="text" name="email"/>
    <br>
    Miage :
    <input type="text" name="miage"/>
    <br>
    lib_pers
    <input type="text" name="lib_pers"/>
    <br>    
    last_years
    <input type="text" name="last_years"/>
    <br> 
    fid_cmp
    <input type="text" name="fid_cmp"/>
    <br>    
    fid_cod_apo
    <input type="text" name="fid_cod_apo"/>
    <br>    
    <input type="submit" value="Ajouter">
</form>
<a href="../index.php">Retour menu</a>

