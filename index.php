<?php

define( 'ROOT', __DIR__ );

require_once 'classes/Db.php';
require_once 'functions.php';

// Connect to DB
$db_config = require 'config/db-config.php';
$db = ( Db::getInstance() )->getConnection( $db_config );

require_once 'controllers/home.php';