<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function Session()
{
    session_start();
    
    if (isset($_SESSION['connecter']))
    {
        if ($_SESSION['connecter'] === "TRUE")
        {
            return $_SESSION['connecter'];
        }
        else
        {
            return FALSE;
        }
    }
    else
    {
        return FALSE;
    }
}