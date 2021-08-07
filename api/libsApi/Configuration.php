<?php
require 'libsApi/Config.php';
$config = Config::singleton();

$config->set('controllerFolder', 'controllers/');
$config->set('modelFolder', 'models/');


$config->set('dbhost', 'localhost'); 
$config->set('dbname', 'b97452_proyecto2_if4101');
$config->set('dbuser', 'root');
$config->set('dbpass', '');