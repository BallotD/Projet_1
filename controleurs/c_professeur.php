<?php

if (!isset($_REQUEST['action']))
	$action = "gererdemande" ;
else
	$action = $_REQUEST['action'] ;

switch ($action)
{	   
    //page d'accueil de la gestion des demandes
    case "gererdemande" : {
        require "vues/v_manage_request_prof.php" ; 
        break ;  
    }
	case "modifierMdp" : {
        $oldPswrd = $_REQUEST['oldPassword'];
        $newPswrd = $_REQUEST['newPassword'];

        if (getUserbyMail($_SESSION['mail'])['password'] == md5($oldPswrd))
        {
            updatePassword(md5($newPswrd));
            echo("Changement reussi");// signaler si la requete a reussie
            require "vues/v_accueil.php" ;
        }
        else 
            echo('Erreur sur l\'ancien mot de passe.');         
    }   
}
?>