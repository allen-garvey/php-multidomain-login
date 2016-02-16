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

//login form constants
define('LOGIN_FORM_USER', 'username');
define('LOGIN_FORM_PASS', 'password');

//session constants
define('SESSION_AUTH_KEY', 'session_username_key');

//authentication
define('MASTER_USER', 'admin');
define('MASTER_PASS', 'password');
define('REQUIRE_LOGIN', true); //set to false to disable authentication

//urls
if(ENV_CURRENT === ENV_DEV){
	define('BASE_URL','/php-multidomain-login/public_html/');
}
else{
	define('BASE_URL','/php-multidomain-login/public_html/');
}
define('LOGGED_IN_HOME_URL', BASE_URL.'index.php');
define('LOGIN_URL', BASE_URL.'login');


//auto-loading
require_once(INC_PATH.'functions.php');



