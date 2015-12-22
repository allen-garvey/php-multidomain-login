<?php 


function destroy_session(){
	$_SESSION[SESSION_AUTH_KEY] = null;
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