FRONT CONTROLLER
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../application/config/config.php';



/***
 * Charge les librairies
 */
function _autoload($pClassName)
{    
    // Modifie My_Db en My/Db
    $pClassName = str_replace('_', '/', $pClassName);
    // Modifie en .php
    $pClassName = $pClassName . '.php';
    // Charge ../application/models/....php
    require CHEMIN_MODELS . $pClassName;
}




$controller = BASE_PATH . 'application/controllers/ctrl-' . $_GET['page'] . '.php';
$view = BASE_PATH . 'application/views/view-' . $_GET['page'] . '.php';

// On teste si le controller existe
if (is_file($controller) == TRUE)
{
    // Charge le controller (les traitements)
    require $controller;
    // On teste si la vue existe
    if (is_file($view) == TRUE)
    {
    // Charge la vue (le rendu HTML)
    require $view;
    }
    else
    {
        echo 'VUE INTROUVABLE';
    }

}
else
{
    echo 'PAGE INTROUVABLE';
}
