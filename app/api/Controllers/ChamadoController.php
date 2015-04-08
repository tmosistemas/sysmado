<?php

use Api\Helpers\ChamadoHelper as Helper;

$app->get('/api/v1/chamados', function() use ($app) {

	$results = [];
	$description = $app->request->get('description');
	if ( $description ) {
		$results = \Api\Models\Chamado::find(1)->get();
	} else {
		$results = Guitars::with('Brand')
			->with('Serie')
			->get();
	}
	$message = $results->count() . ' results';
	return Helper::jsonResponse(false, $message, $results );

});