<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function ListeDernierMembre()
{
    // On lit le log.txt
    // On affiche les 4 derniers
}

function EnTete()
{
     echo '<div id="en_tete">Réseau IIA ' . date("D d M Y") 
            // Si on est pas connecté : inscription / Connexion à mon compte 
            // Si on est connecté : Mon compte nom_du_compte / Déconnexion 
        . '</div>';
}