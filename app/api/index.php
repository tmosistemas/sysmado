<?php
require '../vendor/autoload.php';

use Api\Models,
	Api\Controllers,
	Api\Helpers;

define("API", dirname(__FILE__));

$app = new \Slim\Slim(array(
	'debug' => true
));


# config
require_once API . '/Config/database.php';

# controller
require_once API . "/Controllers/ChamadoController.php";

$app->run();