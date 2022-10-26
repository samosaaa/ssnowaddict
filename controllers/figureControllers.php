<?php

final class FigureController 
{
    function create(): void
    {
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            var_dump($_POST);die;
        }
        require_once('views/pages/figure/create.php');
    }

    function read()
    {
        ;
    }

    function update()
    {
        ;
    }

    function delete()
    {
        ;
    }

    function list()
    {
        ;
    }
}

?>