<?php
require_once('models/articleModel.php');
$aArticle = array();
$oArticle = new Article('Table','basse','https://picsum.photos/200/300',45,'Thomas','thomas@gm.com');
$oArticle->addToList($aArticle);
$oArticle = new Article('Luminaire','plafonnier','https://picsum.photos/200/300',100,'Ikes','Ikes@gm.com');
$oArticle->addToList($aArticle);
$oArticle = new Article('Lit','deux places', 'https://picsum.photos/200/300',72,'Ines','ines@gm.com');
$oArticle->addToList($aArticle);
$oArticle = new Article('Decoration murale', 'tableaux','https://picsum.photos/200/300',78,'Greta','greta@gm.com');
$oArticle->addToList($aArticle);





include('index.php');
include('views/articleView.php');