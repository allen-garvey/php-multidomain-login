<?php

//General constants
define('APP_NAME', 'Bitter Polar Bear');

//path constants
define('ROOT_PATH', dirname(__FILE__, 2).'/');
define('INC_PATH', ROOT_PATH.'inc/');
define('VIEWS_PATH', INC_PATH.'views/');

//login form constants
define('LOGIN_FORM_USER', 'username');
define('LOGIN_FORM_PASS', 'password');

//session constants
define('SESSION_AUTH_KEY', 'session_username_key');

//where you get redirected after login
define('LOGGED_IN_HOME_URL', 'index.php');
