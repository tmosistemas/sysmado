<?php

$settings = array(
	'driver'    => 'mysql',
	'host'      => 'server7.srvlinux.info',
	'database'  => 'localhost',
	'username'  => 'user',
	'password'  => 'pass',
	'charset'   => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix'    => ''
);

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection($settings);
$capsule->bootEloquent();