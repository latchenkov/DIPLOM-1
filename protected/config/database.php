<?php

// This is the database connection configuration.
$file_setting = dirname(__FILE__).'/setting.php';

if (!file_exists($file_setting)){
    header("Refresh:15; url=install.php");
    exit("Параметры подключения к БД не заданы. Через 15 сек. Вы будете перенаправлены на страницу INSTALL.</br>
         Если автоматического перенаправления не происходит, нажмите <a href='install.php'>здесь</a>.");
}

require_once ($file_setting);
return array(
   // 'autoConnect'=>false;
	'connectionString' => 'mysql:host='.DB_HOST.';dbname='.DB_NAME,
	'emulatePrepare' => true,
	'username' => DB_USER,
	'password' => DB_PASS,
	'charset' => 'utf8',
);
