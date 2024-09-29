<?php

require_once __DIR__ . '../functions.php';
require_once __DIR__ . '/classes/Db.php';

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

$db = new Db( $db_config );

$teachers = $db->query( "SELECT * FROM teachers" )->fetchAll();

dd( $teachers );