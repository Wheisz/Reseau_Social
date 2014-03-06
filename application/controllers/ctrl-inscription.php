<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require BASE_PATH . 'library/session.php';
require BASE_PATH . 'library/fonctions.php';

var_dump($_POST);


// si l'user envoyé des infos
if (empty($_POST) == FALSE)
{
    // si pseudo vide
    if ($_POST['pseudo'] == '')
    {
        $TabErreur['pseudo'] = 'Veuillez saisir un pseudo';
    }
    // sinon
    else
    {
        // on verifie qu'il est pas deja dans la base
        // si dedans -> erreur
        // sinon c'est bon pour le pseudo
        $TabValidite['pseudo'] = 'ok';
    }
    // si mdp vide
    if ($_POST['mdp'] == '')
    {
        $TabErreur['mdp'] = 'Veuillez saisir un mot de passe';
    }
    // sinon
    else
    {
        // si le mdp est < 7 caractères
        if (strlen($_POST['mdp']) <= 6)
        {
            $TabErreur['mdp'] = 'Il faut plus de 6 caractères';
        }
        // sinon
        else
        {
            // le mdp est ok
            $TabValidite['mdp'] = 'ok';
        }
    }
    // si confirmation != de mdp
    if ($_POST['mdp'] !== $_POST['mdp_bis'])
    {
        $TabErreur['mdp_bis'] = 'Veuillez saisir le même mot de passe que le précédent';
    }
    // sinon
    else
    {
        // si le mdp est ok
        if (isset($TabValidite['mdp']))
        {
            // le mdp bis est ok
            $TabValidite['mdp_bis'] = 'ok';
            // si le pseudo, le mdp sont ok
            if (isset($TabValidite['pseudo']) && isset($TabValidite['mdp']))
            {
                // on les sauvegarde dans la bdd
                $bdd = ConnexionBDD();
                SaveUser($bdd, $pseudo, $mdp);
            }
        }
        
    }
    var_dump($TabErreur);
    // si il y a une erreur
    if (empty($TabErreur) == FALSE)
    {
        require BASE_PATH . 'application/views/view-inscription.php';
    }
}



