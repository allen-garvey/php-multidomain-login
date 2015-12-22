<?php

require_once('inc/config.php');
require_once(INC_PATH.'functions.php');

if ($_POST && $_POST[LOGIN_FORM_USER] && $_POST[LOGIN_FORM_PASS]) {
	$user = $_POST[LOGIN_FORM_USER];
	$pass = $_POST[LOGIN_FORM_PASS];
	
	//authenticate
	if(is_authenticated($user, $pass)){
		//save in session
		save_auth($user);
		//redirect
		header(LOGGED_IN_HOME_URL);
		die();
	}
	else{
		$form_errors = "Invalid username or password";
	}
	
}

//invalidate session
destroy_session();
//show login form
include(VIEWS_PATH.'header.php');
include(VIEWS_PATH.'login-form.php');
include(VIEWS_PATH.'footer.php');