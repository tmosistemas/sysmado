<?php

$settings = array(
	'driver'    => 'mysql',
	'host'      => 'server7.srvlinux.info',
	'database'  => 'tmosiste_sysmado',
	'username'  => 'tmosiste_sysmado',
	'password'  => 'Lh;T9t0IT?]g',
	'charset'   => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix'    => ''
);

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection($settings);
$capsule->bootEloquent();