<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Si $_POST est pas vide
if (empty($_POST) == FALSE)
{
    require BASE_PATH.'library/session.php';
    require BASE_PATH.'library/fonctions.php';
    
    // si la fonction est pas vide donc log bon
    if (My_Entity_User::GetMdp($_POST['pseudo'], $_POST['mdp']) != NULL)
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
if (My_Session::Session() == TRUE)
{
    // on le redirige sur la vue de l'index
    require CHEMIN_VIEWS . 'view-index.php';
}
// sinon
else  
{
     // encore la page pour se co
    require CHEMIN_VIEWS .'application/views/view-connexion.php';
}



