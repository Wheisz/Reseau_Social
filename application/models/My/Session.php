<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Session
 *
 * @author theodore
 */
class My_Session 
{
   
    static function Session()
    {    
        if (isset($_SESSION['connecter']))
        {
            if ($_SESSION['connecter'] === "TRUE")
            {
                return TRUE;
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
}
