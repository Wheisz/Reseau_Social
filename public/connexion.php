<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Session();

$bdd = ConnexionBDD();

// Si $_POST est pas vide
if (empty($_POST) == FALSE)
{
    // si la fonction est pas vide donc log bon
    if (empty(GetMdp($bdd, $_POST['pseudo'], $_POST['mdp'])) == FALSE)
    {
        $_SESSION['connecter'] = TRUE;
    }
}


require '../view/view_connexion.php';
