<?php

require_once '../constants.php';

$request = $_SERVER['REDIRECT_URL'];

switch ($request) {
    case '/' :
    case '' :
        $paginaAtual = 'Início';

        require PATH_ABS . '/view/pages/home.php';
        break;

    case '/proglinear' :
        require PATH_ABS . '/view/pages/proglinear1.php';
        break;

    default:
        require PATH_ABS . '/view/pages/404.php';
        break;
}