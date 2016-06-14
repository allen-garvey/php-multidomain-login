<?php

require_once('../../inc/config.php');

if(REQUIRE_LOGIN === false){
	http_response_code(307);
	header('Location: '.AuthController::LOGGED_IN_HOME_URL);
	die();
}
session_start();

if ($_POST) {
	if(empty($_POST[AuthController::LOGIN_FORM_USER]) || empty($_POST[AuthController::LOGIN_FORM_PASS])){
		$flash = array();
		$flash['class'] = 'danger';
		$flash['message'] = 'Please enter a username and password';
	}
	else if(!CaptchaController::validate_captcha($_POST[AuthController::LOGIN_FORM_CAPTCHA])){
		$flash = array();
		$flash['class'] = 'danger';
		$flash['message'] = 'Invalid captcha';
	}
	else{
		$user = $_POST[AuthController::LOGIN_FORM_USER];
		$pass = $_POST[AuthController::LOGIN_FORM_PASS];
		
		//authenticate
		if(AuthController::is_authenticated($user, $pass)){
			//save in session
			AuthController::save_auth($user);
			//redirect
			$redirect_url = !empty($_SESSION[AuthController::SESSION_REDIRECT_URL_KEY]) ? $_SESSION[AuthController::SESSION_REDIRECT_URL_KEY] : AuthController::LOGGED_IN_HOME_URL;
			http_response_code(302);
			header('Location: '.$redirect_url);
			die();
		}
		else{
			//randomize sleep to timing string length attacks
			usleep(rand(500, 2000));
			$flash = array();
			$flash['class'] = 'danger';
			$flash['message'] = 'Invalid username or password';
		}	
	}
}
if(!empty($_REQUEST['logout']) && $_REQUEST['logout'] === 'true'){
	//log user out
	session_unset();
	$flash = array();
	$flash['class'] = 'info';
	$flash['message'] = 'You have successfully logged out';
}
$captcha_text = CaptchaController::generate_captcha();
//show login form
include(AuthController::VIEWS_PATH.'login-page.php');


