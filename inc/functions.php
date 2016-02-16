<?php 


function destroy_session(){
	//remove PHPSESSID from browser
	if ( isset( $_COOKIE[session_name()] ) ){
		setcookie( session_name(), '', time()-3600, '/' );
	}
	//clear session from globals
	$_SESSION = array();
	//clear session from disk
	session_destroy();
}

function is_authenticated($username, $password): bool{
	if(!empty($username) && !empty($password) && $username === MASTER_USER && $password === MASTER_PASS){
		return true;
	}
	return false;
}

function authenticate(){
	if(REQUIRE_LOGIN === false){
		return;
	}
	session_start();
	if(empty($_SESSION) || empty($_SESSION[SESSION_AUTH_KEY])){
		http_response_code(400);
		header('Location: '.LOGIN_URL);
		die();
	}
}

/*
* Saves that the user is logged in in session so other subdomains can access it
*/
function save_auth(string $username){
	$_SESSION[SESSION_AUTH_KEY] = $username;
}