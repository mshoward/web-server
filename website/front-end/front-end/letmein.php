<?php
include_once 'mason_lib_includes.php';
	$email = $_POST["email"];
	$pass = $_POST["password"];
	
	
	$pass = md5($pass);
	$email = md5($email);
	
	$db_res = ez_get_field("User", "User_email_hash", $email, "User_pass_hash");
	
	if ($db_res)
	{
		if (count($db_res) == 1)
		{
			if ($db_res[0] != $pass) 
				login_fail("Incorrect password");
			else
				login_success();
		}
		else
		{
			login_fail("There was an issue validating either your username or password");
		}
	}
	else 
		login_fail("There was an issue validating your information");
	
	
	function login_fail($reason)
	{
		$head = new basic_head();
		$body = new basic_body();
		$table = new basic_table();
		$login_link = new basic_link("login_form.php", "Back to login");
		$home_link = new basic_link("home.php", "Back to Home");
		/*echo "------------------ exporting vars ------------------ <br>\n";
		var_export($head);
		var_export($body);
		var_export($table);
		var_export($login_link);
		var_export($home_link);
		echo "------------------ exporting done ------------------ <br>\n";
		echo "------------------ exporting vars ------------------ <br>\n";
		*/$table->add_row("Failure", $reason);
		$table->add_row($home_link, $login_link);
		/*var_export($table);
		echo "------------------ exporting done ------------------ <br>\n";
		echo "------------------ exporting vars ------------------ <br>\n";
		*/$body->add_element($table);
		/*var_export($body);
		echo "------------------ exporting done ------------------ <br>\n";
		echo "echoing page";
		*/echo $head.$body;
	}
	function login_success($reason)
	{
		$head = new basic_head();
		$body = new basic_body();
		$table = new basic_table();
		$home_link = new basic_link('home.php', 'Back to Home');
		$table->add_row("Login Successful!", $home_link);
		$body->add_element($table);
		echo "echoing page1";
		echo $head.$body;
	}
	
?>
