<?php

// use myNamespace\Article;
// use myNamespace\Autoloader;


require 'Autoloader.php';

Autoloader::register();
$obj = new Object;

echo $obj->hello() . "<br>";


// Surcharge d'un attribut : unAttribut$obj->unAttribut= 'Valeur';
$obj->unAttribut= 'Valeur';
$obj->unAttribut1= 'Valeur1';
$obj->unAttribut2= 'Valeur2';


$obj->autreAttribut = 'valeurOtherATT';

// Afficher  valeur si c'est un attribut de surcharge

var_dump($obj->autreAttribut);


if (isset ($obj->autreAttribut))
    echo 'L\'attribut unAutreAttribut existe';
else    
    echo 'L\'attribut unAutreAttribut n\'existe pas';


$object = new Object;

$object->methode('arg1', 22);

Object::method(12, 13, 11);

$connect = new Connexion('test', 'test', 'test', 'test');

var_dump($connect);

$_SESSION['connexion'] = serialize($connect);

var_dump($_SESSION['connexion']);



