<?php

require 'Autoloader.php';
Autoloader::register();

$conn = Connexion::getConnect();

var_dump($conn);

