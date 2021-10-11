<?php
require_once('models/categoryModel.php');
$aCategory = array();
$oCategory = new Category('Table','basse',12);
$oCategory->addToList($aCategory);
$oCategory = new Category('Luminaire','plafonnier',1);
$oCategory->addToList($aCategory);
$oCategory = new Category('Lit','deux places', 52);
$oCategory->addToList($aCategory);
$oCategory = new Category('Decoration murale', 'tableaux',5);
$oCategory->addToList($aCategory);

$oCategory = new Category('');
$oCategory->deleteToListByIndex($aCategory, $aParamsURL[2]);

include 'index.php';
include('views/categoryView.php');
include('views/delCategoryView.php');