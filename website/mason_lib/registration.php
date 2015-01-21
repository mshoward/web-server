<?php
	function register_user($email, $password)
	{
		$email = md5($email);
		$password = md5($password);
	}
?>
