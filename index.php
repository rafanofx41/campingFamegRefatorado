<?php
// Start Session
session_start();

// Include Config
require('config.php');

require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controllers/home.php');
require('controllers/campings.php');
require('controllers/users.php');
require('controllers/comentario.php');
require('controllers/painel.php');

require('models/home.php');
require('models/campings.php');
require('models/user.php');
require('models/comentario.php');
require('models/painel.php');


$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}