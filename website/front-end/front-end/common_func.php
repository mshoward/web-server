<?php
include_once 'mason_lib_includes.php';
include_once 'common_str.php';

function get_login_form()
{
	global $loginForm;
	return $loginForm;
}
function get_welcome_message()
{
	global $welcomeMessage;
	return $welcomeMessage;
}
function get_nav()
{
	global $nav;
	return $nav;
}
function get_footer()
{
	global $footer;
	return $footer;
}

/*
 * SESSION CHECK
 */
//logged in check
function logged_in()
{
	if	(
			isset($_SESSION['logged_in']) && 
			isset($_SESSION['uid']) &&
			$_SESSION['logged_in']
		)
	{
		return true;
	}
	return false;
}


?>