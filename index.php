<?php
    require_once('controllers/homepageController.php');

        try {
            if (isset($_GET['action'] && '' !== $_GET['action'])) {
                $action = $_GET['action'];
                if ('figure' === $_GET['controller']) {
                    $figureController = new FigureController();

                    if ('create' === $action) {
                        $figureController->create();
                    }
                }
            } else {
                (new HomepageController())->home();
            }
        } catch ( \Exception $exception) {
            throw new \Exception($exception->getMessage());
        }









/**
    //define('HOMEPAGE_PATH','/');
    //define('CONTACT_PATH','/contact');

    //const HOMEPAGE_PATH = '/';
    const CONTACT_PATH = 'contact';

    require_once('views/base.php');
    
    var_dump($_SERVER['REQUEST_URI']);

    $requestUri = explode('/', $_SERVER['REQUEST_URI']); // un tableau contenant le chemin

    switch ($requestUri[array_key_last($requestUri)]) {
        //case HOMEPAGE_PATH; //case '/';
            //echo 'ACCEUIL';
            //break;
        case CONTACT_PATH: //case '/contact':
            $controller = 'contact';
            $action='contact';
            echo 'CONTACT';
            break;
        default:
            $controller = 'homepage';
            $action='home';
            echo 'ACCUEIL';
            break;
    }

    require_once('controllers/'.$controller.'Controller.php');

    $controller = new ($controller.'Controller');

    echo $controller->{$action}('Jacques');
*/


/**
    if ($_SERVER['REQUEST_URI'] === '/') { // car les dossiers se termine par des / slash
        echo 'ACCEUIL';
    } elseif ($_SERVER['REQUEST_URI'] === '/contact') {
        echo 'CONTACT';
    }
    */

?>
