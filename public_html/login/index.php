<?php

require_once('../../inc/config.php');

if(REQUIRE_LOGIN === false){
	header('Location: '.LOGGED_IN_HOME_URL, true, 307);
	die();
}
session_start();

if ($_POST) {
	if(empty($_POST[LOGIN_FORM_USER]) || empty($_POST[LOGIN_FORM_PASS])){
		$form_errors = "Please enter a username and password";
	}
	else{
		$user = $_POST[LOGIN_FORM_USER];
		$pass = $_POST[LOGIN_FORM_PASS];
		
		//authenticate
		if(is_authenticated($user, $pass)){
			//save in session
			save_auth($user);
			//redirect
			$redirect_url = !empty($_SESSION[SESSION_REDIRECT_URL_KEY]) ? $_SESSION[SESSION_REDIRECT_URL_KEY] : LOGGED_IN_HOME_URL;
			http_response_code(302);
			header('Location: '.$redirect_url);
			die();
		}
		else{
			//randomize sleep to timing string length attacks
			usleep(rand(500, 2000));
			$form_errors = "Invalid username or password";
		}	
	}
}
if(!empty($_REQUEST['logout']) && $_REQUEST['logout'] === 'true'){
	//log user out
	destroy_session();
	$form_errors = "You have successfully logged out";
}
//show login form
include(VIEWS_PATH.'header.php');
include(VIEWS_PATH.'login-form.php');
include(VIEWS_PATH.'footer.php');