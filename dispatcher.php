<?php
$aParamsURL = explode('/', $_SERVER['REQUEST_URI']);
echo($aParamsURL[0]);
switch ($aParamsURL[1]) {
    case 'category':
        include 'controllers/categoryController.php';
        break;
    default:
        include 'controllers/errorPageController.php';
}
