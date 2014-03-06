<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author theodore
 */
class My_Entity_User 
{
    static function GetPseudo($pseudo)
    {
        $bdd = My_Db::ConnexionBDD();
        $requete = $bdd->prepare('SELECT pseudo_user FROM user WHERE pseudo_user = :pseudo');
        $requete->execute(array(':pseudo' => $pseudo));
        $donnees = $requete->fetch();

        return $donnees['pseudo_user'];

    }

    static function GetMdp($pseudo, $mdp)
    {
        $bdd = My_Db::ConnexionBDD();
        $requete = $bdd->prepare('SELECT mdp_user FROM user WHERE pseudo_user = :pseudo AND mdp_user = :mdp');
        $requete->execute(array(':pseudo' => $pseudo, ':mdp' => $mdp));
        $donnees = $requete->fetch();

        return $donnees['mdp_user'];

    }

    static function SaveUser($pseudo, $mdp)
    {
        $bdd = My_Db::ConnexionBDD();
        $requete = $bdd->prepare('INSERT INTO user (pseudo_user, mdp_user) VALUES (:pseudo, :mdp)');
        $requete->execute(array(':pseudo' => $pseudo, ':mdp' => $mdp));
        $donnees = $requete->fetch();
    }
}
