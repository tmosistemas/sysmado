<?php

use Api\Helpers\ChamadoHelper as Helper;

$app->get('/api/v1/chamados', function() use ($app) {

	$results = \Api\Models\Chamado::all();
	die(var_dump($results));
	return Helper::jsonResponse(false, $message, $results );

});