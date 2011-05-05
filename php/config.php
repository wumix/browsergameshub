<?php
/*

	Configuration
	
*/ 

define ('BASE_PATH', dirname (dirname (__FILE__)).'/');
define ('STATIC_URL', '');

if 
(
	$_SERVER['SERVER_NAME'] == 'daedelserv.local' || 
	$_SERVER['SERVER_NAME'] == 'thijsvanderschaeghe.no-ip.com' ||
	$_SERVER['SERVER_NAME'] == 'daedeloth.no-ip.org' ||
	$_SERVER['SERVER_NAME'] == 'daedeloth.dyndns.org' ||
	$_SERVER['SERVER_NAME'] == '192.168.0.100'
)
{
	define ('DB_USERNAME', 'myuser');
	define ('DB_PASSWORD', 'myuser');
	define ('DB_SERVER', 'localhost');
	define ('DB_DATABASE', 'browsergames');
	
	define ('BASE_URL', 'http://'.$_SERVER['SERVER_NAME'].'/browsergameshub/');
}
else
{
	define ('DB_USERNAME', 'browser_games');
	define ('DB_PASSWORD', 'BmWoeJBpeOBPIjsmEZHpOIBE654EomijBEmHW');
	define ('DB_SERVER', 'localhost');
	define ('DB_DATABASE', 'browser_games');
	
	define ('BASE_URL', 'http://'.$_SERVER['SERVER_NAME'].'/');
}

define ('TIME_ZONE', 'Europe/Brussels');

define ('DEFAULT_TEMPLATE_DIR', 'templates/');
define ('CACHE_PATH', BASE_PATH.'public/');
define ('CACHE_URL', BASE_URL.'public/');
define ('SCHEMA_PATH', BASE_PATH.'schema/');
define ('SCHEMA_URL', BASE_URL.'schema/');

define ('CACHE_DIR', CACHE_PATH);

define ('ABSOLUTE_URL', BASE_URL);

?>
