<?php

$db_config = [
	'host' => 'localhost',
	'dbname' => 'php.local',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8', // utf8mb4
	'options' => [
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	],
];

return $db_config;