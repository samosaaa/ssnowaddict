<?php
    //define('HOMEPAGE_PATH','/');
    //define('CONTACT_PATH','/contact');

    //const HOMEPAGE_PATH = '/';
    const CONTACT_PATH = 'contact';

    require_once('views/base.php');
    
    var_dump($_SERVER['REQUEST_URI']);

    $requestUri = explode('/',$_SERVER['REQUEST_URI']); // un tableau contenant le chemin

    switch ($requestUri[array_key_last($requestUri)]) {
        /**case HOMEPAGE_PATH; //case '/';
            echo 'ACCEUIL';
            break;*/
        case CONTACT_PATH: //case '/contact':
            $controlleur = 'contact';
            echo 'CONTACT';
            break;
        default:
            $controlleur = 'accueil';
            echo 'ACCUEIL';
            break;

    }

    require_once('controllers/'.$controlleur.'Controller.php');

    /*
        if ($_SERVER['REQUEST_URI'] === '/') { // car les dossiers se termine par des / slash
            echo 'ACCEUIL';
        } elseif ($_SERVER['REQUEST_URI'] === '/contact') {
            echo 'CONTACT';
        }
     */

?>
