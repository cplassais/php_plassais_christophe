<?php
require_once('models/categoryModel.php');
$aCategory = array();
$oCategory = new Category('Eclairage','Eclairage electrique',12);
$oCategory->addToList($aCategory);
$oCategory = new Category('Salon','ameublement',1);
$oCategory->addToList($aCategory);
$oCategory = new Category('Chambre','literie & meuble', 52);
$oCategory->addToList($aCategory);
$oCategory = new Category('Decoration murale', 'par accrochage',5);
$oCategory->addToList($aCategory);

$sortCategory = new Category ('','',0);
$sortCategory->sortToList($aCategory);

include('index.php');
include('views/categoryView.php');