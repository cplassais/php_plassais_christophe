<?php
$aParamsURL = explode('/', $_SERVER['REQUEST_URI']);
switch ($aParamsURL[1]) {
    case 'category':
        include 'controllers/categoryController.php';
        break;
    case 'addcategory':
        include 'controllers/addCategoryController.php';
        break;
    case 'delcategory':
        include 'controllers/delCategoryController.php';
        break;
    case 'article':
        include 'controllers/articleController.php';
        break;
    default:
        include 'controllers/errorPageController.php';
}
