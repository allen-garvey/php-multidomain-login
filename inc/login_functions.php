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

function is_authenticated(string $username=null, string $password=null): bool {
	return !empty($username) && !empty($password) && authenticate_user($username, $password);
}

function authenticate_user(string $username, string $password) : bool {
	return $username === MASTER_USER && password_verify($password, MASTER_PASSWORD_HASH);
}

/*
* If redirect= true, on failed authentication will redirect to login page
* use redirect=false for resources, so that the request will simply fail
*/
function authenticate(bool $redirect = true){
	if(REQUIRE_LOGIN === false){
		return;
	}
	session_start();
	if(empty($_SESSION) || empty($_SESSION[SESSION_AUTH_KEY])){
		if($redirect){
			$_SESSION[SESSION_REDIRECT_URL_KEY] = $_SERVER['REQUEST_URI'];
			http_response_code(400);
			header('Location: '.LOGIN_URL);
		}
		else{
			http_response_code(404);
		}
		die();
	}
}

/*
* Saves that the user is logged in in session so other subdomains can access it
*/
function save_auth(string $username){
	$_SESSION[SESSION_AUTH_KEY] = $username;
}