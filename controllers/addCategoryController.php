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

if(isset($_POST['name']) && (strlen($_POST['name'])>1 && strlen($_POST['name'])<=50)):
    $oCategory = new Category($_POST['name']);
    $oCategory->addNewCategory($aCategory);
else:
    $msg = "Nom invalide";
endif;

include('index.php');
include('views/addCategoryView.php');