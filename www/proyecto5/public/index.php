<?php

include_once('../vendor/cervezza/Utils/src/Utils/Router.php');
$route = Router($_SERVER['REQUEST_URI']);

switch($route['controller'])
{
    case 'web':
      ob_start();
        include_once("../modules/Web/src/Web/Controller/WebController.php");
        $content = ob_get_contents();
      ob_end_clean();

    break;
    case 'login':
      ob_start();
        include_once("../modules/Login/src/Login/Controller/LoginController.php");
        $content = ob_get_contents();
      ob_end_clean();
    break;
    case 'error':
      ob_start();
        include_once("../modules/Error/src/Error/Controller/ErrorController.php");
        $content = ob_get_contents();
      ob_end_clean();
    break;
    default:
    case 'users':
      ob_start();
        include_once("../modules/UserRegister/src/UserRegister/Controller/UserController.php");
        $content = ob_get_contents();
      ob_end_clean();
    break;
}

echo $content;
// echo "On maintenance";
