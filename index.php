<?php
    //define('HOMEPAGE_PATH','/');
    //define('CONTACT_PATH','/contact');

    const HOMEPAGE_PATH = '/';
    const CONTACT_PATH = '/contact';

    require_once('views/base.php');

    var_dump($_SERVER['REQUEST_URI']);

    switch($_SERVER['REQUEST_URI']) {
        case HOMEPAGE_PATH; //case '/';
            echo 'ACCEUIL';
            break;
        case CONTACT //case '/contact':
            echo 'CONTACT';
            break;
    }

    /*
        if ($_SERVER['REQUEST_URI'] === '/') { // car les dossiers se termine par des / slash
            echo 'ACCEUIL';
        } elseif ($_SERVER['REQUEST_URI'] === '/contact') {
            echo 'CONTACT';
        }
     */

?>