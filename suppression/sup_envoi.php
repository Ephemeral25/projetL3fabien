<?php
include("../connexion.php");
$req = $connexion->query("DELETE FROM donnees WHERE id = ".$_POST["id"]);
?>
<html>
    <body>
        Votre requête a bien été exécutée !<br>
        <a href="sup.php">Retour Suppression</a>
        <a href="../index.php">Retour Menu</a>
    </body>
</html>



