<?php 

//paths
define('LOGIN_VIEWS_PATH', VIEWS_PATH.'login/');

//login form constants
define('LOGIN_FORM_USER', 'username');
define('LOGIN_FORM_PASS', 'password');
define('LOGIN_FORM_CAPTCHA', 'captcha');

//captcha constants
define('CAPTCHA_NUMBER_MIN', 1);
define('CAPTCHA_NUMBER_MAX', 10);

//session constants
define('SESSION_AUTH_KEY', 'session_username_key');
define('SESSION_REDIRECT_URL_KEY', 'session_redirect_url_key');
define('SESSION_CAPTCHA_ANSWER_KEY', 'session_captcha_answer_key');

//urls
define('LOGGED_IN_HOME_URL', BASE_URL.'index.php');
define('LOGIN_URL', BASE_URL.'login');
define('LOGOUT_URL', LOGIN_URL.'/?logout=true');


//auto-loading
require_once(INC_PATH.'login_functions.php');