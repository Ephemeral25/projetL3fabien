<?php
include("../connexion.php");
?>
<html>
    <head>

    </head>
    <body>
        <form action="sup_envoi.php" method="post" onsubmit="return confirm('Êtes-vous sûr(e) de vouloir de supprimer ?'">
            Sélectionnez un numéro de ligne à supprimer :
            <?php
            $req = $connexion->query("SELECT * FROM donnees");
            $req->execute();
            ?>
            <select name="id">
                <option disabled></option>
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
            <br>
            <input type="submit" value="supprimer"/>
            <a href="../index.php">Retour menu</a>
        </form>
    </body>
</html>
