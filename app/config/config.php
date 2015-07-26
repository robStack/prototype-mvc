<?php
	setlocale(LC_CTYPE, 'es');
	date_default_timezone_set('America/Mexico_City');

	define('DEBUG', true);
	define('ENVIROMENT', 'DEV');

	define('URL_PROTOCOL', 'http://');
	define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
	define('URL_SUB_FOLDER', str_replace('', '', dirname($_SERVER['SCRIPT_NAME'])));
	define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER . DIRECTORY_SEPARATOR);
    define('URL_ROOT', $_SERVER['DOCUMENT_ROOT'] . URL_SUB_FOLDER . DIRECTORY_SEPARATOR);
    define('ASSET_DIRECTORY', URL.'public/');
	define('IMG_DIRECTORY', URL.'public/img/');
    define('APP_MAILS_PATH', URL.'app/mail/');
	
	if(DEBUG){
	    error_reporting(E_ALL);
	    ini_set("display_errors", 1);
	}

	switch (ENVIROMENT) {
		case 'DEV':
				define('DB_TYPE', 'mysql');
				define('DB_HOST', 'localhost');
				define('DB_NAME', '');
				define('DB_USER', '');
				define('DB_PASS', '');
			break;

		case 'PROD':
				define('DB_TYPE', 'mysql');
				define('DB_HOST', 'localhost');
				define('DB_NAME', '');
				define('DB_USER', '');
				define('DB_PASS', '');
			break;
		
		default:
				define('DB_TYPE', 'mysql');
				define('DB_HOST', 'localhost');
				define('DB_NAME', 'testing');
				define('DB_USER', 'root');
				define('DB_PASS', 'toor');
			break;
	}
	