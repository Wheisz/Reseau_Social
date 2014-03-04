<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function ConnexionBDD()
{
    try
    {
            return $bdd = new PDO('mysql:host=localhost;dbname=reseau_social', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
}

function GetPseudo($bdd, $pseudo)
{
    $requete = $bdd->prepare('SELECT pseudo_user FROM user WHERE pseudo_user = :pseudo');
    $requete->execute(array(':pseudo' => $pseudo));
    $donnees = $requete->fetch();
    
    return $donnees['pseudo_user'];
    
}

function GetMdp($bdd, $pseudo, $mdp)
{
    $requete = $bdd->prepare('SELECT mdp_user FROM user WHERE pseudo_user = :pseudo AND mdp_user = :mdp');
    $requete->execute(array(':pseudo' => $pseudo, ':mdp' => $mdp));
    $donnees = $requete->fetch();
    
    return $donnees['mdp_user'];
    
}

function SaveUser($bdd, $pseudo, $mdp)
{
    $requete = $bdd->prepare('SELECT mdp_user FROM user WHERE pseudo_user = :pseudo AND mdp_user = :mdp');
    $requete->execute(array(':pseudo' => $pseudo, ':mdp' => $mdp));
    $donnees = $requete->fetch();
}