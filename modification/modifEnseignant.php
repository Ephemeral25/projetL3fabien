<?php
include("../connexion.php");
?>
<html>
    <head>
    </head>
    <body>
        <form action="modifEnseignant.php" method="post">
            Sélectionnez un numéro de ligne à modifier :
            <?php
            $req = $connexion->query("SELECT * FROM enseignants");
            $req->execute();
            ?>
            <select name="id" onchange="submit();">
                <option disabled selected="selected"></option>
                <?php
                while ($res = $req->fetch(PDO::FETCH_OBJ)) {
                    if (isset($_POST["id_pers"]) && $_POST["id_pers"] == $res->id_pers) {
                        ?>
                        <option value="<?php echo $res->id_pers ?>" selected="selected"><?php echo $res->nom; echo "&nbsp;"; echo $res->prenom ?></option>
                        <?php
                    } else {
                        ?>
                        <option value="<?php echo $res->id_pers ?>"><?php echo $res->nom; echo "&nbsp;"; echo $res->prenom ?></option>
                        <?php
                    }
                }
                ?>
            </select>
        </form>
        <a href="../index.php">Retour menu</a>
        <?php
        if (isset($_POST["id_pers"])) {
            $req = $connexion->query("SELECT * FROM enseignants WHERE id = " . $_POST["id_pers"]);
            $req->execute();
            $res = $req->fetch(PDO::FETCH_OBJ);
            ?>
            <form action="modif_envoi.php" method="post">
                <input name="type_modif" type="hidden" value="enseignant"/>
                <input name="type_modif" type="hidden" value="enseignant"/>
                Date modification:
                <input type="text" name="nom_enseignant" value="<?php echo $res->d_modification ?>"/>
                <br>
                Nom de l'enseignant :
                <input type="text" name="nom_enseignant" value="<?php echo $res->nom ?>"/>
                <br>
                Prénom de l'enseignant :
                <input type="text" name="prenom_enseignant" value="<?php echo $res->prenom ?>"/>
                <br>
                id_pers :
                <input type="text" name="promo" value="<?php echo $res->id_pers ?>"/>
                <br>
                Nom de l'élève :
                <input type="text" name="nom_eleve" value="<?php echo $res->nom_eleve ?>"/>
                <br>
                cnu :
                <input type="text" name="prenom_eleve" value="<?php echo $res->prenom_eleve ?>"/>
                <br>
                fid_stat:
                <input type="text" name="societe" value="<?php echo $res->societe ?>"/>
                <br>
                telephone :
                <input type="text" name="lieu" value="<?php echo $res->lieu ?>"/>
                <br>
                email :
                <input type="text" name="annee" value="<?php echo $res->annee ?>"/>
                <br>
                miage :
                <input type="text" name="fid_grp" value="<?php echo $res->fid_grp ?>"/>
                <br>
                lib_pers :
                <input type="text" name="sesame" value="<?php echo $res->sesame ?>"/>
                <br>
                last_years :
                <input type="text" name="visite" value="<?php echo $res->visite ?>"/>
                <br>
                Code :
                <input type="text" name="code" value="<?php echo $res->code ?>"/>
                <br>
                fid_cmp :
                <input type="text" name="type_f" value="<?php echo $res->type_f ?>"/>
                <br>
                fid_cod_apo :
                <input type="text" name="fid_pers" value="<?php echo $res->fid_pers ?>"/>
                <br>
                <input type="hidden" name="id" value="<?php echo $res->id_pers ?>" />
                <input type="submit" value="Modifier">
            </form>
            <?php
        }
        ?>
    </body>
</html>
