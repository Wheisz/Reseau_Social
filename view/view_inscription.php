<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inscription</title>
    </head>
    <body>
        <?php //EnTete() ?>
        <form method="post" action="public/inscription.php" enctype="multipart/form-data">
            <div>
                <label for="pseudo">Pseudo : </label>
                <input id="pseudo" name="pseudo" type="text"/>
            </div>
            <div>
                <label for="mdp">Mot de passe : </label>
                <input id="mdp" name="mdp" type="password"/><br/>
                <label for="mdp_bis">Confirmation : </label>
                <input id="mdp_bis" name="mdp_bis" type="password"/>
            </div>
            <div>
                <input type="submit" value="Valider"/>
            </div>
        </form>
    </body>
</html>
