<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../library/session.php';
require '../library/fonctions.php';

$bdd = ConnexionBDD();

// Si $_POST est pas vide
if (empty($_POST) == FALSE)
{
    // si la fonction est pas vide donc log bon
    if (GetMdp($bdd, $_POST['pseudo'], $_POST['mdp']) != NULL)
    {
        $_SESSION['connecter'] = TRUE;
        $_SESSION['pseudo'] = $_POST['pseudo'];
    }
    else
    {
        $TabErreur['connexion'] = 'Mauvais pseudo/mot de passe.';
    }
}

// Si l'user est connecté
if (Session() == TRUE)
{
    // on le redirige sur la vue de l'index
    require '../view/view_index.php';
}
// sinon
else  
{
     // encore la page pour se co
    require '../view/view_connexion.php';
}



