<?php

//General constants
define('APP_NAME', 'Bitter Polar Bear');
define('ENV_DEV', 0);
define('ENV_PROD', 1);

//path constants
define('ROOT_PATH', dirname(__FILE__, 2).'/');
define('INC_PATH', ROOT_PATH.'inc/');
define('VIEWS_PATH', INC_PATH.'views/');

require_once(INC_PATH.'environment.php');

//urls
if(ENV_CURRENT === ENV_DEV){
	define('BASE_URL','/php-multidomain-login/public_html/');
}
else{
	define('BASE_URL','/php-multidomain-login/public_html/');
}


require_once(INC_PATH.'login_controllers.php');



