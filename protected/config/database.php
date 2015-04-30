<?php

// This is the database connection configuration.
$file_setting = dirname(__FILE__).'/setting.php';

// Установить обработку ошибок
//if (!file_exists($file_setting)){
//    connectError();
//}

require_once ($file_setting);
return array(
	'connectionString' => 'mysql:host='.DB_HOST.';dbname='.DB_NAME,
	'emulatePrepare' => true,
	'username' => DB_USER,
	'password' => DB_PASS,
	'charset' => 'utf8',
);
