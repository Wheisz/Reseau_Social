<?php
if (Session() == TRUE)
{
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Réseau IIA</title>
        <link rel="stylesheet" href="../public/css/general.css"/>
    </head>
    <body>
        <?php EnTete() ?>
            <!--  Voir ce qui se raconte sur ... -->
            <div>
                Voir ce qui se raconte sur ...
            </div>
            <!--  formulaire : [saisie texte]         Rechercher -->
            <form method="post" action="../public/index.php" enctype="multipart/form-data">
                <label for="texte_recherche"></label>
                <input id="texte_recherche" type="text" name="texte_recherche" value="Saisissez votre texte..." onclick="value=''"/>
                <input type="submit" value="Rechercher"/>   
            </form>
            <!-- liste des derniers membres : -->
            <?php ListeDernierMembre() ?>
        </div>
    </body>
</html>

<?php
}
else
{
    require '../public/connexion.php';
}

?>