<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Db
 *
 * @author theodore
 */
class My_Db 
{
    /**
     * Crée et retourne une instance de PDO (objet de connexion à la base de donnée)
     * @return \PDO
     */
    static function ConnexionBDD()
    {
        try
        {
                return $bdd = new PDO('mysql:host=localhost;dbname=' . NOM_DB, 'root', '');
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
    }
}
