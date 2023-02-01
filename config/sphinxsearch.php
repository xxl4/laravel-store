<?php
return array (
	'host'    => env("SPHINX_HOST"),
	'port'    => env("SPHINX_PORT"),
	'indexes' => array (
		'name'=> array('table'=>'englishdata','column'=>"id")
	)
);