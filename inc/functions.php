<?php 


function destroy_session(){

}

function is_authenticated($username, $password){
	return true;
}

/*
* Saves that the user is logged in in session so other subdomains can access it
*/
function save_auth($username){
	$_SESSION[SESSION_AUTH_KEY] = $username;
}