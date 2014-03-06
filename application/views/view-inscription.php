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
        <link rel="stylesheet" href="../public/css/general.css"/>
    </head>
    <body>
        <?php EnTete() ?>
        <form method="post" action="inscription.php" enctype="multipart/form-data">
            <?php if (isset($TabErreur['pseudo'])) 
            {
                echo '<div class="error">' . $TabErreur['pseudo'] . '</div>';
            }
            ?>            
            <div>
                <label for="pseudo">Pseudo : </label>
                <input id="pseudo" name="pseudo" type="text"/>
            </div>
            <?php if (isset($TabErreur['mdp'])) 
            {
                echo '<div class="error">' . $TabErreur['mdp'] . '</div>';
            }
            ?>
            <div>
                <label for="mdp">Mot de passe : </label>
                <input id="mdp" name="mdp" type="password"/>
            </div>
            <?php if (isset($TabErreur['mdp_bis'])) 
            {
                echo '<div class="error">' . $TabErreur['mdp_bis'] . '</div>';
            }
            ?>
            <div>
                <label for="mdp_bis">Confirmation : </label>
                <input id="mdp_bis" name="mdp_bis" type="password"/>
            </div>
            <div>
                <input type="submit" value="Valider"/>
            </div>
        </form>
    </body>
</html>
