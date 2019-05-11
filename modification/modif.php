<?php
include("../connexion.php");
?>
<html>
    <head>

    </head>
    <body>
        <form action="modif.php" method="post">
            Sélectionnez un num&eacute;ro de ligne &agrave; modifier :
            <?php
            $req = $connexion->query("SELECT * FROM donnees");
            $req->execute();
            ?>
            <select name="id" onchange="submit();">
                <option disabled selected="selected"></option>
                <?php
                while ($res = $req->fetch(PDO::FETCH_OBJ)) {
                    if (isset($_POST["id"]) && $_POST["id"] == $res->id) {
                        ?>
                        <option value="<?php echo $res->id ?>" selected="selected"><?php echo $res->id ?></option>
                        <?php
                    } else {
                        ?>
                        <option value="<?php echo $res->id ?>"><?php echo $res->id ?></option>
                        <?php
                    }
                }
                ?>
            </select>
        </form>
        <a href="../index.php">Retour menu</a>
        <?php
        if (isset($_POST["id"])) {
            $req = $connexion->query("SELECT * FROM donnees WHERE id = " . $_POST["id"]);
            $req->execute();
            $res = $req->fetch(PDO::FETCH_OBJ);
            ?>
            <form action="modif_envoi.php" method="post">
                <input name="type_modif" type="hidden" value="tutorat"/>
                Nom de l'enseignant :
                <input type="text" name="nom_enseignant" value="<?php echo $res->nom_enseignant ?>"/>
                <br>
                Prénom de l'enseignant :
                <input type="text" name="prenom_enseignant" value="<?php echo $res->prenom_enseignant ?>"/>
                <br>
                Promo :
                <input type="text" name="promo" value="<?php echo $res->promo ?>"/>
                <br>
                Nom de l'&eacute;l&egrave;ve :
                <input type="text" name="nom_eleve" value="<?php echo $res->nom_eleve ?>"/>
                <br>
                Prénom de l'enseignant :
                <input type="text" name="prenom_eleve" value="<?php echo $res->prenom_eleve ?>"/>
                <br>
                Soci&eacute;t&eacute; :
                <input type="text" name="societe" value="<?php echo $res->societe ?>"/>
                <br>
                Lieu :
                <input type="text" name="lieu" value="<?php echo $res->lieu ?>"/>
                <br>
                Ann&eacute;e :
                <input type="text" name="annee" value="<?php echo $res->annee ?>"/>
                <br>
                "fid_grp" :
                <input type="text" name="fid_grp" value="<?php echo $res->fid_grp ?>"/>
                <br>
                "sesame" :
                <input type="text" name="sesame" value="<?php echo $res->sesame ?>"/>
                <br>
                "import_done" :
                <select name="import">
                    <option value="<?php echo $res->import_done ?>" selected="selected"><?php echo $res->import_done ?></option>
                    <option value="oui">Oui</option>
                    <option value="non">Non</option>
                </select>
                <br>
                Visite :
                <input type="text" name="visite" value="<?php echo $res->visite ?>"/>
                <br>
                Code :
                <input type="text" name="code" value="<?php echo $res->code ?>"/>
                <br>
                "type_f" :
                <input type="text" name="type_f" value="<?php echo $res->type_f ?>"/>
                <br>
                "fid_pers" :
                <input type="text" name="fid_pers" value="<?php echo $res->fid_pers ?>"/>
                <br>
                "fid_ligne" :
                <input type="text" name="fid_ligne" value="<?php echo $res->fid_ligne ?>"/>
                <br>
                <input type="hidden" name="id" value="<?php echo $res->id ?>" />
                <input type="submit" value="Modifier">
            </form>
            <?php
        }
        ?>
    </body>
</html>
