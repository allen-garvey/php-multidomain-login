<?php 

class AuthController{
	//paths
	const VIEWS_PATH = VIEWS_PATH.'login/';

	//login form names
	const LOGIN_FORM_USER = 'username';
	const LOGIN_FORM_PASS = 'password';
	const LOGIN_FORM_CAPTCHA = 'captcha';

	//session keys
	const SESSION_AUTH_KEY = 'session_username_key';
	const SESSION_REDIRECT_URL_KEY = 'session_redirect_url_key';

	//urls
	const LOGGED_IN_HOME_URL = BASE_URL.'index.php';
	const LOGIN_URL = BASE_URL.'login';
	const LOGOUT_URL = LOGIN_URL.'/?logout=true';

	public static function destroy_session(){
		//remove PHPSESSID from browser
		if ( isset( $_COOKIE[session_name()] ) ){
			setcookie( session_name(), '', time()-3600, '/' );
		}
		//clear session from globals
		$_SESSION = array();
		//clear session from disk
		session_destroy();
	}

	public static function is_authenticated(string $username=null, string $password=null): bool {
		return !empty($username) && !empty($password) && AuthController::authenticate_user($username, $password);
	}

	public static function authenticate_user(string $username, string $password) : bool {
		return $username === MASTER_USER && password_verify($password, MASTER_PASSWORD_HASH);
	}

	/*
	* If redirect= true, on failed authentication will redirect to login page
	* use redirect=false for resources, so that the request will simply fail
	*/
	public static function authenticate(bool $redirect = true){
		if(REQUIRE_LOGIN === false){
			return;
		}
		session_start();
		if(empty($_SESSION) || empty($_SESSION[AuthController::SESSION_AUTH_KEY])){
			if($redirect){
				$_SESSION[AuthController::SESSION_REDIRECT_URL_KEY] = $_SERVER['REQUEST_URI'];
				http_response_code(400);
				header('Location: '.AuthController::LOGIN_URL);
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
	public static function save_auth(string $username){
		$_SESSION[AuthController::SESSION_AUTH_KEY] = $username;
	}

}

class CaptchaController{
	const CAPTCHA_NUMBER_MIN = 1;
	const CAPTCHA_NUMBER_MAX = 10;

	const SESSION_CAPTCHA_ANSWER_KEY = 'session_captcha_answer_key';

	public static function generate_captcha() : string {
	
		$num1 = random_int(CaptchaController::CAPTCHA_NUMBER_MIN, CaptchaController::CAPTCHA_NUMBER_MAX);
		$num2 = random_int(CaptchaController::CAPTCHA_NUMBER_MIN, CaptchaController::CAPTCHA_NUMBER_MAX);

		switch(random_int(0, 3)){
			case 0:
				$max = max($num1, $num2);
				$min = min($num1, $num2);
				$answer = $max - $min;
				$question = "$max - $min =";
				break;
			case 1:
				$answer = $num1;
				$squared = $num1 * $num1;
				$question = "&radic;$squared =";
				break;
			case 2:
				$answer = $num1 * $num2;
				$question = "$num1 &times; $num2 =";
				break;
			
			default:
				$answer = $num1 + $num2;
				$question = "$num1 + $num2 =";
				break;
		}

		$_SESSION[CaptchaController::SESSION_CAPTCHA_ANSWER_KEY] = $answer;

		return $question;
	}
	public static function validate_captcha($answer) : bool {
		return isset($answer) && (int) $answer === $_SESSION[CaptchaController::SESSION_CAPTCHA_ANSWER_KEY];
	}
}

